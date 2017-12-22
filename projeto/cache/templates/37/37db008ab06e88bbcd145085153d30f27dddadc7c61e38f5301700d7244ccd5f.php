<?php

/* layouts/back.phtml */
class __TwigTemplate_bb887292f33d8e79bda7806336c7121168fcd4f3d4250d04baba61761e08d1d6 extends Twig_Template
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
    <title>Adminsitração</title>
</head>
<body>
<nav>
    <ul>
        <li><a href=\"/admin/pages\">Páginas</a></li>
        <li><a href=\"/admin/users\">Usuários</a></li>
    </ul>
</nav>
    ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "</body>
</html>
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layouts/back.phtml";
    }

    public function getDebugInfo()
    {
        return array (  45 => 16,  39 => 17,  37 => 16,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Adminsitração</title>
</head>
<body>
<nav>
    <ul>
        <li><a href=\"/admin/pages\">Páginas</a></li>
        <li><a href=\"/admin/users\">Usuários</a></li>
    </ul>
</nav>
    {% block content %}{% endblock %}
</body>
</html>
", "layouts/back.phtml", "C:\\Users\\erik_\\Documents\\dev\\cursos\\son\\rapidos\\php-do-jeito-certo-2-criando-um-cms\\projeto\\templates\\layouts\\back.phtml");
    }
}
