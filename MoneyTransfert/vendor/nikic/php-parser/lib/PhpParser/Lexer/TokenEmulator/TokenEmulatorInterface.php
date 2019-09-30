<<<<<<< HEAD
<?php declare(strict_types=1);

namespace PhpParser\Lexer\TokenEmulator;

interface TokenEmulatorInterface
{
    public function getTokenId(): int;

    public function getParserTokenId(): int;

    public function isEmulationNeeded(string $code): bool;

    /**
     * @return array Modified Tokens
     */
    public function emulate(string $code, array $tokens): array;
}
=======
<?php declare(strict_types=1);

namespace PhpParser\Lexer\TokenEmulator;

interface TokenEmulatorInterface
{
    public function getTokenId(): int;

    public function getParserTokenId(): int;

    public function isEmulationNeeded(string $code): bool;

    /**
     * @return array Modified Tokens
     */
    public function emulate(string $code, array $tokens): array;
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
