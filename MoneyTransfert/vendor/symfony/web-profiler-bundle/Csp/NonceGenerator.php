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

namespace Symfony\Bundle\WebProfilerBundle\Csp;

/**
 * Generates Content-Security-Policy nonce.
 *
 * @author Romain Neutron <imprec@gmail.com>
 *
 * @internal
 */
class NonceGenerator
{
    public function generate()
    {
        return bin2hex(random_bytes(16));
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

namespace Symfony\Bundle\WebProfilerBundle\Csp;

/**
 * Generates Content-Security-Policy nonce.
 *
 * @author Romain Neutron <imprec@gmail.com>
 *
 * @internal
 */
class NonceGenerator
{
    public function generate()
    {
        return bin2hex(random_bytes(16));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
