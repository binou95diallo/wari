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

namespace Symfony\Component\HttpKernel\Event;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * @deprecated since Symfony 4.3, use ViewEvent instead
 */
class GetResponseForControllerResultEvent extends RequestEvent
{
    /**
     * The return value of the controller.
     *
     * @var mixed
     */
    private $controllerResult;

    public function __construct(HttpKernelInterface $kernel, Request $request, int $requestType, $controllerResult)
    {
        parent::__construct($kernel, $request, $requestType);

        $this->controllerResult = $controllerResult;
    }

    /**
     * Returns the return value of the controller.
     *
     * @return mixed The controller return value
     */
    public function getControllerResult()
    {
        return $this->controllerResult;
    }

    /**
     * Assigns the return value of the controller.
     *
     * @param mixed $controllerResult The controller return value
     */
    public function setControllerResult($controllerResult)
    {
        $this->controllerResult = $controllerResult;
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

namespace Symfony\Component\HttpKernel\Event;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\HttpKernelInterface;

/**
 * @deprecated since Symfony 4.3, use ViewEvent instead
 */
class GetResponseForControllerResultEvent extends RequestEvent
{
    /**
     * The return value of the controller.
     *
     * @var mixed
     */
    private $controllerResult;

    public function __construct(HttpKernelInterface $kernel, Request $request, int $requestType, $controllerResult)
    {
        parent::__construct($kernel, $request, $requestType);

        $this->controllerResult = $controllerResult;
    }

    /**
     * Returns the return value of the controller.
     *
     * @return mixed The controller return value
     */
    public function getControllerResult()
    {
        return $this->controllerResult;
    }

    /**
     * Assigns the return value of the controller.
     *
     * @param mixed $controllerResult The controller return value
     */
    public function setControllerResult($controllerResult)
    {
        $this->controllerResult = $controllerResult;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
