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

namespace Symfony\Bridge\Twig\NodeVisitor;

use Symfony\Bridge\Twig\Node\TransNode;
use Twig\Environment;
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\Expression\FilterExpression;
use Twig\Node\Node;
use Twig\NodeVisitor\AbstractNodeVisitor;

/**
 * TranslationNodeVisitor extracts translation messages.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TranslationNodeVisitor extends AbstractNodeVisitor
{
    const UNDEFINED_DOMAIN = '_undefined';

    private $enabled = false;
    private $messages = [];

    public function enable()
    {
        $this->enabled = true;
        $this->messages = [];
    }

    public function disable()
    {
        $this->enabled = false;
        $this->messages = [];
    }

    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * {@inheritdoc}
     */
    protected function doEnterNode(Node $node, Environment $env)
    {
        if (!$this->enabled) {
            return $node;
        }

        if (
            $node instanceof FilterExpression &&
            'trans' === $node->getNode('filter')->getAttribute('value') &&
            $node->getNode('node') instanceof ConstantExpression
        ) {
            // extract constant nodes with a trans filter
            $this->messages[] = [
                $node->getNode('node')->getAttribute('value'),
                $this->getReadDomainFromArguments($node->getNode('arguments'), 1),
            ];
        } elseif (
            $node instanceof FilterExpression &&
            'transchoice' === $node->getNode('filter')->getAttribute('value') &&
            $node->getNode('node') instanceof ConstantExpression
        ) {
            // extract constant nodes with a trans filter
            $this->messages[] = [
                $node->getNode('node')->getAttribute('value'),
                $this->getReadDomainFromArguments($node->getNode('arguments'), 2),
            ];
        } elseif ($node instanceof TransNode) {
            // extract trans nodes
            $this->messages[] = [
                $node->getNode('body')->getAttribute('data'),
                $node->hasNode('domain') ? $this->getReadDomainFromNode($node->getNode('domain')) : null,
            ];
        }

        return $node;
    }

    /**
     * {@inheritdoc}
     */
    protected function doLeaveNode(Node $node, Environment $env)
    {
        return $node;
    }

    /**
     * {@inheritdoc}
     */
    public function getPriority()
    {
        return 0;
    }

    private function getReadDomainFromArguments(Node $arguments, int $index): ?string
    {
        if ($arguments->hasNode('domain')) {
            $argument = $arguments->getNode('domain');
        } elseif ($arguments->hasNode($index)) {
            $argument = $arguments->getNode($index);
        } else {
            return null;
        }

        return $this->getReadDomainFromNode($argument);
    }

    private function getReadDomainFromNode(Node $node): ?string
    {
        if ($node instanceof ConstantExpression) {
            return $node->getAttribute('value');
        }

        return self::UNDEFINED_DOMAIN;
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

namespace Symfony\Bridge\Twig\NodeVisitor;

use Symfony\Bridge\Twig\Node\TransNode;
use Twig\Environment;
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\Expression\FilterExpression;
use Twig\Node\Node;
use Twig\NodeVisitor\AbstractNodeVisitor;

/**
 * TranslationNodeVisitor extracts translation messages.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class TranslationNodeVisitor extends AbstractNodeVisitor
{
    const UNDEFINED_DOMAIN = '_undefined';

    private $enabled = false;
    private $messages = [];

    public function enable()
    {
        $this->enabled = true;
        $this->messages = [];
    }

    public function disable()
    {
        $this->enabled = false;
        $this->messages = [];
    }

    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * {@inheritdoc}
     */
    protected function doEnterNode(Node $node, Environment $env)
    {
        if (!$this->enabled) {
            return $node;
        }

        if (
            $node instanceof FilterExpression &&
            'trans' === $node->getNode('filter')->getAttribute('value') &&
            $node->getNode('node') instanceof ConstantExpression
        ) {
            // extract constant nodes with a trans filter
            $this->messages[] = [
                $node->getNode('node')->getAttribute('value'),
                $this->getReadDomainFromArguments($node->getNode('arguments'), 1),
            ];
        } elseif (
            $node instanceof FilterExpression &&
            'transchoice' === $node->getNode('filter')->getAttribute('value') &&
            $node->getNode('node') instanceof ConstantExpression
        ) {
            // extract constant nodes with a trans filter
            $this->messages[] = [
                $node->getNode('node')->getAttribute('value'),
                $this->getReadDomainFromArguments($node->getNode('arguments'), 2),
            ];
        } elseif ($node instanceof TransNode) {
            // extract trans nodes
            $this->messages[] = [
                $node->getNode('body')->getAttribute('data'),
                $node->hasNode('domain') ? $this->getReadDomainFromNode($node->getNode('domain')) : null,
            ];
        }

        return $node;
    }

    /**
     * {@inheritdoc}
     */
    protected function doLeaveNode(Node $node, Environment $env)
    {
        return $node;
    }

    /**
     * {@inheritdoc}
     */
    public function getPriority()
    {
        return 0;
    }

    private function getReadDomainFromArguments(Node $arguments, int $index): ?string
    {
        if ($arguments->hasNode('domain')) {
            $argument = $arguments->getNode('domain');
        } elseif ($arguments->hasNode($index)) {
            $argument = $arguments->getNode($index);
        } else {
            return null;
        }

        return $this->getReadDomainFromNode($argument);
    }

    private function getReadDomainFromNode(Node $node): ?string
    {
        if ($node instanceof ConstantExpression) {
            return $node->getAttribute('value');
        }

        return self::UNDEFINED_DOMAIN;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
