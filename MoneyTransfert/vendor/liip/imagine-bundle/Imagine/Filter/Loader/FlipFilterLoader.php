<<<<<<< HEAD
<?php

/*
 * This file is part of the `liip/LiipImagineBundle` project.
 *
 * (c) https://github.com/liip/LiipImagineBundle/graphs/contributors
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Liip\ImagineBundle\Imagine\Filter\Loader;

use Imagine\Image\ImageInterface;
use Liip\ImagineBundle\Exception\InvalidArgumentException;
use Symfony\Component\OptionsResolver\Exception\ExceptionInterface;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FlipFilterLoader implements LoaderInterface
{
    /**
     * @param ImageInterface $image
     * @param array          $options
     *
     * @return ImageInterface
     */
    public function load(ImageInterface $image, array $options = [])
    {
        $options = $this->sanitizeOptions($options);

        return 'x' === $options['axis'] ? $image->flipHorizontally() : $image->flipVertically();
    }

    /**
     * @param array $options
     *
     * @return array
     */
    private function sanitizeOptions(array $options)
    {
        $resolver = new OptionsResolver();
        $resolver->setDefault('axis', 'x');
        $resolver->setAllowedValues('axis', ['x', 'horizontal', 'y', 'vertical']);
        $resolver->setNormalizer('axis', function (Options $options, $value) {
            return 'horizontal' === $value ? 'x' : ('vertical' === $value ? 'y' : $value);
        });

        try {
            return $resolver->resolve($options);
        } catch (ExceptionInterface $e) {
            throw new InvalidArgumentException('The "axis" option must be set to "x", "horizontal", "y", or "vertical".');
        }
    }
}
=======
<?php

/*
 * This file is part of the `liip/LiipImagineBundle` project.
 *
 * (c) https://github.com/liip/LiipImagineBundle/graphs/contributors
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Liip\ImagineBundle\Imagine\Filter\Loader;

use Imagine\Image\ImageInterface;
use Liip\ImagineBundle\Exception\InvalidArgumentException;
use Symfony\Component\OptionsResolver\Exception\ExceptionInterface;
use Symfony\Component\OptionsResolver\Options;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FlipFilterLoader implements LoaderInterface
{
    /**
     * @param ImageInterface $image
     * @param array          $options
     *
     * @return ImageInterface
     */
    public function load(ImageInterface $image, array $options = [])
    {
        $options = $this->sanitizeOptions($options);

        return 'x' === $options['axis'] ? $image->flipHorizontally() : $image->flipVertically();
    }

    /**
     * @param array $options
     *
     * @return array
     */
    private function sanitizeOptions(array $options)
    {
        $resolver = new OptionsResolver();
        $resolver->setDefault('axis', 'x');
        $resolver->setAllowedValues('axis', ['x', 'horizontal', 'y', 'vertical']);
        $resolver->setNormalizer('axis', function (Options $options, $value) {
            return 'horizontal' === $value ? 'x' : ('vertical' === $value ? 'y' : $value);
        });

        try {
            return $resolver->resolve($options);
        } catch (ExceptionInterface $e) {
            throw new InvalidArgumentException('The "axis" option must be set to "x", "horizontal", "y", or "vertical".');
        }
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
