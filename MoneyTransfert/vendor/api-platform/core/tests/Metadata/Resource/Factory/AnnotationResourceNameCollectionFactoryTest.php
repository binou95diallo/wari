<<<<<<< HEAD
<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Core\Tests\Metadata\Resource\Factory;

use ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceNameCollectionFactory;
use ApiPlatform\Core\Metadata\Resource\Factory\ResourceNameCollectionFactoryInterface;
use ApiPlatform\Core\Metadata\Resource\ResourceNameCollection;
use Doctrine\Common\Annotations\Reader;
use PHPUnit\Framework\TestCase;

/**
 * @author Antoine Bluchet <soyuka@gmail.com>
 */
class AnnotationResourceNameCollectionFactoryTest extends TestCase
{
    public function testCreate()
    {
        $decorated = $this->prophesize(ResourceNameCollectionFactoryInterface::class);
        $decorated->create()->willReturn(new ResourceNameCollection(['foo', 'bar']))->shouldBeCalled();

        $reader = $this->prophesize(Reader::class);

        $metadata = new AnnotationResourceNameCollectionFactory($reader->reveal(), [], $decorated->reveal());

        $this->assertEquals(new ResourceNameCollection(['foo', 'bar']), $metadata->create());
    }
}
=======
<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Core\Tests\Metadata\Resource\Factory;

use ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceNameCollectionFactory;
use ApiPlatform\Core\Metadata\Resource\Factory\ResourceNameCollectionFactoryInterface;
use ApiPlatform\Core\Metadata\Resource\ResourceNameCollection;
use Doctrine\Common\Annotations\Reader;
use PHPUnit\Framework\TestCase;

/**
 * @author Antoine Bluchet <soyuka@gmail.com>
 */
class AnnotationResourceNameCollectionFactoryTest extends TestCase
{
    public function testCreate()
    {
        $decorated = $this->prophesize(ResourceNameCollectionFactoryInterface::class);
        $decorated->create()->willReturn(new ResourceNameCollection(['foo', 'bar']))->shouldBeCalled();

        $reader = $this->prophesize(Reader::class);

        $metadata = new AnnotationResourceNameCollectionFactory($reader->reveal(), [], $decorated->reveal());

        $this->assertEquals(new ResourceNameCollection(['foo', 'bar']), $metadata->create());
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
