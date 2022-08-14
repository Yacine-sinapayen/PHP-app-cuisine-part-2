# Programme partie 2
1 - Écoutez la requête d'un utilisateur via l'url
2 - Administrez un formulaire de façon sécurisée
3 - Implémentation d'un système de connexion
4 - Conserver les données de navigation via les sessions et cookies


## Roadmap pour implementer la connexion
### 1. Posez le problème
On doit soumettre un e-mail et un mot de passe dans un formulaire de connexion.

Si le formulaire est valide, nous affichons un message de succès, et sinon un message d'erreur. La liste de recettes n'est affichée qu'à un utilisateur qui s'est connecté avec succès.

### 2. Schématisez le code
Pour que l'utilisateur puisse entrer le mot de passe, le plus simple est de créer un formulaire. Celui-ci sera directement intégré dans la page d'accueil du site telle que nous la connaissons déjà.

Trois situations peuvent survenir :

Vous n'êtes pas connecté : auquel cas, le formulaire de contact s'affiche, et la liste des recettes ne s'affiche pas.

Vous avez soumis le formulaire avec le bon mot de passe pour l'utilisateur : le message de succès s'affiche, le formulaire de connexion ne s'affiche pas et les recettes s'affichent.

Vous avez soumis le formulaire avec le mauvais mot de passe pour l'utilisateur : le message d'erreur s'affiche, le formulaire de connexion s'affiche et les recettes ne s'affichent pas.

Vous devez donc créer une nouvelle page et adapter la page d'accueil :

login.php : contient un simple formulaire comme vous savez les faire ;

home.php : qui doit maintenant inclure une formulaire de connexion et une condition sur l'affichage des recettes.

### 3. Mobilisez les connaissances requises
Nous avons détaillé les connaissances requises au début de ce chapitre. Vous allez voir que ce n'est qu'une simple application pratique de ce que vous connaissez déjà, mais cela sera une bonne occasion de vous entraîner.

Bon ! On a préparé le terrain ensemble ; maintenant, vous savez tout ce qu'il faut pour réaliser le script !

Vous êtes normalement capable de trouver le code à écrire par vous-même, et c'est ce que je vous invite à faire. Ça ne marchera peut-être pas du premier coup, mais ne vous en faites pas : c'est le métier qui rentre !

