<<<<<<< HEAD
<?php declare(strict_types = 1);
namespace TheSeer\Tokenizer;

class NamespaceUri {

    /** @var string */
    private $value;

    /**
     * @param string $value
     */
    public function __construct(string $value) {
        $this->ensureValidUri($value);
        $this->value = $value;
    }

    public function asString(): string {
        return $this->value;
    }

    private function ensureValidUri($value) {
        if (strpos($value, ':') === false) {
            throw new NamespaceUriException(
                sprintf("Namespace URI '%s' must contain at least one colon", $value)
            );
        }
    }
}
=======
<?php declare(strict_types = 1);
namespace TheSeer\Tokenizer;

class NamespaceUri {

    /** @var string */
    private $value;

    /**
     * @param string $value
     */
    public function __construct(string $value) {
        $this->ensureValidUri($value);
        $this->value = $value;
    }

    public function asString(): string {
        return $this->value;
    }

    private function ensureValidUri($value) {
        if (strpos($value, ':') === false) {
            throw new NamespaceUriException(
                sprintf("Namespace URI '%s' must contain at least one colon", $value)
            );
        }
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
