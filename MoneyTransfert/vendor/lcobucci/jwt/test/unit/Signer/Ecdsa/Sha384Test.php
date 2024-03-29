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
class Sha384Test extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     *
     * @uses Lcobucci\JWT\Signer\Ecdsa
     * @uses Lcobucci\JWT\Signer\OpenSSL
     *
     * @covers Lcobucci\JWT\Signer\Ecdsa\Sha384::getAlgorithmId
     */
    public function getAlgorithmIdMustBeCorrect()
    {
        $signer = new Sha384();

        $this->assertEquals('ES384', $signer->getAlgorithmId());
    }

    /**
     * @test
     *
     * @uses Lcobucci\JWT\Signer\Ecdsa
     * @uses Lcobucci\JWT\Signer\OpenSSL
     *
     * @covers Lcobucci\JWT\Signer\Ecdsa\Sha384::getAlgorithm
     */
    public function getAlgorithmMustBeCorrect()
    {
        $signer = new Sha384();

        $this->assertEquals('sha384', $signer->getAlgorithm());
    }

    /**
     * @test
     *
     * @uses Lcobucci\JWT\Signer\Ecdsa
     * @uses Lcobucci\JWT\Signer\OpenSSL
     *
     * @covers Lcobucci\JWT\Signer\Ecdsa\Sha384::getKeyLength
     */
    public function getKeyLengthMustBeCorrect()
    {
        $signer = new Sha384();

        $this->assertEquals(96, $signer->getKeyLength());
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
class Sha384Test extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     *
     * @uses Lcobucci\JWT\Signer\Ecdsa
     * @uses Lcobucci\JWT\Signer\OpenSSL
     *
     * @covers Lcobucci\JWT\Signer\Ecdsa\Sha384::getAlgorithmId
     */
    public function getAlgorithmIdMustBeCorrect()
    {
        $signer = new Sha384();

        $this->assertEquals('ES384', $signer->getAlgorithmId());
    }

    /**
     * @test
     *
     * @uses Lcobucci\JWT\Signer\Ecdsa
     * @uses Lcobucci\JWT\Signer\OpenSSL
     *
     * @covers Lcobucci\JWT\Signer\Ecdsa\Sha384::getAlgorithm
     */
    public function getAlgorithmMustBeCorrect()
    {
        $signer = new Sha384();

        $this->assertEquals('sha384', $signer->getAlgorithm());
    }

    /**
     * @test
     *
     * @uses Lcobucci\JWT\Signer\Ecdsa
     * @uses Lcobucci\JWT\Signer\OpenSSL
     *
     * @covers Lcobucci\JWT\Signer\Ecdsa\Sha384::getKeyLength
     */
    public function getKeyLengthMustBeCorrect()
    {
        $signer = new Sha384();

        $this->assertEquals(96, $signer->getKeyLength());
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
