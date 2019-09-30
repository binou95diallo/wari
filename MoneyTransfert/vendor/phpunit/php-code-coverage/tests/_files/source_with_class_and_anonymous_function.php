<<<<<<< HEAD
<?php

class CoveredClassWithAnonymousFunctionInStaticMethod
{
    public static function runAnonymous()
    {
        $filter = ['abc124', 'abc123', '123'];

        array_walk(
            $filter,
            function (&$val, $key) {
                $val = preg_replace('|[^0-9]|', '', $val);
            }
        );

        // Should be covered
        $extravar = true;
    }
}
=======
<?php

class CoveredClassWithAnonymousFunctionInStaticMethod
{
    public static function runAnonymous()
    {
        $filter = ['abc124', 'abc123', '123'];

        array_walk(
            $filter,
            function (&$val, $key) {
                $val = preg_replace('|[^0-9]|', '', $val);
            }
        );

        // Should be covered
        $extravar = true;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
