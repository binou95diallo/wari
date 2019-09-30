<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Metadata\Driver;

use Metadata\ClassMetadata;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LazyLoadingDriver implements DriverInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * @var string
     */
    private $realDriverId;

    public function __construct(ContainerInterface $container, string $realDriverId)
    {
        $this->container = $container;
        $this->realDriverId = $realDriverId;
    }

    /**
     * {@inheritDoc}
     */
    public function loadMetadataForClass(\ReflectionClass $class): ?ClassMetadata
    {
        return $this->container->get($this->realDriverId)->loadMetadataForClass($class);
    }
}
=======
<?php

declare(strict_types=1);

namespace Metadata\Driver;

use Metadata\ClassMetadata;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LazyLoadingDriver implements DriverInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * @var string
     */
    private $realDriverId;

    public function __construct(ContainerInterface $container, string $realDriverId)
    {
        $this->container = $container;
        $this->realDriverId = $realDriverId;
    }

    /**
     * {@inheritDoc}
     */
    public function loadMetadataForClass(\ReflectionClass $class): ?ClassMetadata
    {
        return $this->container->get($this->realDriverId)->loadMetadataForClass($class);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
