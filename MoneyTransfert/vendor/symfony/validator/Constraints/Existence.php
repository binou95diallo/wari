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

namespace Symfony\Component\Validator\Constraints;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class Existence extends Composite
{
    public $constraints = [];

    public function getDefaultOption()
    {
        return 'constraints';
    }

    protected function getCompositeOption()
    {
        return 'constraints';
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

namespace Symfony\Component\Validator\Constraints;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class Existence extends Composite
{
    public $constraints = [];

    public function getDefaultOption()
    {
        return 'constraints';
    }

    protected function getCompositeOption()
    {
        return 'constraints';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
