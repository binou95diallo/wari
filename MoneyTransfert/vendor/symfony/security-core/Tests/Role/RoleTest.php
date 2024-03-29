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

namespace Symfony\Component\Security\Core\Tests\Role;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Security\Core\Role\Role;

/**
 * @group legacy
 */
class RoleTest extends TestCase
{
    public function testGetRole()
    {
        $role = new Role('FOO');

        $this->assertEquals('FOO', $role->getRole());
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

namespace Symfony\Component\Security\Core\Tests\Role;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Security\Core\Role\Role;

/**
 * @group legacy
 */
class RoleTest extends TestCase
{
    public function testGetRole()
    {
        $role = new Role('FOO');

        $this->assertEquals('FOO', $role->getRole());
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
