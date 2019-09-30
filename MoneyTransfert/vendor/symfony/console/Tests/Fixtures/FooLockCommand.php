<<<<<<< HEAD
<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Command\LockableTrait;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FooLockCommand extends Command
{
    use LockableTrait;

    protected function configure()
    {
        $this->setName('foo:lock');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if (!$this->lock()) {
            return 1;
        }

        $this->release();

        return 2;
    }
}
=======
<?php

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Command\LockableTrait;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FooLockCommand extends Command
{
    use LockableTrait;

    protected function configure()
    {
        $this->setName('foo:lock');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if (!$this->lock()) {
            return 1;
        }

        $this->release();

        return 2;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
