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

namespace Symfony\Component\Mime\Encoder;

/**
 * @author Chris Corbyn
 *
 * @experimental in 4.3
 */
interface ContentEncoderInterface extends EncoderInterface
{
    /**
     * Encodes the stream to a Generator.
     *
     * @param resource $stream
     */
    public function encodeByteStream($stream, int $maxLineLength = 0): iterable;

    /**
     * Gets the MIME name of this content encoding scheme.
     */
    public function getName(): string;
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

namespace Symfony\Component\Mime\Encoder;

/**
 * @author Chris Corbyn
 *
 * @experimental in 4.3
 */
interface ContentEncoderInterface extends EncoderInterface
{
    /**
     * Encodes the stream to a Generator.
     *
     * @param resource $stream
     */
    public function encodeByteStream($stream, int $maxLineLength = 0): iterable;

    /**
     * Gets the MIME name of this content encoding scheme.
     */
    public function getName(): string;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
