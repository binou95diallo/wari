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

namespace Symfony\Component\Security\Core\Tests\Authorization\Voter;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter;
use Symfony\Component\Security\Core\Authorization\Voter\VoterInterface;
use Symfony\Component\Security\Core\Event\VoteEvent;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

class TraceableVoterTest extends TestCase
{
    public function testGetDecoratedVoterClass()
    {
        $voter = $this->getMockBuilder(VoterInterface::class)->getMockForAbstractClass();

        $sut = new TraceableVoter($voter, $this->getMockBuilder(EventDispatcherInterface::class)->getMockForAbstractClass());
        $this->assertSame($voter, $sut->getDecoratedVoter());
    }

    public function testVote()
    {
        $voter = $this->getMockBuilder(VoterInterface::class)->getMockForAbstractClass();

        $eventDispatcher = $this->getMockBuilder(EventDispatcherInterface::class)->getMockForAbstractClass();
        $token = $this->getMockBuilder(TokenInterface::class)->getMockForAbstractClass();

        $voter
            ->expects($this->once())
            ->method('vote')
            ->with($token, 'anysubject', ['attr1'])
            ->willReturn(VoterInterface::ACCESS_DENIED);

        $eventDispatcher
            ->expects($this->once())
            ->method('dispatch')
            ->with(new VoteEvent($voter, 'anysubject', ['attr1'], VoterInterface::ACCESS_DENIED), 'debug.security.authorization.vote');

        $sut = new TraceableVoter($voter, $eventDispatcher);
        $result = $sut->vote($token, 'anysubject', ['attr1']);

        $this->assertSame(VoterInterface::ACCESS_DENIED, $result);
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

namespace Symfony\Component\Security\Core\Tests\Authorization\Voter;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter;
use Symfony\Component\Security\Core\Authorization\Voter\VoterInterface;
use Symfony\Component\Security\Core\Event\VoteEvent;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

class TraceableVoterTest extends TestCase
{
    public function testGetDecoratedVoterClass()
    {
        $voter = $this->getMockBuilder(VoterInterface::class)->getMockForAbstractClass();

        $sut = new TraceableVoter($voter, $this->getMockBuilder(EventDispatcherInterface::class)->getMockForAbstractClass());
        $this->assertSame($voter, $sut->getDecoratedVoter());
    }

    public function testVote()
    {
        $voter = $this->getMockBuilder(VoterInterface::class)->getMockForAbstractClass();

        $eventDispatcher = $this->getMockBuilder(EventDispatcherInterface::class)->getMockForAbstractClass();
        $token = $this->getMockBuilder(TokenInterface::class)->getMockForAbstractClass();

        $voter
            ->expects($this->once())
            ->method('vote')
            ->with($token, 'anysubject', ['attr1'])
            ->willReturn(VoterInterface::ACCESS_DENIED);

        $eventDispatcher
            ->expects($this->once())
            ->method('dispatch')
            ->with(new VoteEvent($voter, 'anysubject', ['attr1'], VoterInterface::ACCESS_DENIED), 'debug.security.authorization.vote');

        $sut = new TraceableVoter($voter, $eventDispatcher);
        $result = $sut->vote($token, 'anysubject', ['attr1']);

        $this->assertSame(VoterInterface::ACCESS_DENIED, $result);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
