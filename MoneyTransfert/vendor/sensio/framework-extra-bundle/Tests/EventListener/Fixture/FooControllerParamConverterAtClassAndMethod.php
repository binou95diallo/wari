<<<<<<< HEAD
<?php

namespace Sensio\Bundle\FrameworkExtraBundle\Tests\EventListener\Fixture;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @ParamConverter("test")
 */
class FooControllerParamConverterAtClassAndMethod
{
    /**
     * @ParamConverter("test2")
     */
    public function barAction($test, $test2)
    {
    }
}
=======
<?php

namespace Sensio\Bundle\FrameworkExtraBundle\Tests\EventListener\Fixture;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * @ParamConverter("test")
 */
class FooControllerParamConverterAtClassAndMethod
{
    /**
     * @ParamConverter("test2")
     */
    public function barAction($test, $test2)
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
