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

class NotPublicTestCase extends TestCase
{
    public function testPublic(): void
    {
    }

    protected function testNotPublic(): void
    {
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

class NotPublicTestCase extends TestCase
{
    public function testPublic(): void
    {
    }

    protected function testNotPublic(): void
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
