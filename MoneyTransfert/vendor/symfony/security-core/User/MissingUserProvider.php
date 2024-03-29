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

namespace Symfony\Component\Security\Core\User;

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * MissingUserProvider is a dummy user provider used to throw proper exception
 * when a firewall requires a user provider but none was defined.
 *
 * @internal
 */
class MissingUserProvider implements UserProviderInterface
{
    /**
     * @param string $firewall the firewall missing a provider
     */
    public function __construct(string $firewall)
    {
        throw new InvalidConfigurationException(sprintf('"%s" firewall requires a user provider but none was defined.', $firewall));
    }

    /**
     * {@inheritdoc}
     */
    public function loadUserByUsername($username)
    {
        throw new \BadMethodCallException();
    }

    /**
     * {@inheritdoc}
     */
    public function refreshUser(UserInterface $user)
    {
        throw new \BadMethodCallException();
    }

    /**
     * {@inheritdoc}
     */
    public function supportsClass($class)
    {
        throw new \BadMethodCallException();
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

namespace Symfony\Component\Security\Core\User;

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * MissingUserProvider is a dummy user provider used to throw proper exception
 * when a firewall requires a user provider but none was defined.
 *
 * @internal
 */
class MissingUserProvider implements UserProviderInterface
{
    /**
     * @param string $firewall the firewall missing a provider
     */
    public function __construct(string $firewall)
    {
        throw new InvalidConfigurationException(sprintf('"%s" firewall requires a user provider but none was defined.', $firewall));
    }

    /**
     * {@inheritdoc}
     */
    public function loadUserByUsername($username)
    {
        throw new \BadMethodCallException();
    }

    /**
     * {@inheritdoc}
     */
    public function refreshUser(UserInterface $user)
    {
        throw new \BadMethodCallException();
    }

    /**
     * {@inheritdoc}
     */
    public function supportsClass($class)
    {
        throw new \BadMethodCallException();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
