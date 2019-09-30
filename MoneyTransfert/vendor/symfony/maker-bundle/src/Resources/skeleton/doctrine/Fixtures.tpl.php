<<<<<<< HEAD
<?= "<?php\n" ?>

namespace <?= $namespace; ?>;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class <?= $class_name ?> extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
=======
<?= "<?php\n" ?>

namespace <?= $namespace; ?>;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class <?= $class_name ?> extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
