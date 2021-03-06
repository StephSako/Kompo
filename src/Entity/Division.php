<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping\UniqueConstraint;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DivisionRepository")
 * @ORM\Table(
 *     name="prive_division",
 *     uniqueConstraints={
 *          @UniqueConstraint(name="UNIQ_div_short_name", columns={"short_name"}),
 *          @UniqueConstraint(name="UNIQ_div_long_name", columns={"long_name"})
 *     }
 * )
 * @UniqueEntity(
 *     fields={"shortName", "longName"}
 * )
 */
class Division
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer", name="id_division", nullable=false)
     */
    private $idDivision;

    /**
     * @var string
     *
     * @Assert\Length(
     *      min = 1,
     *      max = 5,
     *      minMessage = "Le diminitif doit contenir au moins {{ limit }} lettres",
     *      maxMessage = "Le diminitif doit contenir au maximum {{ limit }} lettres"
     * )
     *
     * @Assert\NotBlank(
     *     normalizer="trim"
     *)
     *
     * @ORM\Column(type="string", name="short_name", nullable=false, length=2)
     */
    private $shortName;

    /**
     * @var string
     *
     * @Assert\NotBlank(
     *     normalizer="trim"
     *)
     *
     * @Assert\Length(
     *      min = 2,
     *      max = 25,
     *      minMessage = "Le nom doit contenir au moins {{ limit }} lettres",
     *      maxMessage = "Le nom doit contenir au maximum {{ limit }} lettres"
     * )
     *
     * @ORM\Column(type="string", name="long_name", nullable=false, length=25)
     */
    private $longName;

    /**
     * @var int
     *
     * @Assert\GreaterThanOrEqual(
     *     value = -1,
     *     message = "Indiquez {{ value }} si division absente en champ. depart. }}"
     * )
     *
     * @Assert\NotEqualTo(
     *     value = 0,
     *     message = "Indiquez -1 si division absente en champ. depart."
     * )
     *
     * @Assert\LessThanOrEqual(
     *     value = 4,
     *     message = "Le nombre maximal de joueurs est {{ value }}"
     * )
     *
     * @Assert\NotBlank(
     *     normalizer="trim"
     *)
     *
     * @ORM\Column(type="integer", name="nb_joueurs_champ_departementale", nullable=false)
     */
    private $nbJoueursChampDepartementale;

    /**
     * @var int
     *
     * @Assert\GreaterThanOrEqual(
     *     value = -1,
     *     message = "Indiquez {{ value }} si division absente en champ. de Paris }}"
     * )
     *
     * @Assert\NotEqualTo(
     *     value = 0,
     *     message = "Indiquez -1 si division absente en champ. de Paris."
     * )
     *
     * @Assert\LessThanOrEqual(
     *     value = 9,
     *     message = "Le nombre maximal de joueurs est {{ value }}"
     * )
     *
     * @Assert\NotBlank(
     *     normalizer="trim"
     *)
     *
     * @ORM\Column(type="integer", name="nb_joueurs_champ_paris", nullable=false)
     */
    private $nbJoueursChampParis;

    /**
     * @var EquipeDepartementale[]
     *
     * @ORM\OneToMany(targetEntity="App\Entity\EquipeDepartementale", mappedBy="idDivision")
     */
    protected $equipesDepartementales;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\EquipeParis", mappedBy="idDivision")
     */
    protected $equipesParis;

    /**
     * @return mixed
     */
    public function getIdDivision()
    {
        return $this->idDivision;
    }

    public function getNbJoueursChamp(string $type): ?int
    {
        return ($type == 'departementale' ? $this->nbJoueursChampDepartementale : $this->nbJoueursChampParis);
    }

    /**
     * @param mixed $idDivision
     * @return Division
     */
    public function setIdDivision($idDivision): self
    {
        $this->idDivision = $idDivision;
        return $this;
    }

    /**
     * @return string
     */
    public function getShortName(): string
    {
        return $this->shortName;
    }

    /**
     * @param string|null $shortName
     * @return Division
     */
    public function setShortName(?string $shortName): self
    {
        $this->shortName = $shortName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLongName(): string
    {
        return $this->longName;
    }

    /**
     * @param string|null $longName
     * @return Division
     */
    public function setLongName(?string $longName): self
    {
        $this->longName = $longName;
        return $this;
    }

    /**
     * @return EquipeDepartementale[]
     */
    public function getEquipesDepartementales(): array
    {
        return $this->equipesDepartementales;
    }

    /**
     * @param EquipeDepartementale[] $equipesDepartementales
     * @return Division
     */
    public function setEquipesDepartementales(array $equipesDepartementales): self
    {
        $this->equipesDepartementales = $equipesDepartementales;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEquipesParis()
    {
        return $this->equipesParis;
    }

    /**
     * @param mixed $equipesParis
     * @return Division
     */
    public function setEquipesParis($equipesParis): self
    {
        $this->equipesParis = $equipesParis;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbJoueursChampDepartementale(): int
    {
        return $this->nbJoueursChampDepartementale;
    }

    /**
     * @param int $nbJoueursChampDepartementale
     * @return Division
     */
    public function setNbJoueursChampDepartementale(int $nbJoueursChampDepartementale): self
    {
        $this->nbJoueursChampDepartementale = $nbJoueursChampDepartementale;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbJoueursChampParis(): int
    {
        return $this->nbJoueursChampParis;
    }

    /**
     * @param int $nbJoueursChampParis
     * @return Division
     */
    public function setNbJoueursChampParis(int $nbJoueursChampParis): self
    {
        $this->nbJoueursChampParis = $nbJoueursChampParis;
        return $this;
    }
}