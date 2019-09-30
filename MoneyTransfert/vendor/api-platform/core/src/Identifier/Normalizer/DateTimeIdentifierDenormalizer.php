<<<<<<< HEAD
<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Core\Identifier\Normalizer;

use ApiPlatform\Core\Exception\InvalidIdentifierException;
use Symfony\Component\Serializer\Exception\NotNormalizableValueException;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;

final class DateTimeIdentifierDenormalizer extends DateTimeNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        try {
            return parent::denormalize($data, $class, $format, $context);
        } catch (NotNormalizableValueException $e) {
            throw new InvalidIdentifierException($e->getMessage(), $e->getCode(), $e);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
=======
<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Core\Identifier\Normalizer;

use ApiPlatform\Core\Exception\InvalidIdentifierException;
use Symfony\Component\Serializer\Exception\NotNormalizableValueException;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;

final class DateTimeIdentifierDenormalizer extends DateTimeNormalizer
{
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        try {
            return parent::denormalize($data, $class, $format, $context);
        } catch (NotNormalizableValueException $e) {
            throw new InvalidIdentifierException($e->getMessage(), $e->getCode(), $e);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function hasCacheableSupportsMethod(): bool
    {
        return true;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
