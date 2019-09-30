<<<<<<< HEAD
<?php

namespace Sensio\Bundle\FrameworkExtraBundle\Tests\Routing\Fixtures;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * @Route("/base")
 * @Method("GET")
 */
class FoobarController
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
    }

    /**
     * @Route("/new", name="new")
     * @Method("POST")
     */
    public function newAction()
    {
    }

    /**
     * @Route("/no-name")
     */
    public function noNameAction()
    {
    }
}
=======
<?php

namespace Sensio\Bundle\FrameworkExtraBundle\Tests\Routing\Fixtures;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * @Route("/base")
 * @Method("GET")
 */
class FoobarController
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
    }

    /**
     * @Route("/new", name="new")
     * @Method("POST")
     */
    public function newAction()
    {
    }

    /**
     * @Route("/no-name")
     */
    public function noNameAction()
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
