<<<<<<< HEAD
<?php declare(strict_types=1);

namespace PhpParser\Node\Stmt;

use PhpParser\Node;

/** Nop/empty statement (;). */
class Nop extends Node\Stmt
{
    public function getSubNodeNames() : array {
        return [];
    }
    
    public function getType() : string {
        return 'Stmt_Nop';
    }
}
=======
<?php declare(strict_types=1);

namespace PhpParser\Node\Stmt;

use PhpParser\Node;

/** Nop/empty statement (;). */
class Nop extends Node\Stmt
{
    public function getSubNodeNames() : array {
        return [];
    }
    
    public function getType() : string {
        return 'Stmt_Nop';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
