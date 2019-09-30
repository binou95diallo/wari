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

namespace Symfony\Component\PropertyAccess\Tests\Fixtures;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class ReturnTyped
{
    public function getFoos(): array
    {
        return 'It doesn\'t respect the return type on purpose';
    }

    public function addFoo(\DateTime $dateTime)
    {
    }

    public function removeFoo(\DateTime $dateTime)
    {
    }

    public function setName($name): self
    {
        return 'This does not respect the return type on purpose.';
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

namespace Symfony\Component\PropertyAccess\Tests\Fixtures;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class ReturnTyped
{
    public function getFoos(): array
    {
        return 'It doesn\'t respect the return type on purpose';
    }

    public function addFoo(\DateTime $dateTime)
    {
    }

    public function removeFoo(\DateTime $dateTime)
    {
    }

    public function setName($name): self
    {
        return 'This does not respect the return type on purpose.';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
