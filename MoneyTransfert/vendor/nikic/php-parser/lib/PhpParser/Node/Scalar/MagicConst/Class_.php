<<<<<<< HEAD
<?php declare(strict_types=1);

namespace PhpParser\Node\Scalar\MagicConst;

use PhpParser\Node\Scalar\MagicConst;

class Class_ extends MagicConst
{
    public function getName() : string {
        return '__CLASS__';
    }
    
    public function getType() : string {
        return 'Scalar_MagicConst_Class';
    }
}
=======
<?php declare(strict_types=1);

namespace PhpParser\Node\Scalar\MagicConst;

use PhpParser\Node\Scalar\MagicConst;

class Class_ extends MagicConst
{
    public function getName() : string {
        return '__CLASS__';
    }
    
    public function getType() : string {
        return 'Scalar_MagicConst_Class';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
