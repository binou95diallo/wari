<<<<<<< HEAD
<?php

namespace Doctrine\Tests\Common\Lexer;

use Doctrine\Common\Lexer\AbstractLexer;

class ConcreteLexer extends AbstractLexer
{
    const INT = 'int';

    protected function getCatchablePatterns()
    {
        return array(
            '=|<|>',
            '[a-z]+',
            '\d+',
        );
    }

    protected function getNonCatchablePatterns()
    {
        return array(
            '\s+',
            '(.)',
        );
    }

    protected function getType(&$value)
    {
        if (is_numeric($value)) {
            $value = (int)$value;

            return 'int';
        }
        if (in_array($value, array('=', '<', '>'))) {
            return 'operator';
        }
        if (is_string($value)) {
            return 'string';
        }

        return;
    }

    protected function getModifiers()
    {
        return parent::getModifiers().'u';
    }
}
=======
<?php

namespace Doctrine\Tests\Common\Lexer;

use Doctrine\Common\Lexer\AbstractLexer;

class ConcreteLexer extends AbstractLexer
{
    const INT = 'int';

    protected function getCatchablePatterns()
    {
        return array(
            '=|<|>',
            '[a-z]+',
            '\d+',
        );
    }

    protected function getNonCatchablePatterns()
    {
        return array(
            '\s+',
            '(.)',
        );
    }

    protected function getType(&$value)
    {
        if (is_numeric($value)) {
            $value = (int)$value;

            return 'int';
        }
        if (in_array($value, array('=', '<', '>'))) {
            return 'operator';
        }
        if (is_string($value)) {
            return 'string';
        }

        return;
    }

    protected function getModifiers()
    {
        return parent::getModifiers().'u';
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
