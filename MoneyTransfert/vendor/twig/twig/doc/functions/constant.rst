<<<<<<< HEAD
``constant``
============

``constant`` returns the constant value for a given string:

.. code-block:: twig

    {{ some_date|date(constant('DATE_W3C')) }}
    {{ constant('Namespace\\Classname::CONSTANT_NAME') }}

You can read constants from object instances as well:

.. code-block:: twig

    {{ constant('RSS', date) }}

Use the ``defined`` test to check if a constant is defined:

.. code-block:: twig

    {% if constant('SOME_CONST') is defined %}
        ...
    {% endif %}
=======
``constant``
============

``constant`` returns the constant value for a given string:

.. code-block:: twig

    {{ some_date|date(constant('DATE_W3C')) }}
    {{ constant('Namespace\\Classname::CONSTANT_NAME') }}

You can read constants from object instances as well:

.. code-block:: twig

    {{ constant('RSS', date) }}

Use the ``defined`` test to check if a constant is defined:

.. code-block:: twig

    {% if constant('SOME_CONST') is defined %}
        ...
    {% endif %}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
