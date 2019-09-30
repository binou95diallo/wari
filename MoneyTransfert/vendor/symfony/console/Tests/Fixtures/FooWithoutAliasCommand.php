<<<<<<< HEAD
<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FooWithoutAliasCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('foo')
            ->setDescription('The foo command')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('called');
    }
}
=======
<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FooWithoutAliasCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('foo')
            ->setDescription('The foo command')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('called');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
