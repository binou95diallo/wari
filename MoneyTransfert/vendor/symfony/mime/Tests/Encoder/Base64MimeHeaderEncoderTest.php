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

namespace Symfony\Component\Mime\Tests\Encoder;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;

class Base64MimeHeaderEncoderTest extends TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new Base64MimeHeaderEncoder())->getName());
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

namespace Symfony\Component\Mime\Tests\Encoder;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Mime\Encoder\Base64MimeHeaderEncoder;

class Base64MimeHeaderEncoderTest extends TestCase
{
    public function testNameIsB()
    {
        $this->assertEquals('B', (new Base64MimeHeaderEncoder())->getName());
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
