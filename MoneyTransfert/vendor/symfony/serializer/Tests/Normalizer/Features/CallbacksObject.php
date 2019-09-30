<<<<<<< HEAD
<?php

namespace Symfony\Component\Serializer\Tests\Normalizer\Features;

class CallbacksObject
{
    public $bar;

    public function __construct($bar = null)
    {
        $this->bar = $bar;
    }

    public function getBar()
    {
        return $this->bar;
    }
}
=======
<?php

namespace Symfony\Component\Serializer\Tests\Normalizer\Features;

class CallbacksObject
{
    public $bar;

    public function __construct($bar = null)
    {
        $this->bar = $bar;
    }

    public function getBar()
    {
        return $this->bar;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
