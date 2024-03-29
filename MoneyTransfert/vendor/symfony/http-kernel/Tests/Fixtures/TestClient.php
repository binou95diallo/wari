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

namespace Symfony\Component\HttpKernel\Tests\Fixtures;

use Symfony\Component\HttpKernel\HttpKernelBrowser;

class TestClient extends HttpKernelBrowser
{
    protected function getScript($request)
    {
        $script = parent::getScript($request);

        $autoload = file_exists(__DIR__.'/../../vendor/autoload.php')
            ? __DIR__.'/../../vendor/autoload.php'
            : __DIR__.'/../../../../../../vendor/autoload.php'
        ;

        $script = preg_replace('/(\->register\(\);)/', "$0\nrequire_once '$autoload';\n", $script);

        return $script;
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

namespace Symfony\Component\HttpKernel\Tests\Fixtures;

use Symfony\Component\HttpKernel\HttpKernelBrowser;

class TestClient extends HttpKernelBrowser
{
    protected function getScript($request)
    {
        $script = parent::getScript($request);

        $autoload = file_exists(__DIR__.'/../../vendor/autoload.php')
            ? __DIR__.'/../../vendor/autoload.php'
            : __DIR__.'/../../../../../../vendor/autoload.php'
        ;

        $script = preg_replace('/(\->register\(\);)/', "$0\nrequire_once '$autoload';\n", $script);

        return $script;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
