<<<<<<< HEAD
<?php

namespace AppTestBundle\Form\Data;

use Symfony\Component\Validator\Constraints as Assert;

class AddProductData
{
    /**
     * @Assert\NotBlank()
     * @Assert\Length(min="3")
     */
    public $name;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min="10")
     */
    public $description;

    /**
     * @Assert\NotBlank()
     * @Assert\GreaterThan(0)
     * @Assert\Type("float")
     */
    public $price = 0.0;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min="13", max="13")
     */
    public $ean;
}
=======
<?php

namespace AppTestBundle\Form\Data;

use Symfony\Component\Validator\Constraints as Assert;

class AddProductData
{
    /**
     * @Assert\NotBlank()
     * @Assert\Length(min="3")
     */
    public $name;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min="10")
     */
    public $description;

    /**
     * @Assert\NotBlank()
     * @Assert\GreaterThan(0)
     * @Assert\Type("float")
     */
    public $price = 0.0;

    /**
     * @Assert\NotBlank()
     * @Assert\Length(min="13", max="13")
     */
    public $ean;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
