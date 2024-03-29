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

namespace Symfony\Component\Form\Tests\Fixtures;

/**
 * This class is a hand written simplified version of PHP native `ArrayObject`
 * class, to show that it behaves differently than the PHP native implementation.
 */
class CustomArrayObject implements \ArrayAccess, \IteratorAggregate, \Countable, \Serializable
{
    private $array;

    public function __construct(array $array = null)
    {
        $this->array = $array ?: [];
    }

    public function offsetExists($offset)
    {
        return \array_key_exists($offset, $this->array);
    }

    public function offsetGet($offset)
    {
        return $this->array[$offset];
    }

    public function offsetSet($offset, $value)
    {
        if (null === $offset) {
            $this->array[] = $value;
        } else {
            $this->array[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->array[$offset]);
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->array);
    }

    public function count()
    {
        return \count($this->array);
    }

    public function __serialize(): array
    {
        return $this->array;
    }

    public function serialize()
    {
        return serialize($this->__serialize());
    }

    public function __unserialize(array $data): void
    {
        $this->array = $data;
    }

    public function unserialize($serialized)
    {
        $this->__unserialize((array) unserialize((string) $serialized));
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

namespace Symfony\Component\Form\Tests\Fixtures;

/**
 * This class is a hand written simplified version of PHP native `ArrayObject`
 * class, to show that it behaves differently than the PHP native implementation.
 */
class CustomArrayObject implements \ArrayAccess, \IteratorAggregate, \Countable, \Serializable
{
    private $array;

    public function __construct(array $array = null)
    {
        $this->array = $array ?: [];
    }

    public function offsetExists($offset)
    {
        return \array_key_exists($offset, $this->array);
    }

    public function offsetGet($offset)
    {
        return $this->array[$offset];
    }

    public function offsetSet($offset, $value)
    {
        if (null === $offset) {
            $this->array[] = $value;
        } else {
            $this->array[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->array[$offset]);
    }

    public function getIterator()
    {
        return new \ArrayIterator($this->array);
    }

    public function count()
    {
        return \count($this->array);
    }

    public function __serialize(): array
    {
        return $this->array;
    }

    public function serialize()
    {
        return serialize($this->__serialize());
    }

    public function __unserialize(array $data): void
    {
        $this->array = $data;
    }

    public function unserialize($serialized)
    {
        $this->__unserialize((array) unserialize((string) $serialized));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
