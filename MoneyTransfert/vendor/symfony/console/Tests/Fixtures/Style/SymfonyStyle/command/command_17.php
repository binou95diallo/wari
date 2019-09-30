<<<<<<< HEAD
<?php

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

//Ensure symfony style helper methods handle trailing backslashes properly when decorating user texts
return function (InputInterface $input, OutputInterface $output) {
    $output = new SymfonyStyle($input, $output);

    $output->title('Title ending with \\');
    $output->section('Section ending with \\');
};
=======
<?php

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

//Ensure symfony style helper methods handle trailing backslashes properly when decorating user texts
return function (InputInterface $input, OutputInterface $output) {
    $output = new SymfonyStyle($input, $output);

    $output->title('Title ending with \\');
    $output->section('Section ending with \\');
};
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
