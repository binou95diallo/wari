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

namespace Symfony\Bundle\SecurityBundle\Tests\Functional\Bundle\AutowiringBundle;

use Symfony\Component\Security\Core\Authorization\AccessDecisionManagerInterface;

class AutowiredServices
{
    private $accessDecisionManager;

    public function __construct(AccessDecisionManagerInterface $accessDecisionManager)
    {
        $this->accessDecisionManager = $accessDecisionManager;
    }

    public function getAccessDecisionManager()
    {
        return $this->accessDecisionManager;
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

namespace Symfony\Bundle\SecurityBundle\Tests\Functional\Bundle\AutowiringBundle;

use Symfony\Component\Security\Core\Authorization\AccessDecisionManagerInterface;

class AutowiredServices
{
    private $accessDecisionManager;

    public function __construct(AccessDecisionManagerInterface $accessDecisionManager)
    {
        $this->accessDecisionManager = $accessDecisionManager;
    }

    public function getAccessDecisionManager()
    {
        return $this->accessDecisionManager;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
