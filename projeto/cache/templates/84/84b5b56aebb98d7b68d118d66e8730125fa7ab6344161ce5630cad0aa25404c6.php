<?php

/* pages/view.phtml */
class __TwigTemplate_202640c7620fc3b0e32c75ccaff2cb0934fa8d93b2d01364aa77930b64c9db54 extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["page"] ?? null), "title", array()), "html", null, true);
        echo "</h3>

<pre>
";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["page"] ?? null), "body", array()), "html", null, true);
        echo "
</pre>
";
    }

    public function getTemplateName()
    {
        return "pages/view.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Usuário: {{ page.title }}</h3>

<pre>
{{ page.body }}
</pre>
", "pages/view.phtml", "C:\\Users\\erik_\\Documents\\dev\\cursos\\son\\rapidos\\php-do-jeito-certo-2-criando-um-cms\\projeto\\templates\\pages\\view.phtml");
    }
}
