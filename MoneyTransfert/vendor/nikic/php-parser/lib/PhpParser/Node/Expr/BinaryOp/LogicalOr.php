<<<<<<< HEAD
<?php declare(strict_types=1);

namespace PhpParser\Node\Expr\BinaryOp;

use PhpParser\Node\Expr\BinaryOp;

class LogicalOr extends BinaryOp
{
    public function getOperatorSigil() : string {
        return 'or';
    }
    
    public function getType() : string {
        return 'Expr_BinaryOp_LogicalOr';
    }
}
=======
<?php declare(strict_types=1);

namespace PhpParser\Node\Expr\BinaryOp;

use PhpParser\Node\Expr\BinaryOp;

class LogicalOr extends BinaryOp
{
    public function getOperatorSigil() : string {
        return 'or';
    }
    
    public function getType() : string {
        return 'Expr_BinaryOp_LogicalOr';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
