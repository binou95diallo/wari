<<<<<<< HEAD
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Validator\Tests\Constraints;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class RegexTest extends TestCase
{
    public function testConstraintGetDefaultOption()
    {
        $constraint = new Regex('/^[0-9]+$/');

        $this->assertSame('/^[0-9]+$/', $constraint->pattern);
    }

    public function provideHtmlPatterns()
    {
        return [
            // HTML5 wraps the pattern in ^(?:pattern)$
            ['/^[0-9]+$/', '[0-9]+'],
            ['/[0-9]+$/', '.*[0-9]+'],
            ['/^[0-9]+/', '[0-9]+.*'],
            ['/[0-9]+/', '.*[0-9]+.*'],
            // We need a smart way to allow matching of patterns that contain
            // ^ and $ at various sub-clauses of an or-clause
            // .*(pattern).* seems to work correctly
            ['/[0-9]$|[a-z]+/', '.*([0-9]$|[a-z]+).*'],
            ['/[0-9]$|^[a-z]+/', '.*([0-9]$|^[a-z]+).*'],
            ['/^[0-9]|[a-z]+$/', '.*(^[0-9]|[a-z]+$).*'],
            // Unescape escaped delimiters
            ['/^[0-9]+\/$/', '[0-9]+/'],
            ['#^[0-9]+\#$#', '[0-9]+#'],
            // Cannot be converted
            ['/^[0-9]+$/i', null],

            // Inverse matches are simple, just wrap in
            // ((?!pattern).)*
            ['/^[0-9]+$/', '((?!^[0-9]+$).)*', false],
            ['/[0-9]+$/', '((?![0-9]+$).)*', false],
            ['/^[0-9]+/', '((?!^[0-9]+).)*', false],
            ['/[0-9]+/', '((?![0-9]+).)*', false],
            ['/[0-9]$|[a-z]+/', '((?![0-9]$|[a-z]+).)*', false],
            ['/[0-9]$|^[a-z]+/', '((?![0-9]$|^[a-z]+).)*', false],
            ['/^[0-9]|[a-z]+$/', '((?!^[0-9]|[a-z]+$).)*', false],
            ['/^[0-9]+\/$/', '((?!^[0-9]+/$).)*', false],
            ['#^[0-9]+\#$#', '((?!^[0-9]+#$).)*', false],
            ['/^[0-9]+$/i', null, false],
        ];
    }

    /**
     * @dataProvider provideHtmlPatterns
     */
    public function testGetHtmlPattern($pattern, $htmlPattern, $match = true)
    {
        $constraint = new Regex([
            'pattern' => $pattern,
            'match' => $match,
        ]);

        $this->assertSame($pattern, $constraint->pattern);
        $this->assertSame($htmlPattern, $constraint->getHtmlPattern());
    }

    public function testGetCustomHtmlPattern()
    {
        $constraint = new Regex([
            'pattern' => '((?![0-9]$|[a-z]+).)*',
            'htmlPattern' => 'foobar',
        ]);

        $this->assertSame('((?![0-9]$|[a-z]+).)*', $constraint->pattern);
        $this->assertSame('foobar', $constraint->getHtmlPattern());
    }

    public function testNormalizerCanBeSet()
    {
        $regex = new Regex(['pattern' => '/^[0-9]+$/', 'normalizer' => 'trim']);

        $this->assertEquals('trim', $regex->normalizer);
    }

    public function testInvalidNormalizerThrowsException()
    {
        $this->expectException('Symfony\Component\Validator\Exception\InvalidArgumentException');
        $this->expectExceptionMessage('The "normalizer" option must be a valid callable ("string" given).');
        new Regex(['pattern' => '/^[0-9]+$/', 'normalizer' => 'Unknown Callable']);
    }

    public function testInvalidNormalizerObjectThrowsException()
    {
        $this->expectException('Symfony\Component\Validator\Exception\InvalidArgumentException');
        $this->expectExceptionMessage('The "normalizer" option must be a valid callable ("stdClass" given).');
        new Regex(['pattern' => '/^[0-9]+$/', 'normalizer' => new \stdClass()]);
    }
}
=======
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Validator\Tests\Constraints;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Validator\Constraints\Regex;

