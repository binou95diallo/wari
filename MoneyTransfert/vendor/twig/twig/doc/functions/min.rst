<<<<<<< HEAD
``min``
=======

``min`` returns the lowest value of a sequence or a set of values:

.. code-block:: twig

    {{ min(1, 3, 2) }}
    {{ min([1, 3, 2]) }}

When called with a mapping, min ignores keys and only compares values:

.. code-block:: twig

    {{ min({2: "e", 3: "a", 1: "b", 5: "d", 4: "c"}) }}
    {# returns "a" #}

=======
``min``
=======

``min`` returns the lowest value of a sequence or a set of values:

.. code-block:: twig

    {{ min(1, 3, 2) }}
    {{ min([1, 3, 2]) }}

When called with a mapping, min ignores keys and only compares values:

.. code-block:: twig

    {{ min({2: "e", 3: "a", 1: "b", 5: "d", 4: "c"}) }}
    {# returns "a" #}

>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
