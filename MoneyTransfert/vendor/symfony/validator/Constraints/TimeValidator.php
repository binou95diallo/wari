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
class TimeValidator extends ConstraintValidator
{
    const PATTERN = '/^(\d{2}):(\d{2}):(\d{2})$/';

    /**
     * Checks whether a time is valid.
     *
     * @param int $hour   The hour
     * @param int $minute The minute
     * @param int $second The second
     *
     * @return bool Whether the time is valid
     *
     * @internal
     */
    public static function checkTime($hour, $minute, $second)
    {
        return $hour >= 0 && $hour < 24 && $minute >= 0 && $minute < 60 && $second >= 0 && $second < 60;
    }

    /**
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof Time) {
            throw new UnexpectedTypeException($constraint, __NAMESPACE__.'\Time');
        }

        if (null === $value || '' === $value) {
            return;
        }

        if ($value instanceof \DateTimeInterface) {
            @trigger_error(sprintf('Validating a \\DateTimeInterface with "%s" is deprecated since version 4.2. Use "%s" instead or remove the constraint if the underlying model is already type hinted to \\DateTimeInterface.', Time::class, Type::class), E_USER_DEPRECATED);

            return;
        }

        if (!is_scalar($value) && !(\is_object($value) && method_exists($value, '__toString'))) {
            throw new UnexpectedValueException($value, 'string');
        }

        $value = (string) $value;

        if (!preg_match(static::PATTERN, $value, $matches)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $this->formatValue($value))
                ->setCode(Time::INVALID_FORMAT_ERROR)
                ->addViolation();

            return;
        }

        if (!self::checkTime($matches[1], $matches[2], $matches[3])) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $this->formatValue($value))
                ->setCode(Time::INVALID_TIME_ERROR)
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
class TimeValidator extends ConstraintValidator
{
    const PATTERN = '/^(\d{2}):(\d{2}):(\d{2})$/';

    /**
     * Checks whether a time is valid.
     *
     * @param int $hour   The hour
     * @param int $minute The minute
     * @param int $second The second
     *
     * @return bool Whether the time is valid
     *
     * @internal
     */
    public static function checkTime($hour, $minute, $second)
    {
        return $hour >= 0 && $hour < 24 && $minute >= 0 && $minute < 60 && $second >= 0 && $second < 60;
    }

    /**
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof Time) {
            throw new UnexpectedTypeException($constraint, __NAMESPACE__.'\Time');
        }

        if (null === $value || '' === $value) {
            return;
        }

        if ($value instanceof \DateTimeInterface) {
            @trigger_error(sprintf('Validating a \\DateTimeInterface with "%s" is deprecated since version 4.2. Use "%s" instead or remove the constraint if the underlying model is already type hinted to \\DateTimeInterface.', Time::class, Type::class), E_USER_DEPRECATED);

            return;
        }

        if (!is_scalar($value) && !(\is_object($value) && method_exists($value, '__toString'))) {
            throw new UnexpectedValueException($value, 'string');
        }

        $value = (string) $value;

        if (!preg_match(static::PATTERN, $value, $matches)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $this->formatValue($value))
                ->setCode(Time::INVALID_FORMAT_ERROR)
                ->addViolation();

            return;
        }

        if (!self::checkTime($matches[1], $matches[2], $matches[3])) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $this->formatValue($value))
                ->setCode(Time::INVALID_TIME_ERROR)
                ->addViolation();
        }
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
