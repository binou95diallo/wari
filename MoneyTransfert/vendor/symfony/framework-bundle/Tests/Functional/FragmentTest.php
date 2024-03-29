<<<<<<< HEAD
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\FrameworkBundle\Tests\Functional;

class FragmentTest extends WebTestCase
{
    /**
     * @dataProvider getConfigs
     */
    public function testFragment($insulate)
    {
        $client = $this->createClient(['test_case' => 'Fragment', 'root_config' => 'config.yml', 'debug' => true]);
        if ($insulate) {
            $client->insulate();
        }

        $client->request('GET', '/fragment_home');

        $this->assertEquals(<<<TXT
bar txt
--
html
--
es
--
fr
TXT
            , $client->getResponse()->getContent());
    }

    public function getConfigs()
    {
        return [
            [false],
            [true],
        ];
    }
}
=======
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\FrameworkBundle\Tests\Functional;

class FragmentTest extends WebTestCase
{
    /**
     * @dataProvider getConfigs
     */
    public function testFragment($insulate)
    {
        $client = $this->createClient(['test_case' => 'Fragment', 'root_config' => 'config.yml', 'debug' => true]);
        if ($insulate) {
            $client->insulate();
        }

        $client->request('GET', '/fragment_home');

        $this->assertEquals(<<<TXT
bar txt
--
html
--
es
--
fr
TXT
            , $client->getResponse()->getContent());
    }

    public function getConfigs()
    {
        return [
            [false],
            [true],
        ];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
