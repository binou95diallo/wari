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

namespace Symfony\Bridge\Doctrine\Tests\Fixtures;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable()
 */
class DoctrineLoaderNestedEmbed
{
    /**
     * @ORM\Column(length=27)
     */
    public $nestedEmbeddedMaxLength;
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

namespace Symfony\Bridge\Doctrine\Tests\Fixtures;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable()
 */
class DoctrineLoaderNestedEmbed
{
    /**
     * @ORM\Column(length=27)
     */
    public $nestedEmbeddedMaxLength;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
