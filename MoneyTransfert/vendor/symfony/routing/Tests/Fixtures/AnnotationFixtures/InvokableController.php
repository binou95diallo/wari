<<<<<<< HEAD
<?php

namespace Symfony\Component\Routing\Tests\Fixtures\AnnotationFixtures;

use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/here", name="lol", methods={"GET", "POST"}, schemes={"https"})
 */
class InvokableController
{
    public function __invoke()
    {
    }
}
=======
<?php

namespace Symfony\Component\Routing\Tests\Fixtures\AnnotationFixtures;

use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/here", name="lol", methods={"GET", "POST"}, schemes={"https"})
 */
class InvokableController
{
    public function __invoke()
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
