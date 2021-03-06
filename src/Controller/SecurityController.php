<?php

namespace App\Controller;

use App\Form\BackOfficeCompetiteurAdminType;
use App\Form\CompetiteurType;
use App\Repository\JourneeDepartementaleRepository;
use App\Repository\JourneeParisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    private $em;
    private $journeeDepartementaleRepository;
    private $journeeParisRepository;

    /**
     * SecurityController constructor.
     * @param JourneeDepartementaleRepository $journeeDepartementaleRepository
     * @param JourneeParisRepository $journeeParisRepository
     * @param EntityManagerInterface $em
     */
    public function __construct(JourneeDepartementaleRepository $journeeDepartementaleRepository,
                                JourneeParisRepository $journeeParisRepository,
                                EntityManagerInterface $em)
    {
        $this->journeeDepartementaleRepository = $journeeDepartementaleRepository;
        $this->journeeParisRepository = $journeeParisRepository;
        $this->em = $em;
    }

    /**
     * @Route("/login", name="login")
     * @param AuthenticationUtils $utils
     * @return Response
     */
    public function login(AuthenticationUtils $utils): Response
    {
        if ($this->getUser() != null){
            return $this->redirectToRoute('index');
        } else {
            return $this->render('account/login.html.twig', [
                'lastUsername' => $utils->getLastUsername(),
                'error' => $utils->getLastAuthenticationError()
            ]);
        }
    }

    /**
     * @Route("/compte", name="account")
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function edit(Request $request){
        $journees = [];
        if ($this->get('session')->get('type') == 'departementale') $journees = $this->journeeDepartementaleRepository->findAll();
        else if ($this->get('session')->get('type') == 'paris') $journees = $this->journeeParisRepository->findAll();

        $user = $this->getUser();

        if (in_array("ROLE_ADMIN", $this->getUser()->getRoles())) $form = $this->createForm(BackOfficeCompetiteurAdminType::class, $user);
        else $form = $this->createForm(CompetiteurType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()){
                try {
                    $user->setNom(strtoupper($user->getNom()));
                    $user->setPrenom(ucwords(strtolower($user->getPrenom())));
                    $this->em->flush();
                    $this->addFlash('success', 'Informations modifiées !');
                    return $this->redirectToRoute('account');
                } catch(Exception $e){
                    if ($e->getPrevious()->getCode() == "23000"){
                        if (str_contains($e->getMessage(), 'licence')) $this->addFlash('fail', 'La licence \'' . $user->getLicence() . '\' est déjà attribuée');
                        if (str_contains($e->getMessage(), 'username')) $this->addFlash('fail', 'Le pseudo \'' . $user->getUsername() . '\' est déjà attribué');
                        if (str_contains($e->getMessage(), 'CHK_mail')) $this->addFlash('fail', 'Les deux adresses emails doivent être différentes');
                        if (str_contains($e->getMessage(), 'CHK_phone_number')) $this->addFlash('fail', 'Les deux numéros de téléphone doivent être différents');
                    }
                    else $this->addFlash('fail', 'Le formulaire n\'est pas valide');
                    return $this->render('account/edit.html.twig', [
                        'type' => 'general',
                        'user' => $user,
                        'urlImage' => $user->getAvatar(),
                        'path' => 'account.update.password',
                        'journees' => $journees,
                        'form' => $form->createView()
                    ]);
                }
            }
            else {
                $this->addFlash('fail', 'Le formulaire n\'est pas valide');
            }
        }

        return $this->render('account/edit.html.twig', [
            'type' => 'general',
            'user' => $user,
            'urlImage' => $user->getAvatar(),
            'path' => 'account.update.password',
            'journees' => $journees,
            'form' => $form->createView()
        ]);
    }

    /**
     * // TODO Refaire
     * @Route("/compte/update_password", name="account.update.password")
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @return RedirectResponse|Response
     */
    public function updatePassword(Request $request, UserPasswordEncoderInterface $encoder){
        $journees = [];
        if ($this->get('session')->get('type') == 'departementale') $journees = $this->journeeDepartementaleRepository->findAll();
        else if ($this->get('session')->get('type') == 'paris') $journees = $this->journeeParisRepository->findAll();

        $user = $this->getUser();

        $formCompetiteur = $this->createForm(CompetiteurType::class, $user);
        $formCompetiteur->handleRequest($request);

        if ($request->request->get('new_password') == $request->request->get('new_password_validate')) {
            $password = $encoder->encodePassword($user, $request->get('new_password'));
            $user->setPassword($password);

            $this->em->flush();
            $this->addFlash('success', 'Mot de passe modifié !');
        }
        else {
            $this->addFlash('fail', 'Les mots de passe ne correspond pas');
        }

        return $this->render('account/edit.html.twig', [
            'user' => $user,
            'type' => 'general',
            'urlImage' => $user->getAvatar(),
            'path' => 'account.update.password',
            'journees' => $journees,
            'form' => $formCompetiteur->createView()
        ]);
    }
}
