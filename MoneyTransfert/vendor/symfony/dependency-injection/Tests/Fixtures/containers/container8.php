<<<<<<< HEAD
<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;

$container = new ContainerBuilder(new ParameterBag([
    'foo' => '%baz%',
    'baz' => 'bar',
    'bar' => 'foo is %%foo bar',
    'escape' => '@escapeme',
    'values' => [true, false, null, 0, 1000.3, 'true', 'false', 'null'],
    'binary' => "\xf0\xf0\xf0\xf0",
    'binary-control-char' => "This is a Bell char \x07",
]));

return $container;
=======
<?php

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;

$container = new ContainerBuilder(new ParameterBag([
    'foo' => '%baz%',
    'baz' => 'bar',
    'bar' => 'foo is %%foo bar',
    'escape' => '@escapeme',
    'values' => [true, false, null, 0, 1000.3, 'true', 'false', 'null'],
    'binary' => "\xf0\xf0\xf0\xf0",
    'binary-control-char' => "This is a Bell char \x07",
]));

return $container;
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
