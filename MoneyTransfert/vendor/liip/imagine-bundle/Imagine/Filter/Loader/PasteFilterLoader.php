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
use Imagine\Image\ImagineInterface;
use Imagine\Image\Point;

class PasteFilterLoader implements LoaderInterface
{
    /**
     * @var ImagineInterface
     */
    protected $imagine;

    /**
     * @var string
     */
    protected $rootPath;

    public function __construct(ImagineInterface $imagine, $rootPath)
    {
        $this->imagine = $imagine;
        $this->rootPath = $rootPath;
    }

    /**
     * @see \Liip\ImagineBundle\Imagine\Filter\Loader\LoaderInterface::load()
     *
     * @param ImageInterface $image
     * @param array          $options
     *
     * @return ImageInterface|static
     */
    public function load(ImageInterface $image, array $options = [])
    {
        $x = isset($options['start'][0]) ? $options['start'][0] : null;
        $y = isset($options['start'][1]) ? $options['start'][1] : null;

        $destImage = $this->imagine->open($this->rootPath.'/'.$options['image']);

        return $image->paste($destImage, new Point($x, $y));
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
use Imagine\Image\ImagineInterface;
use Imagine\Image\Point;

class PasteFilterLoader implements LoaderInterface
{
    /**
     * @var ImagineInterface
     */
    protected $imagine;

    /**
     * @var string
     */
    protected $rootPath;

    public function __construct(ImagineInterface $imagine, $rootPath)
    {
        $this->imagine = $imagine;
        $this->rootPath = $rootPath;
    }

    /**
     * @see \Liip\ImagineBundle\Imagine\Filter\Loader\LoaderInterface::load()
     *
     * @param ImageInterface $image
     * @param array          $options
     *
     * @return ImageInterface|static
     */
    public function load(ImageInterface $image, array $options = [])
    {
        $x = isset($options['start'][0]) ? $options['start'][0] : null;
        $y = isset($options['start'][1]) ? $options['start'][1] : null;

        $destImage = $this->imagine->open($this->rootPath.'/'.$options['image']);

        return $image->paste($destImage, new Point($x, $y));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
