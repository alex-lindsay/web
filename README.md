# web
New take at rebuilding my personal website.

# local dev config notes
https://www.git-tower.com/blog/apache-on-macos/

The default ports have been set in /opt/homebrew/etc/httpd/httpd.conf to 8080 and in
/opt/homebrew/etc/httpd/extra/httpd-ssl.conf to 8443 so that httpd can run without sudo.

To restart httpd after an upgrade:
  brew services restart httpd
Or, if you don't want/need a background service you can just run:
  /opt/homebrew/opt/httpd/bin/httpd -D FOREGROUND
==> php
To enable PHP in Apache add the following to httpd.conf and restart Apache:
    LoadModule php_module /opt/homebrew/opt/php/lib/httpd/modules/libphp.so

    <FilesMatch \.php$>
        SetHandler application/x-httpd-php
    </FilesMatch>

Finally, check DirectoryIndex includes index.php
    DirectoryIndex index.php index.html

The php.ini and php-fpm.ini file can be found in:
    /opt/homebrew/etc/php/8.2/

To restart php after an upgrade:
  brew services restart php
Or, if you don't want/need a background service you can just run:
  /opt/homebrew/opt/php/sbin/php-fpm --nodaemonize


$ sudo apachectl start
$ sudo apachectl stop
$ sudo apachectl -k restart
$ sudo apachectl configtest