/**
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class RegexTest extends TestCase
{
    public function testConstraintGetDefaultOption()
    {
        $constraint = new Regex('/^[0-9]+$/');

        $this->assertSame('/^[0-9]+$/', $constraint->pattern);
    }

    public function provideHtmlPatterns()
    {
        return [
            // HTML5 wraps the pattern in ^(?:pattern)$
            ['/^[0-9]+$/', '[0-9]+'],
            ['/[0-9]+$/', '.*[0-9]+'],
            ['/^[0-9]+/', '[0-9]+.*'],
            ['/[0-9]+/', '.*[0-9]+.*'],
            // We need a smart way to allow matching of patterns that contain
            // ^ and $ at various sub-clauses of an or-clause
            // .*(pattern).* seems to work correctly
            ['/[0-9]$|[a-z]+/', '.*([0-9]$|[a-z]+).*'],
            ['/[0-9]$|^[a-z]+/', '.*([0-9]$|^[a-z]+).*'],
            ['/^[0-9]|[a-z]+$/', '.*(^[0-9]|[a-z]+$).*'],
            // Unescape escaped delimiters
            ['/^[0-9]+\/$/', '[0-9]+/'],
            ['#^[0-9]+\#$#', '[0-9]+#'],
            // Cannot be converted
            ['/^[0-9]+$/i', null],

            // Inverse matches are simple, just wrap in
            // ((?!pattern).)*
            ['/^[0-9]+$/', '((?!^[0-9]+$).)*', false],
            ['/[0-9]+$/', '((?![0-9]+$).)*', false],
            ['/^[0-9]+/', '((?!^[0-9]+).)*', false],
            ['/[0-9]+/', '((?![0-9]+).)*', false],
            ['/[0-9]$|[a-z]+/', '((?![0-9]$|[a-z]+).)*', false],
            ['/[0-9]$|^[a-z]+/', '((?![0-9]$|^[a-z]+).)*', false],
            ['/^[0-9]|[a-z]+$/', '((?!^[0-9]|[a-z]+$).)*', false],
            ['/^[0-9]+\/$/', '((?!^[0-9]+/$).)*', false],
            ['#^[0-9]+\#$#', '((?!^[0-9]+#$).)*', false],
            ['/^[0-9]+$/i', null, false],
        ];
    }

    /**
     * @dataProvider provideHtmlPatterns
     */
    public function testGetHtmlPattern($pattern, $htmlPattern, $match = true)
    {
        $constraint = new Regex([
            'pattern' => $pattern,
            'match' => $match,
        ]);

        $this->assertSame($pattern, $constraint->pattern);
        $this->assertSame($htmlPattern, $constraint->getHtmlPattern());
    }

    public function testGetCustomHtmlPattern()
    {
        $constraint = new Regex([
            'pattern' => '((?![0-9]$|[a-z]+).)*',
            'htmlPattern' => 'foobar',
        ]);

        $this->assertSame('((?![0-9]$|[a-z]+).)*', $constraint->pattern);
        $this->assertSame('foobar', $constraint->getHtmlPattern());
    }

    public function testNormalizerCanBeSet()
    {
        $regex = new Regex(['pattern' => '/^[0-9]+$/', 'normalizer' => 'trim']);

        $this->assertEquals('trim', $regex->normalizer);
    }

    public function testInvalidNormalizerThrowsException()
    {
        $this->expectException('Symfony\Component\Validator\Exception\InvalidArgumentException');
        $this->expectExceptionMessage('The "normalizer" option must be a valid callable ("string" given).');
        new Regex(['pattern' => '/^[0-9]+$/', 'normalizer' => 'Unknown Callable']);
    }

    public function testInvalidNormalizerObjectThrowsException()
    {
        $this->expectException('Symfony\Component\Validator\Exception\InvalidArgumentException');
        $this->expectExceptionMessage('The "normalizer" option must be a valid callable ("stdClass" given).');
        new Regex(['pattern' => '/^[0-9]+$/', 'normalizer' => new \stdClass()]);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
