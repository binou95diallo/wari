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

namespace Sensio\Bundle\FrameworkExtraBundle\Tests\Request\ParamConverter;

/*
 * This class is a helper Repository for DoctrineParamConverter's map_method_signature functionality
 */
class TestUserRepository
{
    public function findByFullName($firstName, $lastName)
    {
        return $firstName.' '.$lastName;
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

namespace Sensio\Bundle\FrameworkExtraBundle\Tests\Request\ParamConverter;

/*
 * This class is a helper Repository for DoctrineParamConverter's map_method_signature functionality
 */
class TestUserRepository
{
    public function findByFullName($firstName, $lastName)
    {
        return $firstName.' '.$lastName;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
