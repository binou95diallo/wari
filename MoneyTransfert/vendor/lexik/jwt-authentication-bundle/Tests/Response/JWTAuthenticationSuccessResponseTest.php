<<<<<<< HEAD
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Tests\Response;

use Lexik\Bundle\JWTAuthenticationBundle\Response\JWTAuthenticationSuccessResponse;
use PHPUnit\Framework\TestCase;

/**
 * Tests the JWTAuthenticationSuccessResponse.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
final class JWTAuthenticationSuccessResponseTest extends TestCase
{
    public function testResponse()
    {
        $data = [
            'username' => 'foobar',
            'email'    => 'dev@lexik.fr',
        ];
        $expected = ['token' => 'jwt'] + $data;
        $response = new JWTAuthenticationSuccessResponse($expected['token'], $data);

        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame(json_encode($expected), $response->getContent());

        return $response;
    }

    /**
     * @depends testResponse
     */
    public function testReplaceData(JWTAuthenticationSuccessResponse $response)
    {
        $replacementData = ['foo' => 'bar'];
        $response->setData($replacementData);

        // Test that the previous method call has no effect on the original body
        $this->assertEquals(json_encode($replacementData), $response->getContent());
        $this->assertAttributeSame($replacementData['foo'], 'foo', json_decode($response->getContent()));
        $this->assertFalse(isset(json_decode($response->getContent())->token));
    }
}
=======
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Tests\Response;

use Lexik\Bundle\JWTAuthenticationBundle\Response\JWTAuthenticationSuccessResponse;
use PHPUnit\Framework\TestCase;

/**
 * Tests the JWTAuthenticationSuccessResponse.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
final class JWTAuthenticationSuccessResponseTest extends TestCase
{
    public function testResponse()
    {
        $data = [
            'username' => 'foobar',
            'email'    => 'dev@lexik.fr',
        ];
        $expected = ['token' => 'jwt'] + $data;
        $response = new JWTAuthenticationSuccessResponse($expected['token'], $data);

        $this->assertSame(200, $response->getStatusCode());
        $this->assertSame(json_encode($expected), $response->getContent());

        return $response;
    }

    /**
     * @depends testResponse
     */
    public function testReplaceData(JWTAuthenticationSuccessResponse $response)
    {
        $replacementData = ['foo' => 'bar'];
        $response->setData($replacementData);

        // Test that the previous method call has no effect on the original body
        $this->assertEquals(json_encode($replacementData), $response->getContent());
        $this->assertAttributeSame($replacementData['foo'], 'foo', json_decode($response->getContent()));
        $this->assertFalse(isset(json_decode($response->getContent())->token));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
