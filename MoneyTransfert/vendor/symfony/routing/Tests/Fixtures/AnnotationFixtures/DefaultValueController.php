<<<<<<< HEAD
<?php

namespace Symfony\Component\Routing\Tests\Fixtures\AnnotationFixtures;

use Symfony\Component\Routing\Annotation\Route;

class DefaultValueController
{
    /**
     * @Route("/{default}/path", name="action")
     */
    public function action($default = 'value')
    {
    }

    /**
     * @Route("/hello/{name<\w+>}", name="hello_without_default")
     * @Route("/hello/{name<\w+>?Symfony}", name="hello_with_default")
     */
    public function hello(string $name = 'World')
    {
    }
}
=======
<?php

namespace Symfony\Component\Routing\Tests\Fixtures\AnnotationFixtures;

use Symfony\Component\Routing\Annotation\Route;

class DefaultValueController
{
    /**
     * @Route("/{default}/path", name="action")
     */
    public function action($default = 'value')
    {
    }

    /**
     * @Route("/hello/{name<\w+>}", name="hello_without_default")
     * @Route("/hello/{name<\w+>?Symfony}", name="hello_with_default")
     */
    public function hello(string $name = 'World')
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
