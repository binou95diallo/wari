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

use Symfony\Component\Intl\Locales;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\LogicException;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;
use Symfony\Component\Validator\Exception\UnexpectedValueException;

/**
 * Validates whether a value is a valid locale code.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class LocaleValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof Locale) {
            throw new UnexpectedTypeException($constraint, __NAMESPACE__.'\Locale');
        }

        if (null === $value || '' === $value) {
            return;
        }

        if (!is_scalar($value) && !(\is_object($value) && method_exists($value, '__toString'))) {
            throw new UnexpectedValueException($value, 'string');
        }

        if (!class_exists(Locales::class)) {
            throw new LogicException('The Intl component is required to use the Locale constraint. Try running "composer require symfony/intl".');
        }

        $inputValue = (string) $value;
        $value = $inputValue;
        if ($constraint->canonicalize) {
            $value = \Locale::canonicalize($value);
        }

        if (!Locales::exists($value)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $this->formatValue($inputValue))
                ->setCode(Locale::NO_SUCH_LOCALE_ERROR)
                ->addViolation();
        }
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

use Symfony\Component\Intl\Locales;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\LogicException;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;
use Symfony\Component\Validator\Exception\UnexpectedValueException;

/**
 * Validates whether a value is a valid locale code.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class LocaleValidator extends ConstraintValidator
{
    /**
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof Locale) {
            throw new UnexpectedTypeException($constraint, __NAMESPACE__.'\Locale');
        }

        if (null === $value || '' === $value) {
            return;
        }

        if (!is_scalar($value) && !(\is_object($value) && method_exists($value, '__toString'))) {
            throw new UnexpectedValueException($value, 'string');
        }

        if (!class_exists(Locales::class)) {
            throw new LogicException('The Intl component is required to use the Locale constraint. Try running "composer require symfony/intl".');
        }

        $inputValue = (string) $value;
        $value = $inputValue;
        if ($constraint->canonicalize) {
            $value = \Locale::canonicalize($value);
        }

        if (!Locales::exists($value)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $this->formatValue($inputValue))
                ->setCode(Locale::NO_SUCH_LOCALE_ERROR)
                ->addViolation();
        }
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
