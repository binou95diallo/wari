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

namespace Symfony\Component\DomCrawler\Test\Constraint;

use PHPUnit\Framework\Constraint\Constraint;
use Symfony\Component\DomCrawler\Crawler;

final class CrawlerSelectorAttributeValueSame extends Constraint
{
    private $selector;
    private $attribute;
    private $expectedText;

    public function __construct(string $selector, string $attribute, string $expectedText)
    {
        $this->selector = $selector;
        $this->attribute = $attribute;
        $this->expectedText = $expectedText;
    }

    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        return sprintf('has a node matching selector "%s" with attribute "%s" of value "%s"', $this->selector, $this->attribute, $this->expectedText);
    }

    /**
     * @param Crawler $crawler
     *
     * {@inheritdoc}
     */
    protected function matches($crawler): bool
    {
        $crawler = $crawler->filter($this->selector);
        if (!\count($crawler)) {
            return false;
        }

        return $this->expectedText === trim($crawler->getNode(0)->getAttribute($this->attribute));
    }

    /**
     * @param Crawler $crawler
     *
     * {@inheritdoc}
     */
    protected function failureDescription($crawler): string
    {
        return 'the Crawler '.$this->toString();
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

namespace Symfony\Component\DomCrawler\Test\Constraint;

use PHPUnit\Framework\Constraint\Constraint;
use Symfony\Component\DomCrawler\Crawler;

final class CrawlerSelectorAttributeValueSame extends Constraint
{
    private $selector;
    private $attribute;
    private $expectedText;

    public function __construct(string $selector, string $attribute, string $expectedText)
    {
        $this->selector = $selector;
        $this->attribute = $attribute;
        $this->expectedText = $expectedText;
    }

    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        return sprintf('has a node matching selector "%s" with attribute "%s" of value "%s"', $this->selector, $this->attribute, $this->expectedText);
    }

    /**
     * @param Crawler $crawler
     *
     * {@inheritdoc}
     */
    protected function matches($crawler): bool
    {
        $crawler = $crawler->filter($this->selector);
        if (!\count($crawler)) {
            return false;
        }

        return $this->expectedText === trim($crawler->getNode(0)->getAttribute($this->attribute));
    }

    /**
     * @param Crawler $crawler
     *
     * {@inheritdoc}
     */
    protected function failureDescription($crawler): string
    {
        return 'the Crawler '.$this->toString();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
