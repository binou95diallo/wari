<<<<<<< HEAD
<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class FooOptCommand extends Command
{
    public $input;
    public $output;

    protected function configure()
    {
        $this
            ->setName('foo:bar')
            ->setDescription('The foo:bar command')
            ->setAliases(['afoobar'])
            ->addOption('fooopt', 'fo', InputOption::VALUE_OPTIONAL, 'fooopt description')
        ;
    }

    protected function interact(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('interact called');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->input = $input;
        $this->output = $output;

        $output->writeln('called');
        $output->writeln($this->input->getOption('fooopt'));
    }
}
=======
<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class FooOptCommand extends Command
{
    public $input;
    public $output;

    protected function configure()
    {
        $this
            ->setName('foo:bar')
            ->setDescription('The foo:bar command')
            ->setAliases(['afoobar'])
            ->addOption('fooopt', 'fo', InputOption::VALUE_OPTIONAL, 'fooopt description')
        ;
    }

    protected function interact(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('interact called');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->input = $input;
        $this->output = $output;

        $output->writeln('called');
        $output->writeln($this->input->getOption('fooopt'));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
