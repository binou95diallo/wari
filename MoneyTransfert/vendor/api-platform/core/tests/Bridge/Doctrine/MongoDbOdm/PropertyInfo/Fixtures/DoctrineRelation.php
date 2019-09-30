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

namespace ApiPlatform\Core\Tests\Bridge\Doctrine\MongoDbOdm\PropertyInfo\Fixtures;

use Doctrine\ODM\MongoDB\Mapping\Annotations\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations\Id;
use Doctrine\ODM\MongoDB\Mapping\Annotations\ReferenceOne;

/**
 * @Document
 *
 * @author Alan Poulain <contact@alanpoulain.eu>
 */
class DoctrineRelation
{
    /**
     * @Id
     */
    public $id;

    /**
     * @ReferenceOne(targetDocument=DoctrineDummy::class, inversedBy="indexedFoo")
     */
    protected $foo;
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

namespace ApiPlatform\Core\Tests\Bridge\Doctrine\MongoDbOdm\PropertyInfo\Fixtures;

use Doctrine\ODM\MongoDB\Mapping\Annotations\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations\Id;
use Doctrine\ODM\MongoDB\Mapping\Annotations\ReferenceOne;

/**
 * @Document
 *
 * @author Alan Poulain <contact@alanpoulain.eu>
 */
class DoctrineRelation
{
    /**
     * @Id
     */
    public $id;

    /**
     * @ReferenceOne(targetDocument=DoctrineDummy::class, inversedBy="indexedFoo")
     */
    protected $foo;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
