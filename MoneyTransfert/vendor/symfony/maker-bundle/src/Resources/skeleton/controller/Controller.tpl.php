<<<<<<< HEAD
<?= "<?php\n" ?>

namespace <?= $namespace; ?>;

use Symfony\Bundle\FrameworkBundle\Controller\<?= $parent_class_name; ?>;
use Symfony\Component\Routing\Annotation\Route;

class <?= $class_name; ?> extends <?= $parent_class_name; ?><?= "\n" ?>
{
    /**
     * @Route("<?= $route_path ?>", name="<?= $route_name ?>")
     */
    public function index()
    {
<?php if ($with_template) { ?>
        return $this->render('<?= $template_name ?>', [
            'controller_name' => '<?= $class_name ?>',
        ]);
<?php } else { ?>
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => '<?= $relative_path; ?>',
        ]);
<?php } ?>
    }
}
=======
<?= "<?php\n" ?>

namespace <?= $namespace; ?>;

use Symfony\Bundle\FrameworkBundle\Controller\<?= $parent_class_name; ?>;
use Symfony\Component\Routing\Annotation\Route;

class <?= $class_name; ?> extends <?= $parent_class_name; ?><?= "\n" ?>
{
    /**
     * @Route("<?= $route_path ?>", name="<?= $route_name ?>")
     */
    public function index()
    {
<?php if ($with_template) { ?>
        return $this->render('<?= $template_name ?>', [
            'controller_name' => '<?= $class_name ?>',
        ]);
<?php } else { ?>
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => '<?= $relative_path; ?>',
        ]);
<?php } ?>
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
