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
class Issue2731Test extends PHPUnit\Framework\TestCase
{
    public function testOne(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('');

        throw new Exception('message');
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
class Issue2731Test extends PHPUnit\Framework\TestCase
{
    public function testOne(): void
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('');

        throw new Exception('message');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
