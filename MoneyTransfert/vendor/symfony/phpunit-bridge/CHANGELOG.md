<<<<<<< HEAD
CHANGELOG
=========

4.3.0
-----

 * added `ClassExistsMock`
 * bumped PHP version from 5.3.3 to 5.5.9 
 * split simple-phpunit bin into php file with code and a shell script

4.1.0
-----

 * Search for `SYMFONY_PHPUNIT_VERSION`, `SYMFONY_PHPUNIT_REMOVE`,
   `SYMFONY_PHPUNIT_DIR` env var in `phpunit.xml` then in `phpunit.xml.dist`

4.0.0
-----

 * support for the `testLegacy` prefix in method names to mark a test as legacy
   has been dropped, use the `@group legacy` notation instead
 * support for the `Legacy` prefix in class names to mark tests as legacy has
   been dropped, use the `@group legacy` notation instead
 * support for passing an array of mocked namespaces not indexed by the mock
   feature to the constructor of the `SymfonyTestsListenerTrait` class was
   dropped

3.4.0
-----

 * added a `CoverageListener` to enhance the code coverage report
 * all deprecations but those from tests marked with `@group legacy` are always
   displayed when not in `weak` mode

3.3.0
-----

 * using the `testLegacy` prefix in method names to mark a test as legacy is
   deprecated, use the `@group legacy` notation instead
 * using the `Legacy` prefix in class names to mark a test as legacy is deprecated,
   use the `@group legacy` notation instead

3.1.0
-----

 * passing a numerically indexed array to the constructor of the `SymfonyTestsListenerTrait`
   is deprecated, pass an array of namespaces indexed by the mocked feature instead
=======
CHANGELOG
=========

4.3.0
-----

 * added `ClassExistsMock`
 * bumped PHP version from 5.3.3 to 5.5.9 
 * split simple-phpunit bin into php file with code and a shell script

4.1.0
-----

 * Search for `SYMFONY_PHPUNIT_VERSION`, `SYMFONY_PHPUNIT_REMOVE`,
   `SYMFONY_PHPUNIT_DIR` env var in `phpunit.xml` then in `phpunit.xml.dist`

4.0.0
-----

 * support for the `testLegacy` prefix in method names to mark a test as legacy
   has been dropped, use the `@group legacy` notation instead
 * support for the `Legacy` prefix in class names to mark tests as legacy has
   been dropped, use the `@group legacy` notation instead
 * support for passing an array of mocked namespaces not indexed by the mock
   feature to the constructor of the `SymfonyTestsListenerTrait` class was
   dropped

3.4.0
-----

 * added a `CoverageListener` to enhance the code coverage report
 * all deprecations but those from tests marked with `@group legacy` are always
   displayed when not in `weak` mode

3.3.0
-----

 * using the `testLegacy` prefix in method names to mark a test as legacy is
   deprecated, use the `@group legacy` notation instead
 * using the `Legacy` prefix in class names to mark a test as legacy is deprecated,
   use the `@group legacy` notation instead

3.1.0
-----

 * passing a numerically indexed array to the constructor of the `SymfonyTestsListenerTrait`
   is deprecated, pass an array of namespaces indexed by the mocked feature instead
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
