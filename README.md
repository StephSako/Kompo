# <p align="center">Kompo – Brûlage des joueurs et compositions d’équipes</p>

### <p align="center">Outil de gestion de la vie compétitive d’un club de tennis de table</p>

<p align="center"><img width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/accueil_general.png" alt="accueil_general"></p>

**Kompo** est la plateforme web qui permettra aux clubs de tennis de table de composer leurs équipes en lice dans différents championnats par équipes, selon la gestion automatisée du brûlage et les disponibilités déclarées de leurs joueurs.

Trois championnats sont d’ores et déjà disponibles : le **championnat par équipe départemental**, le **championnat de paris** et le **championnat vétérans**. D’autres championnats comme le championnat départemental par équipe féminin ainsi que les championnats jeunes par exemple, seront intégrés au fur et à mesure.

Un tableau récapitulatif et évolutif à chaque journée présente le brûlage pour chaque joueur,. Cela facilite l’anticipation du brûlage sur toute la phase !

D’autres fonctionnalités utiles à la vie sportive et compétitive en amont des matches seront présentées tout au long de cette présentation.

Enfin, **Kompo** est entièrement adapté aux mobiles ; il n’y aura aucune difficulté à déclarer sa disponibilité et à gérer son équipe directement depuis son smartphone !

<div style="width: 100%; display: flex; justify-content: space-evenly;">
  <p align="center">
    <img width="33%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/responsive_1.PNG" alt="responsive_1">
    <img width="33%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/responsive_2.PNG" alt="responsive_2">
    <img width="33%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/responsive_3.PNG" alt="responsive_3">
  </p>
</div>

Sommaire

