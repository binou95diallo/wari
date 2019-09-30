<<<<<<< HEAD
<?php

namespace Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\TestServiceContainer;

class PublicService
{
    private $nonPublicService;

    private $privateService;

    public function __construct(NonPublicService $nonPublicService, PrivateService $privateService)
    {
        $this->nonPublicService = $nonPublicService;
        $this->privateService = $privateService;
    }
}
=======
<?php

namespace Symfony\Bundle\FrameworkBundle\Tests\Functional\Bundle\TestBundle\TestServiceContainer;

class PublicService
{
    private $nonPublicService;

    private $privateService;

    public function __construct(NonPublicService $nonPublicService, PrivateService $privateService)
    {
        $this->nonPublicService = $nonPublicService;
        $this->privateService = $privateService;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
