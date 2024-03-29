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

namespace Symfony\Component\DependencyInjection\Tests\Fixtures;

class FactoryDummy extends FactoryParent
{
    public static function createFactory(): FactoryDummy
    {
    }

    public function create(): \stdClass
    {
    }

    public function createBuiltin(): int
    {
    }

    public static function createSelf(): self
    {
    }

    public static function createParent(): parent
    {
    }
}

class FactoryParent
{
}

function factoryFunction(): FactoryDummy
{
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

namespace Symfony\Component\DependencyInjection\Tests\Fixtures;

class FactoryDummy extends FactoryParent
{
    public static function createFactory(): FactoryDummy
    {
    }

    public function create(): \stdClass
    {
    }

    public function createBuiltin(): int
    {
    }

    public static function createSelf(): self
    {
    }

    public static function createParent(): parent
    {
    }
}

class FactoryParent
{
}

function factoryFunction(): FactoryDummy
{
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
