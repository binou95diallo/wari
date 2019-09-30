<<<<<<< HEAD
<?php

namespace Sensio\Bundle\FrameworkExtraBundle\Tests\EventListener\Fixture;

class FooControllerNullableParameter
{
    public function requiredParamAction(\DateTime $param)
    {
    }

    public function defaultParamAction(\DateTime $param = null)
    {
    }

    public function nullableParamAction(?\DateTime $param)
    {
    }
}
=======
<?php

namespace Sensio\Bundle\FrameworkExtraBundle\Tests\EventListener\Fixture;

class FooControllerNullableParameter
{
    public function requiredParamAction(\DateTime $param)
    {
    }

    public function defaultParamAction(\DateTime $param = null)
    {
    }

    public function nullableParamAction(?\DateTime $param)
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
