<<<<<<< HEAD
<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\MakerBundle;

use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
final class ConsoleStyle extends SymfonyStyle
{
    public function success($message)
    {
        $this->writeln('<fg=green;options=bold,underscore>OK</> '.$message);
    }

    public function comment($message)
    {
        $this->text($message);
    }
}
=======
<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\MakerBundle;

use Symfony\Component\Console\Style\SymfonyStyle;

/**
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Ryan Weaver <weaverryan@gmail.com>
 */
final class ConsoleStyle extends SymfonyStyle
{
    public function success($message)
    {
        $this->writeln('<fg=green;options=bold,underscore>OK</> '.$message);
    }

    public function comment($message)
    {
        $this->text($message);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
