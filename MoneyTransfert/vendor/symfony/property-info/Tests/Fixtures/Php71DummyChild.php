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

namespace Symfony\Component\PropertyInfo\Tests\Fixtures;

class Php71DummyParent
{
    public $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }
}

class Php71DummyChild extends Php71DummyParent
{
    public function __construct(string $string)
    {
        parent::__construct($string);
    }
}

class Php71DummyChild2 extends Php71DummyParent
{
}

class Php71DummyChild3 extends Php71DummyParent
{
    public function __construct()
    {
        parent::__construct('hello');
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

namespace Symfony\Component\PropertyInfo\Tests\Fixtures;

class Php71DummyParent
{
    public $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }
}

class Php71DummyChild extends Php71DummyParent
{
    public function __construct(string $string)
    {
        parent::__construct($string);
    }
}

class Php71DummyChild2 extends Php71DummyParent
{
}

class Php71DummyChild3 extends Php71DummyParent
{
    public function __construct()
    {
        parent::__construct('hello');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
