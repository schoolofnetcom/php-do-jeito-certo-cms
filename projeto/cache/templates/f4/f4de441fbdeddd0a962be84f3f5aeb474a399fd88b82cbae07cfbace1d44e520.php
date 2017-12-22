<?php

/* render_page.phtml */
class __TwigTemplate_cb2e305f19a6975eb9eb76560d87d2f229d4ffd3c1c2cbb3c297a9c02e44cf14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/front.phtml", "render_page.phtml", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/front.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["page"] ?? null), "title", array()), "html", null, true);
        echo "</h3>

    ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["page"] ?? null), "body", array()), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "render_page.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts/front.phtml\" %}

{% block content %}
    <h3>{{ page.title }}</h3>

    {{page.body}}
{% endblock %}
", "render_page.phtml", "C:\\Users\\erik_\\Documents\\dev\\cursos\\son\\rapidos\\php-do-jeito-certo-2-criando-um-cms\\projeto\\templates\\render_page.phtml");
    }
}
