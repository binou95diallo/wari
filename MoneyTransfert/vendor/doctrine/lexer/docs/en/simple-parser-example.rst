<<<<<<< HEAD
Simple Parser Example
=====================

Extend the ``Doctrine\Common\Lexer\AbstractLexer`` class and implement
the ``getCatchablePatterns``, ``getNonCatchablePatterns``, and ``getType``
methods. Here is a very simple example lexer implementation named ``CharacterTypeLexer``.
It tokenizes a string to ``T_UPPER``, ``T_LOWER`` and``T_NUMBER`` tokens:

.. code-block:: php
    <?php

    use Doctrine\Common\Lexer\AbstractLexer;

    class CharacterTypeLexer extends AbstractLexer
    {
        const T_UPPER =  1;
        const T_LOWER =  2;
        const T_NUMBER = 3;

        protected function getCatchablePatterns()
        {
            return array(
                '[a-bA-Z0-9]',
            );
        }

        protected function getNonCatchablePatterns()
        {
            return array();
        }

        protected function getType(&$value)
        {
            if (is_numeric($value)) {
                return self::T_NUMBER;
            }

            if (strtoupper($value) === $value) {
                return self::T_UPPER;
            }

            if (strtolower($value) === $value) {
                return self::T_LOWER;
            }
        }
    }

Use ``CharacterTypeLexer`` to extract an array of upper case characters:

.. code-block:: php
    <?php

    class UpperCaseCharacterExtracter
    {
        private $lexer;

        public function __construct(CharacterTypeLexer $lexer)
        {
            $this->lexer = $lexer;
        }

        public function getUpperCaseCharacters($string)
        {
            $this->lexer->setInput($string);
            $this->lexer->moveNext();

            $upperCaseChars = array();
            while (true) {
                if (!$this->lexer->lookahead) {
                    break;
                }

                $this->lexer->moveNext();

                if ($this->lexer->token['type'] === CharacterTypeLexer::T_UPPER) {
                    $upperCaseChars[] = $this->lexer->token['value'];
                }
            }

            return $upperCaseChars;
        }
    }

    $upperCaseCharacterExtractor = new UpperCaseCharacterExtracter(new CharacterTypeLexer());
    $upperCaseCharacters = $upperCaseCharacterExtractor->getUpperCaseCharacters('1aBcdEfgHiJ12');

    print_r($upperCaseCharacters);

The variable ``$upperCaseCharacters`` contains all of the upper case
characters:

.. code-block:: php
    Array
    (
        [0] => B
        [1] => E
        [2] => H
        [3] => J
    )

This is a simple example but it should demonstrate the low level API
that can be used to build more complex parsers.
=======
Simple Parser Example
=====================

Extend the ``Doctrine\Common\Lexer\AbstractLexer`` class and implement
the ``getCatchablePatterns``, ``getNonCatchablePatterns``, and ``getType``
methods. Here is a very simple example lexer implementation named ``CharacterTypeLexer``.
It tokenizes a string to ``T_UPPER``, ``T_LOWER`` and``T_NUMBER`` tokens:

.. code-block:: php
    <?php

    use Doctrine\Common\Lexer\AbstractLexer;

    class CharacterTypeLexer extends AbstractLexer
    {
        const T_UPPER =  1;
        const T_LOWER =  2;
        const T_NUMBER = 3;

        protected function getCatchablePatterns()
        {
            return array(
                '[a-bA-Z0-9]',
            );
        }

        protected function getNonCatchablePatterns()
        {
            return array();
        }

        protected function getType(&$value)
        {
            if (is_numeric($value)) {
                return self::T_NUMBER;
            }

            if (strtoupper($value) === $value) {
                return self::T_UPPER;
            }

            if (strtolower($value) === $value) {
                return self::T_LOWER;
            }
        }
    }

Use ``CharacterTypeLexer`` to extract an array of upper case characters:

.. code-block:: php
    <?php

    class UpperCaseCharacterExtracter
    {
        private $lexer;

        public function __construct(CharacterTypeLexer $lexer)
        {
            $this->lexer = $lexer;
        }

        public function getUpperCaseCharacters($string)
        {
            $this->lexer->setInput($string);
            $this->lexer->moveNext();

            $upperCaseChars = array();
            while (true) {
                if (!$this->lexer->lookahead) {
                    break;
                }

                $this->lexer->moveNext();

                if ($this->lexer->token['type'] === CharacterTypeLexer::T_UPPER) {
                    $upperCaseChars[] = $this->lexer->token['value'];
                }
            }

            return $upperCaseChars;
        }
    }

    $upperCaseCharacterExtractor = new UpperCaseCharacterExtracter(new CharacterTypeLexer());
    $upperCaseCharacters = $upperCaseCharacterExtractor->getUpperCaseCharacters('1aBcdEfgHiJ12');

    print_r($upperCaseCharacters);

The variable ``$upperCaseCharacters`` contains all of the upper case
characters:

.. code-block:: php
    Array
    (
        [0] => B
        [1] => E
        [2] => H
        [3] => J
    )

This is a simple example but it should demonstrate the low level API
that can be used to build more complex parsers.
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
