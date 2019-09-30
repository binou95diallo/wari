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

namespace Symfony\Component\VarExporter\Exception;

class ClassNotFoundException extends \Exception implements ExceptionInterface
{
    public function __construct(string $class, \Throwable $previous = null)
    {
        parent::__construct(sprintf('Class "%s" not found.', $class), 0, $previous);
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

namespace Symfony\Component\VarExporter\Exception;

class ClassNotFoundException extends \Exception implements ExceptionInterface
{
    public function __construct(string $class, \Throwable $previous = null)
    {
        parent::__construct(sprintf('Class "%s" not found.', $class), 0, $previous);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
