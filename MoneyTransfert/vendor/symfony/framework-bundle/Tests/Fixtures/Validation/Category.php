<<<<<<< HEAD
<?php

namespace Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation;

use Symfony\Component\Validator\Constraints as Assert;

class Category
{
    const NAME_PATTERN = '/\w+/';

    public $id;

    /**
     * @Assert\Type("string")
     */
    public $name;
}
=======
<?php

namespace Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation;

use Symfony\Component\Validator\Constraints as Assert;

class Category
{
    const NAME_PATTERN = '/\w+/';

    public $id;

    /**
     * @Assert\Type("string")
     */
    public $name;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
