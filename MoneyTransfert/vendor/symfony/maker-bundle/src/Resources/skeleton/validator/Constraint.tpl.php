<<<<<<< HEAD
<?= "<?php\n" ?>

namespace <?= $namespace; ?>;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class <?= $class_name ?> extends Constraint
{
    /*
     * Any public properties become valid options for the annotation.
     * Then, use these in your validator class.
     */
    public $message = 'The value "{{ value }}" is not valid.';
}
=======
<?= "<?php\n" ?>

namespace <?= $namespace; ?>;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class <?= $class_name ?> extends Constraint
{
    /*
     * Any public properties become valid options for the annotation.
     * Then, use these in your validator class.
     */
    public $message = 'The value "{{ value }}" is not valid.';
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
