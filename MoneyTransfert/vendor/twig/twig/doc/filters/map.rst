<<<<<<< HEAD
``map``
=======

.. versionadded:: 1.41
    The ``map`` filter was added in Twig 1.41 and 2.10.

The ``map`` filter applies an arrow function to the elements of a sequence or a
mapping. The arrow function receives the value of the sequence or mapping:

.. code-block:: twig

    {% set people = [
        {first: "Bob", last: "Smith"},
        {first: "Alice", last: "Dupond"},
    ] %}

    {{ people|map(p => "#{p.first} #{p.last}")|join(', ') }}
    {# outputs Bob Smith, Alice Dupond #}

The arrow function also receives the key as a second argument:

.. code-block:: twig

    {% set people = {
        "Bob": "Smith",
        "Alice": "Dupond",
    } %}

    {{ people|map((first, last) => "#{first} #{last}")|join(', ') }}
    {# outputs Bob Smith, Alice Dupond #}

Note that the arrow function has access to the current context.

Arguments
---------

* ``array``: The sequence or mapping
* ``arrow``: The arrow function
=======
``map``
=======

.. versionadded:: 1.41
    The ``map`` filter was added in Twig 1.41 and 2.10.

The ``map`` filter applies an arrow function to the elements of a sequence or a
mapping. The arrow function receives the value of the sequence or mapping:

.. code-block:: twig

    {% set people = [
        {first: "Bob", last: "Smith"},
        {first: "Alice", last: "Dupond"},
    ] %}

    {{ people|map(p => "#{p.first} #{p.last}")|join(', ') }}
    {# outputs Bob Smith, Alice Dupond #}

The arrow function also receives the key as a second argument:

.. code-block:: twig

    {% set people = {
        "Bob": "Smith",
        "Alice": "Dupond",
    } %}

    {{ people|map((first, last) => "#{first} #{last}")|join(', ') }}
    {# outputs Bob Smith, Alice Dupond #}

Note that the arrow function has access to the current context.

Arguments
---------

* ``array``: The sequence or mapping
* ``arrow``: The arrow function
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
