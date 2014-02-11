ZendSkeletonApplication
=======================

forked from zendframework/ZendSkeletonApplication

* This Application is integrated with Doctrine2
* Testing environment is set, using fully automated, in-memory SQlite as database
* Example entity already there with the unit test covering it
* Example repository included as well
* SpiffyNavigation module installed and already working (see navigation.config.php)
* Application config was split to several files to increase maintanability

to get started quickly:

1. run ```php composer.phar self-update```
2. run ```php composer.phar update```
3. copy config.local.php.dist to config.local.php and provide database credentials
4. create tests (TDD always!) then doctrine entities
5. to generate database schema from your entities run ```vendor/bin/doctrine-module orm:schema-tool:update --force```
6. point your vhost to appdirectory/public to get started
7. you can start using php built-in server as well by going to the ```public``` directory and running ```php -S 127.0.0.0:80```
