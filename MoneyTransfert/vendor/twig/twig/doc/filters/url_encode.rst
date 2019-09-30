<<<<<<< HEAD
``url_encode``
==============

The ``url_encode`` filter percent encodes a given string as URL segment
or an array as query string:

.. code-block:: twig

    {{ "path-seg*ment"|url_encode }}
    {# outputs "path-seg%2Ament" #}

    {{ "string with spaces"|url_encode }}
    {# outputs "string%20with%20spaces" #}

    {{ {'param': 'value', 'foo': 'bar'}|url_encode }}
    {# outputs "param=value&foo=bar" #}

.. note::

    Internally, Twig uses the PHP ``rawurlencode``.

.. _`rawurlencode`: https://secure.php.net/rawurlencode
=======
``url_encode``
==============

The ``url_encode`` filter percent encodes a given string as URL segment
or an array as query string:

.. code-block:: twig

    {{ "path-seg*ment"|url_encode }}
    {# outputs "path-seg%2Ament" #}

    {{ "string with spaces"|url_encode }}
    {# outputs "string%20with%20spaces" #}

    {{ {'param': 'value', 'foo': 'bar'}|url_encode }}
    {# outputs "param=value&foo=bar" #}

.. note::

    Internally, Twig uses the PHP ``rawurlencode``.

.. _`rawurlencode`: https://secure.php.net/rawurlencode
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
