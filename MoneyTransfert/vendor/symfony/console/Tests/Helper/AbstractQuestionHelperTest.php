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

namespace Symfony\Component\Console\Tests\Helper;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\StreamableInputInterface;

abstract class AbstractQuestionHelperTest extends TestCase
{
    protected function createStreamableInputInterfaceMock($stream = null, $interactive = true)
    {
        $mock = $this->getMockBuilder(StreamableInputInterface::class)->getMock();
        $mock->expects($this->any())
            ->method('isInteractive')
            ->willReturn($interactive);

        if ($stream) {
            $mock->expects($this->any())
                ->method('getStream')
                ->willReturn($stream);
        }

        return $mock;
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

namespace Symfony\Component\Console\Tests\Helper;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\StreamableInputInterface;

abstract class AbstractQuestionHelperTest extends TestCase
{
    protected function createStreamableInputInterfaceMock($stream = null, $interactive = true)
    {
        $mock = $this->getMockBuilder(StreamableInputInterface::class)->getMock();
        $mock->expects($this->any())
            ->method('isInteractive')
            ->willReturn($interactive);

        if ($stream) {
            $mock->expects($this->any())
                ->method('getStream')
                ->willReturn($stream);
        }

        return $mock;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
