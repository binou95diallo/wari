<<<<<<< HEAD
<?php

class ComposerLoaderFake
{
    public function getPrefixes()
    {
        return [];
    }

    public function getPrefixesPsr4()
    {
        return [];
    }
}

class ComposerAutoloaderInitFake
{
    public static function getLoader()
    {
        return new ComposerLoaderFake();
    }
}
=======
<?php

class ComposerLoaderFake
{
    public function getPrefixes()
    {
        return [];
    }

    public function getPrefixesPsr4()
    {
        return [];
    }
}

class ComposerAutoloaderInitFake
{
    public static function getLoader()
    {
        return new ComposerLoaderFake();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
