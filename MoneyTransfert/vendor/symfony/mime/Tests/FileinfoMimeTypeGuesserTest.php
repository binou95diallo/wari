<<<<<<< HEAD
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mime\Tests;

use Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use Symfony\Component\Mime\MimeTypeGuesserInterface;

/**
 * @requires extension fileinfo
 */
class FileinfoMimeTypeGuesserTest extends AbstractMimeTypeGuesserTest
{
    protected function getGuesser(): MimeTypeGuesserInterface
    {
        return new FileinfoMimeTypeGuesser();
    }
}
=======
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mime\Tests;

use Symfony\Component\Mime\FileinfoMimeTypeGuesser;
use Symfony\Component\Mime\MimeTypeGuesserInterface;

/**
 * @requires extension fileinfo
 */
class FileinfoMimeTypeGuesserTest extends AbstractMimeTypeGuesserTest
{
    protected function getGuesser(): MimeTypeGuesserInterface
    {
        return new FileinfoMimeTypeGuesser();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
