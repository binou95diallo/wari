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

namespace Symfony\Component\Validator\Exception;

class MissingOptionsException extends ValidatorException
{
    private $options;

    public function __construct(string $message, array $options)
    {
        parent::__construct($message);

        $this->options = $options;
    }

    public function getOptions()
    {
        return $this->options;
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

namespace Symfony\Component\Validator\Exception;

class MissingOptionsException extends ValidatorException
{
    private $options;

    public function __construct(string $message, array $options)
    {
        parent::__construct($message);

        $this->options = $options;
    }

    public function getOptions()
    {
        return $this->options;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
