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
namespace Issue2972;

use PHPUnit\Framework\TestCase;

class Issue2972Test extends TestCase
{
    public function testHello(): void
    {
        $this->assertNotEmpty('Hello world!');
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
namespace Issue2972;

use PHPUnit\Framework\TestCase;

class Issue2972Test extends TestCase
{
    public function testHello(): void
    {
        $this->assertNotEmpty('Hello world!');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
