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

namespace Symfony\Component\Routing\Tests\Fixtures;

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCompiler;

class CustomRouteCompiler extends RouteCompiler
{
    /**
     * {@inheritdoc}
     */
    public static function compile(Route $route)
    {
        return new CustomCompiledRoute('', '', [], []);
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

namespace Symfony\Component\Routing\Tests\Fixtures;

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCompiler;

class CustomRouteCompiler extends RouteCompiler
{
    /**
     * {@inheritdoc}
     */
    public static function compile(Route $route)
    {
        return new CustomCompiledRoute('', '', [], []);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
