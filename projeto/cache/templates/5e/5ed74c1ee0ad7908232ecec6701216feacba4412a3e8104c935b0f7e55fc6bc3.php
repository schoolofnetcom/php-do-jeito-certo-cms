<?php

/* users/edit.phtml */
class __TwigTemplate_abc37a591c8697830b8dc122a01e720cc973c1c9b970a2376a88e3d3a3d23b24 extends Twig_Template
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

<form action=\"/admin/users/edit/";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "id", array()), "html", null, true);
        echo "\" method=\"post\">
    <input name=\"email\" type=\"email\" placeholder=\"email\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "\">
    <input name=\"password\" type=\"password\" placeholder=\"senha\" value=\"\">
    <input type=\"submit\" value=\"Salvar\">
</form>
";
    }

    public function getTemplateName()
    {
        return "users/edit.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Usuário: {{ user.email }}</h3>

<form action=\"/admin/users/edit/{{ user.id }}\" method=\"post\">
    <input name=\"email\" type=\"email\" placeholder=\"email\" value=\"{{ user.email }}\">
    <input name=\"password\" type=\"password\" placeholder=\"senha\" value=\"\">
    <input type=\"submit\" value=\"Salvar\">
</form>
", "users/edit.phtml", "C:\\Users\\erik_\\Documents\\dev\\cursos\\son\\rapidos\\php-do-jeito-certo-2-criando-um-cms\\projeto\\templates\\users\\edit.phtml");
    }
}
