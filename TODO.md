[=======THE-GOODZ-PLACE=======]

# MISE EN PLACE
1. Créer projet [X]
2. Créer Todo.md [X]
3. Installer dart-sass -> public/ [X]
4. Créez dossiers assets (css, img, js, sass) + fichiers -> public / [X]

## BASE DE DONNÉES
### Préalablement
1. Editer .env [X]
### Champs
1. Créer au moins 3 entités pour la BDD. Prévision :
- 5 tables : (Adverts, Cities, Categories, Users et "Roles")
Users   -> Username
        -> password
        ->
Adverts -> title (string)
        -> description (text)
        -> address (string)
        -> price (int)
        -> image (string)
        -> publication (date)
        -> updatedAt (date)
        -> FK : userId
        -> FK : categoryId
        -> FK : cityId

Categories  -> type (string)

Cities  -> name (string)
        -> postalcode (int)

        


2. doctrine:database:create


# STRUCTURE
## INTERFACE VISITEUR
### Connexion / Inscription
1. Créer une page d'accueil avec un lien vers la page de connexion.
2. Créer un formulaire pour l'inscription / la connexion des utilisateurs
3.  - Vérification front
    - Protéger injection SQL specialchars
4. Logique d'inscription
    -> 3 champs obligatoires :
        - email
        - password
        - verification password
    -> Vérification si email n'existe pas déjà (sinon -> erreur)
    -> Vérification si 'password' et 'verification password' respectent les règles prédéfinies des mots de passe (longueur et caractères viables) (sinon -> erreur)
    -> vérification si 'password' et 'verification password' sont identiques (sinon -> erreur)
    -> Mot de passes CRYPTÉS /!\
    -> Username UNIQUE généré automatiquement (UniqID) et modifiable plus tard
5. Logique de connexion
    -> 2 champs : 
        - 1 pour username ou email
        - 2 pour mot de passe
    -> vérification si le Username ou l'email existent dans la base de données
    -> Vérification que le mot de passe est correcte

### Affichage des produits
1. Produits en lecture seule 
    -> Aucune fonctionnalité d'achat
    -> Lien de connexion/inscription sur chaque objet
2. Boucle {% for %}
[====Bonus====]
3. Création d'un système de tri

## INTERFACE UTILISATEUR
### Page profil
[En-cours]
### Affichage des produits
### Ajout / Modification / Suppression de produits perso
[En-cours]

## INTERFACE ADMIN
### Page des statistiques
### Ajout / Modification / Suppression de produits
### Affichage des utilisateurs
### Modification / Suppression des données utilisateurs (hors mot de passe)
[En-cours]

## INTERFACE SUPERADMIN (pour le plaisir)
### Page des statistiques
### Ajout / Modification / Suppression de produits
### Affichage des utilisateurs
### Modification / Suppression des données utilisateurs (hors mot de passe et avec gestion des rôles)
[En-cours]


# FONCTIONNALITES BONUS
1. Systèmème de recherche et de tri AJAX <-- BONUS TOP MOUMOUTE
2. Système de paiement bancaire en director
3. Historique des objets déjà vendus ou retirés
4. Historique des actions utilisateurs ou admin (comme edition/suppression par exemple)


# PRESENTATION