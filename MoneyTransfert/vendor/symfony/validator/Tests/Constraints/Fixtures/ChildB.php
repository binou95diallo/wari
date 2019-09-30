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

namespace Symfony\Component\Validator\Tests\Constraints\Fixtures;

use Symfony\Component\Validator\Constraints as Assert;

class ChildB
{
    /**
     * @Assert\Valid
     * @Assert\NotBlank
     */
    public $name;
    /**
     * @var ChildA
     * @Assert\Valid
     * @Assert\NotBlank
     */
    public $childA;
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

namespace Symfony\Component\Validator\Tests\Constraints\Fixtures;

use Symfony\Component\Validator\Constraints as Assert;

class ChildB
{
    /**
     * @Assert\Valid
     * @Assert\NotBlank
     */
    public $name;
    /**
     * @var ChildA
     * @Assert\Valid
     * @Assert\NotBlank
     */
    public $childA;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
