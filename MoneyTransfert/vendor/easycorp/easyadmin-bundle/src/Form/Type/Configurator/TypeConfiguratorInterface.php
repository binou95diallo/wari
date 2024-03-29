<<<<<<< HEAD
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator;

use Symfony\Component\Form\FormConfigInterface;

/**
 * This is the interface implemented by all the form type configurations. They
 * allow to add specific configuration options for each form type, no matter if
 * they are built-in Symfony types, custom types or types provided by third-party
 * bundles.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
interface TypeConfiguratorInterface
{
    /**
     * Configure the options for this type.
     *
     * @param string              $name         The field name
     * @param array               $options      The configured field options provided by Symfony Form component
     * @param array               $metadata     The field metadata provided by EasyAdmin
     * @param FormConfigInterface $parentConfig The parent form configuration
     *
     * @return array The array of options to configure
     */
    public function configure($name, array $options, array $metadata, FormConfigInterface $parentConfig);

    /**
     * Returns true if the type option configurator supports this field.
     *
     * @param string $type     The form type alias or FQCN
     * @param array  $options  The configured field options provided by Symfony Form component
     * @param array  $metadata The EasyAdmin config metadata for this field
     *
     * @return bool
     */
    public function supports($type, array $options, array $metadata);
}
=======
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator;

use Symfony\Component\Form\FormConfigInterface;

/**
 * This is the interface implemented by all the form type configurations. They
 * allow to add specific configuration options for each form type, no matter if
 * they are built-in Symfony types, custom types or types provided by third-party
 * bundles.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
interface TypeConfiguratorInterface
{
    /**
     * Configure the options for this type.
     *
     * @param string              $name         The field name
     * @param array               $options      The configured field options provided by Symfony Form component
     * @param array               $metadata     The field metadata provided by EasyAdmin
     * @param FormConfigInterface $parentConfig The parent form configuration
     *
     * @return array The array of options to configure
     */
    public function configure($name, array $options, array $metadata, FormConfigInterface $parentConfig);

    /**
     * Returns true if the type option configurator supports this field.
     *
     * @param string $type     The form type alias or FQCN
     * @param array  $options  The configured field options provided by Symfony Form component
     * @param array  $metadata The EasyAdmin config metadata for this field
     *
     * @return bool
     */
    public function supports($type, array $options, array $metadata);
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
