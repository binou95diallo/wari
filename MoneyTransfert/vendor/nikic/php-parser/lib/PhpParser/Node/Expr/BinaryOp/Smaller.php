<<<<<<< HEAD
<?php declare(strict_types=1);

namespace PhpParser\Node\Expr\BinaryOp;

use PhpParser\Node\Expr\BinaryOp;

class Smaller extends BinaryOp
{
    public function getOperatorSigil() : string {
        return '<';
    }
    
    public function getType() : string {
        return 'Expr_BinaryOp_Smaller';
    }
}
=======
<?php declare(strict_types=1);

namespace PhpParser\Node\Expr\BinaryOp;

use PhpParser\Node\Expr\BinaryOp;

class Smaller extends BinaryOp
{
    public function getOperatorSigil() : string {
        return '<';
    }
    
    public function getType() : string {
        return 'Expr_BinaryOp_Smaller';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
