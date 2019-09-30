<<<<<<< HEAD
<?php
interface foo {
}

class class_with_method_that_declares_anonymous_class
{
    public function method()
    {
        $o = new class { public function foo() {} };
        $o = new class{public function foo(){}};
        $o = new class extends stdClass {};
        $o = new class extends stdClass {};
        $o = new class implements foo {};
    }
}
=======
<?php
interface foo {
}

class class_with_method_that_declares_anonymous_class
{
    public function method()
    {
        $o = new class { public function foo() {} };
        $o = new class{public function foo(){}};
        $o = new class extends stdClass {};
        $o = new class extends stdClass {};
        $o = new class implements foo {};
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
