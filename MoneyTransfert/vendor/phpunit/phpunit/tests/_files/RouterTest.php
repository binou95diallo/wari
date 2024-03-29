<<<<<<< HEAD
<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use PHPUnit\Framework\TestCase;

final class RouterTest extends TestCase
{
    /**
     * @dataProvider routesProvider
     * @testdox      Routes $url to $handler
     */
    public function testRoutesRequest(string $url, string $handler): void
    {
        $this->assertTrue(true);
    }

    public function routesProvider()
    {
        return [
            '/foo/bar' => [
                '/foo/bar',
                FooBarHandler::class,
                // ...
            ],
        ];
    }
}
=======
<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use PHPUnit\Framework\TestCase;

final class RouterTest extends TestCase
{
    /**
     * @dataProvider routesProvider
     * @testdox      Routes $url to $handler
     */
    public function testRoutesRequest(string $url, string $handler): void
    {
        $this->assertTrue(true);
    }

    public function routesProvider()
    {
        return [
            '/foo/bar' => [
                '/foo/bar',
                FooBarHandler::class,
                // ...
            ],
        ];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
