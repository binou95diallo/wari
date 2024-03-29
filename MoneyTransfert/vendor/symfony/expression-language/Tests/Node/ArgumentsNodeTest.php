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

namespace Symfony\Component\ExpressionLanguage\Tests\Node;

use Symfony\Component\ExpressionLanguage\Node\ArgumentsNode;

class ArgumentsNodeTest extends ArrayNodeTest
{
    public function getCompileData()
    {
        return [
            ['"a", "b"', $this->getArrayNode()],
        ];
    }

    public function getDumpData()
    {
        return [
            ['"a", "b"', $this->getArrayNode()],
        ];
    }

    protected function createArrayNode()
    {
        return new ArgumentsNode();
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

namespace Symfony\Component\ExpressionLanguage\Tests\Node;

use Symfony\Component\ExpressionLanguage\Node\ArgumentsNode;

class ArgumentsNodeTest extends ArrayNodeTest
{
    public function getCompileData()
    {
        return [
            ['"a", "b"', $this->getArrayNode()],
        ];
    }

    public function getDumpData()
    {
        return [
            ['"a", "b"', $this->getArrayNode()],
        ];
    }

    protected function createArrayNode()
    {
        return new ArgumentsNode();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
