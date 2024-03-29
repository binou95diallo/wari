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

namespace Symfony\Bundle\FrameworkBundle\Routing;

use Symfony\Component\Routing\Matcher\CompiledUrlMatcher;
use Symfony\Component\Routing\Matcher\RedirectableUrlMatcherInterface;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
class RedirectableCompiledUrlMatcher extends CompiledUrlMatcher implements RedirectableUrlMatcherInterface
{
    /**
     * {@inheritdoc}
     */
    public function redirect($path, $route, $scheme = null)
    {
        return [
            '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',
            'path' => $path,
            'permanent' => true,
            'scheme' => $scheme,
            'httpPort' => $this->context->getHttpPort(),
            'httpsPort' => $this->context->getHttpsPort(),
            '_route' => $route,
        ];
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

namespace Symfony\Bundle\FrameworkBundle\Routing;

use Symfony\Component\Routing\Matcher\CompiledUrlMatcher;
use Symfony\Component\Routing\Matcher\RedirectableUrlMatcherInterface;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @internal
 */
class RedirectableCompiledUrlMatcher extends CompiledUrlMatcher implements RedirectableUrlMatcherInterface
{
    /**
     * {@inheritdoc}
     */
    public function redirect($path, $route, $scheme = null)
    {
        return [
            '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',
            'path' => $path,
            'permanent' => true,
            'scheme' => $scheme,
            'httpPort' => $this->context->getHttpPort(),
            'httpsPort' => $this->context->getHttpsPort(),
            '_route' => $route,
        ];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
