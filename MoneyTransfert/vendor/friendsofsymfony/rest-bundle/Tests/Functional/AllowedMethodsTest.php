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

namespace FOS\RestBundle\Tests\Functional;

/**
 * @author Ener-Getick <egetick@gmail.com>
 */
class AllowedMethodsTest extends WebTestCase
{
    public function testAllowHeader()
    {
        $client = $this->createClient(array('test_case' => 'AllowedMethodsListener'));
        $client->request('POST', '/allowed-methods');
        $this->assertEquals('GET, LOCK, POST, PUT', $client->getResponse()->headers->get('Allow'));
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

namespace FOS\RestBundle\Tests\Functional;

/**
 * @author Ener-Getick <egetick@gmail.com>
 */
class AllowedMethodsTest extends WebTestCase
{
    public function testAllowHeader()
    {
        $client = $this->createClient(array('test_case' => 'AllowedMethodsListener'));
        $client->request('POST', '/allowed-methods');
        $this->assertEquals('GET, LOCK, POST, PUT', $client->getResponse()->headers->get('Allow'));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
