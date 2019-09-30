<<<<<<< HEAD
<?php
class class_with_multiple_anonymous_classes_and_functions
{
    public function m()
    {
        $c = new class {
            public function n() {
                return true;
            }
        };

        $d = new class {
            public function o() {
                return false;
            }
        };

        $f = function ($a, $b) {
            return $a + $b;
        };

        $g = function ($a, $b) {
            return $a - $b;
        };
    }
=======
<?php
class class_with_multiple_anonymous_classes_and_functions
{
    public function m()
    {
        $c = new class {
            public function n() {
                return true;
            }
        };

        $d = new class {
            public function o() {
                return false;
            }
        };

        $f = function ($a, $b) {
            return $a + $b;
        };

        $g = function ($a, $b) {
            return $a - $b;
        };
    }
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
}