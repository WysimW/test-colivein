# Colive'in Project

Ce projet est une démo de site WordPress créé pour Colive'in.

## Installation en local

1. **Clonez le dépôt Git** : Ouvrez une fenêtre de terminal et naviguez jusqu'à l'emplacement où vous souhaitez que le projet réside sur votre ordinateur, puis entrez la commande suivante :

    ```bash
    git clone git@github.com:WysimW/test-colivein.git
    ```

Configurez correctement les droits du dossier pour que Wordpress puisse écrire et lire correctement dans vos dossiers.

2. **Configurez une nouvelle base de données** : 
   - Ouvrez votre outil de gestion de bases de données MySQL (par exemple, phpMyAdmin). Créez une nouvelle base de données et nommez-la selon votre préférence.
   - Importez la bdd qui se trouve dans ce repo dans le dossier database, wordpress-bdd.sql
   - Modifiez le fichier new-url.sql avec votre adresse local à la place des `http://nouvelle-adresse.com`.

3. **Configurez WordPress** :
   - Copiez le fichier `wp-config-sample.php`, renommez-le `wp-config.php` et ajustez les valeurs pour `DB_NAME`, `DB_USER`, `DB_PASSWORD` et `DB_HOST` en fonction de votre configuration MySQL locale.
   - Ouvrez un navigateur web et accédez à l'URL de votre installation WordPress locale.


## Accès à l'administration

Pour accéder au tableau de bord d'administration de WordPress, ajoutez `/wp-admin` à l'URL de votre site. Par exemple, si votre site est installé à l'adresse `http://localhost/test/test-colivein`, l'URL d'administration sera `http://localhost/test/test-colivein/wp-admin`.


## Plugins

Les plugins utilisés pour le bon fonctionnement de ce thème sont les suivants :

- Advenced-Custom-Field (ACF)
- Contact-Form-7
- Custom-Post-Type (CPT)

## Support

Si vous rencontrez des problèmes avec l'installation ou si vous avez des questions concernant ce projet, n'hésitez pas à créer un [Issue] sur ce dépôt.
