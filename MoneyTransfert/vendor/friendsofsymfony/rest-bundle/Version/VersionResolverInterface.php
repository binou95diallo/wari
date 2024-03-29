<<<<<<< HEAD
<?php

/*
 * This file is part of the FOSRestBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\RestBundle\Version;

use Symfony\Component\HttpFoundation\Request;

/**
 * @author Ener-Getick <egetick@gmail.com>
 */
interface VersionResolverInterface
{
    /**
     * Resolves the version of a request.
     *
     * @param Request $request
     *
     * @return scalar|false Current version or false if not resolved
     */
    public function resolve(Request $request);
}
=======
<?php

/*
 * This file is part of the FOSRestBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\RestBundle\Version;

use Symfony\Component\HttpFoundation\Request;

/**
 * @author Ener-Getick <egetick@gmail.com>
 */
interface VersionResolverInterface
{
    /**
     * Resolves the version of a request.
     *
     * @param Request $request
     *
     * @return scalar|false Current version or false if not resolved
     */
    public function resolve(Request $request);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
