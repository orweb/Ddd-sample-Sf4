# Ddd-sample-Sf4
DDD sample / Symfony 4 

Exercice :

L'objectif est de créer une application Symfony 4 dans laquelle je peux gérer le stationnement des véhicules automobiles de ma flotte:
Enregistrer un/des véhicules, en renseignant sa plaque d'immatriculation ainsi qu'une description (optionnelle)
Renseigner où j'ai garé l'un de mes/mon véhicule(s), c'est à dire renseigner son emplacement géographique (latitude, longitude, éventuellement altitude)

Les règles métier à respecter:
Je ne peux enregistrer 2 fois le même véhicule dans ma flotte
Je ne peux localiser 2 fois le même véhicule au même endroit d'affilé
Un même véhicule peut appartenir à 2 flottes distinctes

Cette application respecte le découpage DDD (UI, App, Domain, Infra). Tu devras ainsi créer à 2 commandes (au sens DDD). J'aimerais également avoir une query qui permette d'obtenir un état de la flotte de véhicules d'un utilisateur donné.

Pour la partie UI, ça m'est assez égal, un cli en ligne de commande me suffit amplement, pas indispensable de réaliser une api REST par exemple.
Pour la partie Infra, une implémentation en mémoire pour les tests et filesystem (dans le format de stockage de ton choix) suffiront.
Enfin bien sûr: des tests ! Si possible en Gerkhin language avec Behat, pour les grandes fonctionnalités et unitaire pour des value objects par exemple tel que l'objet de GéoLocalisation.

Deadline 2h
