<<<<<<< HEAD
``max``
=======

``max`` returns the biggest value of a sequence or a set of values:

.. code-block:: twig

    {{ max(1, 3, 2) }}
    {{ max([1, 3, 2]) }}

When called with a mapping, max ignores keys and only compares values:

.. code-block:: twig

    {{ max({2: "e", 1: "a", 3: "b", 5: "d", 4: "c"}) }}
    {# returns "e" #}

=======
``max``
=======

``max`` returns the biggest value of a sequence or a set of values:

.. code-block:: twig

    {{ max(1, 3, 2) }}
    {{ max([1, 3, 2]) }}

When called with a mapping, max ignores keys and only compares values:

.. code-block:: twig

    {{ max({2: "e", 1: "a", 3: "b", 5: "d", 4: "c"}) }}
    {# returns "e" #}

>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
