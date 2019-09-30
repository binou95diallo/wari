<<<<<<< HEAD
<?php

/** Docblock */
interface FooInterface
{
    public function bar();
}

class Foo
{
    public function bar()
    {
    }
}

function baz()
{
    // a one-line comment
    print '*'; // a one-line comment

    /* a one-line comment */
    print '*'; /* a one-line comment */

    /* a one-line comment
     */
    print '*'; /* a one-line comment
    */

    print '*'; // @codeCoverageIgnore

    print '*'; // @codeCoverageIgnoreStart
    print '*';
    print '*'; // @codeCoverageIgnoreEnd

    print '*';
}
=======
<?php

/** Docblock */
interface FooInterface
{
    public function bar();
}

class Foo
{
    public function bar()
    {
    }
}

function baz()
{
    // a one-line comment
    print '*'; // a one-line comment

    /* a one-line comment */
    print '*'; /* a one-line comment */

    /* a one-line comment
     */
    print '*'; /* a one-line comment
    */

    print '*'; // @codeCoverageIgnore

    print '*'; // @codeCoverageIgnoreStart
    print '*';
    print '*'; // @codeCoverageIgnoreEnd

    print '*';
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
