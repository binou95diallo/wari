<<<<<<< HEAD
<?php

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

//Ensure has proper blank line after text block when using a block like with SymfonyStyle::success
return function (InputInterface $input, OutputInterface $output) {
    $output = new SymfonyStyle($input, $output);

    $output->listing([
        'Lorem ipsum dolor sit amet',
        'consectetur adipiscing elit',
    ]);
    $output->success('Lorem ipsum dolor sit amet');
};
=======
<?php

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

//Ensure has proper blank line after text block when using a block like with SymfonyStyle::success
return function (InputInterface $input, OutputInterface $output) {
    $output = new SymfonyStyle($input, $output);

    $output->listing([
        'Lorem ipsum dolor sit amet',
        'consectetur adipiscing elit',
    ]);
    $output->success('Lorem ipsum dolor sit amet');
};
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
