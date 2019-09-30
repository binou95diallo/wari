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
class ClassThatImplementsSerializable implements Serializable
{
    public function serialize()
    {
        return \get_object_vars($this);
    }

    public function unserialize($serialized): void
    {
        foreach (\unserialize($serialized) as $key => $value) {
            $this->{$key} = $value;
        }
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
class ClassThatImplementsSerializable implements Serializable
{
    public function serialize()
    {
        return \get_object_vars($this);
    }

    public function unserialize($serialized): void
    {
        foreach (\unserialize($serialized) as $key => $value) {
            $this->{$key} = $value;
        }
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
