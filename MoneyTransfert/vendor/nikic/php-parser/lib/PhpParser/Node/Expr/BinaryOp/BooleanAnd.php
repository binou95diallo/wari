<<<<<<< HEAD
<?php declare(strict_types=1);

namespace PhpParser\Node\Expr\BinaryOp;

use PhpParser\Node\Expr\BinaryOp;

class BooleanAnd extends BinaryOp
{
    public function getOperatorSigil() : string {
        return '&&';
    }
    
    public function getType() : string {
        return 'Expr_BinaryOp_BooleanAnd';
    }
}
=======
<?php declare(strict_types=1);

namespace PhpParser\Node\Expr\BinaryOp;

use PhpParser\Node\Expr\BinaryOp;

class BooleanAnd extends BinaryOp
{
    public function getOperatorSigil() : string {
        return '&&';
    }
    
    public function getType() : string {
        return 'Expr_BinaryOp_BooleanAnd';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
