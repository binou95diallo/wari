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

namespace Symfony\Component\Validator\Tests\Fixtures;

use Symfony\Component\Validator\Constraints\NotNull;

class EntityParent implements EntityInterfaceA
{
    protected $firstName;
    private $internal;
    private $data = 'Data';

    /**
     * @NotNull
     */
    protected $other;

    public function getData()
    {
        return 'Data';
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

namespace Symfony\Component\Validator\Tests\Fixtures;

use Symfony\Component\Validator\Constraints\NotNull;

class EntityParent implements EntityInterfaceA
{
    protected $firstName;
    private $internal;
    private $data = 'Data';

    /**
     * @NotNull
     */
    protected $other;

    public function getData()
    {
        return 'Data';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
