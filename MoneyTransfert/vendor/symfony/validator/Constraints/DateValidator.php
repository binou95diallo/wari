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

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;
use Symfony\Component\Validator\Exception\UnexpectedValueException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class DateValidator extends ConstraintValidator
{
    const PATTERN = '/^(\d{4})-(\d{2})-(\d{2})$/';

    /**
     * Checks whether a date is valid.
     *
     * @param int $year  The year
     * @param int $month The month
     * @param int $day   The day
     *
     * @return bool Whether the date is valid
     *
     * @internal
     */
    public static function checkDate($year, $month, $day)
    {
        return checkdate($month, $day, $year);
    }

    /**
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof Date) {
            throw new UnexpectedTypeException($constraint, __NAMESPACE__.'\Date');
        }

        if (null === $value || '' === $value) {
            return;
        }

        if ($value instanceof \DateTimeInterface) {
            @trigger_error(sprintf('Validating a \\DateTimeInterface with "%s" is deprecated since version 4.2. Use "%s" instead or remove the constraint if the underlying model is already type hinted to \\DateTimeInterface.', Date::class, Type::class), E_USER_DEPRECATED);

            return;
        }

        if (!is_scalar($value) && !(\is_object($value) && method_exists($value, '__toString'))) {
            throw new UnexpectedValueException($value, 'string');
        }

        $value = (string) $value;

        if (!preg_match(static::PATTERN, $value, $matches)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $this->formatValue($value))
                ->setCode(Date::INVALID_FORMAT_ERROR)
                ->addViolation();

            return;
        }

        if (!self::checkDate($matches[1], $matches[2], $matches[3])) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $this->formatValue($value))
                ->setCode(Date::INVALID_DATE_ERROR)
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

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;
use Symfony\Component\Validator\Exception\UnexpectedValueException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class DateValidator extends ConstraintValidator
{
    const PATTERN = '/^(\d{4})-(\d{2})-(\d{2})$/';

    /**
     * Checks whether a date is valid.
     *
     * @param int $year  The year
     * @param int $month The month
     * @param int $day   The day
     *
     * @return bool Whether the date is valid
     *
     * @internal
     */
    public static function checkDate($year, $month, $day)
    {
        return checkdate($month, $day, $year);
    }

    /**
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof Date) {
            throw new UnexpectedTypeException($constraint, __NAMESPACE__.'\Date');
        }

        if (null === $value || '' === $value) {
            return;
        }

        if ($value instanceof \DateTimeInterface) {
            @trigger_error(sprintf('Validating a \\DateTimeInterface with "%s" is deprecated since version 4.2. Use "%s" instead or remove the constraint if the underlying model is already type hinted to \\DateTimeInterface.', Date::class, Type::class), E_USER_DEPRECATED);

            return;
        }

        if (!is_scalar($value) && !(\is_object($value) && method_exists($value, '__toString'))) {
            throw new UnexpectedValueException($value, 'string');
        }

        $value = (string) $value;

        if (!preg_match(static::PATTERN, $value, $matches)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $this->formatValue($value))
                ->setCode(Date::INVALID_FORMAT_ERROR)
                ->addViolation();

            return;
        }

        if (!self::checkDate($matches[1], $matches[2], $matches[3])) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $this->formatValue($value))
                ->setCode(Date::INVALID_DATE_ERROR)
                ->addViolation();
        }
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
