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

namespace Symfony\Component\Validator\Tests\Constraints;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Validator\Constraints\All;
use Symfony\Component\Validator\Constraints\Valid;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class AllTest extends TestCase
{
    public function testRejectNonConstraints()
    {
        $this->expectException('Symfony\Component\Validator\Exception\ConstraintDefinitionException');
        new All([
            'foo',
        ]);
    }

    public function testRejectValidConstraint()
    {
        $this->expectException('Symfony\Component\Validator\Exception\ConstraintDefinitionException');
        new All([
            new Valid(),
        ]);
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

namespace Symfony\Component\Validator\Tests\Constraints;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Validator\Constraints\All;
use Symfony\Component\Validator\Constraints\Valid;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class AllTest extends TestCase
{
    public function testRejectNonConstraints()
    {
        $this->expectException('Symfony\Component\Validator\Exception\ConstraintDefinitionException');
        new All([
            'foo',
        ]);
    }

    public function testRejectValidConstraint()
    {
        $this->expectException('Symfony\Component\Validator\Exception\ConstraintDefinitionException');
        new All([
            new Valid(),
        ]);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
