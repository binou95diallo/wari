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

namespace Symfony\Component\Form\Extension\Core\DataTransformer;

use Symfony\Component\Form\Exception\TransformationFailedException;

/**
 * Transforms between a normalized time and a localized time string/array.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Florian Eckerstorfer <florian@eckerstorfer.org>
 */
class DateTimeToArrayTransformer extends BaseDateTimeTransformer
{
    private $pad;

    private $fields;

    /**
     * @param string $inputTimezone  The input timezone
     * @param string $outputTimezone The output timezone
     * @param array  $fields         The date fields
     * @param bool   $pad            Whether to use padding
     */
    public function __construct(string $inputTimezone = null, string $outputTimezone = null, array $fields = null, bool $pad = false)
    {
        parent::__construct($inputTimezone, $outputTimezone);

        if (null === $fields) {
            $fields = ['year', 'month', 'day', 'hour', 'minute', 'second'];
        }

        $this->fields = $fields;
        $this->pad = $pad;
    }

    /**
     * Transforms a normalized date into a localized date.
     *
     * @param \DateTimeInterface $dateTime A DateTimeInterface object
     *
     * @return array Localized date
     *
     * @throws TransformationFailedException If the given value is not a \DateTimeInterface
     */
    public function transform($dateTime)
    {
        if (null === $dateTime) {
            return array_intersect_key([
                'year' => '',
                'month' => '',
                'day' => '',
                'hour' => '',
                'minute' => '',
                'second' => '',
            ], array_flip($this->fields));
        }

        if (!$dateTime instanceof \DateTimeInterface) {
            throw new TransformationFailedException('Expected a \DateTimeInterface.');
        }

        if ($this->inputTimezone !== $this->outputTimezone) {
            if (!$dateTime instanceof \DateTimeImmutable) {
                $dateTime = clone $dateTime;
            }

            $dateTime = $dateTime->setTimezone(new \DateTimeZone($this->outputTimezone));
        }

        $result = array_intersect_key([
            'year' => $dateTime->format('Y'),
            'month' => $dateTime->format('m'),
            'day' => $dateTime->format('d'),
            'hour' => $dateTime->format('H'),
            'minute' => $dateTime->format('i'),
            'second' => $dateTime->format('s'),
        ], array_flip($this->fields));

        if (!$this->pad) {
            foreach ($result as &$entry) {
                // remove leading zeros
                $entry = (string) (int) $entry;
            }
            // unset reference to keep scope clear
            unset($entry);
        }

        return $result;
    }

