<?php

/* pages/edit.phtml */
class __TwigTemplate_ef3cad15f0d5efb2da6a6934bf82b58278580cd2daa533539c120a3a5f3abc3c extends Twig_Template
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
        echo "<h3>Página: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["page"] ?? null), "title", array()), "html", null, true);
        echo "</h3>

<form action=\"/admin/pages/edit/";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["page"] ?? null), "id", array()), "html", null, true);
        echo "\" method=\"post\">
    <input name=\"title\" type=\"text\" placeholder=\"title\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["page"] ?? null), "title", array()), "html", null, true);
        echo "\">
    <textarea name=\"body\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["page"] ?? null), "body", array()), "html", null, true);
        echo "</textarea>
    <input type=\"submit\" value=\"Salvar\">
</form>
";
    }

    public function getTemplateName()
    {
        return "pages/edit.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  29 => 4,  25 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Página: {{ page.title }}</h3>

<form action=\"/admin/pages/edit/{{ page.id }}\" method=\"post\">
    <input name=\"title\" type=\"text\" placeholder=\"title\" value=\"{{ page.title }}\">
    <textarea name=\"body\">{{ page.body }}</textarea>
    <input type=\"submit\" value=\"Salvar\">
</form>
", "pages/edit.phtml", "C:\\Users\\erik_\\Documents\\dev\\cursos\\son\\rapidos\\php-do-jeito-certo-2-criando-um-cms\\projeto\\templates\\pages\\edit.phtml");
    }
}
