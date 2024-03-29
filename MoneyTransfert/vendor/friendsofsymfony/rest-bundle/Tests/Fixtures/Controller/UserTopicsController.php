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

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserTopicsController extends AbstractController
{
    /**
     * [GET] /users/{slug}/topics.
     *
     * @param $slug
     */
    public function getTopicsAction($slug)
    {
    }

    /**
     * [GET] /users/{slug}/topics/{title}.
     *
     * @param $slug
     * @param $title
     */
    public function getTopicAction($slug, $title)
    {
    }

    /**
     * [PUT] /users/{slug}/topics/{title}.
     *
     * @param $slug
     * @param $title
     */
    public function putTopicAction($slug, $title)
    {
    }

    /**
     * [POST] /users/{slug}/topics/{title}/hide.
     *
     * @param $slug
     * @param $title
     */
    public function hideTopicAction($slug, $title)
    {
    }

    // conventional HATEOAS actions below

    /**
     * [GET] /users/{slug}/topics/new.
     *
     * @param $slug
     */
    public function newTopicsAction($slug)
    {
    }

    /**
     * [GET] /users/{slug}/topics/{title}/edit.
     *
     * @param $slug
     * @param $title
     */
    public function editTopicAction($slug, $title)
    {
    }

    /**
     * [GET] /remove/{slug}/topics/{title}/remove.
     *
     * @param $slug
     * @param $title
     */
    public function removeTopicAction($slug, $title)
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

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserTopicsController extends AbstractController
{
    /**
     * [GET] /users/{slug}/topics.
     *
     * @param $slug
     */
    public function getTopicsAction($slug)
    {
    }

    /**
     * [GET] /users/{slug}/topics/{title}.
     *
     * @param $slug
     * @param $title
     */
    public function getTopicAction($slug, $title)
    {
    }

    /**
     * [PUT] /users/{slug}/topics/{title}.
     *
     * @param $slug
     * @param $title
     */
    public function putTopicAction($slug, $title)
    {
    }

    /**
     * [POST] /users/{slug}/topics/{title}/hide.
     *
     * @param $slug
     * @param $title
     */
    public function hideTopicAction($slug, $title)
    {
    }

    // conventional HATEOAS actions below

    /**
     * [GET] /users/{slug}/topics/new.
     *
     * @param $slug
     */
    public function newTopicsAction($slug)
    {
    }

    /**
     * [GET] /users/{slug}/topics/{title}/edit.
     *
     * @param $slug
     * @param $title
     */
    public function editTopicAction($slug, $title)
    {
    }

    /**
     * [GET] /remove/{slug}/topics/{title}/remove.
     *
     * @param $slug
     * @param $title
     */
    public function removeTopicAction($slug, $title)
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
