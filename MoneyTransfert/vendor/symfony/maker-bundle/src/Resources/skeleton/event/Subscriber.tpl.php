<<<<<<< HEAD
<?= "<?php\n" ?>

namespace <?= $namespace; ?>;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
<?= $event_full_class_name ? "use $event_full_class_name;\n" : '' ?>

class <?= $class_name ?> implements EventSubscriberInterface
{
    public function <?= $method_name ?>(<?= $event_arg ?>)
    {
        // ...
    }

    public static function getSubscribedEvents()
    {
        return [
            <?= $event ?> => '<?= $method_name ?>',
        ];
    }
}
=======
<?= "<?php\n" ?>

namespace <?= $namespace; ?>;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
<?= $event_full_class_name ? "use $event_full_class_name;\n" : '' ?>

class <?= $class_name ?> implements EventSubscriberInterface
{
    public function <?= $method_name ?>(<?= $event_arg ?>)
    {
        // ...
    }

    public static function getSubscribedEvents()
    {
        return [
            <?= $event ?> => '<?= $method_name ?>',
        ];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
