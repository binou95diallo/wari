<<<<<<< HEAD
``empty``
=========

.. versionadded:: 2.3

    Support for the ``__toString()`` magic method has been added in Twig 2.3.

``empty`` checks if a variable is an empty string, an empty array, an empty
hash, exactly ``false``, or exactly ``null``.

For objects that implement the ``Countable`` interface, ``empty`` will check the
return value of the ``count()`` method.

For objects that implement the ``__toString()`` magic method (and not ``Countable``),
it will check if an empty string is returned.

.. code-block:: twig

    {% if foo is empty %}
        ...
    {% endif %}

=======
``empty``
=========

.. versionadded:: 2.3

    Support for the ``__toString()`` magic method has been added in Twig 2.3.

``empty`` checks if a variable is an empty string, an empty array, an empty
hash, exactly ``false``, or exactly ``null``.

For objects that implement the ``Countable`` interface, ``empty`` will check the
return value of the ``count()`` method.

For objects that implement the ``__toString()`` magic method (and not ``Countable``),
it will check if an empty string is returned.

.. code-block:: twig

    {% if foo is empty %}
        ...
    {% endif %}

>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
