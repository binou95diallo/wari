<<<<<<< HEAD
<?php

namespace Tests\Fixtures\FooBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/optional-arguments")
 */
class OptionalArgumentsController
{
    /**
     * @Route("/with-default-followed-by-mandatory", defaults={"e" = null})
     * @ParamConverter(name="d", class="Tests\Fixtures\FooBundle\Entity\Foo")
     */
    public function withDefaultFollowedByMandatory($d = null, $e)
    {
        return new Response(null === $d ? 'yes' : 'no');
    }
}
=======
<?php

namespace Tests\Fixtures\FooBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/optional-arguments")
 */
class OptionalArgumentsController
{
    /**
     * @Route("/with-default-followed-by-mandatory", defaults={"e" = null})
     * @ParamConverter(name="d", class="Tests\Fixtures\FooBundle\Entity\Foo")
     */
    public function withDefaultFollowedByMandatory($d = null, $e)
    {
        return new Response(null === $d ? 'yes' : 'no');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
