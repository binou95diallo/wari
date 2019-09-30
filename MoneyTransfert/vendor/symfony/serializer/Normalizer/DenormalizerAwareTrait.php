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

namespace Symfony\Component\Serializer\Normalizer;

/**
 * DenormalizerAware trait.
 *
 * @author Joel Wurtz <joel.wurtz@gmail.com>
 */
trait DenormalizerAwareTrait
{
    /**
     * @var DenormalizerInterface
     */
    protected $denormalizer;

    /**
     * Sets the Denormalizer.
     *
     * @param DenormalizerInterface $denormalizer A DenormalizerInterface instance
     */
    public function setDenormalizer(DenormalizerInterface $denormalizer)
    {
        $this->denormalizer = $denormalizer;
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

namespace Symfony\Component\Serializer\Normalizer;

/**
 * DenormalizerAware trait.
 *
 * @author Joel Wurtz <joel.wurtz@gmail.com>
 */
trait DenormalizerAwareTrait
{
    /**
     * @var DenormalizerInterface
     */
    protected $denormalizer;

    /**
     * Sets the Denormalizer.
     *
     * @param DenormalizerInterface $denormalizer A DenormalizerInterface instance
     */
    public function setDenormalizer(DenormalizerInterface $denormalizer)
    {
        $this->denormalizer = $denormalizer;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
