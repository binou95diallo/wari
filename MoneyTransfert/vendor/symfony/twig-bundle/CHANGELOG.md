<<<<<<< HEAD
CHANGELOG
=========

4.2.0
-----

 * deprecated support for legacy templates directories `src/Resources/views/` and `src/Resources/<BundleName>/views/`, use `templates/` and `templates/bundles/<BundleName>/` instead.

4.1.0
-----

 * added priority to Twig extensions 
 * deprecated relying on the default value (`false`) of the `twig.strict_variables` configuration option. The `%kernel.debug%` parameter will be the new default in 5.0

4.0.0
-----

 * removed `ContainerAwareRuntimeLoader`

3.4.0
-----

 * added exclusive Twig namespace only for root bundles
 * deprecated `Symfony\Bundle\TwigBundle\Command\DebugCommand`, use `Symfony\Bridge\Twig\Command\DebugCommand` instead
 * deprecated relying on the `ContainerAwareInterface` implementation for `Symfony\Bundle\TwigBundle\Command\LintCommand`
 * added option to configure default path templates (via `default_path`)

3.3.0
-----

 * Deprecated `ContainerAwareRuntimeLoader`

2.7.0
-----

 * made it possible to configure the default formats for both the `date` and the `number_format` filter
 * added support for the new Asset component (from Twig bridge)
 * deprecated the assets extension (use the one from the Twig bridge instead)

2.6.0
-----

 * [BC BREAK] changed exception.json.twig to match same structure as error.json.twig making clients independent of runtime environment.

2.3.0
-----

 * added option to configure a custom template escaping guesser (via `autoescape_service` and `autoescape_service_method`)

2.2.0
-----

 * moved the exception controller to be a service (`twig.controller.exception:showAction` vs `Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction`)
 * added support for multiple loaders via the "twig.loader" tag.
 * added automatic registration of namespaced paths for registered bundles
 * added support for namespaced paths

2.1.0
-----

 * added a new setting ("paths") to configure more paths for the Twig filesystem loader
 * added contextual escaping based on the template file name (disabled if you explicitly pass an autoescape option)
 * added a command that extracts translation messages from templates
 * added the real template name when an error occurs in a Twig template
 * added the twig:lint command that will validate a Twig template syntax.
=======
CHANGELOG
=========

4.2.0
-----

 * deprecated support for legacy templates directories `src/Resources/views/` and `src/Resources/<BundleName>/views/`, use `templates/` and `templates/bundles/<BundleName>/` instead.

4.1.0
-----

 * added priority to Twig extensions 
 * deprecated relying on the default value (`false`) of the `twig.strict_variables` configuration option. The `%kernel.debug%` parameter will be the new default in 5.0

4.0.0
-----

 * removed `ContainerAwareRuntimeLoader`

3.4.0
-----

 * added exclusive Twig namespace only for root bundles
 * deprecated `Symfony\Bundle\TwigBundle\Command\DebugCommand`, use `Symfony\Bridge\Twig\Command\DebugCommand` instead
 * deprecated relying on the `ContainerAwareInterface` implementation for `Symfony\Bundle\TwigBundle\Command\LintCommand`
 * added option to configure default path templates (via `default_path`)

3.3.0
-----

 * Deprecated `ContainerAwareRuntimeLoader`

2.7.0
-----

 * made it possible to configure the default formats for both the `date` and the `number_format` filter
 * added support for the new Asset component (from Twig bridge)
 * deprecated the assets extension (use the one from the Twig bridge instead)

2.6.0
-----

 * [BC BREAK] changed exception.json.twig to match same structure as error.json.twig making clients independent of runtime environment.

2.3.0
-----

 * added option to configure a custom template escaping guesser (via `autoescape_service` and `autoescape_service_method`)

2.2.0
-----

 * moved the exception controller to be a service (`twig.controller.exception:showAction` vs `Symfony\\Bundle\\TwigBundle\\Controller\\ExceptionController::showAction`)
 * added support for multiple loaders via the "twig.loader" tag.
 * added automatic registration of namespaced paths for registered bundles
 * added support for namespaced paths

2.1.0
-----

 * added a new setting ("paths") to configure more paths for the Twig filesystem loader
 * added contextual escaping based on the template file name (disabled if you explicitly pass an autoescape option)
 * added a command that extracts translation messages from templates
 * added the real template name when an error occurs in a Twig template
 * added the twig:lint command that will validate a Twig template syntax.
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
