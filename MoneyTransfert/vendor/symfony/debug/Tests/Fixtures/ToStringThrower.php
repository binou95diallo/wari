<<<<<<< HEAD
<?php

namespace Symfony\Component\Debug\Tests\Fixtures;

class ToStringThrower
{
    private $exception;

    public function __construct(\Exception $e)
    {
        $this->exception = $e;
    }

    public function __toString()
    {
        try {
            throw $this->exception;
        } catch (\Exception $e) {
            // Using user_error() here is on purpose so we do not forget
            // that this alias also should work alongside with trigger_error().
            return trigger_error($e, E_USER_ERROR);
        }
    }
}
=======
<?php

namespace Symfony\Component\Debug\Tests\Fixtures;

class ToStringThrower
{
    private $exception;

    public function __construct(\Exception $e)
    {
        $this->exception = $e;
    }

    public function __toString()
    {
        try {
            throw $this->exception;
        } catch (\Exception $e) {
            // Using user_error() here is on purpose so we do not forget
            // that this alias also should work alongside with trigger_error().
            return trigger_error($e, E_USER_ERROR);
        }
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
