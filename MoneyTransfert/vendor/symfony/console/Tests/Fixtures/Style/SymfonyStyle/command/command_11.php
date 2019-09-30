<<<<<<< HEAD
<?php

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

// ensure long words are properly wrapped in blocks
return function (InputInterface $input, OutputInterface $output) {
    $word = 'Lopadotemachoselachogaleokranioleipsanodrimhypotrimmatosilphioparaomelitokatakechymenokichlepikossyphophattoperisteralektryonoptekephalliokigklopeleiolagoiosiraiobaphetraganopterygon';
    $sfStyle = new SymfonyStyle($input, $output);
    $sfStyle->block($word, 'CUSTOM', 'fg=white;bg=blue', ' § ', false);
};
=======
<?php

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

// ensure long words are properly wrapped in blocks
return function (InputInterface $input, OutputInterface $output) {
    $word = 'Lopadotemachoselachogaleokranioleipsanodrimhypotrimmatosilphioparaomelitokatakechymenokichlepikossyphophattoperisteralektryonoptekephalliokigklopeleiolagoiosiraiobaphetraganopterygon';
    $sfStyle = new SymfonyStyle($input, $output);
    $sfStyle->block($word, 'CUSTOM', 'fg=white;bg=blue', ' § ', false);
};
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
