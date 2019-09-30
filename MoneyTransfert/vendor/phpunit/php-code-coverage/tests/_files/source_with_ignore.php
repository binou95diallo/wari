<<<<<<< HEAD
<?php
if ($neverHappens) {
    // @codeCoverageIgnoreStart
    print '*';
    // @codeCoverageIgnoreEnd
}

/**
 * @codeCoverageIgnore
 */
class Foo
{
    public function bar()
    {
    }
}

class Bar
{
    /**
     * @codeCoverageIgnore
     */
    public function foo()
    {
    }
}

function baz()
{
    print '*'; // @codeCoverageIgnore
}

interface Bor
{
    public function foo();

}
=======
<?php
if ($neverHappens) {
    // @codeCoverageIgnoreStart
    print '*';
    // @codeCoverageIgnoreEnd
}

/**
 * @codeCoverageIgnore
 */
class Foo
{
    public function bar()
    {
    }
}

class Bar
{
    /**
     * @codeCoverageIgnore
     */
    public function foo()
    {
    }
}

function baz()
{
    print '*'; // @codeCoverageIgnore
}

interface Bor
{
    public function foo();

}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
