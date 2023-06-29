# Colive'in WordPress (test de compétence)

## Prérequis

Avant de commencer, assurez-vous d'avoir les éléments suivants installés sur votre machine :

- [WordPress](https://wordpress.org/)
- [MySQL](https://www.mysql.com/)
- [PHP](https://www.php.net/)
- Un serveur web local, comme [MAMP](https://www.mamp.info/) (Mac & Windows) ou [XAMPP](https://www.apachefriends.org/) (Windows & Linux)

## Installation

Suivez ces étapes pour installer le projet sur votre machine locale :

1. **Cloner le dépôt** : `git clone git@github.com:WysimW/test-colivein.git`

2. **Importer la base de données** : 

    - Ouvrez votre outil de gestion de bases de données MySQL (par exemple, phpMyAdmin).
    - Créez une nouvelle base de données et nommez-la selon votre préférence.
    - Importez le fichier `database/wordpress_db.sql` fourni dans le dépôt git dans votre nouvelle base de données.

3. **Configurer WordPress** :

    - Copier le fichier `wp-config-sample.php`, renommez le `wp-config.php` et ajustez les valeurs pour `DB_NAME`, `DB_USER`, `DB_PASSWORD` et `DB_HOST` selon votre configuration MySQL locale.
    - Mettez à jour l'URL du site si nécessaire dans les réglages de WordPress.

4. **Visitez votre site local** : ouvrez un navigateur web et accédez à l'URL de votre installation WordPress locale.

## Plugins

Les plugins utilisés pour le bon fonctionnement de ce thème sont les suivants :

    - Advenced-Custom-Field (ACF)
    - Contact-Form-7
    - Custom-Post-Type (CPT)

## Support

Si vous rencontrez des problèmes avec l'installation ou si vous avez des questions concernant ce projet, n'hésitez pas à créer un [Issue] sur ce dépôt.
