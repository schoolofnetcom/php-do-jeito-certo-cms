<?php

/* login/index.phtml */
class __TwigTemplate_4d7cd64cbefa542d0cf6cc6749f2d7d6c2e8880da462b43c8ef659a3d09ca85d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h3>Autenticação</h3>

<form action=\"/admin/login\" method=\"post\">
    <input name=\"email\" type=\"email\" placeholder=\"email\">
    <input name=\"password\" type=\"password\" placeholder=\"senha\">
    <input type=\"submit\" value=\"Salvar\">
</form>

";
    }

    public function getTemplateName()
    {
        return "login/index.phtml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Autenticação</h3>

<form action=\"/admin/login\" method=\"post\">
    <input name=\"email\" type=\"email\" placeholder=\"email\">
    <input name=\"password\" type=\"password\" placeholder=\"senha\">
    <input type=\"submit\" value=\"Salvar\">
</form>

", "login/index.phtml", "C:\\Users\\erik_\\Documents\\dev\\cursos\\son\\rapidos\\php-do-jeito-certo-2-criando-um-cms\\projeto\\templates\\login\\index.phtml");
    }
}
