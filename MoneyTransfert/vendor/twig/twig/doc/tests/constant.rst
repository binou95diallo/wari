<<<<<<< HEAD
``constant``
============

``constant`` checks if a variable has the exact same value as a constant. You
can use either global constants or class constants:

.. code-block:: twig

    {% if post.status is constant('Post::PUBLISHED') %}
        the status attribute is exactly the same as Post::PUBLISHED
    {% endif %}

You can test constants from object instances as well:

.. code-block:: twig

    {% if post.status is constant('PUBLISHED', post) %}
        the status attribute is exactly the same as Post::PUBLISHED
    {% endif %}
=======
``constant``
============

``constant`` checks if a variable has the exact same value as a constant. You
can use either global constants or class constants:

.. code-block:: twig

    {% if post.status is constant('Post::PUBLISHED') %}
        the status attribute is exactly the same as Post::PUBLISHED
    {% endif %}

You can test constants from object instances as well:

.. code-block:: twig

    {% if post.status is constant('PUBLISHED', post) %}
        the status attribute is exactly the same as Post::PUBLISHED
    {% endif %}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
