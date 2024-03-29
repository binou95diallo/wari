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

namespace Symfony\Component\Form\Tests\Extension\Core\EventListener;

use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormFactoryBuilder;

class MergeCollectionListenerArrayObjectTest extends MergeCollectionListenerTest
{
    protected function getData(array $data)
    {
        return new \ArrayObject($data);
    }

    protected function getBuilder($name = 'name')
    {
        return new FormBuilder($name, '\ArrayObject', new EventDispatcher(), (new FormFactoryBuilder())->getFormFactory());
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

namespace Symfony\Component\Form\Tests\Extension\Core\EventListener;

use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormFactoryBuilder;

class MergeCollectionListenerArrayObjectTest extends MergeCollectionListenerTest
{
    protected function getData(array $data)
    {
        return new \ArrayObject($data);
    }

    protected function getBuilder($name = 'name')
    {
        return new FormBuilder($name, '\ArrayObject', new EventDispatcher(), (new FormFactoryBuilder())->getFormFactory());
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
