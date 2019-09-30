<<<<<<< HEAD
<?php declare(strict_types=1);

namespace PhpParser\Node\Scalar\MagicConst;

use PhpParser\Node\Scalar\MagicConst;

class Line extends MagicConst
{
    public function getName() : string {
        return '__LINE__';
    }
    
    public function getType() : string {
        return 'Scalar_MagicConst_Line';
    }
}
=======
<?php declare(strict_types=1);

namespace PhpParser\Node\Scalar\MagicConst;

use PhpParser\Node\Scalar\MagicConst;

class Line extends MagicConst
{
    public function getName() : string {
        return '__LINE__';
    }
    
    public function getType() : string {
        return 'Scalar_MagicConst_Line';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
