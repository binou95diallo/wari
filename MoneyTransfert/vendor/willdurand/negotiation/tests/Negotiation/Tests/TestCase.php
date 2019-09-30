<<<<<<< HEAD
<?php

namespace Negotiation\Tests;

abstract class TestCase extends \PHPUnit_Framework_TestCase
{
    protected function call_private_method($class, $method, $object, $params)
    {
        $method = new \ReflectionMethod($class, $method);

        $method->setAccessible(true);

        return $method->invokeArgs($object, $params);
    }
}
=======
<?php

namespace Negotiation\Tests;

abstract class TestCase extends \PHPUnit_Framework_TestCase
{
    protected function call_private_method($class, $method, $object, $params)
    {
        $method = new \ReflectionMethod($class, $method);

        $method->setAccessible(true);

        return $method->invokeArgs($object, $params);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
