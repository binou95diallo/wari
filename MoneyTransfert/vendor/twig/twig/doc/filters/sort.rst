<<<<<<< HEAD
``sort``
========

The ``sort`` filter sorts an array:

.. code-block:: twig

    {% for user in users|sort %}
        ...
    {% endfor %}

.. note::

    Internally, Twig uses the PHP `asort`_ function to maintain index
    association. It supports Traversable objects by transforming
    those to arrays.

.. _`asort`: https://secure.php.net/asort
=======
``sort``
========

The ``sort`` filter sorts an array:

.. code-block:: twig

    {% for user in users|sort %}
        ...
    {% endfor %}

.. note::

    Internally, Twig uses the PHP `asort`_ function to maintain index
    association. It supports Traversable objects by transforming
    those to arrays.

.. _`asort`: https://secure.php.net/asort
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
