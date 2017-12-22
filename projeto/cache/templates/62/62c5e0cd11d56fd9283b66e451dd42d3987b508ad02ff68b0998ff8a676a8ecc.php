<?php

/* pages/new.phtml */
class __TwigTemplate_98db54b5140e5468d20c4e87198547682706106208ba893610cc8dddf6a3d68f extends Twig_Template
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
        echo "<h3>Nova página</h3>

<form action=\"/admin/pages/new\" method=\"post\">
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
        return "pages/new.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Nova página</h3>

<form action=\"/admin/pages/new\" method=\"post\">
    <input name=\"title\" type=\"text\" placeholder=\"title\" value=\"{{ page.title }}\">
    <textarea name=\"body\">{{ page.body }}</textarea>
    <input type=\"submit\" value=\"Salvar\">
</form>
", "pages/new.phtml", "C:\\Users\\erik_\\Documents\\dev\\cursos\\son\\rapidos\\php-do-jeito-certo-2-criando-um-cms\\projeto\\templates\\pages\\new.phtml");
    }
}
