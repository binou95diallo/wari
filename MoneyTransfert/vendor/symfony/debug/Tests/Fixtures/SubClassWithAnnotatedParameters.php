<<<<<<< HEAD
<?php

namespace Symfony\Component\Debug\Tests\Fixtures;

class SubClassWithAnnotatedParameters extends ClassWithAnnotatedParameters implements InterfaceWithAnnotatedParameters
{
    use TraitWithAnnotatedParameters;

    public function fooMethod(string $foo)
    {
    }

    public function barMethod($bar = null)
    {
    }

    public function quzMethod()
    {
    }

    public function whereAmI()
    {
    }

    /**
     * @param                      $defined
     * @param Type\Does\Not\Matter $definedCallable
     */
    public function iAmHere()
    {
    }
}
=======
<?php

namespace Symfony\Component\Debug\Tests\Fixtures;

class SubClassWithAnnotatedParameters extends ClassWithAnnotatedParameters implements InterfaceWithAnnotatedParameters
{
    use TraitWithAnnotatedParameters;

    public function fooMethod(string $foo)
    {
    }

    public function barMethod($bar = null)
    {
    }

    public function quzMethod()
    {
    }

    public function whereAmI()
    {
    }

    /**
     * @param                      $defined
     * @param Type\Does\Not\Matter $definedCallable
     */
    public function iAmHere()
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