    /**
     * Transforms a localized date into a normalized date.
     *
     * @param array $value Localized date
     *
     * @return \DateTime Normalized date
     *
     * @throws TransformationFailedException If the given value is not an array,
     *                                       if the value could not be transformed
     */
    public function reverseTransform($value)
    {
        if (null === $value) {
            return;
        }

        if (!\is_array($value)) {
            throw new TransformationFailedException('Expected an array.');
        }

        if ('' === implode('', $value)) {
            return;
        }

        $emptyFields = [];

        foreach ($this->fields as $field) {
            if (!isset($value[$field])) {
                $emptyFields[] = $field;
            }
        }

        if (\count($emptyFields) > 0) {
            throw new TransformationFailedException(sprintf('The fields "%s" should not be empty', implode('", "', $emptyFields)));
        }

        if (isset($value['month']) && !ctype_digit((string) $value['month'])) {
            throw new TransformationFailedException('This month is invalid');
        }

        if (isset($value['day']) && !ctype_digit((string) $value['day'])) {
            throw new TransformationFailedException('This day is invalid');
        }

        if (isset($value['year']) && !ctype_digit((string) $value['year'])) {
            throw new TransformationFailedException('This year is invalid');
        }

        if (!empty($value['month']) && !empty($value['day']) && !empty($value['year']) && false === checkdate($value['month'], $value['day'], $value['year'])) {
            throw new TransformationFailedException('This is an invalid date');
        }

        if (isset($value['hour']) && !ctype_digit((string) $value['hour'])) {
            throw new TransformationFailedException('This hour is invalid');
        }

        if (isset($value['minute']) && !ctype_digit((string) $value['minute'])) {
            throw new TransformationFailedException('This minute is invalid');
        }

        if (isset($value['second']) && !ctype_digit((string) $value['second'])) {
            throw new TransformationFailedException('This second is invalid');
        }

        try {
            $dateTime = new \DateTime(sprintf(
                '%s-%s-%s %s:%s:%s',
                empty($value['year']) ? '1970' : $value['year'],
                empty($value['month']) ? '1' : $value['month'],
                empty($value['day']) ? '1' : $value['day'],
                empty($value['hour']) ? '0' : $value['hour'],
                empty($value['minute']) ? '0' : $value['minute'],
                empty($value['second']) ? '0' : $value['second']
                ),
                new \DateTimeZone($this->outputTimezone)
            );

            if ($this->inputTimezone !== $this->outputTimezone) {
                $dateTime->setTimezone(new \DateTimeZone($this->inputTimezone));
            }
        } catch (\Exception $e) {
            throw new TransformationFailedException($e->getMessage(), $e->getCode(), $e);
        }

        return $dateTime;
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

namespace Symfony\Component\Form\Extension\Core\DataTransformer;

use Symfony\Component\Form\Exception\TransformationFailedException;

/**
 * Transforms between a normalized time and a localized time string/array.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Florian Eckerstorfer <florian@eckerstorfer.org>
 */
class DateTimeToArrayTransformer extends BaseDateTimeTransformer
{
    private $pad;

    private $fields;

    /**
     * @param string $inputTimezone  The input timezone
     * @param string $outputTimezone The output timezone
     * @param array  $fields         The date fields
     * @param bool   $pad            Whether to use padding
     */
    public function __construct(string $inputTimezone = null, string $outputTimezone = null, array $fields = null, bool $pad = false)
    {
        parent::__construct($inputTimezone, $outputTimezone);

        if (null === $fields) {
            $fields = ['year', 'month', 'day', 'hour', 'minute', 'second'];
        }

        $this->fields = $fields;
        $this->pad = $pad;
    }

    /**
     * Transforms a normalized date into a localized date.
     *
     * @param \DateTimeInterface $dateTime A DateTimeInterface object
     *
     * @return array Localized date
     *
     * @throws TransformationFailedException If the given value is not a \DateTimeInterface
     */
    public function transform($dateTime)
    {
        if (null === $dateTime) {
            return array_intersect_key([
                'year' => '',
                'month' => '',
                'day' => '',
                'hour' => '',
                'minute' => '',
                'second' => '',
            ], array_flip($this->fields));
        }

        if (!$dateTime instanceof \DateTimeInterface) {
            throw new TransformationFailedException('Expected a \DateTimeInterface.');
        }

        if ($this->inputTimezone !== $this->outputTimezone) {
            if (!$dateTime instanceof \DateTimeImmutable) {
                $dateTime = clone $dateTime;
            }

            $dateTime = $dateTime->setTimezone(new \DateTimeZone($this->outputTimezone));
        }

        $result = array_intersect_key([
            'year' => $dateTime->format('Y'),
            'month' => $dateTime->format('m'),
            'day' => $dateTime->format('d'),
            'hour' => $dateTime->format('H'),
            'minute' => $dateTime->format('i'),
            'second' => $dateTime->format('s'),
        ], array_flip($this->fields));

        if (!$this->pad) {
            foreach ($result as &$entry) {
                // remove leading zeros
                $entry = (string) (int) $entry;
            }
            // unset reference to keep scope clear
            unset($entry);
        }

        return $result;
    }

    /**
     * Transforms a localized date into a normalized date.
     *
     * @param array $value Localized date
     *
     * @return \DateTime Normalized date
     *
     * @throws TransformationFailedException If the given value is not an array,
     *                                       if the value could not be transformed
     */
    public function reverseTransform($value)
    {
        if (null === $value) {
            return;
        }

        if (!\is_array($value)) {
            throw new TransformationFailedException('Expected an array.');
        }

        if ('' === implode('', $value)) {
            return;
        }

        $emptyFields = [];

        foreach ($this->fields as $field) {
            if (!isset($value[$field])) {
                $emptyFields[] = $field;
            }
        }

        if (\count($emptyFields) > 0) {
            throw new TransformationFailedException(sprintf('The fields "%s" should not be empty', implode('", "', $emptyFields)));
        }

        if (isset($value['month']) && !ctype_digit((string) $value['month'])) {
            throw new TransformationFailedException('This month is invalid');
        }

        if (isset($value['day']) && !ctype_digit((string) $value['day'])) {
            throw new TransformationFailedException('This day is invalid');
        }

        if (isset($value['year']) && !ctype_digit((string) $value['year'])) {
            throw new TransformationFailedException('This year is invalid');
        }

        if (!empty($value['month']) && !empty($value['day']) && !empty($value['year']) && false === checkdate($value['month'], $value['day'], $value['year'])) {
            throw new TransformationFailedException('This is an invalid date');
        }

        if (isset($value['hour']) && !ctype_digit((string) $value['hour'])) {
            throw new TransformationFailedException('This hour is invalid');
        }

        if (isset($value['minute']) && !ctype_digit((string) $value['minute'])) {
            throw new TransformationFailedException('This minute is invalid');
        }

        if (isset($value['second']) && !ctype_digit((string) $value['second'])) {
            throw new TransformationFailedException('This second is invalid');
        }

        try {
            $dateTime = new \DateTime(sprintf(
                '%s-%s-%s %s:%s:%s',
                empty($value['year']) ? '1970' : $value['year'],
                empty($value['month']) ? '1' : $value['month'],
                empty($value['day']) ? '1' : $value['day'],
                empty($value['hour']) ? '0' : $value['hour'],
                empty($value['minute']) ? '0' : $value['minute'],
                empty($value['second']) ? '0' : $value['second']
                ),
                new \DateTimeZone($this->outputTimezone)
            );

            if ($this->inputTimezone !== $this->outputTimezone) {
                $dateTime->setTimezone(new \DateTimeZone($this->inputTimezone));
            }
        } catch (\Exception $e) {
            throw new TransformationFailedException($e->getMessage(), $e->getCode(), $e);
        }

        return $dateTime;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
