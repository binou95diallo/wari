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

use Symfony\Component\Ldap\Entry;
use Symfony\Component\Ldap\Exception\ConnectionException;
use Symfony\Component\Ldap\LdapInterface;
use Symfony\Component\Security\Core\Exception\InvalidArgumentException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;

/**
 * LdapUserProvider is a simple user provider on top of ldap.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 * @author Charles Sarrazin <charles@sarraz.in>
 */
class LdapUserProvider implements UserProviderInterface
{
    private $ldap;
    private $baseDn;
    private $searchDn;
    private $searchPassword;
    private $defaultRoles;
    private $uidKey;
    private $defaultSearch;
    private $passwordAttribute;

    public function __construct(LdapInterface $ldap, string $baseDn, string $searchDn = null, string $searchPassword = null, array $defaultRoles = [], string $uidKey = null, string $filter = null, string $passwordAttribute = null)
    {
        if (null === $uidKey) {
            $uidKey = 'sAMAccountName';
        }

        if (null === $filter) {
            $filter = '({uid_key}={username})';
        }

        $this->ldap = $ldap;
        $this->baseDn = $baseDn;
        $this->searchDn = $searchDn;
        $this->searchPassword = $searchPassword;
        $this->defaultRoles = $defaultRoles;
        $this->uidKey = $uidKey;
        $this->defaultSearch = str_replace('{uid_key}', $uidKey, $filter);
        $this->passwordAttribute = $passwordAttribute;
    }

    /**
     * {@inheritdoc}
     */
    public function loadUserByUsername($username)
    {
        try {
            $this->ldap->bind($this->searchDn, $this->searchPassword);
            $username = $this->ldap->escape($username, '', LdapInterface::ESCAPE_FILTER);
            $query = str_replace('{username}', $username, $this->defaultSearch);
            $search = $this->ldap->query($this->baseDn, $query);
        } catch (ConnectionException $e) {
            throw new UsernameNotFoundException(sprintf('User "%s" not found.', $username), 0, $e);
        }

        $entries = $search->execute();
        $count = \count($entries);

        if (!$count) {
            throw new UsernameNotFoundException(sprintf('User "%s" not found.', $username));
        }

        if ($count > 1) {
            throw new UsernameNotFoundException('More than one user found');
        }

        $entry = $entries[0];

        try {
            if (null !== $this->uidKey) {
                $username = $this->getAttributeValue($entry, $this->uidKey);
            }
        } catch (InvalidArgumentException $e) {
        }

        return $this->loadUser($username, $entry);
    }

    /**
     * {@inheritdoc}
     */
    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        return new User($user->getUsername(), null, $user->getRoles());
    }

    /**
     * {@inheritdoc}
     */
    public function supportsClass($class)
    {
        return 'Symfony\Component\Security\Core\User\User' === $class;
    }

    /**
     * Loads a user from an LDAP entry.
     *
     * @param string $username
     * @param Entry  $entry
     *
     * @return User
     */
    protected function loadUser($username, Entry $entry)
    {
        $password = null;

        if (null !== $this->passwordAttribute) {
            $password = $this->getAttributeValue($entry, $this->passwordAttribute);
        }

        return new User($username, $password, $this->defaultRoles);
    }

    /**
     * Fetches a required unique attribute value from an LDAP entry.
     *
     * @param Entry|null $entry
     * @param string     $attribute
     */
    private function getAttributeValue(Entry $entry, $attribute)
    {
        if (!$entry->hasAttribute($attribute)) {
            throw new InvalidArgumentException(sprintf('Missing attribute "%s" for user "%s".', $attribute, $entry->getDn()));
        }

        $values = $entry->getAttribute($attribute);

        if (1 !== \count($values)) {
            throw new InvalidArgumentException(sprintf('Attribute "%s" has multiple values.', $attribute));
        }

        return $values[0];
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

use Symfony\Component\Ldap\Entry;
use Symfony\Component\Ldap\Exception\ConnectionException;
use Symfony\Component\Ldap\LdapInterface;
use Symfony\Component\Security\Core\Exception\InvalidArgumentException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;

/**
 * LdapUserProvider is a simple user provider on top of ldap.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 * @author Charles Sarrazin <charles@sarraz.in>
 */
class LdapUserProvider implements UserProviderInterface
{
    private $ldap;
    private $baseDn;
    private $searchDn;
    private $searchPassword;
    private $defaultRoles;
    private $uidKey;
    private $defaultSearch;
    private $passwordAttribute;

    public function __construct(LdapInterface $ldap, string $baseDn, string $searchDn = null, string $searchPassword = null, array $defaultRoles = [], string $uidKey = null, string $filter = null, string $passwordAttribute = null)
    {
        if (null === $uidKey) {
            $uidKey = 'sAMAccountName';
        }

        if (null === $filter) {
            $filter = '({uid_key}={username})';
        }

        $this->ldap = $ldap;
        $this->baseDn = $baseDn;
        $this->searchDn = $searchDn;
        $this->searchPassword = $searchPassword;
        $this->defaultRoles = $defaultRoles;
        $this->uidKey = $uidKey;
        $this->defaultSearch = str_replace('{uid_key}', $uidKey, $filter);
        $this->passwordAttribute = $passwordAttribute;
    }

    /**
     * {@inheritdoc}
     */
    public function loadUserByUsername($username)
    {
        try {
            $this->ldap->bind($this->searchDn, $this->searchPassword);
            $username = $this->ldap->escape($username, '', LdapInterface::ESCAPE_FILTER);
            $query = str_replace('{username}', $username, $this->defaultSearch);
            $search = $this->ldap->query($this->baseDn, $query);
        } catch (ConnectionException $e) {
            throw new UsernameNotFoundException(sprintf('User "%s" not found.', $username), 0, $e);
        }

        $entries = $search->execute();
        $count = \count($entries);

        if (!$count) {
            throw new UsernameNotFoundException(sprintf('User "%s" not found.', $username));
        }

        if ($count > 1) {
            throw new UsernameNotFoundException('More than one user found');
        }

        $entry = $entries[0];

        try {
            if (null !== $this->uidKey) {
                $username = $this->getAttributeValue($entry, $this->uidKey);
            }
        } catch (InvalidArgumentException $e) {
        }

        return $this->loadUser($username, $entry);
    }

    /**
     * {@inheritdoc}
     */
    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', \get_class($user)));
        }

        return new User($user->getUsername(), null, $user->getRoles());
    }

    /**
     * {@inheritdoc}
     */
    public function supportsClass($class)
    {
        return 'Symfony\Component\Security\Core\User\User' === $class;
    }

    /**
     * Loads a user from an LDAP entry.
     *
     * @param string $username
     * @param Entry  $entry
     *
     * @return User
     */
    protected function loadUser($username, Entry $entry)
    {
        $password = null;

        if (null !== $this->passwordAttribute) {
            $password = $this->getAttributeValue($entry, $this->passwordAttribute);
        }

        return new User($username, $password, $this->defaultRoles);
    }

    /**
     * Fetches a required unique attribute value from an LDAP entry.
     *
     * @param Entry|null $entry
     * @param string     $attribute
     */
    private function getAttributeValue(Entry $entry, $attribute)
    {
        if (!$entry->hasAttribute($attribute)) {
            throw new InvalidArgumentException(sprintf('Missing attribute "%s" for user "%s".', $attribute, $entry->getDn()));
        }

        $values = $entry->getAttribute($attribute);

        if (1 !== \count($values)) {
            throw new InvalidArgumentException(sprintf('Attribute "%s" has multiple values.', $attribute));
        }

        return $values[0];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
