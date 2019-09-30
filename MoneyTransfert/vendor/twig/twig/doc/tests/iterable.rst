<<<<<<< HEAD
``iterable``
============

``iterable`` checks if a variable is an array or a traversable object:

.. code-block:: twig

    {# evaluates to true if the foo variable is iterable #}
    {% if users is iterable %}
        {% for user in users %}
            Hello {{ user }}!
        {% endfor %}
    {% else %}
        {# users is probably a string #}
        Hello {{ users }}!
    {% endif %}
=======
``iterable``
============

``iterable`` checks if a variable is an array or a traversable object:

.. code-block:: twig

    {# evaluates to true if the foo variable is iterable #}
    {% if users is iterable %}
        {% for user in users %}
            Hello {{ user }}!
        {% endfor %}
    {% else %}
        {# users is probably a string #}
        Hello {{ users }}!
    {% endif %}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
