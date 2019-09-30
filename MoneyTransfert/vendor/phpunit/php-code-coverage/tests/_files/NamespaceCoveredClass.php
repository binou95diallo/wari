<<<<<<< HEAD
<?php
namespace Foo;

class CoveredParentClass
{
    private function privateMethod()
    {
    }

    protected function protectedMethod()
    {
        $this->privateMethod();
    }

    public function publicMethod()
    {
        $this->protectedMethod();
    }
}

class CoveredClass extends CoveredParentClass
{
    private function privateMethod()
    {
    }

    protected function protectedMethod()
    {
        parent::protectedMethod();
        $this->privateMethod();
    }

    public function publicMethod()
    {
        parent::publicMethod();
        $this->protectedMethod();
    }
}
=======
<?php
namespace Foo;

class CoveredParentClass
{
    private function privateMethod()
    {
    }

    protected function protectedMethod()
    {
        $this->privateMethod();
    }

    public function publicMethod()
    {
        $this->protectedMethod();
    }
}

class CoveredClass extends CoveredParentClass
{
    private function privateMethod()
    {
    }

    protected function protectedMethod()
    {
        parent::protectedMethod();
        $this->privateMethod();
    }

    public function publicMethod()
    {
        parent::publicMethod();
        $this->protectedMethod();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
