<?php

/* users/view.phtml */
class __TwigTemplate_3799d0059b7cdb8b271a6436cffb3549ab7ad2ac02964d3f03975aaabcd4dabc extends Twig_Template
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
        echo "<h3>Usuário: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "</h3>

";
    }

    public function getTemplateName()
    {
        return "users/view.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Usuário: {{ user.email }}</h3>

", "users/view.phtml", "C:\\Users\\erik_\\Documents\\dev\\cursos\\son\\rapidos\\php-do-jeito-certo-2-criando-um-cms\\projeto\\templates\\users\\view.phtml");
    }
}