- Préambule
- [Plus en détails](#plus-en-détails-)
- [(1) - Déclaration de sa disponibilité](#1---déclaration-de-sa-disponibilité)
- [(2) - Brûlage et sélectionnabilité des compétiteurs](#2---brûlage-et-sélectionnabilité-des-compétiteurs)
  - [Brûlage spécifique J2](#brûlage-spécifique-j2)
- [(3) - Compositions d'équipes et rencontres](#3---compositions-déquipes-et-rencontres)
- [(4) - Tableau des disponibilités](#4---tableau-des-disponibilités)
- [(5) - Calcul des points virtuels](#5---calcul-des-points-virtuels)
- [(6) - Barre de navigation](#6---barre-de-navigation)
  - [Page « Mon compte »](#page--mon-compte-)
  - [Page « Contacter »](#page--contacter-)
  - [Page « Gestion » - Back-office](#page--gestion----back-office)
- [Pied de page – Liens et pages d’informations](#pied-de-page--liens-et-pages-dinformations)
- [Abonnement](#abonnement)

### Préambule

Je m’appelle Stephen, je suis joueur compétiteur au club de la Frette sur Seine –ESFTT depuis 2009, et développeur.
En 2019, je suis capitaine de mon équipe et je rencontre des problématiques auxquelles nous avons toujours fait face ; sans application ou site web dédié, il n’est pas facile pour l’ensemble des capitaines d’avoir la vision des disponibilités des joueurs, des compositions d’équipes et de visualiser le brûlage des joueurs sur toute une phase ou une saison.

C’est pourquoi en 2020, après avoir constaté qu’il n’existait aucune plateforme pour profiter de telles fonctionnalités, j’ai décidé de créer **Kompo**, un site web répondant à toutes ces problématiques de la vie compétitive d’un club de tennis de table.
Kompo est en évolution constante et en phase de tests depuis plus de 4 ans et j’estime qu’aujourd’hui, le projet est suffisamment avancé pour vous le proposer à la rentrée **2025-2026**.

En 2024, grâce aux Jeux Olympiques de Paris et au succès des Français sur la scène internationale, le ping attire de plus en plus de licenciés dans toute la France et davantage d’équipes ont été inscrites cette année, c’est pourquoi Kompo vous aidera à gérer toutes ces problématiques tout au long de votre saison.

**_Les idées originales de ce projet, telles que la gestion informatisée et automatisée du brûlage des joueurs compétiteurs ainsi que leurs développements, sont protégées par le droit d’auteur par dépôt d’une enveloppe Soleau auprès de l’INPI._**

**_Kompo n’est actuellement pas encore en ligne ni disponible aux équipes extérieures à celles du club de la Frette sur Seine, Kompo étant encore en phase d’évolution et de tests._**

## Plus en détails …

<p align="center"><img width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/accueil_general_numeros.png" alt="accueil_general_numeros"></p>

### (1) - Déclaration de sa disponibilité

<p align="center"><img width="70%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/declarer_disponibilite.png" alt="declarer_disponibilite"></p>

Tout joueur compétiteur peut déclarer sa disponibilité pour chaque journée ; disponible ou indisponible. Il est possible de modifier sa disponibilité à tout moment avant que la journée ne soit terminée.

Si le joueur est sélectionné dans une équipe, ça le lui sera signalé.

<p align="center"><img width="70%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/disponible_selectionne.PNG" alt="disponible_selectionne"></p>

S’il se déclare disponible, puis ensuite indisponible en étant déjà sélectionné dans une équipe, il sera supprimé de la composition de l’équipe en question.

### (2) - Brûlage et sélectionnabilité des compétiteurs

<p align="center"><img alt="brulage_general" width="45%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/brulage_general.PNG"></p>

Ce tableau liste tous les compétiteurs associés à leurs brûlages.

Pour rappel, _un joueur ayant disputé deux rencontres d'une même phase, consécutives ou non, dans une même équipe ou dans des équipes différentes de son club, ne peut plus participer au championnat dans une équipe de numéro supérieur à cette ou ces équipes._

Dans le tableau, une 🔥 rouge indique que le joueur est **brulé** dans l’équipe et ne peux donc pas y être sélectionné, en se référant aux numéros d’équipes en en-têtes de chaque colonne.

Le ❕ orange indique que le joueur est **pré-brûlé** dans l’équipe, c’est-à-dire qu’à partir de maintenant, s’il est sélectionné dans une équipe au-dessus, il y sera brûlé à partir de la journée d’après.
**_C’est une alerte pour de futurs brûlés sur les journées à venir et ainsi de faire de meilleures prévisions sur les compos d’équipes._**

**Exemple de brûlages à la J5 :**

<p align="center"><img alt="brulage_exemples" width="50%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/brulage_exemples.PNG"></p>

- Rudy a joué un match en équipe 1 en J1 et un match en équipe 2 en J3 : il est donc **brûlé** en 3, 4 et 5 ;
- Noel a joué un match en 2 en J1 et deux matches en 4 en J2 et J3 : il est donc **pré-brûlé** en 3 et 4, et **brûlé** en 5.
  - Par exemple, s’il est sélectionné en équipe 3 pour cette J5, il deviendra **brûlé** en 4 (en plus de la 5) pour les prochaines journées.
- Remy a joué un match en 1 en J1 et 3 matches en 2 en J2, J3 et J4 : il est donc **pré-brûlé** en 2, et **brûlé** en 3, 4 et 5 ;
- Enfin, Cédric n’a joué qu’un match en 3 en J2 : il est seulement **pré-brûlé** en 4 et 5.
  - Par exemple, s’il est sélectionné en équipe 1 lors de cette J5, il sera alors **pré-brûlé** en 2 et 3, et **brûlé** en 4 et 5 à l’issu de cette J5.

#### Brûlage spécifique J2

Le **brûlage spécifique de la J2** est géré dans Kompo pour les championnats qui y sont soumis.

Pour rappel, _lors de la 2ème journée de la phase, une équipe ne peut pas comporter plus d'un joueur ayant disputé la 1ère journée de la phase dans une équipe de numéro inférieur (applicable pour le championnat par équipes à trois ou quatre joueurs)._

<p align="center"><img alt="brulage_J2_selection" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/brulage_J2_selection.PNG"></p>

En J2, une 🔥 violette dans le tableau de droite est affichée pour les joueurs ayant joué dans une équipe au-dessus lors de la J1.

À la validation de l’équipe, lorsque deux joueurs « brûlés spécifique J2 » sont sélectionnés, un message d’erreur apparait.

#### (3) - Compositions d'équipes et rencontres

_Cette page de composition d’équipe sera expliquée plus en détails dans le chapitre **(3) Composition d’équipe**._

<p align="center"><img alt="brulage_selection" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/brulage_selection.PNG"></p>

L’une des forces de Kompo réside dans sa gestion et son contrôle du brûlage des joueurs dans les compositions d’équipes pré et post journées.

Lorsque le capitaine compose son équipe, plusieurs indicateurs du brûlage et de sélectionnabilité des joueurs lui sont présentés :

- **À gauche :** la liste des joueurs brûlés dans l’équipe;
- **À droite :** la liste des joueurs sélectionnables dans l’équipe (joueurs non sélectionnés dans une autre équipe, déclarés disponibles et non brûlés).  
  Le brûlage de cette liste affiche le **brûlage prévisionnel à J+1**, c’est-à-dire le brûlage qu’aura le joueur à la prochaine journée s’il est sélectionné dans cette équipe pour cette journée.
- **Au centre :** des listes déroulantes sont présentes pour chaque joueur à sélectionner. Ces listes déroulantes reprennent naturellement la liste des joueurs **sélectionnables**.

<p align="center"><img alt="selection_liste_joueurs" width="70%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/selection_liste_joueurs.PNG"></p>

De plus, si un joueur est déjà sélectionné dans une ou plusieurs équipes et qu’il y devient brûlé suite à une sélection lors d’une journée antérieure, il est automatiquement supprimé des équipes dans lesquelles il est brûlé pour toutes les prochaines journées.

Toutes les équipes sont affichées par ordre de numéro d’équipe. De multiples indicateurs sont présents : la division, la poule, le lieu de la rencontre (icône de maison pour domicile ou icône de voiture pour extérieur), le nom de l’adversaire et bien entendu, la liste des joueurs sélectionnés par le capitaine.

Les joueurs titulaires d’une équipe étant déclarés disponibles, non brûlés et non sélectionnés dans une autre équipe seront marqués automatiquement comme remplaçants.

Des fonctionnalités sont disponibles en cliquant sur les différents boutons :

- **Cliquer sur le bouton « Equipe non confirmée »** pour valider la composition d’équipe, par exemple une fois que tous les capitaines se sont mis d’accord sur les compos d’équipe et que les joueurs ont répondu OK à la convocation.  
  Cette fonctionnalité est désactivable dans le back-office si cela n’est pas nécessaire dans votre process de club.

<p align="center"><img alt="gestion_equipe_confirmee" width="60%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/gestion_equipe_confirmee.png"></p>

- **Cliquer sur la poule :** affichage du classement ainsi que le calendrier de la phase :

<p align="center"><img alt="poule" width="90%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/poule.PNG"></p>

- **Cliquer sur le nom de l’adversaire :** affichage de ses informations de localisation et de contact (l’adresse, le nom du gymnase/complexe sportif avec d’éventuelles indications d’accès, le numéro de téléphone du correspondant en cas d’urgence/imprévue, ainsi que le site Internet du club adversaire).  
  Pour faciliter les déplacements à l’extérieur, vous pouvez ouvrir le GPS de votre choix en cliquant sur les boutons **Maps** ou **Waze**, qui s’ouvrent directement en mode navigation à l’adresse de l’adversaire. (Le troisième bouton permet de copier-coller l’adresse en un clic).

<p align="center"><img alt="contact" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/contact.png"></p>

- **Cliquer sur le bouton avec l’icône « équipe » (à droite du nom de l’adversaire) :** affichage des compositions d’équipe de l’adversaire des précédentes journées :

<p align="center"><img alt="adversaires_dernieres_compos" width="80%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/adversaires_dernieres_compos.png"></p>

**Boutons affichés uniquement aux capitaines :**

En dessous de la liste des joueurs :

- **Cliquer sur le bouton vert :** aller vers la page d’édition de la composition d’équipe vue précédemment ;
- **Cliquer sur le bouton bleu avec l’icône de porte-voix :** envoyer la convocation aux joueurs, soit par email soit par SMS. Un message préconstruit vous est proposé à l’ouverture de votre application de SMS/mail par défaut en reprenant toutes les informations de la rencontre : date, lieu et heure de rendez-vous, lieu de la rencontre, nom de l’équipe adversaire, consignes particulières et liste des joueurs sélectionnés.  
  Un joueur n’ayant pas renseigné son numéro de téléphone ou ayant décoché une des cases « Contactable » dans son compte ne recevra pas de convocations.

<p align="center"><img alt="gestion_equipe_convocation" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/gestion_equipe_convocation.png"></p>

- **Cliquer sur le bouton rouge avec l’icône de poubelle :** vidange totale l’équipe en un clic.

D’autres indicateurs optionnels peuvent être ajoutés pour chaque rencontre depuis le back-office par les capitaines :

- journée décalée (match avancé ou reporté) ;
- salle indisponible/match délocalisé (l’icône domicile/extérieur devient orange accompagné d’un message) ;
- indications d’accès, consignes pour le début/fin des rencontres, etc.

<p align="center"><img alt="gestion_equipe_full_options" width="80%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/gestion_equipe_full_options.PNG"></p>

### (4) - Tableau des disponibilités

<p align="center"><img alt="tableau_disponibilites" width="32%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/tableau_disponibilites.PNG"></p>

Le premier petit encadré compte :

- le nombre de joueurs déclarés disponibles sur le nombre total de compétiteurs ;
- le nombre de joueurs sélectionnés en équipes sur le nombre total de **places disponibles pour l’ensemble des équipes**.  
  Par exemple, pour cinq équipes du championnat départemental à 4 joueurs, le total sera de 20 places, alors que pour le championnat de paris, avec une équipe de promotion d’honneur (9 joueurs) et deux équipes de D2 (3 joueurs + 3 joueurs), le total sera de 15 places.

**Cela permet de savoir rapidement si suffisamment de joueurs sont déclarés disponibles et si les équipes sont complètes.**

En dessous, le grand tableau liste tous les compétiteurs en surbrillance selon leurs disponibilités, regroupés par équipes pour plus de lisibilité pour les capitaines.

Pour avoir de la visibilité sur les disponibilités de toute une phase/saison, il suffit de cliquer sur le bouton bleu « Tout afficher » en dessous de la liste :

<p align="center"><img alt="disponible_total" width="60%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/disponible_total.PNG"></p>

_Les numéros bleus indiquent les équipes dans lesquelles les joueurs sont sélectionnés._

Enfin, le petit bouton orange permet d’envoyer une alerte aux joueurs n’ayant pas renseigné leurs disponibilités.

<p align="center"><img alt="disponibilites_alerter_non_declares" width="35%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/disponibilites_alerter_non_declares.png"></p>

### (5) - Calcul des points virtuels

<p align="center"><img alt="points_virtuels" width="50%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/points_virtuels.PNG"></p>

Le calcul **en temps réel** de vos points **virtuels** est présenté sur la page d’accueil.

Contrairement à d’autres sites et applications, le calcul des points virtuels sur Kompo est davantage affiné et correspond le plus fidèlement à la réalité : dans son calcul, Kompo se base sur les points mensuels des adversaires au lieu des points officiels.

Le nombre de points gagnés ou perdus est également affiché accompagnée d’une petite courbe visualisant l’évolution de votre classement sur les 2 dernières saisons.

Cliquer sur le bouton rond bleu avec l’icône liste en haut à droite de l’encadré ouvre une fenêtre listant les « matches virtuels », c’est-à-dire les matches pas encore validés pris en compte dans le calcul de vos points virtuels.

<p align="center"><img alt="liste_matches_virtuels" width="40%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/liste_matches_virtuels.PNG"></p>

### (6) - Barre de navigation

La partie gauche de la barre de navigation permet de naviguer de journée en journée du championnat sélectionné en cliquant sur les dates. Les journées marquées d’une coche verte signifient qu’elles sont passées.

Le menu déroulant à droite des dates permet de passer d’un championnat à un autre.

<p align="center"><img alt="menu_deroulant_championnats" width="45%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/menu_deroulant_championnats.png"></p>

Ce petit bouton présent dans un coin vous permet de naviguer directement à la prochaine journée à jouer, selon votre titularisation dans les championnats.

<p align="center"><img alt="bouton_prochaine_journee" width="13%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/bouton_prochaine_journee.png">

#### Page « Mon compte »

<p align="center"><img alt="mon_compte_1" width="80%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/mon_compte_1.jpg"></p>
<p align="center"><img alt="mon_compte_2" width="80%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/mon_compte_2.jpg"></p>

Cette page permet à chaque membre de gérer ses informations telles que son identifiant, ses informations de contact* (une adresse email obligatoire et un numéro de téléphone optionnel), son mot de passe et son image de profil.

Il peut également savoir quels rôles lui sont attribués sur Kompo, à quelle saison il deviendra renouveler son certificat médical ainsi que les équipes dans lesquelles il est titularisé.

Kompo peut accueillir tous les membres de votre club et il existe plusieurs niveaux de rôles :

- **Niveau 1 : Administrateur**

  - Tous les accès lui sont donnés _(maximum 3 administrateurs par club)_;

- **Niveau 2 : Capitaines**

  - Back-office : accès restreint _(le back-office sera expliqué plus bas)_;
  - Gestion des compositions d’équipe ;

- **Niveau 3 : Compétiteur** (rôle additionnels : **Jeune** et **Critérium fédéral**)

  - Peux déclarer ses disponibilités pour chaque journée;

- **Niveau 4 : Loisir / Entraineur**

  - Simple visualisation des compositions d’équipe;
  - Ne peux pas déclarer ses disponibilités.

**Informations de contact**

Les utilisateurs peuvent renseigner un numéro de téléphone en plus de leur adresse email. Cela permet d’être contacté par les capitaines via des listes de diffusion sur la page **Contacter** ainsi que de recevoir les convocations aux matches. Si un membre ne souhaite pas être contacté de quelque manière que ce soit, il lui suffira de décocher les cases respectives « Contactables ».

#### Page « Contacter »

<p align="center"><img alt="contacter" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/contacter.PNG"></p>

Cette page est uniquement accessible aux capitaines et aux administrateurs afin de contacter un ou plusieurs membres pour communiquer sur un évènement, organiser une réunion, etc.

Le bouton **Catégories** affiche les listes de diffusion pour envoyer un message commun à un même groupe de personnes.

<p align="center"><img alt="contacter_liste_diffusion" width="25%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/contacter_liste_diffusion.png"></p>

La dernière catégorie nommée **Personnalisée** permet de créer une liste personnalisée de membres à contacter.

<p align="center"><img alt="contacter_personnalisee" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/contacter_personnalisee.png"></p>

Sur mobile, des boutons supplémentaires apparaissent pour ouvrir l’application par défaut de votre téléphone pour appeler, envoyer un SMS ou un message via WhatsApp au membre.

<p align="center"><img alt="contacter_responsive" width="40%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/contacter_responsive.PNG"></p>

#### Page « Gestion » - Back-office

Le back-office est le portail administrateur uniquement accessible et visible via la barre de navigation pour les administrateurs et les capitaines. Ce portail permet l’administration de :

- le compte Club;
- les membres :

<p align="center"><img alt="gestion_membres" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/gestion_membres.PNG"></p>

- les championnats enregistrés :

<p align="center"><img alt="gestion_championnats" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/gestion_championnats.PNG">

- les rencontres : ajout de consignes, décalage de rencontres, avertissement de salles indisponibles, gérer les heures de rendez-vous intégrées dans les convocations, etc. ;

<p align="center"><img alt="gestion_rencontres" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/gestion_rencontres.PNG"></p>

- les équipes et les joueurs titulaires :

<p align="center"><img alt="gestion_equipes" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/gestion_equipes.PNG"></p>

<p align="center"><img alt="gestion_equipes_titulaires_1" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/gestion_equipes_titulaires_1.PNG"></p>

<p align="center"><img alt="gestion_equipes_titulaires_2" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/gestion_equipes_titulaires_2.PNG"></p>

- les disponibilités à la place des joueurs en cas d’urgence :

<p align="center"><img alt="gestion_disponibilites" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/gestion_disponibilites.PNG"></p>

- page de mise à jour simplifiée de toute la phase/saison :

  - du classement officiel des joueurs tous les 6 mois :

  <p align="center"><img style="margin: 10px auto 28px auto;" alt="gestion_api_fftt_membres" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/gestion_api_fftt_membres.PNG"></p>

  - des équipes, poules, journées et rencontres de la phase en un clic par récupération des données via l’API de la FFTT :

<p align="center"><img alt="fftt_api_championnat" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/fftt_api_championnat.png"></p>

### Pied de page – Liens et pages d’informations

Un pied de page est présent en bas de chaque page.

C’est depuis le back-office que vous avez la possibilité de gérer le contenu de ce pied de page, dans lequel vous pouvez y ajouter :

- des accès vers des pages d’informations que vous pouvez administrer grâce à un éditeur de texte. Il est même possible de créer des pages collaboratives : c’est-à-dire que tous les membres peuvent eux-mêmes en modifier le contenu via l’éditeur ;

_<p align="center">Éditeur</p>_

<p align="center"><img alt="footer_ckeditor" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/footer_ckeditor.png"></p>

<br>

_<p align="center">Rendu visuel</p>_

<p align="center"><img alt="footer_ckeditor_rendu" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/footer_ckeditor_rendu.png"></p>

- des liens vers des pages externes, comme le lien du site Internet de votre club, de la FFTT, etc.

### Abonnement

La saison 2025-2026 sera entièrement gratuite à tous les clubs. Cela laisse le temps aux clubs de découvrir Kompo, de faire des propositions d’évolutions et de se convaincre que l’application est indispensable à leur vie compétitive 😇.

À partir de la 2026-2027, un abonnement annuel sera proposé, dont voici les conditions :

- l’abonnement sera calculé en fonction du nombre d’équipes gérées dans Kompo **tout championnat par équipe confondu**, à savoir **0,50€ par équipe**. C’est pour moi la solution la plus équilibrée par rapport à un abonnement à prix fixe vis-à-vis des petits clubs n’ayant pas un grand nombre d’équipes à gérer.  
  De plus, à l’inscription de votre club ainsi que depuis la page dédiée du back-office pour gérer votre club, il vous sera possible de choisir les championnats que vous souhaitez gérer.

- un abonnement annuel sera valable du jour de la souscription à l’abonnement jusqu’au prochain 31 Juillet à venir ;

- tout club souscrivant durant le mois de Janvier aura une réduction de 30% sur son abonnement (abonnement valide jusqu’au **31 Juillet de la même année**) ;

- tout club du 95 – Val d’Oise souscrivant avant le **30 Décembre 2025** verra son **abonnement pour la saison 2026-2027 divisé par deux** et fera partie du **Club des Ambassadeurs**.
