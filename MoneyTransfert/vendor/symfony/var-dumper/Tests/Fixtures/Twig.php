<<<<<<< HEAD
<?php

/* foo.twig */
class __TwigTemplate_VarDumperFixture_u75a09 extends Twig\Template
{
    private $path;

    public function __construct(Twig\Environment $env = null, $path = null)
    {
        if (null !== $env) {
            parent::__construct($env);
        }
        $this->parent = false;
        $this->blocks = [];
        $this->path = $path;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        throw new \Exception('Foobar');
    }

    public function getTemplateName()
    {
        return 'foo.twig';
    }

    public function getDebugInfo()
    {
        return [20 => 1, 21 => 2];
    }

    public function getSourceContext()
    {
        return new Twig\Source("   foo bar\n     twig source\n\n", 'foo.twig', $this->path ?: __FILE__);
    }
}
=======
<?php

/* foo.twig */
class __TwigTemplate_VarDumperFixture_u75a09 extends Twig\Template
{
    private $path;

    public function __construct(Twig\Environment $env = null, $path = null)
    {
        if (null !== $env) {
            parent::__construct($env);
        }
        $this->parent = false;
        $this->blocks = [];
        $this->path = $path;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        throw new \Exception('Foobar');
    }

    public function getTemplateName()
    {
        return 'foo.twig';
    }

    public function getDebugInfo()
    {
        return [20 => 1, 21 => 2];
    }

    public function getSourceContext()
    {
        return new Twig\Source("   foo bar\n     twig source\n\n", 'foo.twig', $this->path ?: __FILE__);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
