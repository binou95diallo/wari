<<<<<<< HEAD
<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FoobarCommand extends Command
{
    public $input;
    public $output;

    protected function configure()
    {
        $this
            ->setName('foobar:foo')
            ->setDescription('The foobar:foo command')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->input = $input;
        $this->output = $output;
    }
}
=======
<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FoobarCommand extends Command
{
    public $input;
    public $output;

    protected function configure()
    {
        $this
            ->setName('foobar:foo')
            ->setDescription('The foobar:foo command')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->input = $input;
        $this->output = $output;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
