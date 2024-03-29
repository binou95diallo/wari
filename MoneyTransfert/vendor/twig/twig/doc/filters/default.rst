<<<<<<< HEAD
``default``
===========

The ``default`` filter returns the passed default value if the value is
undefined or empty, otherwise the value of the variable:

.. code-block:: twig

    {{ var|default('var is not defined') }}

    {{ var.foo|default('foo item on var is not defined') }}

    {{ var['foo']|default('foo item on var is not defined') }}

    {{ ''|default('passed var is empty')  }}

When using the ``default`` filter on an expression that uses variables in some
method calls, be sure to use the ``default`` filter whenever a variable can be
undefined:

.. code-block:: twig

    {{ var.method(foo|default('foo'))|default('foo') }}

.. note::

    Read the documentation for the :doc:`defined<../tests/defined>` and
    :doc:`empty<../tests/empty>` tests to learn more about their semantics.

Arguments
---------

* ``default``: The default value
=======
``default``
===========

The ``default`` filter returns the passed default value if the value is
undefined or empty, otherwise the value of the variable:

.. code-block:: twig

    {{ var|default('var is not defined') }}

    {{ var.foo|default('foo item on var is not defined') }}

    {{ var['foo']|default('foo item on var is not defined') }}

    {{ ''|default('passed var is empty')  }}

When using the ``default`` filter on an expression that uses variables in some
method calls, be sure to use the ``default`` filter whenever a variable can be
undefined:

.. code-block:: twig

    {{ var.method(foo|default('foo'))|default('foo') }}

.. note::

    Read the documentation for the :doc:`defined<../tests/defined>` and
    :doc:`empty<../tests/empty>` tests to learn more about their semantics.

Arguments
---------

* ``default``: The default value
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
