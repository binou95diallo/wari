<<<<<<< HEAD
<?php
// This file is example#1
// from http://www.php.net/manual/en/function.get-included-files.php

include 'test1.php';
include_once 'test2.php';
require 'test3.php';
require_once 'test4.php';

$included_files = get_included_files();

foreach ($included_files as $filename) {
    echo "$filename\n";
}
=======
<?php
// This file is example#1
// from http://www.php.net/manual/en/function.get-included-files.php

include 'test1.php';
include_once 'test2.php';
require 'test3.php';
require_once 'test4.php';

$included_files = get_included_files();

foreach ($included_files as $filename) {
    echo "$filename\n";
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
