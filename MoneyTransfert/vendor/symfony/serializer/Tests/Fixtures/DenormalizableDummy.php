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

namespace Symfony\Component\Serializer\Tests\Fixtures;

use Symfony\Component\Serializer\Normalizer\DenormalizableInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class DenormalizableDummy implements DenormalizableInterface
{
    public function denormalize(DenormalizerInterface $denormalizer, $data, $format = null, array $context = [])
    {
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

namespace Symfony\Component\Serializer\Tests\Fixtures;

use Symfony\Component\Serializer\Normalizer\DenormalizableInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;

class DenormalizableDummy implements DenormalizableInterface
{
    public function denormalize(DenormalizerInterface $denormalizer, $data, $format = null, array $context = [])
    {
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
