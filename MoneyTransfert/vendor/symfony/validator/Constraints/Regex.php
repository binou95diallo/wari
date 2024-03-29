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

namespace Symfony\Component\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Exception\InvalidArgumentException;

/**
 * @Annotation
 * @Target({"PROPERTY", "METHOD", "ANNOTATION"})
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Regex extends Constraint
{
    const REGEX_FAILED_ERROR = 'de1e3db3-5ed4-4941-aae4-59f3667cc3a3';

    protected static $errorNames = [
        self::REGEX_FAILED_ERROR => 'REGEX_FAILED_ERROR',
    ];

    public $message = 'This value is not valid.';
    public $pattern;
    public $htmlPattern;
    public $match = true;
    public $normalizer;

    public function __construct($options = null)
    {
        parent::__construct($options);

        if (null !== $this->normalizer && !\is_callable($this->normalizer)) {
            throw new InvalidArgumentException(sprintf('The "normalizer" option must be a valid callable ("%s" given).', \is_object($this->normalizer) ? \get_class($this->normalizer) : \gettype($this->normalizer)));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultOption()
    {
        return 'pattern';
    }

    /**
     * {@inheritdoc}
     */
    public function getRequiredOptions()
    {
        return ['pattern'];
    }

    /**
     * Converts the htmlPattern to a suitable format for HTML5 pattern.
     * Example: /^[a-z]+$/ would be converted to [a-z]+
     * However, if options are specified, it cannot be converted.
     *
     * Pattern is also ignored if match=false since the pattern should
     * then be reversed before application.
     *
     * @see http://dev.w3.org/html5/spec/single-page.html#the-pattern-attribute
     *
     * @return string|null
     */
    public function getHtmlPattern()
    {
        // If htmlPattern is specified, use it
        if (null !== $this->htmlPattern) {
            return empty($this->htmlPattern)
                ? null
                : $this->htmlPattern;
        }

        // Quit if delimiters not at very beginning/end (e.g. when options are passed)
        if ($this->pattern[0] !== $this->pattern[\strlen($this->pattern) - 1]) {
            return null;
        }

        $delimiter = $this->pattern[0];

        // Unescape the delimiter
        $pattern = str_replace('\\'.$delimiter, $delimiter, substr($this->pattern, 1, -1));

        // If the pattern is inverted, we can wrap it in
        // ((?!pattern).)*
        if (!$this->match) {
            return '((?!'.$pattern.').)*';
        }

        // If the pattern contains an or statement, wrap the pattern in
        // .*(pattern).* and quit. Otherwise we'd need to parse the pattern
        if (false !== strpos($pattern, '|')) {
            return '.*('.$pattern.').*';
        }

        // Trim leading ^, otherwise prepend .*
        $pattern = '^' === $pattern[0] ? substr($pattern, 1) : '.*'.$pattern;

        // Trim trailing $, otherwise append .*
        $pattern = '$' === $pattern[\strlen($pattern) - 1] ? substr($pattern, 0, -1) : $pattern.'.*';

        return $pattern;
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

namespace Symfony\Component\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Exception\InvalidArgumentException;

/**
 * @Annotation
 * @Target({"PROPERTY", "METHOD", "ANNOTATION"})
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Regex extends Constraint
{
    const REGEX_FAILED_ERROR = 'de1e3db3-5ed4-4941-aae4-59f3667cc3a3';

    protected static $errorNames = [
        self::REGEX_FAILED_ERROR => 'REGEX_FAILED_ERROR',
    ];

    public $message = 'This value is not valid.';
    public $pattern;
    public $htmlPattern;
    public $match = true;
    public $normalizer;

    public function __construct($options = null)
    {
        parent::__construct($options);

        if (null !== $this->normalizer && !\is_callable($this->normalizer)) {
            throw new InvalidArgumentException(sprintf('The "normalizer" option must be a valid callable ("%s" given).', \is_object($this->normalizer) ? \get_class($this->normalizer) : \gettype($this->normalizer)));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultOption()
    {
        return 'pattern';
    }

    /**
     * {@inheritdoc}
     */
    public function getRequiredOptions()
    {
        return ['pattern'];
    }

    /**
     * Converts the htmlPattern to a suitable format for HTML5 pattern.
     * Example: /^[a-z]+$/ would be converted to [a-z]+
     * However, if options are specified, it cannot be converted.
     *
     * Pattern is also ignored if match=false since the pattern should
     * then be reversed before application.
     *
     * @see http://dev.w3.org/html5/spec/single-page.html#the-pattern-attribute
     *
     * @return string|null
     */
    public function getHtmlPattern()
    {
        // If htmlPattern is specified, use it
        if (null !== $this->htmlPattern) {
            return empty($this->htmlPattern)
                ? null
                : $this->htmlPattern;
        }

        // Quit if delimiters not at very beginning/end (e.g. when options are passed)
        if ($this->pattern[0] !== $this->pattern[\strlen($this->pattern) - 1]) {
            return null;
        }

        $delimiter = $this->pattern[0];

        // Unescape the delimiter
        $pattern = str_replace('\\'.$delimiter, $delimiter, substr($this->pattern, 1, -1));

        // If the pattern is inverted, we can wrap it in
        // ((?!pattern).)*
        if (!$this->match) {
            return '((?!'.$pattern.').)*';
        }

        // If the pattern contains an or statement, wrap the pattern in
        // .*(pattern).* and quit. Otherwise we'd need to parse the pattern
        if (false !== strpos($pattern, '|')) {
            return '.*('.$pattern.').*';
        }

        // Trim leading ^, otherwise prepend .*
        $pattern = '^' === $pattern[0] ? substr($pattern, 1) : '.*'.$pattern;

        // Trim trailing $, otherwise append .*
        $pattern = '$' === $pattern[\strlen($pattern) - 1] ? substr($pattern, 0, -1) : $pattern.'.*';

        return $pattern;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
