# <p align="center">Kompo – Brûlage des joueurs et compositions d’équipes</p>

### <p align="center">Outil de gestion de la vie compétitive d’un club de tennis de table</p><br>

<p align="center"><img width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/accueil_general.png" alt="accueil_general"></p>

**Kompo** est la plateforme web qui permet aux clubs de tennis de table de composer leurs équipes en lice dans différents championnats par équipes, selon la gestion automatisée du brûlage et les disponibilités déclarées de leurs joueurs.

Trois championnats sont d’ores et déjà disponibles : le **championnat par équipe départemental**, le **championnat de Paris** et le **championnat vétérans**. D’autres championnats comme le championnat départemental par équipe féminin ainsi que les championnats jeunes par exemple, seront intégrés prochainement.

Un tableau récapitulatif et évolutif pour chaque journée permet de visualiser le brûlage pour chaque joueur. L’anticipation du brûlage sur toute la phase est maintenant possible !

D’autres fonctionnalités utiles à la vie sportive et compétitive **en amont** des rencontres seront introduites tout au long de cette présentation.

Enfin, **Kompo** est entièrement adapté aux mobiles : il n’y a aucune difficulté à déclarer sa disponibilité et à gérer son équipe directement depuis son smartphone !

<div style="width: 100%; display: flex; justify-content: space-evenly;">
  <p align="center">
    <img width="30%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/responsive_1.PNG" alt="responsive_1">
    <img width="30%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/responsive_2.PNG" alt="responsive_2">
    <img width="30%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/responsive_3.PNG" alt="responsive_3">
  </p>
</div>

<br>Sommaire

