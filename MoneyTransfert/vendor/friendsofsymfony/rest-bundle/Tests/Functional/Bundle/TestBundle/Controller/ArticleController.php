<<<<<<< HEAD
<?php

/*
 * This file is part of the FOSRestBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\RestBundle\Tests\Functional\Bundle\TestBundle\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\Controller\Annotations\View;

/**
 * @RouteResource("Article")
 */
class ArticleController extends AbstractFOSRestController
{
    /**
     * Create a new resource.
     *
     * @param Request $request
     *
     * @return View view instance
     *
     * @View()
     */
    public function cpostAction(Request $request)
    {
        $view = $this->routeRedirectView('test_redirect_endpoint', array('name' => $request->request->get('name')));
        $view->setTemplate('TestBundle:Article:foo.html.twig');

        return $view;
    }

    /**
     * Get list.
     *
     * @param Request $request
     *
     * @return View view instance
     *
     * @View()
     */
    public function cgetAction(Request $request)
    {
        $view = $this->view();
        $view->setTemplate('TestBundle:Article:foo.html.twig');

        return $view;
    }
}
=======
<?php

/*
 * This file is part of the FOSRestBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\RestBundle\Tests\Functional\Bundle\TestBundle\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\Controller\Annotations\View;

/**
 * @RouteResource("Article")
 */
class ArticleController extends AbstractFOSRestController
{
    /**
     * Create a new resource.
     *
     * @param Request $request
     *
     * @return View view instance
     *
     * @View()
     */
    public function cpostAction(Request $request)
    {
        $view = $this->routeRedirectView('test_redirect_endpoint', array('name' => $request->request->get('name')));
        $view->setTemplate('TestBundle:Article:foo.html.twig');

        return $view;
    }

    /**
     * Get list.
     *
     * @param Request $request
     *
     * @return View view instance
     *
     * @View()
     */
    public function cgetAction(Request $request)
    {
        $view = $this->view();
        $view->setTemplate('TestBundle:Article:foo.html.twig');

        return $view;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
