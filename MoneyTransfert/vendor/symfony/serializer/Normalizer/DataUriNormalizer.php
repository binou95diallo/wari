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

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesser;
use Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesserInterface as DeprecatedMimeTypeGuesserInterface;
use Symfony\Component\Mime\MimeTypeGuesserInterface;
use Symfony\Component\Mime\MimeTypes;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Exception\NotNormalizableValueException;

/**
 * Normalizes an {@see \SplFileInfo} object to a data URI.
 * Denormalizes a data URI to a {@see \SplFileObject} object.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class DataUriNormalizer implements NormalizerInterface, DenormalizerInterface, CacheableSupportsMethodInterface
{
    private static $supportedTypes = [
        \SplFileInfo::class => true,
        \SplFileObject::class => true,
        File::class => true,
    ];

    /**
     * @var MimeTypeGuesserInterface|null
     */
    private $mimeTypeGuesser;

    /**
     * @param MimeTypeGuesserInterface|null $mimeTypeGuesser
     */
    public function __construct($mimeTypeGuesser = null)
    {
        if ($mimeTypeGuesser instanceof DeprecatedMimeTypeGuesserInterface) {
            @trigger_error(sprintf('Passing a %s to "%s()" is deprecated since Symfony 4.3, pass a "%s" instead.', DeprecatedMimeTypeGuesserInterface::class, __METHOD__, MimeTypeGuesserInterface::class), E_USER_DEPRECATED);
        } elseif (null === $mimeTypeGuesser) {
            if (class_exists(MimeTypes::class)) {
                $mimeTypeGuesser = MimeTypes::getDefault();
            } elseif (class_exists(MimeTypeGuesser::class)) {
                @trigger_error(sprintf('Passing null to "%s()" to use a default MIME type guesser without Symfony Mime installed is deprecated since Symfony 4.3. Try running "composer require symfony/mime".', __METHOD__), E_USER_DEPRECATED);
                $mimeTypeGuesser = MimeTypeGuesser::getInstance();
            }
        } elseif (!$mimeTypeGuesser instanceof MimeTypes) {
            throw new \TypeError(sprintf('Argument 1 passed to "%s()" must be an instance of "%s" or null, %s given.', __METHOD__, MimeTypes::class, \is_object($mimeTypeGuesser) ? \get_class($mimeTypeGuesser) : \gettype($mimeTypeGuesser)));
        }

        $this->mimeTypeGuesser = $mimeTypeGuesser;
    }

    /**
     * {@inheritdoc}
     */
    public function normalize($object, $format = null, array $context = [])
    {
        if (!$object instanceof \SplFileInfo) {
            throw new InvalidArgumentException('The object must be an instance of "\SplFileInfo".');
        }

        $mimeType = $this->getMimeType($object);
        $splFileObject = $this->extractSplFileObject($object);

        $data = '';

        $splFileObject->rewind();
        while (!$splFileObject->eof()) {
            $data .= $splFileObject->fgets();
        }

        if ('text' === explode('/', $mimeType, 2)[0]) {
            return sprintf('data:%s,%s', $mimeType, rawurlencode($data));
        }

        return sprintf('data:%s;base64,%s', $mimeType, base64_encode($data));
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \SplFileInfo;
    }

    /**
     * {@inheritdoc}
     *
     * Regex adapted from Brian Grinstead code.
     *
     * @see https://gist.github.com/bgrins/6194623
     *
     * @throws InvalidArgumentException
     * @throws NotNormalizableValueException
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!preg_match('/^data:([a-z0-9][a-z0-9\!\#\$\&\-\^\_\+\.]{0,126}\/[a-z0-9][a-z0-9\!\#\$\&\-\^\_\+\.]{0,126}(;[a-z0-9\-]+\=[a-z0-9\-]+)?)?(;base64)?,[a-z0-9\!\$\&\\\'\,\(\)\*\+\,\;\=\-\.\_\~\:\@\/\?\%\s]*\s*$/i', $data)) {
            throw new NotNormalizableValueException('The provided "data:" URI is not valid.');
        }

        try {
            switch ($class) {
                case 'Symfony\Component\HttpFoundation\File\File':
                    return new File($data, false);

                case 'SplFileObject':
                case 'SplFileInfo':
                    return new \SplFileObject($data);
            }
        } catch (\RuntimeException $exception) {
            throw new NotNormalizableValueException($exception->getMessage(), $exception->getCode(), $exception);
        }

        throw new InvalidArgumentException(sprintf('The class parameter "%s" is not supported. It must be one of "SplFileInfo", "SplFileObject" or "Symfony\Component\HttpFoundation\File\File".', $class));
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return isset(self::$supportedTypes[$type]);
    }

    /**
     * {@inheritdoc}
     */
    public function hasCacheableSupportsMethod(): bool
    {
        return __CLASS__ === \get_class($this);
    }

    /**
     * Gets the mime type of the object. Defaults to application/octet-stream.
     *
     * @param \SplFileInfo $object
     *
     * @return string
     */
    private function getMimeType(\SplFileInfo $object)
    {
        if ($object instanceof File) {
            return $object->getMimeType();
        }

        if ($this->mimeTypeGuesser instanceof DeprecatedMimeTypeGuesserInterface && $mimeType = $this->mimeTypeGuesser->guess($object->getPathname())) {
            return $mimeType;
        }

        if ($this->mimeTypeGuesser && $mimeType = $this->mimeTypeGuesser->guessMimeType($object->getPathname())) {
            return $mimeType;
        }

        return 'application/octet-stream';
    }

    /**
     * Returns the \SplFileObject instance associated with the given \SplFileInfo instance.
     *
     * @param \SplFileInfo $object
     *
     * @return \SplFileObject
     */
    private function extractSplFileObject(\SplFileInfo $object)
    {
        if ($object instanceof \SplFileObject) {
            return $object;
        }

        return $object->openFile();
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

use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesser;
use Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesserInterface as DeprecatedMimeTypeGuesserInterface;
use Symfony\Component\Mime\MimeTypeGuesserInterface;
use Symfony\Component\Mime\MimeTypes;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Exception\NotNormalizableValueException;

/**
 * Normalizes an {@see \SplFileInfo} object to a data URI.
 * Denormalizes a data URI to a {@see \SplFileObject} object.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class DataUriNormalizer implements NormalizerInterface, DenormalizerInterface, CacheableSupportsMethodInterface
{
    private static $supportedTypes = [
        \SplFileInfo::class => true,
        \SplFileObject::class => true,
        File::class => true,
    ];

    /**
     * @var MimeTypeGuesserInterface|null
     */
    private $mimeTypeGuesser;

    /**
     * @param MimeTypeGuesserInterface|null $mimeTypeGuesser
     */
    public function __construct($mimeTypeGuesser = null)
    {
        if ($mimeTypeGuesser instanceof DeprecatedMimeTypeGuesserInterface) {
            @trigger_error(sprintf('Passing a %s to "%s()" is deprecated since Symfony 4.3, pass a "%s" instead.', DeprecatedMimeTypeGuesserInterface::class, __METHOD__, MimeTypeGuesserInterface::class), E_USER_DEPRECATED);
        } elseif (null === $mimeTypeGuesser) {
            if (class_exists(MimeTypes::class)) {
                $mimeTypeGuesser = MimeTypes::getDefault();
            } elseif (class_exists(MimeTypeGuesser::class)) {
                @trigger_error(sprintf('Passing null to "%s()" to use a default MIME type guesser without Symfony Mime installed is deprecated since Symfony 4.3. Try running "composer require symfony/mime".', __METHOD__), E_USER_DEPRECATED);
                $mimeTypeGuesser = MimeTypeGuesser::getInstance();
            }
        } elseif (!$mimeTypeGuesser instanceof MimeTypes) {
            throw new \TypeError(sprintf('Argument 1 passed to "%s()" must be an instance of "%s" or null, %s given.', __METHOD__, MimeTypes::class, \is_object($mimeTypeGuesser) ? \get_class($mimeTypeGuesser) : \gettype($mimeTypeGuesser)));
        }

        $this->mimeTypeGuesser = $mimeTypeGuesser;
    }

    /**
     * {@inheritdoc}
     */
    public function normalize($object, $format = null, array $context = [])
    {
        if (!$object instanceof \SplFileInfo) {
            throw new InvalidArgumentException('The object must be an instance of "\SplFileInfo".');
        }

        $mimeType = $this->getMimeType($object);
        $splFileObject = $this->extractSplFileObject($object);

        $data = '';

        $splFileObject->rewind();
        while (!$splFileObject->eof()) {
            $data .= $splFileObject->fgets();
        }

        if ('text' === explode('/', $mimeType, 2)[0]) {
            return sprintf('data:%s,%s', $mimeType, rawurlencode($data));
        }

        return sprintf('data:%s;base64,%s', $mimeType, base64_encode($data));
    }

    /**
     * {@inheritdoc}
     */
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \SplFileInfo;
    }

    /**
     * {@inheritdoc}
     *
     * Regex adapted from Brian Grinstead code.
     *
     * @see https://gist.github.com/bgrins/6194623
     *
     * @throws InvalidArgumentException
     * @throws NotNormalizableValueException
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!preg_match('/^data:([a-z0-9][a-z0-9\!\#\$\&\-\^\_\+\.]{0,126}\/[a-z0-9][a-z0-9\!\#\$\&\-\^\_\+\.]{0,126}(;[a-z0-9\-]+\=[a-z0-9\-]+)?)?(;base64)?,[a-z0-9\!\$\&\\\'\,\(\)\*\+\,\;\=\-\.\_\~\:\@\/\?\%\s]*\s*$/i', $data)) {
            throw new NotNormalizableValueException('The provided "data:" URI is not valid.');
        }

        try {
            switch ($class) {
                case 'Symfony\Component\HttpFoundation\File\File':
                    return new File($data, false);

                case 'SplFileObject':
                case 'SplFileInfo':
                    return new \SplFileObject($data);
            }
        } catch (\RuntimeException $exception) {
            throw new NotNormalizableValueException($exception->getMessage(), $exception->getCode(), $exception);
        }

        throw new InvalidArgumentException(sprintf('The class parameter "%s" is not supported. It must be one of "SplFileInfo", "SplFileObject" or "Symfony\Component\HttpFoundation\File\File".', $class));
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return isset(self::$supportedTypes[$type]);
    }

    /**
     * {@inheritdoc}
     */
    public function hasCacheableSupportsMethod(): bool
    {
        return __CLASS__ === \get_class($this);
    }

    /**
     * Gets the mime type of the object. Defaults to application/octet-stream.
     *
     * @param \SplFileInfo $object
     *
     * @return string
     */
    private function getMimeType(\SplFileInfo $object)
    {
        if ($object instanceof File) {
            return $object->getMimeType();
        }

        if ($this->mimeTypeGuesser instanceof DeprecatedMimeTypeGuesserInterface && $mimeType = $this->mimeTypeGuesser->guess($object->getPathname())) {
            return $mimeType;
        }

        if ($this->mimeTypeGuesser && $mimeType = $this->mimeTypeGuesser->guessMimeType($object->getPathname())) {
            return $mimeType;
        }

        return 'application/octet-stream';
    }

    /**
     * Returns the \SplFileObject instance associated with the given \SplFileInfo instance.
     *
     * @param \SplFileInfo $object
     *
     * @return \SplFileObject
     */
    private function extractSplFileObject(\SplFileInfo $object)
    {
        if ($object instanceof \SplFileObject) {
            return $object;
        }

        return $object->openFile();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
