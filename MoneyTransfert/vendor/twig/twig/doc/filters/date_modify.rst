<<<<<<< HEAD
``date_modify``
===============

The ``date_modify`` filter modifies a date with a given modifier string:

.. code-block:: twig

    {{ post.published_at|date_modify("+1 day")|date("m/d/Y") }}

The ``date_modify`` filter accepts strings (it must be in a format supported
by the `strtotime`_ function) or `DateTime`_ instances. You can easily combine
it with the :doc:`date<date>` filter for formatting.

Arguments
---------

* ``modifier``: The modifier

.. _`strtotime`: https://secure.php.net/strtotime
.. _`DateTime`:  https://secure.php.net/DateTime
=======
``date_modify``
===============

The ``date_modify`` filter modifies a date with a given modifier string:

.. code-block:: twig

    {{ post.published_at|date_modify("+1 day")|date("m/d/Y") }}

The ``date_modify`` filter accepts strings (it must be in a format supported
by the `strtotime`_ function) or `DateTime`_ instances. You can easily combine
it with the :doc:`date<date>` filter for formatting.

Arguments
---------

* ``modifier``: The modifier

.. _`strtotime`: https://secure.php.net/strtotime
.. _`DateTime`:  https://secure.php.net/DateTime
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
