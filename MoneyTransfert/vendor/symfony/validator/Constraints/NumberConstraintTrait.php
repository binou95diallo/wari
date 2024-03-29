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

use Symfony\Component\Validator\Exception\ConstraintDefinitionException;

/**
 * @author Jan Schädlich <jan.schaedlich@sensiolabs.de>
 */
trait NumberConstraintTrait
{
    private function configureNumberConstraintOptions($options): array
    {
        if (null === $options) {
            $options = [];
        } elseif (!\is_array($options)) {
            $options = [$this->getDefaultOption() => $options];
        }

        if (isset($options['propertyPath'])) {
            throw new ConstraintDefinitionException(sprintf('The "propertyPath" option of the "%s" constraint cannot be set.', \get_class($this)));
        }

        if (isset($options['value'])) {
            throw new ConstraintDefinitionException(sprintf('The "value" option of the "%s" constraint cannot be set.', \get_class($this)));
        }

        $options['value'] = 0;

        return $options;
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

use Symfony\Component\Validator\Exception\ConstraintDefinitionException;

/**
 * @author Jan Schädlich <jan.schaedlich@sensiolabs.de>
 */
trait NumberConstraintTrait
{
    private function configureNumberConstraintOptions($options): array
    {
        if (null === $options) {
            $options = [];
        } elseif (!\is_array($options)) {
            $options = [$this->getDefaultOption() => $options];
        }

        if (isset($options['propertyPath'])) {
            throw new ConstraintDefinitionException(sprintf('The "propertyPath" option of the "%s" constraint cannot be set.', \get_class($this)));
        }

        if (isset($options['value'])) {
            throw new ConstraintDefinitionException(sprintf('The "value" option of the "%s" constraint cannot be set.', \get_class($this)));
        }

        $options['value'] = 0;

        return $options;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
