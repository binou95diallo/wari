<<<<<<< HEAD
<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$easyAdminBundleRoutes = $loader->import('@EasyAdminBundle/Controller/EasyAdminController.php', 'annotation');
$easyAdminBundleRoutes->addPrefix('/admin/');
$routes->addCollection($easyAdminBundleRoutes);

$routes->add('custom_route', new Route(
    '/custom-route',
    [
        '_controller' => Kernel::VERSION_ID >= 40100 ? 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController::templateAction' : 'FrameworkBundle:Template:template',
        'template' => 'custom_menu/template.html.twig',
    ]
));

return $routes;
=======
<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$easyAdminBundleRoutes = $loader->import('@EasyAdminBundle/Controller/EasyAdminController.php', 'annotation');
$easyAdminBundleRoutes->addPrefix('/admin/');
$routes->addCollection($easyAdminBundleRoutes);

$routes->add('custom_route', new Route(
    '/custom-route',
    [
        '_controller' => Kernel::VERSION_ID >= 40100 ? 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController::templateAction' : 'FrameworkBundle:Template:template',
        'template' => 'custom_menu/template.html.twig',
    ]
));

return $routes;
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
