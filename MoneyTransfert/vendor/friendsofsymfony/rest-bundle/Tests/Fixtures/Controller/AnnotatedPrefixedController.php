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

use FOS\RestBundle\Controller\Annotations\Prefix;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @author Donald Tyler <chekote69@gmail.com>
 * @Prefix("aprefix")
 */
class AnnotatedPrefixedController extends AbstractController
{
    /**
     * [GET]     /aprefix/something.{_format}.
     */
    public function getSomethingAction(Request $request)
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

use FOS\RestBundle\Controller\Annotations\Prefix;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

/**
 * @author Donald Tyler <chekote69@gmail.com>
 * @Prefix("aprefix")
 */
class AnnotatedPrefixedController extends AbstractController
{
    /**
     * [GET]     /aprefix/something.{_format}.
     */
    public function getSomethingAction(Request $request)
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
