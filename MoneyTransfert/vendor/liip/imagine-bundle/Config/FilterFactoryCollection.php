<<<<<<< HEAD
<?php

/*
 * This file is part of the `liip/LiipImagineBundle` project.
 *
 * (c) https://github.com/liip/LiipImagineBundle/graphs/contributors
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Liip\ImagineBundle\Config;

use Liip\ImagineBundle\Exception\Config\Filter\NotFoundException;
use Liip\ImagineBundle\Factory\Config\FilterFactoryInterface;

class FilterFactoryCollection
{
    /**
     * @var FilterFactoryInterface[]
     */
    private $filterFactories = [];

    /**
     * @param FilterFactoryInterface ...$filterFactories
     */
    public function __construct(FilterFactoryInterface ...$filterFactories)
    {
        foreach ($filterFactories as $filterFactory) {
            $this->filterFactories[$filterFactory->getName()] = $filterFactory;
        }
    }

    /**
     * @param string $name
     *
     * @throws NotFoundException
     *
     * @return FilterFactoryInterface
     */
    public function getFilterFactoryByName(string $name): FilterFactoryInterface
    {
        if (!isset($this->filterFactories[$name])) {
            throw new NotFoundException(sprintf("Filter factory with name '%s' was not found.", $name));
        }

        return $this->filterFactories[$name];
    }

    /**
     * @return FilterFactoryInterface[]
     */
    public function getAll()
    {
        return $this->filterFactories;
    }
}
=======
<?php

/*
 * This file is part of the `liip/LiipImagineBundle` project.
 *
 * (c) https://github.com/liip/LiipImagineBundle/graphs/contributors
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Liip\ImagineBundle\Config;

use Liip\ImagineBundle\Exception\Config\Filter\NotFoundException;
use Liip\ImagineBundle\Factory\Config\FilterFactoryInterface;

class FilterFactoryCollection
{
    /**
     * @var FilterFactoryInterface[]
     */
    private $filterFactories = [];

    /**
     * @param FilterFactoryInterface ...$filterFactories
     */
    public function __construct(FilterFactoryInterface ...$filterFactories)
    {
        foreach ($filterFactories as $filterFactory) {
            $this->filterFactories[$filterFactory->getName()] = $filterFactory;
        }
    }

    /**
     * @param string $name
     *
     * @throws NotFoundException
     *
     * @return FilterFactoryInterface
     */
    public function getFilterFactoryByName(string $name): FilterFactoryInterface
    {
        if (!isset($this->filterFactories[$name])) {
            throw new NotFoundException(sprintf("Filter factory with name '%s' was not found.", $name));
        }

        return $this->filterFactories[$name];
    }

    /**
     * @return FilterFactoryInterface[]
     */
    public function getAll()
    {
        return $this->filterFactories;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
