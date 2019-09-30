<<<<<<< HEAD
<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Core\DataPersister;

/**
 * Manages data persistence.
 *
 * @author Antoine Bluchet <soyuka@gmail.com>
 */
interface ContextAwareDataPersisterInterface extends DataPersisterInterface
{
    /**
     * {@inheritdoc}
     */
    public function supports($data, array $context = []): bool;

    /**
     * {@inheritdoc}
     */
    public function persist($data, array $context = []);

    /**
     * {@inheritdoc}
     */
    public function remove($data, array $context = []);
}
=======
<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Core\DataPersister;

/**
 * Manages data persistence.
 *
 * @author Antoine Bluchet <soyuka@gmail.com>
 */
interface ContextAwareDataPersisterInterface extends DataPersisterInterface
{
    /**
     * {@inheritdoc}
     */
    public function supports($data, array $context = []): bool;

    /**
     * {@inheritdoc}
     */
    public function persist($data, array $context = []);

    /**
     * {@inheritdoc}
     */
    public function remove($data, array $context = []);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
