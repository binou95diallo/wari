<<<<<<< HEAD
<?php

namespace Symfony\Component\Routing\Tests\Fixtures\AnnotationFixtures;

use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/test", utf8=true)
 */
class Utf8ActionControllers
{
    /**
     * @Route(name="one")
     */
    public function one()
    {
    }

    /**
     * @Route(name="two", utf8=false)
     */
    public function two()
    {
    }
}
=======
<?php

namespace Symfony\Component\Routing\Tests\Fixtures\AnnotationFixtures;

use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/test", utf8=true)
 */
class Utf8ActionControllers
{
    /**
     * @Route(name="one")
     */
    public function one()
    {
    }

    /**
     * @Route(name="two", utf8=false)
     */
    public function two()
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
