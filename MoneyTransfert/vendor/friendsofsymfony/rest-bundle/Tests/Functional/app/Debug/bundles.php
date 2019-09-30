<?php

/*
 * This file is part of the FOSRestBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return array(
    new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
    new \JMS\SerializerBundle\JMSSerializerBundle(),
    new \FOS\RestBundle\FOSRestBundle(),
    new \FOS\RestBundle\Tests\Functional\Bundle\TestBundle\TestBundle(),
);
