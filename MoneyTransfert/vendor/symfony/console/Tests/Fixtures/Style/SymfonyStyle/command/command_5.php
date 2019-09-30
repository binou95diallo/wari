<<<<<<< HEAD
<?php

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

//Ensure has proper line ending before outputting a text block like with SymfonyStyle::listing() or SymfonyStyle::text()
return function (InputInterface $input, OutputInterface $output) {
    $output = new SymfonyStyle($input, $output);

    $output->writeln('Lorem ipsum dolor sit amet');
    $output->listing([
        'Lorem ipsum dolor sit amet',
        'consectetur adipiscing elit',
    ]);

    //Even using write:
    $output->write('Lorem ipsum dolor sit amet');
    $output->listing([
        'Lorem ipsum dolor sit amet',
        'consectetur adipiscing elit',
    ]);

    $output->write('Lorem ipsum dolor sit amet');
    $output->text([
        'Lorem ipsum dolor sit amet',
        'consectetur adipiscing elit',
    ]);

    $output->newLine();

    $output->write('Lorem ipsum dolor sit amet');
    $output->comment([
        'Lorem ipsum dolor sit amet',
        'consectetur adipiscing elit',
    ]);
};
=======
<?php

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

//Ensure has proper line ending before outputting a text block like with SymfonyStyle::listing() or SymfonyStyle::text()
return function (InputInterface $input, OutputInterface $output) {
    $output = new SymfonyStyle($input, $output);

    $output->writeln('Lorem ipsum dolor sit amet');
    $output->listing([
        'Lorem ipsum dolor sit amet',
        'consectetur adipiscing elit',
    ]);

    //Even using write:
    $output->write('Lorem ipsum dolor sit amet');
    $output->listing([
        'Lorem ipsum dolor sit amet',
        'consectetur adipiscing elit',
    ]);

    $output->write('Lorem ipsum dolor sit amet');
    $output->text([
        'Lorem ipsum dolor sit amet',
        'consectetur adipiscing elit',
    ]);

    $output->newLine();

    $output->write('Lorem ipsum dolor sit amet');
    $output->comment([
        'Lorem ipsum dolor sit amet',
        'consectetur adipiscing elit',
    ]);
};
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
