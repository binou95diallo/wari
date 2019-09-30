<<<<<<< HEAD
``length``
==========

.. versionadded:: 2.3

    Support for the ``__toString()`` magic method has been added in Twig 2.3.

The ``length`` filter returns the number of items of a sequence or mapping, or
the length of a string.

For objects that implement the ``Countable`` interface, ``length`` will use the
return value of the ``count()`` method.

For objects that implement the ``__toString()`` magic method (and not ``Countable``),
it will return the length of the string provided by that method.

For objects that implement the ``IteratorAggregate`` interface, ``length`` will use the return value of the ``iterator_count()`` method.

.. code-block:: twig

    {% if users|length > 10 %}
        ...
    {% endif %}
=======
``length``
==========

.. versionadded:: 2.3

    Support for the ``__toString()`` magic method has been added in Twig 2.3.

The ``length`` filter returns the number of items of a sequence or mapping, or
the length of a string.

For objects that implement the ``Countable`` interface, ``length`` will use the
return value of the ``count()`` method.

For objects that implement the ``__toString()`` magic method (and not ``Countable``),
it will return the length of the string provided by that method.

For objects that implement the ``IteratorAggregate`` interface, ``length`` will use the return value of the ``iterator_count()`` method.

.. code-block:: twig

    {% if users|length > 10 %}
        ...
    {% endif %}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
