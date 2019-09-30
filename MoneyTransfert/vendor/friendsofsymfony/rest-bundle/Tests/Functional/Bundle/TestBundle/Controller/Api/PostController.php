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

namespace FOS\RestBundle\Tests\Functional\Bundle\TestBundle\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;

class PostController
{
    public function getPostAction($id)
    {
        return new JsonResponse(array('id' => (int) $id));
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

namespace FOS\RestBundle\Tests\Functional\Bundle\TestBundle\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;

class PostController
{
    public function getPostAction($id)
    {
        return new JsonResponse(array('id' => (int) $id));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
