<<<<<<< HEAD
<?php declare(strict_types=1);

namespace PhpParser\Node\Stmt;

use PhpParser\Node;

class Break_ extends Node\Stmt
{
    /** @var null|Node\Expr Number of loops to break */
    public $num;

    /**
     * Constructs a break node.
     *
     * @param null|Node\Expr $num        Number of loops to break
     * @param array          $attributes Additional attributes
     */
    public function __construct(Node\Expr $num = null, array $attributes = []) {
        $this->attributes = $attributes;
        $this->num = $num;
    }

    public function getSubNodeNames() : array {
        return ['num'];
    }
    
    public function getType() : string {
        return 'Stmt_Break';
    }
}
=======
<?php declare(strict_types=1);

namespace PhpParser\Node\Stmt;

use PhpParser\Node;

class Break_ extends Node\Stmt
{
    /** @var null|Node\Expr Number of loops to break */
    public $num;

    /**
     * Constructs a break node.
     *
     * @param null|Node\Expr $num        Number of loops to break
     * @param array          $attributes Additional attributes
     */
    public function __construct(Node\Expr $num = null, array $attributes = []) {
        $this->attributes = $attributes;
        $this->num = $num;
    }

    public function getSubNodeNames() : array {
        return ['num'];
    }
    
    public function getType() : string {
        return 'Stmt_Break';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
