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

namespace Symfony\Component\Form\ChoiceList\View;

/**
 * Represents a group of choices in templates.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ChoiceGroupView implements \IteratorAggregate
{
    public $label;
    public $choices;

    /**
     * Creates a new choice group view.
     *
     * @param string                         $label   The label of the group
     * @param ChoiceGroupView[]|ChoiceView[] $choices the choice views in the group
     */
    public function __construct($label, array $choices = [])
    {
        $this->label = $label;
        $this->choices = $choices;
    }

    /**
     * {@inheritdoc}
     *
     * @return self[]|ChoiceView[]
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->choices);
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

namespace Symfony\Component\Form\ChoiceList\View;

/**
 * Represents a group of choices in templates.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ChoiceGroupView implements \IteratorAggregate
{
    public $label;
    public $choices;

    /**
     * Creates a new choice group view.
     *
     * @param string                         $label   The label of the group
     * @param ChoiceGroupView[]|ChoiceView[] $choices the choice views in the group
     */
    public function __construct($label, array $choices = [])
    {
        $this->label = $label;
        $this->choices = $choices;
    }

    /**
     * {@inheritdoc}
     *
     * @return self[]|ChoiceView[]
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->choices);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
