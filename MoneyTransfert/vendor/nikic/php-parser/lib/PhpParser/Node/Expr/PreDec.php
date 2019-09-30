<<<<<<< HEAD
<?php declare(strict_types=1);

namespace PhpParser\Node\Expr;

use PhpParser\Node\Expr;

class PreDec extends Expr
{
    /** @var Expr Variable */
    public $var;

    /**
     * Constructs a pre decrement node.
     *
     * @param Expr  $var        Variable
     * @param array $attributes Additional attributes
     */
    public function __construct(Expr $var, array $attributes = []) {
        $this->attributes = $attributes;
        $this->var = $var;
    }

    public function getSubNodeNames() : array {
        return ['var'];
    }

    public function getType() : string {
        return 'Expr_PreDec';
    }
}
=======
<?php declare(strict_types=1);

namespace PhpParser\Node\Expr;

use PhpParser\Node\Expr;

class PreDec extends Expr
{
    /** @var Expr Variable */
    public $var;

    /**
     * Constructs a pre decrement node.
     *
     * @param Expr  $var        Variable
     * @param array $attributes Additional attributes
     */
    public function __construct(Expr $var, array $attributes = []) {
        $this->attributes = $attributes;
        $this->var = $var;
    }

    public function getSubNodeNames() : array {
        return ['var'];
    }

    public function getType() : string {
        return 'Expr_PreDec';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
