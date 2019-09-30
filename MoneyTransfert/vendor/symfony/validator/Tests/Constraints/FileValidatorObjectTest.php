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

namespace Symfony\Component\Validator\Tests\Constraints;

use Symfony\Component\HttpFoundation\File\File;

class FileValidatorObjectTest extends FileValidatorTest
{
    protected function getFile($filename)
    {
        return new File($filename);
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

namespace Symfony\Component\Validator\Tests\Constraints;

use Symfony\Component\HttpFoundation\File\File;

class FileValidatorObjectTest extends FileValidatorTest
{
    protected function getFile($filename)
    {
        return new File($filename);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
