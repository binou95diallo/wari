<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace ProxyManager\Signature;

use ProxyManager\Signature\Exception\InvalidSignatureException;
use ProxyManager\Signature\Exception\MissingSignatureException;
use ReflectionClass;

/**
 * Generator for signatures to be used to check the validity of generated code
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class SignatureChecker implements SignatureCheckerInterface
{
    /**
     * @var SignatureGeneratorInterface
     */
    private $signatureGenerator;

    /**
     * @param SignatureGeneratorInterface $signatureGenerator
     */
    public function __construct(SignatureGeneratorInterface $signatureGenerator)
    {
        $this->signatureGenerator = $signatureGenerator;
    }

    /**
     * {@inheritDoc}
     */
    public function checkSignature(ReflectionClass $class, array $parameters)
    {
        $propertyName      = 'signature' . $this->signatureGenerator->generateSignatureKey($parameters);
        $signature         = $this->signatureGenerator->generateSignature($parameters);
        $defaultProperties = $class->getDefaultProperties();

        if (! \array_key_exists($propertyName, $defaultProperties)) {
            throw MissingSignatureException::fromMissingSignature($class, $parameters, $signature);
        }

        if ($defaultProperties[$propertyName] !== $signature) {
            throw InvalidSignatureException::fromInvalidSignature(
                $class,
                $parameters,
                $defaultProperties[$propertyName],
                $signature
            );
        }
    }
}
=======
<?php

declare(strict_types=1);

namespace ProxyManager\Signature;

use ProxyManager\Signature\Exception\InvalidSignatureException;
use ProxyManager\Signature\Exception\MissingSignatureException;
use ReflectionClass;

/**
 * Generator for signatures to be used to check the validity of generated code
 *
 * @author Marco Pivetta <ocramius@gmail.com>
 * @license MIT
 */
final class SignatureChecker implements SignatureCheckerInterface
{
    /**
     * @var SignatureGeneratorInterface
     */
    private $signatureGenerator;

    /**
     * @param SignatureGeneratorInterface $signatureGenerator
     */
    public function __construct(SignatureGeneratorInterface $signatureGenerator)
    {
        $this->signatureGenerator = $signatureGenerator;
    }

    /**
     * {@inheritDoc}
     */
    public function checkSignature(ReflectionClass $class, array $parameters)
    {
        $propertyName      = 'signature' . $this->signatureGenerator->generateSignatureKey($parameters);
        $signature         = $this->signatureGenerator->generateSignature($parameters);
        $defaultProperties = $class->getDefaultProperties();

        if (! \array_key_exists($propertyName, $defaultProperties)) {
            throw MissingSignatureException::fromMissingSignature($class, $parameters, $signature);
        }

        if ($defaultProperties[$propertyName] !== $signature) {
            throw InvalidSignatureException::fromInvalidSignature(
                $class,
                $parameters,
                $defaultProperties[$propertyName],
                $signature
            );
        }
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
