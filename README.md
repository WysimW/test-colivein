# Colive'in Project

Ce projet est une démo de site WordPress créé pour Colive'in.

## Installation en local

1. **Installer WordPress** : Si vous n'avez pas encore installé WordPress sur votre machine locale, suivez les instructions fournies dans le [Codex WordPress](https://codex.wordpress.org/Installing_WordPress).

2. **Clonez le dépôt Git** : Ouvrez une fenêtre de terminal et naviguez jusqu'à l'emplacement où vous souhaitez que le projet réside sur votre ordinateur, puis entrez la commande suivante :
    ```
    git clone git@github.com:WysimW/test-colivein.git
    ```

3. **Configurez une nouvelle base de données** : Ouvrez votre outil de gestion de bases de données MySQL (par exemple, phpMyAdmin). Créez une nouvelle base de données et nommez-la selon votre préférence.

4. **Importez le contenu du site** : Dans votre tableau de bord WordPress, allez à `Outils > Importer`, puis sélectionnez l'option "WordPress" en bas de la liste. Cliquez sur "Choisir un fichier" et sélectionnez le fichier `wordpress_content.xml` fourni dans le dépôt git, puis suivez les instructions pour importer le contenu.

5. **Configurez WordPress** :
   - Copiez le fichier `wp-config-sample.php`, renommez-le `wp-config.php` et ajustez les valeurs pour `DB_NAME`, `DB_USER`, `DB_PASSWORD` et `DB_HOST` en fonction de votre configuration MySQL locale.
   - Mettez à jour l'URL du site si nécessaire dans les paramètres de WordPress (`Réglages > Général`), en définissant les champs "Adresse web de WordPress (URL)" et "Adresse web du site (URL)" avec l'URL de votre installation locale, par exemple `http://localhost/test/test-colivein`.

6. **Visitez votre site local** : Ouvrez un navigateur web et accédez à l'URL de votre installation WordPress locale.

## Accès à l'administration

Pour accéder au tableau de bord d'administration de WordPress, ajoutez `/wp-admin` à l'URL de votre site. Par exemple, si votre site est installé à l'adresse `http://localhost/test/test-colivein`, l'URL d'administration sera `http://localhost/test/test-colivein/wp-admin`.


## Plugins

Les plugins utilisés pour le bon fonctionnement de ce thème sont les suivants :

    - Advenced-Custom-Field (ACF)
    - Contact-Form-7
    - Custom-Post-Type (CPT)

## Support

Si vous rencontrez des problèmes avec l'installation ou si vous avez des questions concernant ce projet, n'hésitez pas à créer un [Issue] sur ce dépôt.
