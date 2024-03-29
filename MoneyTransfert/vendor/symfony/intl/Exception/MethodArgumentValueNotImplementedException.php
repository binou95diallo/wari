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

namespace Symfony\Component\Intl\Exception;

/**
 * @author Eriksen Costa <eriksen.costa@infranology.com.br>
 */
class MethodArgumentValueNotImplementedException extends NotImplementedException
{
    /**
     * @param string $methodName        The method name that raised the exception
     * @param string $argName           The argument name
     * @param mixed  $argValue          The argument value that is not implemented
     * @param string $additionalMessage An optional additional message to append to the exception message
     */
    public function __construct(string $methodName, string $argName, $argValue, string $additionalMessage = '')
    {
        $message = sprintf(
            'The %s() method\'s argument $%s value %s behavior is not implemented.%s',
            $methodName,
            $argName,
            var_export($argValue, true),
            '' !== $additionalMessage ? ' '.$additionalMessage.'. ' : ''
        );

        parent::__construct($message);
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

namespace Symfony\Component\Intl\Exception;

/**
 * @author Eriksen Costa <eriksen.costa@infranology.com.br>
 */
class MethodArgumentValueNotImplementedException extends NotImplementedException
{
    /**
     * @param string $methodName        The method name that raised the exception
     * @param string $argName           The argument name
     * @param mixed  $argValue          The argument value that is not implemented
     * @param string $additionalMessage An optional additional message to append to the exception message
     */
    public function __construct(string $methodName, string $argName, $argValue, string $additionalMessage = '')
    {
        $message = sprintf(
            'The %s() method\'s argument $%s value %s behavior is not implemented.%s',
            $methodName,
            $argName,
            var_export($argValue, true),
            '' !== $additionalMessage ? ' '.$additionalMessage.'. ' : ''
        );

        parent::__construct($message);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
