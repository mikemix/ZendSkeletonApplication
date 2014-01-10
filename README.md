ZendSkeletonApplication
=======================

forked from zendframework/ZendSkeletonApplication

* This Application is integrated with Doctrine2
* Testing environment is set, using fully automated, in-memory SQlite as database
* Example entity already there with the unit test covering it
* SpiffyNavigation module installed and already working (see navigation.config.php)
* Application config was split to several files to increase maintanability

to get started quickly:

1. copy config.local.php.dist to config.local.php and provide database credentials
2. create tests (TDD always!) then doctrine entities
3. to generate database schema from your entities run ```vendor/bin/doctrine-module orm:schema-tool:update --force```
4. if no errors, you're ready to get started
