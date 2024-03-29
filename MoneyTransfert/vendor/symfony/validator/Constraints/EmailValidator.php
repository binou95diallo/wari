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

use Egulias\EmailValidator\Validation\EmailValidation;
use Egulias\EmailValidator\Validation\NoRFCWarningsValidation;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\LogicException;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;
use Symfony\Component\Validator\Exception\UnexpectedValueException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class EmailValidator extends ConstraintValidator
{
    /**
     * @internal
     */
    const PATTERN_HTML5 = '/^[a-zA-Z0-9.!#$%&\'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$/';

    /**
     * @internal
     */
    const PATTERN_LOOSE = '/^.+\@\S+\.\S+$/';

    private static $emailPatterns = [
        Email::VALIDATION_MODE_LOOSE => self::PATTERN_LOOSE,
        Email::VALIDATION_MODE_HTML5 => self::PATTERN_HTML5,
    ];

    /**
     * @var string
     */
    private $defaultMode;

    /**
     * @param string $defaultMode
     */
    public function __construct($defaultMode = Email::VALIDATION_MODE_LOOSE)
    {
        if (\is_bool($defaultMode)) {
            @trigger_error(sprintf('Calling `new %s(%s)` is deprecated since Symfony 4.1, use `new %s("%s")` instead.', self::class, $defaultMode ? 'true' : 'false', self::class, $defaultMode ? Email::VALIDATION_MODE_STRICT : Email::VALIDATION_MODE_LOOSE), E_USER_DEPRECATED);

            $defaultMode = $defaultMode ? Email::VALIDATION_MODE_STRICT : Email::VALIDATION_MODE_LOOSE;
        }

        if (!\in_array($defaultMode, Email::$validationModes, true)) {
            throw new \InvalidArgumentException('The "defaultMode" parameter value is not valid.');
        }

        $this->defaultMode = $defaultMode;
    }

    /**
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof Email) {
            throw new UnexpectedTypeException($constraint, __NAMESPACE__.'\Email');
        }

        if (null === $value || '' === $value) {
            return;
        }

        if (!is_scalar($value) && !(\is_object($value) && method_exists($value, '__toString'))) {
            throw new UnexpectedValueException($value, 'string');
        }

        $value = (string) $value;

        if (null !== $constraint->normalizer) {
            $value = ($constraint->normalizer)($value);
        }

        if (null !== $constraint->strict) {
            @trigger_error(sprintf('The %s::$strict property is deprecated since Symfony 4.1. Use %s::mode="%s" instead.', Email::class, Email::class, Email::VALIDATION_MODE_STRICT), E_USER_DEPRECATED);

            if ($constraint->strict) {
                $constraint->mode = Email::VALIDATION_MODE_STRICT;
            } else {
                $constraint->mode = Email::VALIDATION_MODE_LOOSE;
            }
        }

        if (null === $constraint->mode) {
            $constraint->mode = $this->defaultMode;
        }

        if (!\in_array($constraint->mode, Email::$validationModes, true)) {
            throw new \InvalidArgumentException(sprintf('The %s::$mode parameter value is not valid.', \get_class($constraint)));
        }

        if (Email::VALIDATION_MODE_STRICT === $constraint->mode) {
            if (!class_exists('\Egulias\EmailValidator\EmailValidator')) {
                throw new LogicException('Strict email validation requires egulias/email-validator ~1.2|~2.0');
            }

            $strictValidator = new \Egulias\EmailValidator\EmailValidator();

            if (interface_exists(EmailValidation::class) && !$strictValidator->isValid($value, new NoRFCWarningsValidation())) {
                $this->context->buildViolation($constraint->message)
                    ->setParameter('{{ value }}', $this->formatValue($value))
                    ->setCode(Email::INVALID_FORMAT_ERROR)
                    ->addViolation();

                return;
            } elseif (!interface_exists(EmailValidation::class) && !$strictValidator->isValid($value, false, true)) {
                $this->context->buildViolation($constraint->message)
                    ->setParameter('{{ value }}', $this->formatValue($value))
                    ->setCode(Email::INVALID_FORMAT_ERROR)
                    ->addViolation();

                return;
            }
        } elseif (!preg_match(self::$emailPatterns[$constraint->mode], $value)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $this->formatValue($value))
                ->setCode(Email::INVALID_FORMAT_ERROR)
                ->addViolation();

            return;
        }

        $host = (string) substr($value, strrpos($value, '@') + 1);

        // Check for host DNS resource records
        if ($constraint->checkMX) {
            if (!$this->checkMX($host)) {
                $this->context->buildViolation($constraint->message)
                    ->setParameter('{{ value }}', $this->formatValue($value))
                    ->setCode(Email::MX_CHECK_FAILED_ERROR)
                    ->addViolation();
            }

            return;
        }

        if ($constraint->checkHost && !$this->checkHost($host)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $this->formatValue($value))
                ->setCode(Email::HOST_CHECK_FAILED_ERROR)
                ->addViolation();
        }
    }

    /**
     * Check DNS Records for MX type.
     */
    private function checkMX(string $host): bool
    {
        return '' !== $host && checkdnsrr($host, 'MX');
    }

    /**
     * Check if one of MX, A or AAAA DNS RR exists.
     */
    private function checkHost(string $host): bool
    {
        return '' !== $host && ($this->checkMX($host) || (checkdnsrr($host, 'A') || checkdnsrr($host, 'AAAA')));
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

use Egulias\EmailValidator\Validation\EmailValidation;
use Egulias\EmailValidator\Validation\NoRFCWarningsValidation;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\LogicException;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;
use Symfony\Component\Validator\Exception\UnexpectedValueException;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class EmailValidator extends ConstraintValidator
{
    /**
     * @internal
     */
    const PATTERN_HTML5 = '/^[a-zA-Z0-9.!#$%&\'*+\\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$/';

    /**
     * @internal
     */
    const PATTERN_LOOSE = '/^.+\@\S+\.\S+$/';

    private static $emailPatterns = [
        Email::VALIDATION_MODE_LOOSE => self::PATTERN_LOOSE,
        Email::VALIDATION_MODE_HTML5 => self::PATTERN_HTML5,
    ];

    /**
     * @var string
     */
    private $defaultMode;

    /**
     * @param string $defaultMode
     */
    public function __construct($defaultMode = Email::VALIDATION_MODE_LOOSE)
    {
        if (\is_bool($defaultMode)) {
            @trigger_error(sprintf('Calling `new %s(%s)` is deprecated since Symfony 4.1, use `new %s("%s")` instead.', self::class, $defaultMode ? 'true' : 'false', self::class, $defaultMode ? Email::VALIDATION_MODE_STRICT : Email::VALIDATION_MODE_LOOSE), E_USER_DEPRECATED);

            $defaultMode = $defaultMode ? Email::VALIDATION_MODE_STRICT : Email::VALIDATION_MODE_LOOSE;
        }

        if (!\in_array($defaultMode, Email::$validationModes, true)) {
            throw new \InvalidArgumentException('The "defaultMode" parameter value is not valid.');
        }

        $this->defaultMode = $defaultMode;
    }

    /**
     * {@inheritdoc}
     */
    public function validate($value, Constraint $constraint)
    {
        if (!$constraint instanceof Email) {
            throw new UnexpectedTypeException($constraint, __NAMESPACE__.'\Email');
        }

        if (null === $value || '' === $value) {
            return;
        }

        if (!is_scalar($value) && !(\is_object($value) && method_exists($value, '__toString'))) {
            throw new UnexpectedValueException($value, 'string');
        }

        $value = (string) $value;

        if (null !== $constraint->normalizer) {
            $value = ($constraint->normalizer)($value);
        }

        if (null !== $constraint->strict) {
            @trigger_error(sprintf('The %s::$strict property is deprecated since Symfony 4.1. Use %s::mode="%s" instead.', Email::class, Email::class, Email::VALIDATION_MODE_STRICT), E_USER_DEPRECATED);

            if ($constraint->strict) {
                $constraint->mode = Email::VALIDATION_MODE_STRICT;
            } else {
                $constraint->mode = Email::VALIDATION_MODE_LOOSE;
            }
        }

        if (null === $constraint->mode) {
            $constraint->mode = $this->defaultMode;
        }

        if (!\in_array($constraint->mode, Email::$validationModes, true)) {
            throw new \InvalidArgumentException(sprintf('The %s::$mode parameter value is not valid.', \get_class($constraint)));
        }

        if (Email::VALIDATION_MODE_STRICT === $constraint->mode) {
            if (!class_exists('\Egulias\EmailValidator\EmailValidator')) {
                throw new LogicException('Strict email validation requires egulias/email-validator ~1.2|~2.0');
            }

            $strictValidator = new \Egulias\EmailValidator\EmailValidator();

            if (interface_exists(EmailValidation::class) && !$strictValidator->isValid($value, new NoRFCWarningsValidation())) {
                $this->context->buildViolation($constraint->message)
                    ->setParameter('{{ value }}', $this->formatValue($value))
                    ->setCode(Email::INVALID_FORMAT_ERROR)
                    ->addViolation();

                return;
            } elseif (!interface_exists(EmailValidation::class) && !$strictValidator->isValid($value, false, true)) {
                $this->context->buildViolation($constraint->message)
                    ->setParameter('{{ value }}', $this->formatValue($value))
                    ->setCode(Email::INVALID_FORMAT_ERROR)
                    ->addViolation();

                return;
            }
        } elseif (!preg_match(self::$emailPatterns[$constraint->mode], $value)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $this->formatValue($value))
                ->setCode(Email::INVALID_FORMAT_ERROR)
                ->addViolation();

            return;
        }

        $host = (string) substr($value, strrpos($value, '@') + 1);

        // Check for host DNS resource records
        if ($constraint->checkMX) {
            if (!$this->checkMX($host)) {
                $this->context->buildViolation($constraint->message)
                    ->setParameter('{{ value }}', $this->formatValue($value))
                    ->setCode(Email::MX_CHECK_FAILED_ERROR)
                    ->addViolation();
            }

            return;
        }

        if ($constraint->checkHost && !$this->checkHost($host)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $this->formatValue($value))
                ->setCode(Email::HOST_CHECK_FAILED_ERROR)
                ->addViolation();
        }
    }

    /**
     * Check DNS Records for MX type.
     */
    private function checkMX(string $host): bool
    {
        return '' !== $host && checkdnsrr($host, 'MX');
    }

    /**
     * Check if one of MX, A or AAAA DNS RR exists.
     */
    private function checkHost(string $host): bool
    {
        return '' !== $host && ($this->checkMX($host) || (checkdnsrr($host, 'A') || checkdnsrr($host, 'AAAA')));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
