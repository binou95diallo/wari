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
 * @Annotation
 * @Target({"PROPERTY", "METHOD", "ANNOTATION"})
 *
 * @author Jan Schädlich <jan.schaedlich@sensiolabs.de>
 */
class Positive extends GreaterThan
{
    use NumberConstraintTrait;

    public $message = 'This value should be positive.';

    public function __construct($options = null)
    {
        parent::__construct($this->configureNumberConstraintOptions($options));
    }

    public function validatedBy(): string
    {
        return GreaterThanValidator::class;
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
 * @Annotation
 * @Target({"PROPERTY", "METHOD", "ANNOTATION"})
 *
 * @author Jan Schädlich <jan.schaedlich@sensiolabs.de>
 */
class Positive extends GreaterThan
{
    use NumberConstraintTrait;

    public $message = 'This value should be positive.';

    public function __construct($options = null)
    {
        parent::__construct($this->configureNumberConstraintOptions($options));
    }

    public function validatedBy(): string
    {
        return GreaterThanValidator::class;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
