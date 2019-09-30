<<<<<<< HEAD
<?php

namespace Symfony\Component\Debug\Tests\Fixtures;

/**
 * @internal
 */
trait InternalTrait2
{
    /**
     * @internal
     */
    public function internalMethod()
    {
    }

    /**
     * @internal but should not trigger a deprecation
     */
    public function usedInInternalClass()
    {
    }
}
=======
<?php

namespace Symfony\Component\Debug\Tests\Fixtures;

/**
 * @internal
 */
trait InternalTrait2
{
    /**
     * @internal
     */
    public function internalMethod()
    {
    }

    /**
     * @internal but should not trigger a deprecation
     */
    public function usedInInternalClass()
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
