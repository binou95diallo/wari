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

namespace Symfony\Bundle\FrameworkBundle\Templating\Helper;

@trigger_error('The '.RequestHelper::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Templating\Helper\Helper;

/**
 * RequestHelper provides access to the current request parameters.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class RequestHelper extends Helper
{
    protected $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    /**
     * Returns a parameter from the current request object.
     *
     * @param string $key     The name of the parameter
     * @param string $default A default value
     *
     * @return mixed
     *
     * @see Request::get()
     */
    public function getParameter($key, $default = null)
    {
        return $this->getRequest()->get($key, $default);
    }

    /**
     * Returns the locale.
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->getRequest()->getLocale();
    }

    private function getRequest()
    {
        if (!$this->requestStack->getCurrentRequest()) {
            throw new \LogicException('A Request must be available.');
        }

        return $this->requestStack->getCurrentRequest();
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'request';
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

namespace Symfony\Bundle\FrameworkBundle\Templating\Helper;

@trigger_error('The '.RequestHelper::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Templating\Helper\Helper;

/**
 * RequestHelper provides access to the current request parameters.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class RequestHelper extends Helper
{
    protected $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    /**
     * Returns a parameter from the current request object.
     *
     * @param string $key     The name of the parameter
     * @param string $default A default value
     *
     * @return mixed
     *
     * @see Request::get()
     */
    public function getParameter($key, $default = null)
    {
        return $this->getRequest()->get($key, $default);
    }

    /**
     * Returns the locale.
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->getRequest()->getLocale();
    }

    private function getRequest()
    {
        if (!$this->requestStack->getCurrentRequest()) {
            throw new \LogicException('A Request must be available.');
        }

        return $this->requestStack->getCurrentRequest();
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'request';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
