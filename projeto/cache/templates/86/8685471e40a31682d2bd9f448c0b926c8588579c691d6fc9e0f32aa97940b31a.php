<?php

/* layouts/front.phtml */
class __TwigTemplate_2dbcbf38e52cae9478a6c319427890e5f47b98f27196b55fec32636a58c52f2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
    <link rel=\"stylesheet\" href=\"/style.css\">
</head>
<body>
<nav>
    <ul>
        <li><a href=\"/\">Home</a></li>
        <li><a href=\"/page/3\">Sobre nós</a></li>
    </ul>
</nav>
    ";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "</body>
</html>
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layouts/front.phtml";
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  40 => 18,  38 => 17,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
    <link rel=\"stylesheet\" href=\"/style.css\">
</head>
<body>
<nav>
    <ul>
        <li><a href=\"/\">Home</a></li>
        <li><a href=\"/page/3\">Sobre nós</a></li>
    </ul>
</nav>
    {% block content %}{% endblock %}
</body>
</html>
", "layouts/front.phtml", "C:\\Users\\erik_\\Documents\\dev\\cursos\\son\\rapidos\\php-do-jeito-certo-2-criando-um-cms\\projeto\\templates\\layouts\\front.phtml");
    }
}
