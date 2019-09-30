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

namespace Symfony\Component\Form\Tests\Fixtures;

use Symfony\Component\Form\AbstractType;

class RecursiveFormTypeFoo extends AbstractType
{
    public function getParent()
    {
        return RecursiveFormTypeBar::class;
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

namespace Symfony\Component\Form\Tests\Fixtures;

use Symfony\Component\Form\AbstractType;

class RecursiveFormTypeFoo extends AbstractType
{
    public function getParent()
    {
        return RecursiveFormTypeBar::class;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
