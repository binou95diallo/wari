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

namespace Liip\ImagineBundle\Config\Filter\Type;

use Liip\ImagineBundle\Config\FilterInterface;

/**
 * @codeCoverageIgnore
 */
abstract class FilterAbstract implements FilterInterface
{
    public function getName(): string
    {
        if (!defined('static::NAME')) {
            throw new \Exception('Constant NAME is not defined on subclass '.get_class($this));
        }

        return static::NAME;
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

namespace Liip\ImagineBundle\Config\Filter\Type;

use Liip\ImagineBundle\Config\FilterInterface;

/**
 * @codeCoverageIgnore
 */
abstract class FilterAbstract implements FilterInterface
{
    public function getName(): string
    {
        if (!defined('static::NAME')) {
            throw new \Exception('Constant NAME is not defined on subclass '.get_class($this));
        }

        return static::NAME;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
