<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# 📘 Backend Laravel API – JWT & CRUD

Ce projet est un backend complet basé sur Laravel.  
Il fournit une API REST incluant l’authentification JWT, la gestion des utilisateurs, un CRUD pour les articles, la validation des données et un système de limitation de débit.


# 📋 Table des Matières

1. Aperçu du Projet  
2. Fonctionnalités  
3. Stack Technologique   
4. Configuration  
5. Authentification  
6. CRUD : API des Articles   
7. Tests avec Postman  



# 1. Aperçu du Projet

Ce backend offre une base solide pour créer une application web ou mobile.  
L’API inclut une architecture bien organisée, des routes sécurisées et une gestion avancée des erreurs.


# 2. Fonctionnalités

- Authentification avec JWT  
- Inscription et connexion des utilisateurs  
- Récupération du profil utilisateur  
- Création, modification, suppression et consultation d’articles  
- Recherche, tri et pagination  
- Validation avancée avec Form Requests  
- Rate Limiting pour sécuriser les endpoints  
- Tests via Postman  


# 3. Stack Technologique

- PHP 8+  
- Laravel 12  
- MySQL / MariaDB  
- JWT (php-open-source-saver/jwt-auth)  
- Apache / Nginx  
- Postman pour les tests  

# 4. Configuration

Dans config/auth.php, changer le guard API pour JWT :
```bash
'guards' => [
    'api' => [
        'driver' => 'jwt',
        'provider' => 'users',
    ],
],
```

# 5. Authentification

Routes principales :

POST /api/auth/register – inscription

POST /api/auth/login – connexion

GET /api/auth/me – profil

POST /api/auth/logout – déconnexion

POST /api/auth/refresh – renouveler le token

Toutes les routes sécurisées nécessitent un token dans l’entête :

```bash
Authorization: Bearer VOTRE_TOKEN
```

# 6. CRUD : API des Articles

Routes disponibles :

GET /api/posts – liste paginée

POST /api/posts – créer un article

GET /api/posts/{id} – afficher un article

PUT /api/posts/{id} – modifier

DELETE /api/posts/{id} – supprimer

Seul l’auteur peut modifier ou supprimer son article.

# 7. Tests avec Postman

Une collection Postman est fournie pour tester :

Authentification

CRUD des articles

Gestion d’erreurs (401, 403, 422, 429)

Middleware et permissions

Postman peut aussi enregistrer automatiquement le token utilisateur.



