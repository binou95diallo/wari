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

namespace Symfony\Component\Routing\Tests\Fixtures\OtherAnnotatedClasses;

trait AnonymousClassInTrait
{
    public function test()
    {
        return new class() {
            public function foo()
            {
            }
        };
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

namespace Symfony\Component\Routing\Tests\Fixtures\OtherAnnotatedClasses;

trait AnonymousClassInTrait
{
    public function test()
    {
        return new class() {
            public function foo()
            {
            }
        };
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
