<<<<<<< HEAD
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Tests\Functional\Bundle;

use Lexik\Bundle\JWTAuthenticationBundle\Tests\Functional\Bundle\DependencyInjection\BundleExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle as BaseBundle;

class Bundle extends BaseBundle
{
    public function getContainerExtension()
    {
        return new BundleExtension();
    }
}
=======
<?php

namespace Lexik\Bundle\JWTAuthenticationBundle\Tests\Functional\Bundle;

use Lexik\Bundle\JWTAuthenticationBundle\Tests\Functional\Bundle\DependencyInjection\BundleExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle as BaseBundle;

class Bundle extends BaseBundle
{
    public function getContainerExtension()
    {
        return new BundleExtension();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
