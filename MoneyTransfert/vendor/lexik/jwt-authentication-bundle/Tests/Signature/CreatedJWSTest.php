<<<<<<< HEAD
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Tests\Signature;

use Lexik\Bundle\JWTAuthenticationBundle\Signature\CreatedJWS;
use PHPUnit\Framework\TestCase;

/**
 * Tests the CreatedJWS model class.
 */
final class CreatedJWSTest extends TestCase
{
    public function testCreateUnsigned()
    {
        $jws = new CreatedJWS($token = 'jwt', false);

        $this->assertSame($token, $jws->getToken());
        $this->assertFalse($jws->isSigned());
    }

    public function testCreateSigned()
    {
        $jws = new CreatedJWS($token = 'jwt', true);

        $this->assertSame($token, $jws->getToken());
        $this->assertTrue($jws->isSigned());
    }
}
=======
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Tests\Signature;

use Lexik\Bundle\JWTAuthenticationBundle\Signature\CreatedJWS;
use PHPUnit\Framework\TestCase;

/**
 * Tests the CreatedJWS model class.
 */
final class CreatedJWSTest extends TestCase
{
    public function testCreateUnsigned()
    {
        $jws = new CreatedJWS($token = 'jwt', false);

        $this->assertSame($token, $jws->getToken());
        $this->assertFalse($jws->isSigned());
    }

    public function testCreateSigned()
    {
        $jws = new CreatedJWS($token = 'jwt', true);

        $this->assertSame($token, $jws->getToken());
        $this->assertTrue($jws->isSigned());
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
