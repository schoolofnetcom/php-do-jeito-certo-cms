<?php

/* users/new.phtml */
class __TwigTemplate_06ce79d76ecef155cbbaf3290c86f2b2bc071280f90c4709984fb7e705ea343d extends Twig_Template
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
        echo "<h3>Novo usuário</h3>

<form action=\"/admin/users/new\" method=\"post\">
    <input name=\"email\" type=\"email\" placeholder=\"email\">
    <input name=\"password\" type=\"password\" placeholder=\"senha\">
    <input type=\"submit\" value=\"Salvar\">
</form>
";
    }

    public function getTemplateName()
    {
        return "users/new.phtml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Novo usuário</h3>

<form action=\"/admin/users/new\" method=\"post\">
    <input name=\"email\" type=\"email\" placeholder=\"email\">
    <input name=\"password\" type=\"password\" placeholder=\"senha\">
    <input type=\"submit\" value=\"Salvar\">
</form>
", "users/new.phtml", "C:\\Users\\erik_\\Documents\\dev\\cursos\\son\\rapidos\\php-do-jeito-certo-2-criando-um-cms\\projeto\\templates\\users\\new.phtml");
    }
}
