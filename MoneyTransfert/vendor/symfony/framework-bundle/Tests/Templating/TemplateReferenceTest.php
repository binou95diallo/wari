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

namespace Symfony\Bundle\FrameworkBundle\Tests\Templating;

use Symfony\Bundle\FrameworkBundle\Templating\TemplateReference;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

/**
 * @group legacy
 */
class TemplateReferenceTest extends TestCase
{
    public function testGetPathWorksWithNamespacedControllers()
    {
        $reference = new TemplateReference('AcmeBlogBundle', 'Admin\Post', 'index', 'html', 'twig');

        $this->assertSame(
            '@AcmeBlogBundle/Resources/views/Admin/Post/index.html.twig',
            $reference->getPath()
        );
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

namespace Symfony\Bundle\FrameworkBundle\Tests\Templating;

use Symfony\Bundle\FrameworkBundle\Templating\TemplateReference;
use Symfony\Bundle\FrameworkBundle\Tests\TestCase;

/**
 * @group legacy
 */
class TemplateReferenceTest extends TestCase
{
    public function testGetPathWorksWithNamespacedControllers()
    {
        $reference = new TemplateReference('AcmeBlogBundle', 'Admin\Post', 'index', 'html', 'twig');

        $this->assertSame(
            '@AcmeBlogBundle/Resources/views/Admin/Post/index.html.twig',
            $reference->getPath()
        );
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
