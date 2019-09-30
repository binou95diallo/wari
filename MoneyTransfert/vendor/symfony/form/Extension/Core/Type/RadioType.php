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

namespace Symfony\Component\Form\Extension\Core\Type;

use Symfony\Component\Form\AbstractType;

class RadioType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return __NAMESPACE__.'\CheckboxType';
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'radio';
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

namespace Symfony\Component\Form\Extension\Core\Type;

use Symfony\Component\Form\AbstractType;

class RadioType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return __NAMESPACE__.'\CheckboxType';
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'radio';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
