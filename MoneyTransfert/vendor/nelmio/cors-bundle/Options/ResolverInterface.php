<<<<<<< HEAD
<?php
/*
 * This file is part of the NelmioCorsBundle.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Nelmio\CorsBundle\Options;

use Symfony\Component\HttpFoundation\Request;

interface ResolverInterface
{
    /**
     * Returns CORS options for $path
     *
     * @param Request $request
     *
     * @internal param string $path
     *
     * @return mixed
     */
    public function getOptions(Request $request);
}
=======
<?php
/*
 * This file is part of the NelmioCorsBundle.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Nelmio\CorsBundle\Options;

use Symfony\Component\HttpFoundation\Request;

interface ResolverInterface
{
    /**
     * Returns CORS options for $path
     *
     * @param Request $request
     *
     * @internal param string $path
     *
     * @return mixed
     */
    public function getOptions(Request $request);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
