<<<<<<< HEAD
<?php

namespace Doctrine\Bundle\DoctrineBundle\Mapping;

use Doctrine\ORM\Mapping\EntityListenerResolver;

interface EntityListenerServiceResolver extends EntityListenerResolver
{
    /**
     * @param string $className
     * @param string $serviceId
     */
    public function registerService($className, $serviceId);
}
=======
<?php

namespace Doctrine\Bundle\DoctrineBundle\Mapping;

use Doctrine\ORM\Mapping\EntityListenerResolver;

interface EntityListenerServiceResolver extends EntityListenerResolver
{
    /**
     * @param string $className
     * @param string $serviceId
     */
    public function registerService($className, $serviceId);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
