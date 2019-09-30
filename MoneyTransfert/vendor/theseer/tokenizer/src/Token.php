<<<<<<< HEAD
<?php declare(strict_types = 1);
namespace TheSeer\Tokenizer;

class Token {

    /**
     * @var int
     */
    private $line;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $value;

    /**
     * Token constructor.
     *
     * @param int    $line
     * @param string $name
     * @param string $value
     */
    public function __construct(int $line, string $name, string $value) {
        $this->line  = $line;
        $this->name  = $name;
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getLine(): int {
        return $this->line;
    }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getValue(): string {
        return $this->value;
    }

}
=======
<?php declare(strict_types = 1);
namespace TheSeer\Tokenizer;

class Token {

    /**
     * @var int
     */
    private $line;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $value;

    /**
     * Token constructor.
     *
     * @param int    $line
     * @param string $name
     * @param string $value
     */
    public function __construct(int $line, string $name, string $value) {
        $this->line  = $line;
        $this->name  = $name;
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getLine(): int {
        return $this->line;
    }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getValue(): string {
        return $this->value;
    }

}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
