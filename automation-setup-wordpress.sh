#!/usr/bin/env sh

alias wp="/app/vendor/bin/wp"

wp core install \
  --url="http://localhost:8080" \
  --title="Bloggy" \
  --admin_user="admin" \
  --admin_password="admin" \
  --admin_email="info@example.com" \
  --skip-email

wp option update blogdescription "Bloggy"
wp option update timezone_string "Australia/Brisbane"

wp option update permalink_structure "/%year%/%monthnum%/%day%/%postname%/"

wp theme delete twentynineteen
wp theme delete twentytwenty

wp plugin delete hello
wp plugin delete akismet

wp theme activate bloggy
wp plugin activate bloggy
