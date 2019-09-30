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

namespace Symfony\Bridge\PhpUnit\Legacy;

use PHPUnit\Framework\Test;
use PHPUnit\Framework\TestListener;
use PHPUnit\Framework\TestListenerDefaultImplementation;

/**
 * CoverageListener adds `@covers <className>` on each test when possible to
 * make the code coverage more accurate.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 *
 * @internal
 */
class CoverageListenerForV7 implements TestListener
{
    use TestListenerDefaultImplementation;

    private $trait;

    public function __construct(callable $sutFqcnResolver = null, $warningOnSutNotFound = false)
    {
        $this->trait = new CoverageListenerTrait($sutFqcnResolver, $warningOnSutNotFound);
    }

    public function startTest(Test $test): void
    {
        $this->trait->startTest($test);
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

namespace Symfony\Bridge\PhpUnit\Legacy;

use PHPUnit\Framework\Test;
use PHPUnit\Framework\TestListener;
use PHPUnit\Framework\TestListenerDefaultImplementation;

/**
 * CoverageListener adds `@covers <className>` on each test when possible to
 * make the code coverage more accurate.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 *
 * @internal
 */
class CoverageListenerForV7 implements TestListener
{
    use TestListenerDefaultImplementation;

    private $trait;

    public function __construct(callable $sutFqcnResolver = null, $warningOnSutNotFound = false)
    {
        $this->trait = new CoverageListenerTrait($sutFqcnResolver, $warningOnSutNotFound);
    }

    public function startTest(Test $test): void
    {
        $this->trait->startTest($test);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
