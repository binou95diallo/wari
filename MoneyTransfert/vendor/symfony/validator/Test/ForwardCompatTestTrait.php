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

namespace Symfony\Component\Validator\Test;

use PHPUnit\Framework\TestCase;

// Auto-adapt to PHPUnit 8 that added a `void` return-type to the setUp/tearDown methods

if ((new \ReflectionMethod(TestCase::class, 'tearDown'))->hasReturnType()) {
    /**
     * @internal
     */
    trait ForwardCompatTestTrait
    {
        private function doSetUp(): void
        {
        }

        private function doTearDown(): void
        {
        }

        protected function setUp(): void
        {
            $this->doSetUp();
        }

        protected function tearDown(): void
        {
            $this->doTearDown();
        }
    }
} else {
    /**
     * @internal
     */
    trait ForwardCompatTestTrait
    {
        /**
         * @return void
         */
        private function doSetUp()
        {
        }

        /**
         * @return void
         */
        private function doTearDown()
        {
        }

        /**
         * @return void
         */
        protected function setUp()
        {
            $this->doSetUp();
        }

        /**
         * @return void
         */
        protected function tearDown()
        {
            $this->doTearDown();
        }
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

namespace Symfony\Component\Validator\Test;

use PHPUnit\Framework\TestCase;

// Auto-adapt to PHPUnit 8 that added a `void` return-type to the setUp/tearDown methods

if ((new \ReflectionMethod(TestCase::class, 'tearDown'))->hasReturnType()) {
    /**
     * @internal
     */
    trait ForwardCompatTestTrait
    {
        private function doSetUp(): void
        {
        }

        private function doTearDown(): void
        {
        }

        protected function setUp(): void
        {
            $this->doSetUp();
        }

        protected function tearDown(): void
        {
            $this->doTearDown();
        }
    }
} else {
    /**
     * @internal
     */
    trait ForwardCompatTestTrait
    {
        /**
         * @return void
         */
        private function doSetUp()
        {
        }

        /**
         * @return void
         */
        private function doTearDown()
        {
        }

        /**
         * @return void
         */
        protected function setUp()
        {
            $this->doSetUp();
        }

        /**
         * @return void
         */
        protected function tearDown()
        {
            $this->doTearDown();
        }
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
