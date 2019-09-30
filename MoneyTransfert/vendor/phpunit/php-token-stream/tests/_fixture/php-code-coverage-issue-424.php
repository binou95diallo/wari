<<<<<<< HEAD
<?php

class Example
{
    public function even($numbers)
    {
        $numbers = array_filter($numbers, function($number) {
            return $number % 2 === 0;
        });

        return array_merge($numbers);
    }
=======
<?php

class Example
{
    public function even($numbers)
    {
        $numbers = array_filter($numbers, function($number) {
            return $number % 2 === 0;
        });

        return array_merge($numbers);
    }
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
}