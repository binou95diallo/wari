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

namespace Symfony\Component\Form;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\Exception\BadMethodCallException;
use Symfony\Component\Form\Exception\InvalidArgumentException;

/**
 * A builder for {@link Button} instances.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ButtonBuilder implements \IteratorAggregate, FormBuilderInterface
{
    protected $locked = false;

    /**
     * @var bool
     */
    private $disabled;

    /**
     * @var ResolvedFormTypeInterface
     */
    private $type;

    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $attributes = [];

    /**
     * @var array
     */
    private $options;

    /**
     * @throws InvalidArgumentException if the name is empty
     */
    public function __construct(?string $name, array $options = [])
    {
        if ('' === $name || null === $name) {
            throw new InvalidArgumentException('Buttons cannot have empty names.');
        }

        $this->name = $name;
        $this->options = $options;

        if (preg_match('/^([^a-z0-9_].*)?(.*[^a-zA-Z0-9_\-:].*)?$/D', $name, $matches)) {
            if (isset($matches[1])) {
                @trigger_error(sprintf('Using names for buttons that do not start with a letter, a digit, or an underscore is deprecated since Symfony 4.3 and will throw an exception in 5.0 ("%s" given).', $name), E_USER_DEPRECATED);
            }
            if (isset($matches[2])) {
                @trigger_error(sprintf('Using names for buttons that do not contain only letters, digits, underscores ("_"), hyphens ("-") and colons (":") ("%s" given) is deprecated since Symfony 4.3 and will throw an exception in 5.0.', $name), E_USER_DEPRECATED);
            }
        }

        // to be added in 5.0
        // FormConfigBuilder::validateName($name);
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param string|int|FormBuilderInterface $child
     * @param string|FormTypeInterface        $type
     * @param array                           $options
     *
     * @throws BadMethodCallException
     */
    public function add($child, $type = null, array $options = [])
    {
        throw new BadMethodCallException('Buttons cannot have children.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param string                   $name
     * @param string|FormTypeInterface $type
     * @param array                    $options
     *
     * @throws BadMethodCallException
     */
    public function create($name, $type = null, array $options = [])
    {
        throw new BadMethodCallException('Buttons cannot have children.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param string $name
     *
     * @throws BadMethodCallException
     */
    public function get($name)
    {
        throw new BadMethodCallException('Buttons cannot have children.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param string $name
     *
     * @throws BadMethodCallException
     */
    public function remove($name)
    {
        throw new BadMethodCallException('Buttons cannot have children.');
    }

    /**
     * Unsupported method.
     *
     * @param string $name
     *
     * @return bool Always returns false
     */
    public function has($name)
    {
        return false;
    }

    /**
     * Returns the children.
     *
     * @return array Always returns an empty array
     */
    public function all()
    {
        return [];
    }

    /**
     * Creates the button.
     *
     * @return Button The button
     */
    public function getForm()
    {
        return new Button($this->getFormConfig());
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param string   $eventName
     * @param callable $listener
     * @param int      $priority
     *
     * @throws BadMethodCallException
     */
    public function addEventListener($eventName, $listener, $priority = 0)
    {
        throw new BadMethodCallException('Buttons do not support event listeners.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @throws BadMethodCallException
     */
    public function addEventSubscriber(EventSubscriberInterface $subscriber)
    {
        throw new BadMethodCallException('Buttons do not support event subscribers.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param DataTransformerInterface $viewTransformer
     * @param bool                     $forcePrepend
     *
     * @throws BadMethodCallException
     */
    public function addViewTransformer(DataTransformerInterface $viewTransformer, $forcePrepend = false)
    {
        throw new BadMethodCallException('Buttons do not support data transformers.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @throws BadMethodCallException
     */
    public function resetViewTransformers()
    {
        throw new BadMethodCallException('Buttons do not support data transformers.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param DataTransformerInterface $modelTransformer
     * @param bool                     $forceAppend
     *
     * @throws BadMethodCallException
     */
    public function addModelTransformer(DataTransformerInterface $modelTransformer, $forceAppend = false)
    {
        throw new BadMethodCallException('Buttons do not support data transformers.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @throws BadMethodCallException
     */
    public function resetModelTransformers()
    {
        throw new BadMethodCallException('Buttons do not support data transformers.');
    }

    /**
     * {@inheritdoc}
     */
    public function setAttribute($name, $value)
    {
        $this->attributes[$name] = $value;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @throws BadMethodCallException
     */
    public function setDataMapper(DataMapperInterface $dataMapper = null)
    {
        throw new BadMethodCallException('Buttons do not support data mappers.');
    }

    /**
     * Set whether the button is disabled.
     *
     * @param bool $disabled Whether the button is disabled
     *
     * @return $this
     */
    public function setDisabled($disabled)
    {
        $this->disabled = $disabled;

        return $this;
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param mixed $emptyData
     *
     * @throws BadMethodCallException
     */
    public function setEmptyData($emptyData)
    {
        throw new BadMethodCallException('Buttons do not support empty data.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param bool $errorBubbling
     *
     * @throws BadMethodCallException
     */
    public function setErrorBubbling($errorBubbling)
    {
        throw new BadMethodCallException('Buttons do not support error bubbling.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param bool $required
     *
     * @throws BadMethodCallException
     */
    public function setRequired($required)
    {
        throw new BadMethodCallException('Buttons cannot be required.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param null $propertyPath
     *
     * @throws BadMethodCallException
     */
    public function setPropertyPath($propertyPath)
    {
        throw new BadMethodCallException('Buttons do not support property paths.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param bool $mapped
     *
     * @throws BadMethodCallException
     */
    public function setMapped($mapped)
    {
        throw new BadMethodCallException('Buttons do not support data mapping.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param bool $byReference
     *
     * @throws BadMethodCallException
     */
    public function setByReference($byReference)
    {
        throw new BadMethodCallException('Buttons do not support data mapping.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param bool $compound
     *
     * @throws BadMethodCallException
     */
    public function setCompound($compound)
    {
        throw new BadMethodCallException('Buttons cannot be compound.');
    }

    /**
     * Sets the type of the button.
     *
     * @return $this
     */
    public function setType(ResolvedFormTypeInterface $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param mixed $data
     *
     * @throws BadMethodCallException
     */
    public function setData($data)
    {
        throw new BadMethodCallException('Buttons do not support data.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param bool $locked
     *
     * @throws BadMethodCallException
     */
    public function setDataLocked($locked)
    {
        throw new BadMethodCallException('Buttons do not support data locking.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @throws BadMethodCallException
     */
    public function setFormFactory(FormFactoryInterface $formFactory)
    {
        throw new BadMethodCallException('Buttons do not support form factories.');
    }

    /**
     * Unsupported method.
     *
     * @param string $action
     *
     * @throws BadMethodCallException
     */
    public function setAction($action)
    {
        throw new BadMethodCallException('Buttons do not support actions.');
    }

    /**
     * Unsupported method.
     *
     * @param string $method
     *
     * @throws BadMethodCallException
     */
    public function setMethod($method)
    {
        throw new BadMethodCallException('Buttons do not support methods.');
    }

    /**
     * Unsupported method.
     *
     * @throws BadMethodCallException
     */
    public function setRequestHandler(RequestHandlerInterface $requestHandler)
    {
        throw new BadMethodCallException('Buttons do not support request handlers.');
    }

    /**
     * Unsupported method.
     *
     * @param bool $initialize
     *
     * @return $this
     *
     * @throws BadMethodCallException
     */
    public function setAutoInitialize($initialize)
    {
        if (true === $initialize) {
            throw new BadMethodCallException('Buttons do not support automatic initialization.');
        }

        return $this;
    }

    /**
     * Unsupported method.
     *
     * @param bool $inheritData
     *
     * @throws BadMethodCallException
     */
    public function setInheritData($inheritData)
    {
        throw new BadMethodCallException('Buttons do not support data inheritance.');
    }

    /**
     * Builds and returns the button configuration.
     *
     * @return FormConfigInterface
     */
    public function getFormConfig()
    {
        // This method should be idempotent, so clone the builder
        $config = clone $this;
        $config->locked = true;

        return $config;
    }

    /**
     * Unsupported method.
     */
    public function getEventDispatcher()
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Unsupported method.
     */
    public function getPropertyPath()
    {
        return null;
    }

    /**
     * Unsupported method.
     *
     * @return bool Always returns false
     */
    public function getMapped()
    {
        return false;
    }

    /**
     * Unsupported method.
     *
     * @return bool Always returns false
     */
    public function getByReference()
    {
        return false;
    }

    /**
     * Unsupported method.
     *
     * @return bool Always returns false
     */
    public function getCompound()
    {
        return false;
    }

    /**
     * Returns the form type used to construct the button.
     *
     * @return ResolvedFormTypeInterface The button's type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Unsupported method.
     *
     * @return array Always returns an empty array
     */
    public function getViewTransformers()
    {
        return [];
    }

    /**
     * Unsupported method.
     *
     * @return array Always returns an empty array
     */
    public function getModelTransformers()
    {
        return [];
    }

    /**
     * Unsupported method.
     */
    public function getDataMapper()
    {
        return null;
    }

    /**
     * Unsupported method.
     *
     * @return bool Always returns false
     */
    public function getRequired()
    {
        return false;
    }

    /**
     * Returns whether the button is disabled.
     *
     * @return bool Whether the button is disabled
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * Unsupported method.
     *
     * @return bool Always returns false
     */
    public function getErrorBubbling()
    {
        return false;
    }

    /**
     * Unsupported method.
     */
    public function getEmptyData()
    {
        return null;
    }

    /**
     * Returns additional attributes of the button.
     *
     * @return array An array of key-value combinations
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Returns whether the attribute with the given name exists.
     *
     * @param string $name The attribute name
     *
     * @return bool Whether the attribute exists
     */
    public function hasAttribute($name)
    {
        return \array_key_exists($name, $this->attributes);
    }

    /**
     * Returns the value of the given attribute.
     *
     * @param string $name    The attribute name
     * @param mixed  $default The value returned if the attribute does not exist
     *
     * @return mixed The attribute value
     */
    public function getAttribute($name, $default = null)
    {
        return \array_key_exists($name, $this->attributes) ? $this->attributes[$name] : $default;
    }

    /**
     * Unsupported method.
     */
    public function getData()
    {
        return null;
    }

    /**
     * Unsupported method.
     */
    public function getDataClass()
    {
        return null;
    }

    /**
     * Unsupported method.
     *
     * @return bool Always returns false
     */
    public function getDataLocked()
    {
        return false;
    }

    /**
     * Unsupported method.
     */
    public function getFormFactory()
    {
        throw new BadMethodCallException('Buttons do not support adding children.');
    }

    /**
     * Unsupported method.
     */
    public function getAction()
    {
        return null;
    }

    /**
     * Unsupported method.
     */
    public function getMethod()
    {
        return null;
    }

    /**
     * Unsupported method.
     */
    public function getRequestHandler()
    {
        return null;
    }

    /**
     * Unsupported method.
     *
     * @return bool Always returns false
     */
    public function getAutoInitialize()
    {
        return false;
    }

    /**
     * Unsupported method.
     *
     * @return bool Always returns false
     */
    public function getInheritData()
    {
        return false;
    }

    /**
     * Returns all options passed during the construction of the button.
     *
     * @return array The passed options
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Returns whether a specific option exists.
     *
     * @param string $name The option name,
     *
     * @return bool Whether the option exists
     */
    public function hasOption($name)
    {
        return \array_key_exists($name, $this->options);
    }

    /**
     * Returns the value of a specific option.
     *
     * @param string $name    The option name
     * @param mixed  $default The value returned if the option does not exist
     *
     * @return mixed The option value
     */
    public function getOption($name, $default = null)
    {
        return \array_key_exists($name, $this->options) ? $this->options[$name] : $default;
    }

    /**
     * Unsupported method.
     *
     * @return int Always returns 0
     */
    public function count()
    {
        return 0;
    }

    /**
     * Unsupported method.
     *
     * @return \EmptyIterator Always returns an empty iterator
     */
    public function getIterator()
    {
        return new \EmptyIterator();
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

namespace Symfony\Component\Form;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\Exception\BadMethodCallException;
use Symfony\Component\Form\Exception\InvalidArgumentException;

/**
 * A builder for {@link Button} instances.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class ButtonBuilder implements \IteratorAggregate, FormBuilderInterface
{
    protected $locked = false;

    /**
     * @var bool
     */
    private $disabled;

    /**
     * @var ResolvedFormTypeInterface
     */
    private $type;

    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $attributes = [];

    /**
     * @var array
     */
    private $options;

    /**
     * @throws InvalidArgumentException if the name is empty
     */
    public function __construct(?string $name, array $options = [])
    {
        if ('' === $name || null === $name) {
            throw new InvalidArgumentException('Buttons cannot have empty names.');
        }

        $this->name = $name;
        $this->options = $options;

        if (preg_match('/^([^a-z0-9_].*)?(.*[^a-zA-Z0-9_\-:].*)?$/D', $name, $matches)) {
            if (isset($matches[1])) {
                @trigger_error(sprintf('Using names for buttons that do not start with a letter, a digit, or an underscore is deprecated since Symfony 4.3 and will throw an exception in 5.0 ("%s" given).', $name), E_USER_DEPRECATED);
            }
            if (isset($matches[2])) {
                @trigger_error(sprintf('Using names for buttons that do not contain only letters, digits, underscores ("_"), hyphens ("-") and colons (":") ("%s" given) is deprecated since Symfony 4.3 and will throw an exception in 5.0.', $name), E_USER_DEPRECATED);
            }
        }

        // to be added in 5.0
        // FormConfigBuilder::validateName($name);
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param string|int|FormBuilderInterface $child
     * @param string|FormTypeInterface        $type
     * @param array                           $options
     *
     * @throws BadMethodCallException
     */
    public function add($child, $type = null, array $options = [])
    {
        throw new BadMethodCallException('Buttons cannot have children.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param string                   $name
     * @param string|FormTypeInterface $type
     * @param array                    $options
     *
     * @throws BadMethodCallException
     */
    public function create($name, $type = null, array $options = [])
    {
        throw new BadMethodCallException('Buttons cannot have children.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param string $name
     *
     * @throws BadMethodCallException
     */
    public function get($name)
    {
        throw new BadMethodCallException('Buttons cannot have children.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param string $name
     *
     * @throws BadMethodCallException
     */
    public function remove($name)
    {
        throw new BadMethodCallException('Buttons cannot have children.');
    }

    /**
     * Unsupported method.
     *
     * @param string $name
     *
     * @return bool Always returns false
     */
    public function has($name)
    {
        return false;
    }

    /**
     * Returns the children.
     *
     * @return array Always returns an empty array
     */
    public function all()
    {
        return [];
    }

    /**
     * Creates the button.
     *
     * @return Button The button
     */
    public function getForm()
    {
        return new Button($this->getFormConfig());
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param string   $eventName
     * @param callable $listener
     * @param int      $priority
     *
     * @throws BadMethodCallException
     */
    public function addEventListener($eventName, $listener, $priority = 0)
    {
        throw new BadMethodCallException('Buttons do not support event listeners.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @throws BadMethodCallException
     */
    public function addEventSubscriber(EventSubscriberInterface $subscriber)
    {
        throw new BadMethodCallException('Buttons do not support event subscribers.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param DataTransformerInterface $viewTransformer
     * @param bool                     $forcePrepend
     *
     * @throws BadMethodCallException
     */
    public function addViewTransformer(DataTransformerInterface $viewTransformer, $forcePrepend = false)
    {
        throw new BadMethodCallException('Buttons do not support data transformers.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @throws BadMethodCallException
     */
    public function resetViewTransformers()
    {
        throw new BadMethodCallException('Buttons do not support data transformers.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param DataTransformerInterface $modelTransformer
     * @param bool                     $forceAppend
     *
     * @throws BadMethodCallException
     */
    public function addModelTransformer(DataTransformerInterface $modelTransformer, $forceAppend = false)
    {
        throw new BadMethodCallException('Buttons do not support data transformers.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @throws BadMethodCallException
     */
    public function resetModelTransformers()
    {
        throw new BadMethodCallException('Buttons do not support data transformers.');
    }

    /**
     * {@inheritdoc}
     */
    public function setAttribute($name, $value)
    {
        $this->attributes[$name] = $value;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @throws BadMethodCallException
     */
    public function setDataMapper(DataMapperInterface $dataMapper = null)
    {
        throw new BadMethodCallException('Buttons do not support data mappers.');
    }

    /**
     * Set whether the button is disabled.
     *
     * @param bool $disabled Whether the button is disabled
     *
     * @return $this
     */
    public function setDisabled($disabled)
    {
        $this->disabled = $disabled;

        return $this;
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param mixed $emptyData
     *
     * @throws BadMethodCallException
     */
    public function setEmptyData($emptyData)
    {
        throw new BadMethodCallException('Buttons do not support empty data.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param bool $errorBubbling
     *
     * @throws BadMethodCallException
     */
    public function setErrorBubbling($errorBubbling)
    {
        throw new BadMethodCallException('Buttons do not support error bubbling.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param bool $required
     *
     * @throws BadMethodCallException
     */
    public function setRequired($required)
    {
        throw new BadMethodCallException('Buttons cannot be required.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param null $propertyPath
     *
     * @throws BadMethodCallException
     */
    public function setPropertyPath($propertyPath)
    {
        throw new BadMethodCallException('Buttons do not support property paths.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param bool $mapped
     *
     * @throws BadMethodCallException
     */
    public function setMapped($mapped)
    {
        throw new BadMethodCallException('Buttons do not support data mapping.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param bool $byReference
     *
     * @throws BadMethodCallException
     */
    public function setByReference($byReference)
    {
        throw new BadMethodCallException('Buttons do not support data mapping.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param bool $compound
     *
     * @throws BadMethodCallException
     */
    public function setCompound($compound)
    {
        throw new BadMethodCallException('Buttons cannot be compound.');
    }

    /**
     * Sets the type of the button.
     *
     * @return $this
     */
    public function setType(ResolvedFormTypeInterface $type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param mixed $data
     *
     * @throws BadMethodCallException
     */
    public function setData($data)
    {
        throw new BadMethodCallException('Buttons do not support data.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @param bool $locked
     *
     * @throws BadMethodCallException
     */
    public function setDataLocked($locked)
    {
        throw new BadMethodCallException('Buttons do not support data locking.');
    }

    /**
     * Unsupported method.
     *
     * This method should not be invoked.
     *
     * @throws BadMethodCallException
     */
    public function setFormFactory(FormFactoryInterface $formFactory)
    {
        throw new BadMethodCallException('Buttons do not support form factories.');
    }

    /**
     * Unsupported method.
     *
     * @param string $action
     *
     * @throws BadMethodCallException
     */
    public function setAction($action)
    {
        throw new BadMethodCallException('Buttons do not support actions.');
    }

    /**
     * Unsupported method.
     *
     * @param string $method
     *
     * @throws BadMethodCallException
     */
    public function setMethod($method)
    {
        throw new BadMethodCallException('Buttons do not support methods.');
    }

    /**
     * Unsupported method.
     *
     * @throws BadMethodCallException
     */
    public function setRequestHandler(RequestHandlerInterface $requestHandler)
    {
        throw new BadMethodCallException('Buttons do not support request handlers.');
    }

    /**
     * Unsupported method.
     *
     * @param bool $initialize
     *
     * @return $this
     *
     * @throws BadMethodCallException
     */
    public function setAutoInitialize($initialize)
    {
        if (true === $initialize) {
            throw new BadMethodCallException('Buttons do not support automatic initialization.');
        }

        return $this;
    }

    /**
     * Unsupported method.
     *
     * @param bool $inheritData
     *
     * @throws BadMethodCallException
     */
    public function setInheritData($inheritData)
    {
        throw new BadMethodCallException('Buttons do not support data inheritance.');
    }

    /**
     * Builds and returns the button configuration.
     *
     * @return FormConfigInterface
     */
    public function getFormConfig()
    {
        // This method should be idempotent, so clone the builder
        $config = clone $this;
        $config->locked = true;

        return $config;
    }

    /**
     * Unsupported method.
     */
    public function getEventDispatcher()
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Unsupported method.
     */
    public function getPropertyPath()
    {
        return null;
    }

    /**
     * Unsupported method.
     *
     * @return bool Always returns false
     */
    public function getMapped()
    {
        return false;
    }

    /**
     * Unsupported method.
     *
     * @return bool Always returns false
     */
    public function getByReference()
    {
        return false;
    }

    /**
     * Unsupported method.
     *
     * @return bool Always returns false
     */
    public function getCompound()
    {
        return false;
    }

    /**
     * Returns the form type used to construct the button.
     *
     * @return ResolvedFormTypeInterface The button's type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Unsupported method.
     *
     * @return array Always returns an empty array
     */
    public function getViewTransformers()
    {
        return [];
    }

    /**
     * Unsupported method.
     *
     * @return array Always returns an empty array
     */
    public function getModelTransformers()
    {
        return [];
    }

    /**
     * Unsupported method.
     */
    public function getDataMapper()
    {
        return null;
    }

    /**
     * Unsupported method.
     *
     * @return bool Always returns false
     */
    public function getRequired()
    {
        return false;
    }

    /**
     * Returns whether the button is disabled.
     *
     * @return bool Whether the button is disabled
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * Unsupported method.
     *
     * @return bool Always returns false
     */
    public function getErrorBubbling()
    {
        return false;
    }

    /**
     * Unsupported method.
     */
    public function getEmptyData()
    {
        return null;
    }

    /**
     * Returns additional attributes of the button.
     *
     * @return array An array of key-value combinations
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Returns whether the attribute with the given name exists.
     *
     * @param string $name The attribute name
     *
     * @return bool Whether the attribute exists
     */
    public function hasAttribute($name)
    {
        return \array_key_exists($name, $this->attributes);
    }

    /**
     * Returns the value of the given attribute.
     *
     * @param string $name    The attribute name
     * @param mixed  $default The value returned if the attribute does not exist
     *
     * @return mixed The attribute value
     */
    public function getAttribute($name, $default = null)
    {
        return \array_key_exists($name, $this->attributes) ? $this->attributes[$name] : $default;
    }

    /**
     * Unsupported method.
     */
    public function getData()
    {
        return null;
    }

    /**
     * Unsupported method.
     */
    public function getDataClass()
    {
        return null;
    }

    /**
     * Unsupported method.
     *
     * @return bool Always returns false
     */
    public function getDataLocked()
    {
        return false;
    }

    /**
     * Unsupported method.
     */
    public function getFormFactory()
    {
        throw new BadMethodCallException('Buttons do not support adding children.');
    }

    /**
     * Unsupported method.
     */
    public function getAction()
    {
        return null;
    }

    /**
     * Unsupported method.
     */
    public function getMethod()
    {
        return null;
    }

    /**
     * Unsupported method.
     */
    public function getRequestHandler()
    {
        return null;
    }

    /**
     * Unsupported method.
     *
     * @return bool Always returns false
     */
    public function getAutoInitialize()
    {
        return false;
    }

    /**
     * Unsupported method.
     *
     * @return bool Always returns false
     */
    public function getInheritData()
    {
        return false;
    }

    /**
     * Returns all options passed during the construction of the button.
     *
     * @return array The passed options
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Returns whether a specific option exists.
     *
     * @param string $name The option name,
     *
     * @return bool Whether the option exists
     */
    public function hasOption($name)
    {
        return \array_key_exists($name, $this->options);
    }

    /**
     * Returns the value of a specific option.
     *
     * @param string $name    The option name
     * @param mixed  $default The value returned if the option does not exist
     *
     * @return mixed The option value
     */
    public function getOption($name, $default = null)
    {
        return \array_key_exists($name, $this->options) ? $this->options[$name] : $default;
    }

    /**
     * Unsupported method.
     *
     * @return int Always returns 0
     */
    public function count()
    {
        return 0;
    }

    /**
     * Unsupported method.
     *
     * @return \EmptyIterator Always returns an empty iterator
     */
    public function getIterator()
    {
        return new \EmptyIterator();
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
