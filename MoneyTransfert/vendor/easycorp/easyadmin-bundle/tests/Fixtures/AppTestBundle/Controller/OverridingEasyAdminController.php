<<<<<<< HEAD
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Tests\Fixtures\AppTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OverridingEasyAdminController extends AbstractController
{
    /**
     * @Route("/override_layout", name="override_layout")
     *
     * @return Response
     */
    public function overrideLayout()
    {
        return $this->render('override_controller/layout.html.twig');
    }
}
=======
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Tests\Fixtures\AppTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OverridingEasyAdminController extends AbstractController
{
    /**
     * @Route("/override_layout", name="override_layout")
     *
     * @return Response
     */
    public function overrideLayout()
    {
        return $this->render('override_controller/layout.html.twig');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
