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
use Symfony\Component\Form\ButtonTypeInterface;

/**
 * A reset button.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ResetType extends AbstractType implements ButtonTypeInterface
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return __NAMESPACE__.'\ButtonType';
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'reset';
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
use Symfony\Component\Form\ButtonTypeInterface;

/**
 * A reset button.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ResetType extends AbstractType implements ButtonTypeInterface
{
    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return __NAMESPACE__.'\ButtonType';
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'reset';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
