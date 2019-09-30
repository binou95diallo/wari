<<<<<<< HEAD
<?php

namespace AppTestBundle\Entity\UnitTests;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    public function __toString()
    {
        return (string) $this->id;
    }
}
=======
<?php

namespace AppTestBundle\Entity\UnitTests;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    public function __toString()
    {
        return (string) $this->id;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
