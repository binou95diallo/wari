<<<<<<< HEAD
<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestAmbiguousCommandRegistering extends Command
{
    protected function configure()
    {
        $this
            ->setName('test-ambiguous')
            ->setDescription('The test-ambiguous command')
            ->setAliases(['test'])
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->write('test-ambiguous');
    }
}
=======
<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TestAmbiguousCommandRegistering extends Command
{
    protected function configure()
    {
        $this
            ->setName('test-ambiguous')
            ->setDescription('The test-ambiguous command')
            ->setAliases(['test'])
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->write('test-ambiguous');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
