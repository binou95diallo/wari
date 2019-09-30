<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Event\Listeners;

use Doctrine\Common\EventSubscriber;
use Doctrine\Migrations\Event\MigrationsEventArgs;
use Doctrine\Migrations\Events;

/**
 * Listens for `onMigrationsMigrated` and, if the connection has autocommit
 * makes sure to do the final commit to ensure changes stick around.
 *
 * @internal
 */
final class AutoCommitListener implements EventSubscriber
{
    public function onMigrationsMigrated(MigrationsEventArgs $args) : void
    {
        $conn = $args->getConnection();

        if ($args->isDryRun() || $conn->isAutoCommit()) {
            return;
        }

        $conn->commit();
    }

    /** {@inheritdoc} */
    public function getSubscribedEvents()
    {
        return [Events::onMigrationsMigrated];
    }
}
=======
<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Event\Listeners;

use Doctrine\Common\EventSubscriber;
use Doctrine\Migrations\Event\MigrationsEventArgs;
use Doctrine\Migrations\Events;

/**
 * Listens for `onMigrationsMigrated` and, if the connection has autocommit
 * makes sure to do the final commit to ensure changes stick around.
 *
 * @internal
 */
final class AutoCommitListener implements EventSubscriber
{
    public function onMigrationsMigrated(MigrationsEventArgs $args) : void
    {
        $conn = $args->getConnection();

        if ($args->isDryRun() || $conn->isAutoCommit()) {
            return;
        }

        $conn->commit();
    }

    /** {@inheritdoc} */
    public function getSubscribedEvents()
    {
        return [Events::onMigrationsMigrated];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
