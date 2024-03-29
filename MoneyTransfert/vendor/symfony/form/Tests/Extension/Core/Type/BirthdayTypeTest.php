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

namespace Symfony\Component\Form\Tests\Extension\Core\Type;

/**
 * @author Stepan Anchugov <kixxx1@gmail.com>
 */
class BirthdayTypeTest extends DateTypeTest
{
    const TESTED_TYPE = 'Symfony\Component\Form\Extension\Core\Type\BirthdayType';

    /**
     * @expectedException \Symfony\Component\OptionsResolver\Exception\InvalidOptionsException
     */
    public function testSetInvalidYearsOption()
    {
        $this->factory->create(static::TESTED_TYPE, null, [
            'years' => 'bad value',
        ]);
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

namespace Symfony\Component\Form\Tests\Extension\Core\Type;

/**
 * @author Stepan Anchugov <kixxx1@gmail.com>
 */
class BirthdayTypeTest extends DateTypeTest
{
    const TESTED_TYPE = 'Symfony\Component\Form\Extension\Core\Type\BirthdayType';

    /**
     * @expectedException \Symfony\Component\OptionsResolver\Exception\InvalidOptionsException
     */
    public function testSetInvalidYearsOption()
    {
        $this->factory->create(static::TESTED_TYPE, null, [
            'years' => 'bad value',
        ]);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
