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

namespace Symfony\Component\Validator;

/**
 * Prepares an object for validation.
 *
 * Concrete implementations of this interface are used by {@link Validator\ContextualValidatorInterface}
 * to initialize objects just before validating them.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface ObjectInitializerInterface
{
    /**
     * Initializes an object just before validation.
     *
     * @param object $object The object to validate
     */
    public function initialize($object);
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

namespace Symfony\Component\Validator;

/**
 * Prepares an object for validation.
 *
 * Concrete implementations of this interface are used by {@link Validator\ContextualValidatorInterface}
 * to initialize objects just before validating them.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface ObjectInitializerInterface
{
    /**
     * Initializes an object just before validation.
     *
     * @param object $object The object to validate
     */
    public function initialize($object);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
