UPDATE wp_options SET option_value = replace(option_value, 'http://localhost/wordpress', 'http://nouvelle-adresse.com') WHERE option_name = 'home' OR option_name = 'siteurl';

UPDATE wp_posts SET guid = REPLACE (guid, 'http://localhost/wordpress', 'http://nouvelle-adresse.com');

UPDATE wp_posts SET post_content = REPLACE (post_content, 'http://localhost/wordpress', 'http://nouvelle-adresse.com');

UPDATE wp_postmeta SET meta_value = REPLACE (meta_value, 'http://localhost/wordpress','http://nouvelle-adresse.com');
