<<<<<<< HEAD
<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\MakerBundle;

use Symfony\Component\Console\Application;

/**
 * Implement this interface if your Maker needs access to the Application.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
interface ApplicationAwareMakerInterface
{
    /**
     * @param Application $application
     */
    public function setApplication(Application $application);
}
=======
<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\MakerBundle;

use Symfony\Component\Console\Application;

/**
 * Implement this interface if your Maker needs access to the Application.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
interface ApplicationAwareMakerInterface
{
    /**
     * @param Application $application
     */
    public function setApplication(Application $application);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
