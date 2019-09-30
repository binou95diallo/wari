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

use Symfony\Component\Mime\Exception\AddressEncoderException;

/**
 * @author Christian Schmidt
 *
 * @experimental in 4.3
 */
interface AddressEncoderInterface
{
    /**
     * Encodes an email address.
     *
     * @throws AddressEncoderException if the email cannot be represented in
     *                                 the encoding implemented by this class
     */
    public function encodeString(string $address): string;
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

use Symfony\Component\Mime\Exception\AddressEncoderException;

/**
 * @author Christian Schmidt
 *
 * @experimental in 4.3
 */
interface AddressEncoderInterface
{
    /**
     * Encodes an email address.
     *
     * @throws AddressEncoderException if the email cannot be represented in
     *                                 the encoding implemented by this class
     */
    public function encodeString(string $address): string;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
