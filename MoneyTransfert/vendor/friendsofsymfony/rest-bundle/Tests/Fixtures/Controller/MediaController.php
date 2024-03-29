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

namespace FOS\RestBundle\Tests\Fixtures\Controller;

use FOS\RestBundle\Controller\ControllerTrait;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MediaController extends AbstractController implements ClassResourceInterface
{
    use ControllerTrait;

    /**
     * [GET] /media.
     */
    public function cgetAction()
    {
    }

    /**
     * [GET] /media/{slug}.
     *
     * @param $slug
     */
    public function getAction($slug)
    {
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

namespace FOS\RestBundle\Tests\Fixtures\Controller;

use FOS\RestBundle\Controller\ControllerTrait;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MediaController extends AbstractController implements ClassResourceInterface
{
    use ControllerTrait;

    /**
     * [GET] /media.
     */
    public function cgetAction()
    {
    }

    /**
     * [GET] /media/{slug}.
     *
     * @param $slug
     */
    public function getAction($slug)
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
