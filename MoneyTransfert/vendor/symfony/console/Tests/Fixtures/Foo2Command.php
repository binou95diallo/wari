<<<<<<< HEAD
<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Foo2Command extends Command
{
    protected function configure()
    {
        $this
            ->setName('foo1:bar')
            ->setDescription('The foo1:bar command')
            ->setAliases(['afoobar2'])
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    }
}
=======
<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Foo2Command extends Command
{
    protected function configure()
    {
        $this
            ->setName('foo1:bar')
            ->setDescription('The foo1:bar command')
            ->setAliases(['afoobar2'])
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
