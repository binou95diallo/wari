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

namespace Symfony\Component\Security\Http\Logout;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\HttpUtils;

/**
 * Default logout success handler will redirect users to a configured path.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Alexander <iam.asm89@gmail.com>
 */
class DefaultLogoutSuccessHandler implements LogoutSuccessHandlerInterface
{
    protected $httpUtils;
    protected $targetUrl;

    public function __construct(HttpUtils $httpUtils, string $targetUrl = '/')
    {
        $this->httpUtils = $httpUtils;
        $this->targetUrl = $targetUrl;
    }

    /**
     * {@inheritdoc}
     */
    public function onLogoutSuccess(Request $request)
    {
        return $this->httpUtils->createRedirectResponse($request, $this->targetUrl);
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

namespace Symfony\Component\Security\Http\Logout;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\HttpUtils;

/**
 * Default logout success handler will redirect users to a configured path.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Alexander <iam.asm89@gmail.com>
 */
class DefaultLogoutSuccessHandler implements LogoutSuccessHandlerInterface
{
    protected $httpUtils;
    protected $targetUrl;

    public function __construct(HttpUtils $httpUtils, string $targetUrl = '/')
    {
        $this->httpUtils = $httpUtils;
        $this->targetUrl = $targetUrl;
    }

    /**
     * {@inheritdoc}
     */
    public function onLogoutSuccess(Request $request)
    {
        return $this->httpUtils->createRedirectResponse($request, $this->targetUrl);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
