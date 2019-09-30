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

namespace Symfony\Component\Serializer\Encoder;

/**
 * Adds the support of an extra $context parameter for the supportsDecoding method.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface ContextAwareDecoderInterface extends DecoderInterface
{
    /**
     * {@inheritdoc}
     *
     * @param array $context options that decoders have access to
     */
    public function supportsDecoding($format, array $context = []);
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

namespace Symfony\Component\Serializer\Encoder;

/**
 * Adds the support of an extra $context parameter for the supportsDecoding method.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface ContextAwareDecoderInterface extends DecoderInterface
{
    /**
     * {@inheritdoc}
     *
     * @param array $context options that decoders have access to
     */
    public function supportsDecoding($format, array $context = []);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
