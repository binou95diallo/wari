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

namespace Symfony\Component\Serializer\Tests\Fixtures;

class JsonSerializableDummy implements \JsonSerializable
{
    public function jsonSerialize()
    {
        return [
            'foo' => 'a',
            'bar' => 'b',
            'baz' => 'c',
            'qux' => $this,
        ];
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

namespace Symfony\Component\Serializer\Tests\Fixtures;

class JsonSerializableDummy implements \JsonSerializable
{
    public function jsonSerialize()
    {
        return [
            'foo' => 'a',
            'bar' => 'b',
            'baz' => 'c',
            'qux' => $this,
        ];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
