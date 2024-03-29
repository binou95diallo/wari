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

namespace Symfony\Component\Security\Core\Encoder;

use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Component\Security\Core\Exception\LogicException;

/**
 * Hashes passwords using libsodium.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 * @author Zan Baldwin <hello@zanbaldwin.com>
 * @author Dominik Müller <dominik.mueller@jkweb.ch>
 */
final class SodiumPasswordEncoder implements PasswordEncoderInterface, SelfSaltingEncoderInterface
{
    private const MAX_PASSWORD_LENGTH = 4096;

    private $opsLimit;
    private $memLimit;

    public function __construct(int $opsLimit = null, int $memLimit = null)
    {
        if (!self::isSupported()) {
            throw new LogicException('Libsodium is not available. You should either install the sodium extension, upgrade to PHP 7.2+ or use a different encoder.');
        }

        $this->opsLimit = $opsLimit ?? max(6, \defined('SODIUM_CRYPTO_PWHASH_OPSLIMIT_MODERATE') ? \SODIUM_CRYPTO_PWHASH_OPSLIMIT_MODERATE : 6);
        $this->memLimit = $memLimit ?? max(64 * 1024 * 1024, \defined('SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE') ? \SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE : 64 * 1024 * 2014);

        if (3 > $this->opsLimit) {
            throw new \InvalidArgumentException('$opsLimit must be 3 or greater.');
        }

        if (10 * 1024 > $this->memLimit) {
            throw new \InvalidArgumentException('$memLimit must be 10k or greater.');
        }
    }

    public static function isSupported(): bool
    {
        return \function_exists('sodium_crypto_pwhash_str_needs_rehash') || \function_exists('Sodium\crypto_pwhash_str_needs_rehash');
    }

    /**
     * {@inheritdoc}
     */
    public function encodePassword($raw, $salt)
    {
        if (\strlen($raw) > self::MAX_PASSWORD_LENGTH) {
            throw new BadCredentialsException('Invalid password.');
        }

        if (\function_exists('sodium_crypto_pwhash_str')) {
            return sodium_crypto_pwhash_str($raw, $this->opsLimit, $this->memLimit);
        }

        if (\extension_loaded('libsodium')) {
            return \Sodium\crypto_pwhash_str($raw, $this->opsLimit, $this->memLimit);
        }

        throw new LogicException('Libsodium is not available. You should either install the sodium extension, upgrade to PHP 7.2+ or use a different encoder.');
    }

    /**
     * {@inheritdoc}
     */
    public function isPasswordValid($encoded, $raw, $salt)
    {
        if (\strlen($raw) > self::MAX_PASSWORD_LENGTH) {
            return false;
        }

        if (72 >= \strlen($raw) && 0 === strpos($encoded, '$2')) {
            // Accept validating BCrypt passwords for seamless migrations
            return password_verify($raw, $encoded);
        }

        if (\function_exists('sodium_crypto_pwhash_str_verify')) {
            return sodium_crypto_pwhash_str_verify($encoded, $raw);
        }

        if (\extension_loaded('libsodium')) {
            return \Sodium\crypto_pwhash_str_verify($encoded, $raw);
        }

        throw new LogicException('Libsodium is not available. You should either install the sodium extension, upgrade to PHP 7.2+ or use a different encoder.');
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

namespace Symfony\Component\Security\Core\Encoder;

use Symfony\Component\Security\Core\Exception\BadCredentialsException;
use Symfony\Component\Security\Core\Exception\LogicException;

/**
 * Hashes passwords using libsodium.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 * @author Zan Baldwin <hello@zanbaldwin.com>
 * @author Dominik Müller <dominik.mueller@jkweb.ch>
 */
final class SodiumPasswordEncoder implements PasswordEncoderInterface, SelfSaltingEncoderInterface
{
    private const MAX_PASSWORD_LENGTH = 4096;

    private $opsLimit;
    private $memLimit;

    public function __construct(int $opsLimit = null, int $memLimit = null)
    {
        if (!self::isSupported()) {
            throw new LogicException('Libsodium is not available. You should either install the sodium extension, upgrade to PHP 7.2+ or use a different encoder.');
        }

        $this->opsLimit = $opsLimit ?? max(6, \defined('SODIUM_CRYPTO_PWHASH_OPSLIMIT_MODERATE') ? \SODIUM_CRYPTO_PWHASH_OPSLIMIT_MODERATE : 6);
        $this->memLimit = $memLimit ?? max(64 * 1024 * 1024, \defined('SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE') ? \SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE : 64 * 1024 * 2014);

        if (3 > $this->opsLimit) {
            throw new \InvalidArgumentException('$opsLimit must be 3 or greater.');
        }

        if (10 * 1024 > $this->memLimit) {
            throw new \InvalidArgumentException('$memLimit must be 10k or greater.');
        }
    }

    public static function isSupported(): bool
    {
        return \function_exists('sodium_crypto_pwhash_str_needs_rehash') || \function_exists('Sodium\crypto_pwhash_str_needs_rehash');
    }

    /**
     * {@inheritdoc}
     */
    public function encodePassword($raw, $salt)
    {
        if (\strlen($raw) > self::MAX_PASSWORD_LENGTH) {
            throw new BadCredentialsException('Invalid password.');
        }

        if (\function_exists('sodium_crypto_pwhash_str')) {
            return sodium_crypto_pwhash_str($raw, $this->opsLimit, $this->memLimit);
        }

        if (\extension_loaded('libsodium')) {
            return \Sodium\crypto_pwhash_str($raw, $this->opsLimit, $this->memLimit);
        }

        throw new LogicException('Libsodium is not available. You should either install the sodium extension, upgrade to PHP 7.2+ or use a different encoder.');
    }

    /**
     * {@inheritdoc}
     */
    public function isPasswordValid($encoded, $raw, $salt)
    {
        if (\strlen($raw) > self::MAX_PASSWORD_LENGTH) {
            return false;
        }

        if (72 >= \strlen($raw) && 0 === strpos($encoded, '$2')) {
            // Accept validating BCrypt passwords for seamless migrations
            return password_verify($raw, $encoded);
        }

        if (\function_exists('sodium_crypto_pwhash_str_verify')) {
            return sodium_crypto_pwhash_str_verify($encoded, $raw);
        }

        if (\extension_loaded('libsodium')) {
            return \Sodium\crypto_pwhash_str_verify($encoded, $raw);
        }

        throw new LogicException('Libsodium is not available. You should either install the sodium extension, upgrade to PHP 7.2+ or use a different encoder.');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
