<<<<<<< HEAD
wget -q https://github.com/php/php-src/archive/PHP-7.4.tar.gz
mkdir -p ./data/php-src
tar -xzf ./PHP-7.4.tar.gz -C ./data/php-src --strip-components=1
php -n test_old/run.php --verbose --no-progress PHP7 ./data/php-src
=======
wget -q https://github.com/php/php-src/archive/PHP-7.4.tar.gz
mkdir -p ./data/php-src
tar -xzf ./PHP-7.4.tar.gz -C ./data/php-src --strip-components=1
php -n test_old/run.php --verbose --no-progress PHP7 ./data/php-src
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
