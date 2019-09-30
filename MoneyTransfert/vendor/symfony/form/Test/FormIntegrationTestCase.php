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

namespace Symfony\Component\Form\Test;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\Forms;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class FormIntegrationTestCase extends TestCase
{
    use TestCaseSetUpTearDownTrait;

    /**
     * @var FormFactoryInterface
     */
    protected $factory;

    private function doSetUp()
    {
        $this->factory = Forms::createFormFactoryBuilder()
            ->addExtensions($this->getExtensions())
            ->addTypeExtensions($this->getTypeExtensions())
            ->addTypes($this->getTypes())
            ->addTypeGuessers($this->getTypeGuessers())
            ->getFormFactory();
    }

    protected function getExtensions()
    {
        return [];
    }

    protected function getTypeExtensions()
    {
        return [];
    }

    protected function getTypes()
    {
        return [];
    }

    protected function getTypeGuessers()
    {
        return [];
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

namespace Symfony\Component\Form\Test;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\Forms;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class FormIntegrationTestCase extends TestCase
{
    use TestCaseSetUpTearDownTrait;

    /**
     * @var FormFactoryInterface
     */
    protected $factory;

    private function doSetUp()
    {
        $this->factory = Forms::createFormFactoryBuilder()
            ->addExtensions($this->getExtensions())
            ->addTypeExtensions($this->getTypeExtensions())
            ->addTypes($this->getTypes())
            ->addTypeGuessers($this->getTypeGuessers())
            ->getFormFactory();
    }

    protected function getExtensions()
    {
        return [];
    }

    protected function getTypeExtensions()
    {
        return [];
    }

    protected function getTypes()
    {
        return [];
    }

    protected function getTypeGuessers()
    {
        return [];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
