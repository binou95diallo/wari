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

namespace Symfony\Component\Validator\Tests\Fixtures;

use Symfony\Component\Validator\Constraint;

/** @Annotation */
class ConstraintWithValueAsDefault extends Constraint
{
    public $property;
    public $value;

    public function getDefaultOption()
    {
        return 'value';
    }

    public function getTargets()
    {
        return [self::PROPERTY_CONSTRAINT, self::CLASS_CONSTRAINT];
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

namespace Symfony\Component\Validator\Tests\Fixtures;

use Symfony\Component\Validator\Constraint;

/** @Annotation */
class ConstraintWithValueAsDefault extends Constraint
{
    public $property;
    public $value;

    public function getDefaultOption()
    {
        return 'value';
    }

    public function getTargets()
    {
        return [self::PROPERTY_CONSTRAINT, self::CLASS_CONSTRAINT];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
