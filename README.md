# spp-laba1
composer install or php composer.phar install

create spp-laba1.conf in ir /etc/apache2/sites-available
and paste:
<VirtualHost *:80>
  ServerName spp-laba1.corp.com
  ServerAdmin webmaster@corp.com
  DocumentRoot "/srv/www/sovr-progr-platf/laba1/src/public"
  <Directory /srv/www/sovr-progr-platf/laba1/src/public>
            Options Indexes FollowSymlinks
            AllowOverride All
            Require all granted
  </Directory>
  ErrorLog /srv/www/sovr-progr-platf/logs/laba1/error.log
  CustomLog /srv/www/sovr-progr-platf/logs/laba1/access.log combined
</VirtualHost>
