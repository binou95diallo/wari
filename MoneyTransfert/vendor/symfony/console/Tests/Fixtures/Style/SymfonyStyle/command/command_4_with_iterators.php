<<<<<<< HEAD
<?php

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

//Ensure has single blank line after any text and a title
return function (InputInterface $input, OutputInterface $output) {
    $output = new SymfonyStyle($input, $output);

    $output->write('Lorem ipsum dolor sit amet');
    $output->title('First title');

    $output->writeln('Lorem ipsum dolor sit amet');
    $output->title('Second title');

    $output->write('Lorem ipsum dolor sit amet');
    $output->write('');
    $output->title('Third title');

    //Ensure edge case by appending empty strings to history:
    $output->write('Lorem ipsum dolor sit amet');
    $output->write(new \ArrayIterator(['', '', '']));
    $output->title('Fourth title');

    //Ensure have manual control over number of blank lines:
    $output->writeln('Lorem ipsum dolor sit amet');
    $output->writeln(new \ArrayIterator(['', ''])); //Should append an extra blank line
    $output->title('Fifth title');

    $output->writeln('Lorem ipsum dolor sit amet');
    $output->newLine(2); //Should append an extra blank line
    $output->title('Fifth title');
};
=======
<?php

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

//Ensure has single blank line after any text and a title
return function (InputInterface $input, OutputInterface $output) {
    $output = new SymfonyStyle($input, $output);

    $output->write('Lorem ipsum dolor sit amet');
    $output->title('First title');

    $output->writeln('Lorem ipsum dolor sit amet');
    $output->title('Second title');

    $output->write('Lorem ipsum dolor sit amet');
    $output->write('');
    $output->title('Third title');

    //Ensure edge case by appending empty strings to history:
    $output->write('Lorem ipsum dolor sit amet');
    $output->write(new \ArrayIterator(['', '', '']));
    $output->title('Fourth title');

    //Ensure have manual control over number of blank lines:
    $output->writeln('Lorem ipsum dolor sit amet');
    $output->writeln(new \ArrayIterator(['', ''])); //Should append an extra blank line
    $output->title('Fifth title');

    $output->writeln('Lorem ipsum dolor sit amet');
    $output->newLine(2); //Should append an extra blank line
    $output->title('Fifth title');
};
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
