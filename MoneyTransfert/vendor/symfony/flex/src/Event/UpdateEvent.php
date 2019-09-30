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

namespace Symfony\Flex\Event;

use Composer\Script\Event;

class UpdateEvent extends Event
{
    private $force;

    public function __construct(bool $force)
    {
        $this->force = $force;
    }

    public function force(): bool
    {
        return $this->force;
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

namespace Symfony\Flex\Event;

use Composer\Script\Event;

class UpdateEvent extends Event
{
    private $force;

    public function __construct(bool $force)
    {
        $this->force = $force;
    }

    public function force(): bool
    {
        return $this->force;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
