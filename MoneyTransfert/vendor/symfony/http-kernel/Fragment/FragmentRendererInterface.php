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

namespace Symfony\Component\HttpKernel\Fragment;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Controller\ControllerReference;

/**
 * Interface implemented by all rendering strategies.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface FragmentRendererInterface
{
    /**
     * Renders a URI and returns the Response content.
     *
     * @param string|ControllerReference $uri     A URI as a string or a ControllerReference instance
     * @param Request                    $request A Request instance
     * @param array                      $options An array of options
     *
     * @return Response A Response instance
     */
    public function render($uri, Request $request, array $options = []);

    /**
     * Gets the name of the strategy.
     *
     * @return string The strategy name
     */
    public function getName();
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

namespace Symfony\Component\HttpKernel\Fragment;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Controller\ControllerReference;

/**
 * Interface implemented by all rendering strategies.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface FragmentRendererInterface
{
    /**
     * Renders a URI and returns the Response content.
     *
     * @param string|ControllerReference $uri     A URI as a string or a ControllerReference instance
     * @param Request                    $request A Request instance
     * @param array                      $options An array of options
     *
     * @return Response A Response instance
     */
    public function render($uri, Request $request, array $options = []);

    /**
     * Gets the name of the strategy.
     *
     * @return string The strategy name
     */
    public function getName();
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
