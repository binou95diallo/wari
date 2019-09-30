<<<<<<< HEAD
<?= $helper->getHeadPrintCode('New '.$entity_class_name) ?>

{% block body %}
    <h1>Create new <?= $entity_class_name ?></h1>

    {{ include('<?= $route_name ?>/_form.html.twig') }}

    <a href="{{ path('<?= $route_name ?>_index') }}">back to list</a>
{% endblock %}
=======
<?= $helper->getHeadPrintCode('New '.$entity_class_name) ?>

{% block body %}
    <h1>Create new <?= $entity_class_name ?></h1>

    {{ include('<?= $route_name ?>/_form.html.twig') }}

    <a href="{{ path('<?= $route_name ?>_index') }}">back to list</a>
{% endblock %}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
