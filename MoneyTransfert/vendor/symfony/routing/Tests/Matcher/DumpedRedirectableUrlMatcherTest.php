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

namespace Symfony\Component\Routing\Tests\Matcher;

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherDumper;
use Symfony\Component\Routing\Matcher\RedirectableUrlMatcherInterface;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;

/**
 * @group legacy
 */
class DumpedRedirectableUrlMatcherTest extends RedirectableUrlMatcherTest
{
    protected function getUrlMatcher(RouteCollection $routes, RequestContext $context = null)
    {
        static $i = 0;

        $class = 'DumpedRedirectableUrlMatcher'.++$i;
        $dumper = new PhpMatcherDumper($routes);
        eval('?>'.$dumper->dump(['class' => $class, 'base_class' => 'Symfony\Component\Routing\Tests\Matcher\TestDumpedRedirectableUrlMatcher']));

        return $this->getMockBuilder($class)
            ->setConstructorArgs([$context ?: new RequestContext()])
            ->setMethods(['redirect'])
            ->getMock();
    }
}

class TestDumpedRedirectableUrlMatcher extends UrlMatcher implements RedirectableUrlMatcherInterface
{
    public function redirect($path, $route, $scheme = null)
    {
        return [];
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

namespace Symfony\Component\Routing\Tests\Matcher;

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherDumper;
use Symfony\Component\Routing\Matcher\RedirectableUrlMatcherInterface;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;

/**
 * @group legacy
 */
class DumpedRedirectableUrlMatcherTest extends RedirectableUrlMatcherTest
{
    protected function getUrlMatcher(RouteCollection $routes, RequestContext $context = null)
    {
        static $i = 0;

        $class = 'DumpedRedirectableUrlMatcher'.++$i;
        $dumper = new PhpMatcherDumper($routes);
        eval('?>'.$dumper->dump(['class' => $class, 'base_class' => 'Symfony\Component\Routing\Tests\Matcher\TestDumpedRedirectableUrlMatcher']));

        return $this->getMockBuilder($class)
            ->setConstructorArgs([$context ?: new RequestContext()])
            ->setMethods(['redirect'])
            ->getMock();
    }
}

class TestDumpedRedirectableUrlMatcher extends UrlMatcher implements RedirectableUrlMatcherInterface
{
    public function redirect($path, $route, $scheme = null)
    {
        return [];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