- [Contexte](#contexte)
- [Plus en détails](#plus-en-détails-)
- [(1) - Déclaration de sa disponibilité](#1---déclaration-de-sa-disponibilité)
- [(2) - Brûlage et sélectionnabilité des compétiteurs](#2---brûlage-et-sélectionnabilité-des-compétiteurs)
- [(3) - Compositions d'une équipe et indicateurs des rencontres](#3---compositions-dune-équipe-et-indicateurs-des-rencontres)
  - [Composition d'une équipe](#composition-dune-équipe)
  - [Brûlage spécifique J2](#brûlage-spécifique-j2)
- [(4) - Tableau des disponibilités](#4---tableau-des-disponibilités)
- [(5) - Calcul des points virtuels](#5---calcul-des-points-virtuels)
- [(6) - Barre de navigation](#6---barre-de-navigation)
  - [Naviguer de journée en journée des championnats](#naviguer-de-journée-en-journée-des-championnats)
  - [Page « Mon compte »](#page--mon-compte-)
  - [Page « Contacter »](#page--contacter-)
  - [Page « Gestion » - Back-office](#page--gestion----back-office)
- [Pied de page – Liens et pages d’informations](#pied-de-page--liens-et-pages-dinformations)
- [Abonnement](#abonnement)

## Contexte

Je suis joueur compétiteur au club de la Frette sur Seine – ESFTT depuis 2009, et développeur.  
En 2019, je deviens capitaine d'équipe et je rencontre certaines problématiques que partagent également mes autres collègues capitaines, et ce de manière systématique : sans application/site web dédié, il n’est pas facile pour les capitaines d’avoir une visibilité globale des disponibilités des joueurs, des compositions d’équipes et du brûlage sur toute une phase/saison.

C’est pourquoi en 2020, après avoir constaté qu’il n’existait **aucune** plateforme de ce type pour profiter de telles fonctionnalités, j’ai décidé de créer **Kompo**, un site web répondant à toutes ces **problématiques de la vie compétitive d’un club de tennis de table**.

Kompo est en évolution constante depuis plus de 4 ans, et j’estime qu’aujourd’hui ce projet est suffisamment avancé et complet pour la rentrée **2025-2026**.

De plus en 2024, grâce à l'engouement pour le tennis de table lors des Jeux Olympiques de Paris et au succès des Français sur la scène internationale, le ping attire de plus en plus de licenciés dans toute la France et davantage d’équipes ont été inscrites cette année, c’est pourquoi Kompo vous aidera à gérer ces problématiques tout au long de votre saison.

<br><br>

**_Les idées originales de ce projet, telles que la gestion informatisée et automatisée du brûlage des joueurs compétiteurs ainsi que leurs développements, sont protégées par le droit d’auteur par dépôt d’une enveloppe Soleau auprès de l’I.N.P.I. (Institut National de la Propriété Industrielle)._**

**_Kompo n’est actuellement pas encore en ligne ni disponible aux équipes extérieures à celles du club de la Frette sur Seine._**

## Plus en détails …

<p align="center"><img width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/accueil_general_numeros.png" alt="accueil_general_numeros"></p>

### (1) - Déclaration de sa disponibilité

<p align="center"><img width="70%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/declarer_disponibilite.png" alt="declarer_disponibilite"></p>

Tout joueur compétiteur peut déclarer sa disponibilité pour chaque journée sur la page d'accueil, _disponible_ ou _indisponible_.

Il est possible de modifier sa disponibilité au plus tard le jour de la rencontre.

Un joueur ne peut pas être sélectionné dans une équipe s'il n'a pas déclaré sa disponiblité.

<p align="center"><img width="70%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/disponible_selectionne.PNG" alt="disponible_selectionne"></p>

Si un joueur modifie sa disponibilité en _indisponible_ en étant déjà sélectionné dans une équipe, il sera supprimé de la composition de l’équipe en question.

### (2) - Brûlage et sélectionnabilité des compétiteurs

<p align="center"><img alt="brulage_general" width="45%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/brulage_general.PNG"></p>

Ce tableau liste tous les compétiteurs associés à leurs brûlages.

Pour rappel, _un joueur ayant disputé deux rencontres d'une même phase, consécutives ou non, dans une même équipe ou dans des équipes différentes de son club, ne peut plus participer au championnat dans une équipe de numéro supérieur à cette ou ces équipes._

Dans ce tableau, une 🔥 rouge indique que le joueur est **brulé** dans l’équipe et ne peux donc pas y être sélectionné, en se référant aux numéros d’équipes en en-têtes de chaque colonne.

Le (❕) orange indique que le joueur est **pré-brûlé** dans l’équipe; c’est-à-dire qu’à partir de maintenant, s’il est sélectionné dans une équipe au-dessus, il y sera brûlé à partir de la journée d’après.

**_C’est une alerte pour de futurs brûlés sur les journées à venir afin de faire de meilleures prévisions sur les compositions d’équipes._**

**Exemple de brûlages à la J5 :**

<p align="center"><img alt="brulage_exemples" width="50%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/brulage_exemples.PNG"></p>

- Noel a joué une rencontre en 2 en J1 et deux rencontres en 4 en J2 et J3 : il est donc **pré-brûlé** en 3 et 4, et **brûlé** en 5.
  - Par exemple, s’il est sélectionné en 3 pour cette J5, il deviendra **brûlé** en 4 (en plus de la 5) pour les prochaines journées.
- Rudy a joué une rencontre en 1 en J1 et une rencontre en 2 en J3 : il est donc **brûlé** en 3, 4 et 5 ;
- Remy a joué une rencontre en 1 en J1 et trois rencontres en 2 en J2, J3 et J4 : il est donc **pré-brûlé** en 2, et **brûlé** en 3, 4 et 5 ;
- Enfin, Cédric a joué une rencontre en 3 en J2 : il est seulement **pré-brûlé** en 4 et 5.
  - Par exemple, s’il est sélectionné en 1 lors de cette J5, il deviendra **pré-brûlé** en 2 et 3, et **brûlé** en 4 et 5 à l’issu de cette J5.

### (3) - Compositions d'une équipe et indicateurs des rencontres

<p align="center"><img alt="gestion_equipe_general" width="90%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/gestion_equipe_general.PNG"></p>

Toutes les équipes sont affichées par ordre de numéro d’équipe. De multiples indicateurs sont présents : la division, la poule, le lieu de la rencontre (icône de maison pour domicile ou icône de voiture pour extérieur), le nom de l’adversaire et bien entendu, la liste des joueurs sélectionnés par le capitaine.

Les joueurs titulaires d’une équipe étant déclarés disponibles, non brûlés et non sélectionnés dans une autre équipe seront marqués automatiquement comme remplaçants.

Des fonctionnalités sont disponibles en cliquant sur les différents boutons :

- **Cliquer sur le bouton « Equipe non confirmée »** pour valider la composition d’équipe, par exemple une fois que tous les capitaines se sont mis d’accord sur les compos d’équipe et que les joueurs ont répondu OK à la convocation.  
  Cette fonctionnalité est désactivable dans le back-office si cela n’est pas nécessaire dans votre process de club.

<p align="center"><img alt="gestion_equipe_confirmee" width="60%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/gestion_equipe_confirmee.png"></p>

- **Cliquer sur la poule :** affichage du classement ainsi que le calendrier de la phase :

<p align="center"><img alt="poule" width="90%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/poule.PNG"></p>

- **Cliquer sur le nom de l’adversaire :** affichage de ses informations de localisation et de contact (l’adresse, le nom du gymnase/complexe sportif avec d’éventuelles indications d’accès, le numéro de téléphone du correspondant en cas d’urgence/imprévue, ainsi que le site Internet du club adverse).  
  Pour faciliter les déplacements à l’extérieur, vous pouvez ouvrir le GPS de votre choix en cliquant sur les boutons **Maps** ou **Waze**, qui s’ouvrent directement en mode navigation à l’adresse de l’adversaire. _(Le troisième bouton permet de copier-coller l’adresse en un clic)._

<p align="center"><img alt="contact" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/contact.png"></p>

- **Cliquer sur le bouton avec l’icône « équipe » (à droite du nom de l’adversaire) :** affichage des compositions d’équipe de l’adversaire des précédentes journées :

<p align="center"><img alt="adversaires_dernieres_compos" width="80%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/adversaires_dernieres_compos.png"></p>

**Boutons affichés uniquement aux capitaines sous la liste des joueurs :**

- **Cliquer sur le bouton vert :** aller vers la page de composition de l'équipe.
- **Cliquer sur le bouton bleu « porte-voix » :** envoyer la convocation aux joueurs, soit par email soit par SMS. Un message préconstruit vous est proposé à l’ouverture de votre application de SMS/mail par défaut en reprenant toutes les informations de la rencontre : date, lieu et heure de rendez-vous, lieu de la rencontre, nom de l’équipe adverse, consignes particulières et liste des joueurs sélectionnés.  
  Un joueur n’ayant pas renseigné son numéro de téléphone ou ayant décoché une des cases « Contactable » dans son compte ne recevra pas de convocations.

<p align="center"><img alt="gestion_equipe_convocation" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/gestion_equipe_convocation.png"></p>

- **Cliquer sur le bouton rouge avec l’icône de poubelle :** vidange totale l’équipe en un clic.

D’autres indicateurs optionnels peuvent être ajoutés pour chaque rencontre depuis le back-office par les capitaines :

- journée décalée (rencontre avancée ou reportée) ;
- salle indisponible/rencontre délocalisée (l’icône domicile/extérieur devient orange accompagné d’un message) ;
- indications d’accès, consignes pour le début/fin des rencontres, etc.

<p align="center"><img alt="gestion_equipe_full_options" width="80%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/gestion_equipe_full_options.PNG"></p>

#### Composition d'une équipe

<p align="center"><img alt="brulage_selection" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/brulage_selection.PNG"></p>

Lorsque le capitaine sélectionne les joueurs dans son équipe en cliquant sur le bouton vert, plusieurs indicateurs du brûlage et de sélectionnabilité des joueurs lui sont présentés :

- **À gauche :** la liste des joueurs brûlés dans l’équipe.
- **À droite :** la liste des joueurs sélectionnables dans l’équipe (joueurs non sélectionnés dans une autre équipe, déclarés disponibles et non brûlés).  
  Le brûlage de cette liste affiche le **brûlage prévisionnel à J+1**, c’est-à-dire le brûlage qu’aura le joueur à la prochaine journée s’il est sélectionné dans cette équipe pour cette journée.
- **Au centre :** des listes déroulantes sont présentes pour chaque joueur à sélectionner. Ces listes déroulantes reprennent naturellement la liste des joueurs **sélectionnables**. Si un joueur est déjà sélectionné dans une ou plusieurs équipes des prochaines journées et qu’il devient brûlé suite à une sélection lors d’une journée antérieure, il est automatiquement supprimé des équipes dans lesquelles il devient brûlé.

<p align="center"><img alt="selection_liste_joueurs" width="70%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/selection_liste_joueurs.PNG"></p>

#### Brûlage spécifique J2

Le **brûlage spécifique de la J2** est géré dans Kompo pour les championnats qui y sont soumis.

Pour rappel, _lors de la 2ème journée de la phase, une équipe ne peut pas comporter plus d'un joueur ayant disputé la 1ère journée de la phase dans une équipe de numéro inférieur (applicable pour le championnat par équipes à trois ou quatre joueurs)._

<p align="center"><img alt="brulage_J2_selection" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/brulage_J2_selection.PNG"></p>

À la validation de l’équipe, lorsque deux joueurs « brûlés spécifique J2 » sont sélectionnés, un message d’erreur apparait.

Une 🔥 violette dans le tableau de droite est affichée pour les joueurs « brûlés spécifique J2 ». La 🔥 violette apparait également sur les compos d'équipe en J2 si les joueurs sont brûlés à postériori.

<p align="center"><img alt="brulage_J2_compos" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/brulage_J2_compos.PNG"></p>

### (4) - Tableau des disponibilités

<p align="center"><img alt="tableau_disponibilites" width="32%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/tableau_disponibilites.PNG"></p>

Le premier petit encadré compte :

- le nombre de joueurs déclarés disponibles sur le nombre total de compétiteurs ;
- le nombre de joueurs sélectionnés en équipes sur le nombre total de **places disponibles pour l’ensemble des équipes**.  
  Par exemple, pour cinq équipes du championnat départemental à 4 joueurs, le total sera de 20 places, alors que pour le championnat de Paris, avec une équipe de promotion d’honneur (9 joueurs) et deux équipes de D2 (3 joueurs + 3 joueurs), le total sera de 15 places.

**Cela permet de savoir rapidement si suffisamment de joueurs sont déclarés disponibles et si les équipes sont complètes.**

En dessous, le grand tableau liste tous les compétiteurs, colorés en fonction de leurs disponibilités et regroupés par équipes.

Pour avoir de la visibilité sur **les disponibilités de toute une phase/saison**, il suffit de cliquer sur le bouton bleu « Tout afficher » sous la liste :

<p align="center"><img alt="disponible_total" width="60%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/disponible_total.PNG"></p>

_Les numéros bleus indiquent les équipes dans lesquelles les joueurs sont sélectionnés._

Enfin, le petit bouton orange permet d’envoyer une alerte aux joueurs n’ayant pas renseigné leurs disponibilités.

<p align="center"><img alt="disponibilites_alerter_non_declares" width="35%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/disponibilites_alerter_non_declares.png"></p>

### (5) - Calcul des points virtuels

<p align="center"><img alt="points_virtuels" width="50%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/points_virtuels.PNG"></p>

Le calcul **en temps réel** de vos points **virtuels** est présenté sur la page d’accueil.

Contrairement à d’autres sites et applications, le calcul des points virtuels sur Kompo est davantage affiné et correspond le plus fidèlement à la réalité : dans son calcul, Kompo se base sur les points mensuels des adversaires au lieu des points officiels.

La courbe dessine l’évolution de votre classement sur les 2 dernières saisons.

Cliquer sur le bouton rond bleu avec l’icône « liste » ouvre une fenêtre listant les « parties virtuelles », c’est-à-dire les parties pas encore validées et prises en compte dans le calcul des points virtuels.

<p align="center"><img alt="liste_matches_virtuels" width="40%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/liste_matches_virtuels.PNG"></p>

### (6) - Barre de navigation

#### Naviguer de journée en journée des championnats

La partie gauche de la barre de navigation permet de naviguer de journée en journée du championnat sélectionné en cliquant sur les dates. Les journées marquées d’une coche verte indiquent qu’elles sont passées.

Le menu déroulant à droite des dates permet de passer d’un championnat à un autre.

<p align="center"><img alt="menu_deroulant_championnats" width="45%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/menu_deroulant_championnats.png"></p>

Ce petit bouton présent dans un coin vous permet de naviguer directement à la prochaine journée à jouer, selon votre titularisation dans les championnats.

<p align="center"><img alt="bouton_prochaine_journee" width="13%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/bouton_prochaine_journee.png">

#### Page « Mon compte »

<p align="center"><img alt="mon_compte" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/mon_compte.png"></p>

Cette page permet à chaque membre de gérer ses informations telles que son identifiant, ses informations de contact (une adresse email obligatoire et un numéro de téléphone optionnel), son mot de passe et son image de profil.

Il peut également prendre connaissance des rôles qui lui sont attribués sur Kompo, ainsi que les équipes dans lesquelles il est titularisé.

Kompo peut accueillir tous les membres (**licenciés**) de votre club et il existe plusieurs niveaux de rôles :

- **Niveau 1 : Administrateur**

  - Tous les accès lui sont donnés _(maximum 3 administrateurs par club)_;

- **Niveau 2 : Capitaines**

  - Back-office : accès restreint _(le back-office sera expliqué plus bas)_;
  - Gestion des compositions d’équipe;

- **Niveau 3 : Compétiteur** (rôle additionnels : **Jeune** et **Critérium fédéral**)

  - Peux déclarer ses disponibilités pour chaque journée;

- **Niveau 4 : Loisir / Entraineur**

  - Simple visualisation des compositions d’équipe;
  - Ne peux pas déclarer ses disponibilités.

**Informations de contact**

Les utilisateurs peuvent renseigner un numéro de téléphone en plus de leur adresse email. Cela permet d’être contacté par les capitaines via des listes de diffusion sur la page **Contacter** ainsi que de recevoir les convocations aux rencontres. Si un membre ne souhaite pas être contacté de quelque manière que ce soit, il lui suffira de décocher les cases respectives « Contactables ».

#### Page « Contacter »

<p align="center"><img alt="contacter" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/contacter.PNG"></p>

Cette page est uniquement accessible aux capitaines et aux administrateurs afin de contacter un ou plusieurs membres pour communiquer sur un évènement, organiser une réunion, etc.

Le bouton **Catégories** affiche les listes de diffusion pour envoyer un message commun à un même groupe de personnes.

<p align="center"><img alt="contacter_liste_diffusion" width="25%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/contacter_liste_diffusion.png"></p>

La dernière catégorie nommée **Personnalisée** permet de créer une liste personnalisée de membres à contacter.

<p align="center"><img alt="contacter_personnalisee" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/contacter_personnalisee.png"></p>

Sur mobile, des boutons supplémentaires apparaissent pour ouvrir l’application par défaut de votre téléphone pour appeler, envoyer un SMS ou un message via WhatsApp.

<p align="center"><img alt="contacter_responsive" width="40%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/contacter_responsive.PNG"></p>

#### Page « Gestion » - Back-office

Le back-office est le portail administrateur uniquement accessible et visible via la barre de navigation pour les administrateurs et les capitaines. Ce portail permet l’administration :

- du compte du club sur Kompo;
- des membres :

<p align="center"><img alt="gestion_membres" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/gestion_membres.PNG"></p>

- des championnats enregistrés :

<p align="center"><img alt="gestion_championnats" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/gestion_championnats.PNG">

- des rencontres : ajout de consignes, décalage de rencontres, avertissement de salles indisponibles, gérer les heures de rendez-vous intégrées dans les convocations, etc. ;

<p align="center"><img alt="gestion_rencontres" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/gestion_rencontres.PNG"></p>

- des équipes et des joueurs titulaires :

<p align="center"><img alt="gestion_equipes" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/gestion_equipes.PNG"></p>

<p align="center"><img alt="gestion_equipes_titulaires_1" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/gestion_equipes_titulaires_1.PNG"></p>

<p align="center"><img alt="gestion_equipes_titulaires_2" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/gestion_equipes_titulaires_2.PNG"></p>

- des disponibilités _(en cas d’urgence à la place des joueurs)_ :

<p align="center"><img alt="gestion_disponibilites" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/gestion_disponibilites.PNG"></p>

- page de mise à jour simplifiée :

  - du classement officiel des joueurs tous les 6 mois :

  <p align="center"><img style="margin: 10px auto 28px auto;" alt="gestion_api_fftt_membres" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/gestion_api_fftt_membres.PNG"></p>

  - de toute la phase/saison : les équipes, poules, journées et rencontres en un clic _(par récupération des données via l’API de la FFTT)_ :

<p align="center"><img alt="fftt_api_championnat" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/fftt_api_championnat.png"></p>

### Pied de page – Liens et pages d’informations

C’est depuis le back-office que vous avez la possibilité de gérer le contenu de ce pied de page, auquel vous pouvez y ajouter :

- des accès vers des pages d’informations que vous pouvez administrer grâce à un éditeur de texte. Il est même possible de créer des pages collaboratives : c’est-à-dire que tous les membres peuvent également en modifier le contenu via l’éditeur;

_<p align="center">Éditeur</p>_

<p align="center"><img alt="footer_ckeditor" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/footer_ckeditor.png"></p>

<br>

_<p align="center">Rendu visuel</p>_

<p align="center"><img alt="footer_ckeditor_rendu" width="100%" src="https://raw.githubusercontent.com/StephSako/Kompo/refs/heads/main/illustrations/footer_ckeditor_rendu.png"></p>

- des liens vers des pages externes, comme le site de votre club, le site de la FFTT, etc.

### Abonnement

La saison 2025-2026 sera entièrement gratuite à tous les clubs. Cela laisse le temps aux clubs de découvrir Kompo, de faire des propositions d’évolutions et de se convaincre que l’application est indispensable à leur vie compétitive 😇.

À partir de la 2026-2027, un abonnement annuel sera proposé, dont voici les conditions :

- l’abonnement sera calculé en fonction du nombre d’équipes gérées dans Kompo **tout championnat par équipe confondu**. C’est pour moi la solution la plus équilibrée par rapport à un abonnement à prix fixe vis-à-vis des petits clubs n’ayant pas un grand nombre d’équipes à gérer.  
  De plus, à l’inscription de votre club ainsi que depuis le back-office, il vous sera possible de choisir les championnats que vous souhaitez gérer.  

- un abonnement annuel sera valable du jour de la souscription jusqu’au prochain 31 Juillet;

- tout club souscrivant durant le mois de Janvier aura une réduction de 30% sur son abonnement (abonnement valide jusqu’au **31 Juillet de la même année**);

- tout club du 95 – Val d’Oise souscrivant avant le **30 Décembre 2025** verra son **abonnement pour la saison 2026-2027 divisé par deux** et fera partie du **Club des Ambassadeurs**.
