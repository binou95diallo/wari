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

namespace Symfony\Component\Debug\Tests;

use Symfony\Component\Debug\ExceptionHandler;

class MockExceptionHandler extends ExceptionHandler
{
    public $e;

    public function handle(\Exception $e)
    {
        $this->e = $e;
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

namespace Symfony\Component\Debug\Tests;

use Symfony\Component\Debug\ExceptionHandler;

class MockExceptionHandler extends ExceptionHandler
{
    public $e;

    public function handle(\Exception $e)
    {
        $this->e = $e;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
