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

namespace Tests\Fixtures\FooBundle\ControllerWithVariadics;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class IsGrantedControllerWithVariadics
{
    /**
     * @Security("is_granted('ISGRANTED_VOTER', params)")
     * @IsGranted("ISGRANTED_VOTER", subject="params")
     */
    public function some4Action(Request $foo, ...$params)
    {
        return new Response('yay4');
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

namespace Tests\Fixtures\FooBundle\ControllerWithVariadics;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class IsGrantedControllerWithVariadics
{
    /**
     * @Security("is_granted('ISGRANTED_VOTER', params)")
     * @IsGranted("ISGRANTED_VOTER", subject="params")
     */
    public function some4Action(Request $foo, ...$params)
    {
        return new Response('yay4');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
