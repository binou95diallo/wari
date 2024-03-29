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

namespace Symfony\Component\Form\Extension\HttpFoundation;

use Symfony\Component\Form\AbstractExtension;

/**
 * Integrates the HttpFoundation component with the Form library.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class HttpFoundationExtension extends AbstractExtension
{
    protected function loadTypeExtensions()
    {
        return [
            new Type\FormTypeHttpFoundationExtension(),
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

namespace Symfony\Component\Form\Extension\HttpFoundation;

use Symfony\Component\Form\AbstractExtension;

/**
 * Integrates the HttpFoundation component with the Form library.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class HttpFoundationExtension extends AbstractExtension
{
    protected function loadTypeExtensions()
    {
        return [
            new Type\FormTypeHttpFoundationExtension(),
        ];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
