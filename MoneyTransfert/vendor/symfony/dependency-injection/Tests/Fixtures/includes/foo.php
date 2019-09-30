<<<<<<< HEAD
<?php

namespace Bar;

class FooClass
{
    public $foo;
    public $moo;

    public $bar = null;
    public $initialized = false;
    public $configured = false;
    public $called = false;
    public $arguments = [];

    public function __construct($arguments = [])
    {
        $this->arguments = $arguments;
    }

    public static function getInstance($arguments = [])
    {
        $obj = new self($arguments);
        $obj->called = true;

        return $obj;
    }

    public function initialize()
    {
        $this->initialized = true;
    }

    public function configure()
    {
        $this->configured = true;
    }

    public function setBar($value = null)
    {
        $this->bar = $value;
    }
}
=======
<?php

namespace Bar;

class FooClass
{
    public $foo;
    public $moo;

    public $bar = null;
    public $initialized = false;
    public $configured = false;
    public $called = false;
    public $arguments = [];

    public function __construct($arguments = [])
    {
        $this->arguments = $arguments;
    }

    public static function getInstance($arguments = [])
    {
        $obj = new self($arguments);
        $obj->called = true;

        return $obj;
    }

    public function initialize()
    {
        $this->initialized = true;
    }

    public function configure()
    {
        $this->configured = true;
    }

    public function setBar($value = null)
    {
        $this->bar = $value;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
