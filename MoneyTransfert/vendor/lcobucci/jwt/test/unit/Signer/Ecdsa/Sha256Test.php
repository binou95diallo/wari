<<<<<<< HEAD
<?php
/**
 * This file is part of Lcobucci\JWT, a simple library to handle JWT and JWS
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Lcobucci\JWT\Signer\Ecdsa;

/**
 * @author Luís Otávio Cobucci Oblonczyk <lcobucci@gmail.com>
 * @since 2.1.0
 */
class Sha256Test extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     *
     * @uses Lcobucci\JWT\Signer\Ecdsa
     * @uses Lcobucci\JWT\Signer\OpenSSL
     *
     * @covers Lcobucci\JWT\Signer\Ecdsa\Sha256::getAlgorithmId
     */
    public function getAlgorithmIdMustBeCorrect()
    {
        $signer = new Sha256();

        $this->assertEquals('ES256', $signer->getAlgorithmId());
    }

    /**
     * @test
     *
     * @uses Lcobucci\JWT\Signer\Ecdsa
     * @uses Lcobucci\JWT\Signer\OpenSSL
     *
     * @covers Lcobucci\JWT\Signer\Ecdsa\Sha256::getAlgorithm
     */
    public function getAlgorithmMustBeCorrect()
    {
        $signer = new Sha256();

        $this->assertEquals('sha256', $signer->getAlgorithm());
    }

    /**
     * @test
     *
     * @uses Lcobucci\JWT\Signer\Ecdsa
     * @uses Lcobucci\JWT\Signer\OpenSSL
     *
     * @covers Lcobucci\JWT\Signer\Ecdsa\Sha256::getKeyLength
     */
    public function getKeyLengthMustBeCorrect()
    {
        $signer = new Sha256();

        $this->assertEquals(64, $signer->getKeyLength());
    }
}
=======
<?php
/**
 * This file is part of Lcobucci\JWT, a simple library to handle JWT and JWS
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Lcobucci\JWT\Signer\Ecdsa;

/**
 * @author Luís Otávio Cobucci Oblonczyk <lcobucci@gmail.com>
 * @since 2.1.0
 */
class Sha256Test extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     *
     * @uses Lcobucci\JWT\Signer\Ecdsa
     * @uses Lcobucci\JWT\Signer\OpenSSL
     *
     * @covers Lcobucci\JWT\Signer\Ecdsa\Sha256::getAlgorithmId
     */
    public function getAlgorithmIdMustBeCorrect()
    {
        $signer = new Sha256();

        $this->assertEquals('ES256', $signer->getAlgorithmId());
    }

    /**
     * @test
     *
     * @uses Lcobucci\JWT\Signer\Ecdsa
     * @uses Lcobucci\JWT\Signer\OpenSSL
     *
     * @covers Lcobucci\JWT\Signer\Ecdsa\Sha256::getAlgorithm
     */
    public function getAlgorithmMustBeCorrect()
    {
        $signer = new Sha256();

        $this->assertEquals('sha256', $signer->getAlgorithm());
    }

    /**
     * @test
     *
     * @uses Lcobucci\JWT\Signer\Ecdsa
     * @uses Lcobucci\JWT\Signer\OpenSSL
     *
     * @covers Lcobucci\JWT\Signer\Ecdsa\Sha256::getKeyLength
     */
    public function getKeyLengthMustBeCorrect()
    {
        $signer = new Sha256();

        $this->assertEquals(64, $signer->getKeyLength());
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
