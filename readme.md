1) Les 5 verbes HTTP et leur utilité :
- La méthode GET, utilisée pour obtenir une ressource.
- La méthode POST, c'est une méthode utiliser pour créer une ressource.
- La méthode PUT, permet de mettre à jour une ressource.
- La méthode DELETE, permet la suppression d'une ressource.
- La méthode HEAD comme la méthode GET, elle est utilisé pour savoir si une ressource est accessible sans lui retourner au client. 

2) Les composants d'une requête HTTP :

- Une url
- Des headers
- Une méthode (Verbe HTTP tel que GET, POST .... expliquer au dessus)
- Un body (Optionnel)


3) Les compsants d'une réponse HTTP :
Est renvoyé par le serveur WEB
Contient des headers
Contient un body (html, xml, json …)
Contient un code statut (404, 500, 301 …)

exemple des code status :

Commençant par 2 :
Succès
Exemple :
- 200 Ok
-201 Created
-202 Accepted
- …
Commençant par 3 :
Redirection
Exemple :
- 301 Redirection temporaire
- 310 Trop de redirection
- 304 Non modifié
- …
Commençant par 4 :
Erreur du client
Exemple :
- 400 Mauvaise requête
- 401 Problème d’autorisation
- 404 Ressource non trouvée
- …
Commençant par 5 :
Erreur du Serveur
Exemple :
- 500 Erreur interne du serveur
- 501 Fonctionalité pas implémentée
- 503 Service non disponible