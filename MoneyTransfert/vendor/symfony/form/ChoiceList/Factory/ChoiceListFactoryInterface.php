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

namespace Symfony\Component\Form\ChoiceList\Factory;

use Symfony\Component\Form\ChoiceList\ChoiceListInterface;
use Symfony\Component\Form\ChoiceList\Loader\ChoiceLoaderInterface;
use Symfony\Component\Form\ChoiceList\View\ChoiceListView;

/**
 * Creates {@link ChoiceListInterface} instances.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface ChoiceListFactoryInterface
{
    /**
     * Creates a choice list for the given choices.
     *
     * The choices should be passed in the values of the choices array.
     *
     * Optionally, a callable can be passed for generating the choice values.
     * The callable receives the choice as only argument.
     * Null may be passed when the choice list contains the empty value.
     *
     * @param iterable      $choices The choices
     * @param callable|null $value   The callable generating the choice
     *                               values
     *
     * @return ChoiceListInterface The choice list
     */
    public function createListFromChoices($choices, $value = null);

    /**
     * Creates a choice list that is loaded with the given loader.
     *
     * Optionally, a callable can be passed for generating the choice values.
     * The callable receives the choice as only argument.
     * Null may be passed when the choice list contains the empty value.
     *
     * @param ChoiceLoaderInterface $loader The choice loader
     * @param callable|null         $value  The callable generating the choice
     *                                      values
     *
     * @return ChoiceListInterface The choice list
     */
    public function createListFromLoader(ChoiceLoaderInterface $loader, $value = null);

    /**
     * Creates a view for the given choice list.
     *
     * Callables may be passed for all optional arguments. The callables receive
     * the choice as first and the array key as the second argument.
     *
     *  * The callable for the label and the name should return the generated
     *    label/choice name.
     *  * The callable for the preferred choices should return true or false,
     *    depending on whether the choice should be preferred or not.
     *  * The callable for the grouping should return the group name or null if
     *    a choice should not be grouped.
     *  * The callable for the attributes should return an array of HTML
     *    attributes that will be inserted in the tag of the choice.
     *
     * If no callable is passed, the labels will be generated from the choice
     * keys. The view indices will be generated using an incrementing integer
     * by default.
     *
     * The preferred choices can also be passed as array. Each choice that is
     * contained in that array will be marked as preferred.
     *
     * The attributes can be passed as multi-dimensional array. The keys should
     * match the keys of the choices. The values should be arrays of HTML
     * attributes that should be added to the respective choice.
     *
     * @param ChoiceListInterface $list             The choice list
     * @param array|callable|null $preferredChoices The preferred choices
     * @param callable|null       $label            The callable generating the
     *                                              choice labels
     * @param callable|null       $index            The callable generating the
     *                                              view indices
     * @param callable|null       $groupBy          The callable generating the
     *                                              group names
     * @param array|callable|null $attr             The callable generating the
     *                                              HTML attributes
     *
     * @return ChoiceListView The choice list view
     */
    public function createView(ChoiceListInterface $list, $preferredChoices = null, $label = null, $index = null, $groupBy = null, $attr = null);
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

namespace Symfony\Component\Form\ChoiceList\Factory;

use Symfony\Component\Form\ChoiceList\ChoiceListInterface;
use Symfony\Component\Form\ChoiceList\Loader\ChoiceLoaderInterface;
use Symfony\Component\Form\ChoiceList\View\ChoiceListView;

/**
 * Creates {@link ChoiceListInterface} instances.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface ChoiceListFactoryInterface
{
    /**
     * Creates a choice list for the given choices.
     *
     * The choices should be passed in the values of the choices array.
     *
     * Optionally, a callable can be passed for generating the choice values.
     * The callable receives the choice as only argument.
     * Null may be passed when the choice list contains the empty value.
     *
     * @param iterable      $choices The choices
     * @param callable|null $value   The callable generating the choice
     *                               values
     *
     * @return ChoiceListInterface The choice list
     */
    public function createListFromChoices($choices, $value = null);

    /**
     * Creates a choice list that is loaded with the given loader.
     *
     * Optionally, a callable can be passed for generating the choice values.
     * The callable receives the choice as only argument.
     * Null may be passed when the choice list contains the empty value.
     *
     * @param ChoiceLoaderInterface $loader The choice loader
     * @param callable|null         $value  The callable generating the choice
     *                                      values
     *
     * @return ChoiceListInterface The choice list
     */
    public function createListFromLoader(ChoiceLoaderInterface $loader, $value = null);

    /**
     * Creates a view for the given choice list.
     *
     * Callables may be passed for all optional arguments. The callables receive
     * the choice as first and the array key as the second argument.
     *
     *  * The callable for the label and the name should return the generated
     *    label/choice name.
     *  * The callable for the preferred choices should return true or false,
     *    depending on whether the choice should be preferred or not.
     *  * The callable for the grouping should return the group name or null if
     *    a choice should not be grouped.
     *  * The callable for the attributes should return an array of HTML
     *    attributes that will be inserted in the tag of the choice.
     *
     * If no callable is passed, the labels will be generated from the choice
     * keys. The view indices will be generated using an incrementing integer
     * by default.
     *
     * The preferred choices can also be passed as array. Each choice that is
     * contained in that array will be marked as preferred.
     *
     * The attributes can be passed as multi-dimensional array. The keys should
     * match the keys of the choices. The values should be arrays of HTML
     * attributes that should be added to the respective choice.
     *
     * @param ChoiceListInterface $list             The choice list
     * @param array|callable|null $preferredChoices The preferred choices
     * @param callable|null       $label            The callable generating the
     *                                              choice labels
     * @param callable|null       $index            The callable generating the
     *                                              view indices
     * @param callable|null       $groupBy          The callable generating the
     *                                              group names
     * @param array|callable|null $attr             The callable generating the
     *                                              HTML attributes
     *
     * @return ChoiceListView The choice list view
     */
    public function createView(ChoiceListInterface $list, $preferredChoices = null, $label = null, $index = null, $groupBy = null, $attr = null);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
