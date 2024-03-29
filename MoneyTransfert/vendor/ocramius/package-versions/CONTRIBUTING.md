<<<<<<< HEAD
---
title: Contributing
---

# Contributing

 * Coding standard for the project is [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md)
 * The project will follow strict [object calisthenics](http://www.slideshare.net/guilhermeblanco/object-calisthenics-applied-to-php)
 * Any contribution must provide tests for additional introduced conditions
 * Any un-confirmed issue needs a failing test case before being accepted
 * Pull requests must be sent from a new hotfix/feature branch, not from `master`.

## Installation

To install the project and run the tests, you need to clone it first:

```sh
$ git clone git://github.com/Ocramius/PackageVersions.git
```

You will then need to run a composer installation:

```sh
$ cd PackageVersions
$ curl -s https://getcomposer.org/installer | php
$ php composer.phar update
```

## Testing

The PHPUnit version to be used is the one installed as a dev- dependency via composer:

```sh
$ ./vendor/bin/phpunit
```

Accepted coverage for new contributions is 80%. Any contribution not satisfying this requirement 
won't be merged.

=======
---
title: Contributing
---

# Contributing

 * Coding standard for the project is [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md)
 * The project will follow strict [object calisthenics](http://www.slideshare.net/guilhermeblanco/object-calisthenics-applied-to-php)
 * Any contribution must provide tests for additional introduced conditions
 * Any un-confirmed issue needs a failing test case before being accepted
 * Pull requests must be sent from a new hotfix/feature branch, not from `master`.

## Installation

To install the project and run the tests, you need to clone it first:

```sh
$ git clone git://github.com/Ocramius/PackageVersions.git
```

You will then need to run a composer installation:

```sh
$ cd PackageVersions
$ curl -s https://getcomposer.org/installer | php
$ php composer.phar update
```

## Testing

The PHPUnit version to be used is the one installed as a dev- dependency via composer:

```sh
$ ./vendor/bin/phpunit
```

Accepted coverage for new contributions is 80%. Any contribution not satisfying this requirement 
won't be merged.

>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
