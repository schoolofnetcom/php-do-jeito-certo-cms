<?php

/* pages/index.phtml */
class __TwigTemplate_c6607c60a9b4a62babfea7eaa14518309c098cfaee7a34d225ebf5ef08664606 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts/back.phtml", "pages/index.phtml", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/back.phtml";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <table class=\"\">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "title", array()), "html", null, true);
            echo "</td>
                <td>
                <a href=\"/admin/pages/";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "id", array()), "html", null, true);
            echo "\">ver</a>
                <a href=\"/admin/pages/edit/";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "id", array()), "html", null, true);
            echo "\">editar</a>
                <form action=\"/admin/pages/delete/";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["page"], "id", array()), "html", null, true);
            echo "\" method=\"post\" style=\"display:inline-block\">
                    <input type=\"submit\" value=\"remover\">
                </form>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 26
            echo "            <tr>
                <td colspan=\"3\">Nenhum registro</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>

    <a href=\"/admin/pages/new\">Nova página</a>
";
    }

    public function getTemplateName()
    {
        return "pages/index.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 30,  78 => 26,  67 => 20,  63 => 19,  59 => 18,  54 => 16,  50 => 15,  47 => 14,  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts/back.phtml\" %}

{% block content %}
    <table class=\"\">
        <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% for page in pages %}
            <tr>
                <td>{{ page.id }}</td>
                <td>{{ page.title }}</td>
                <td>
                <a href=\"/admin/pages/{{page.id}}\">ver</a>
                <a href=\"/admin/pages/edit/{{page.id}}\">editar</a>
                <form action=\"/admin/pages/delete/{{ page.id }}\" method=\"post\" style=\"display:inline-block\">
                    <input type=\"submit\" value=\"remover\">
                </form>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"3\">Nenhum registro</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"/admin/pages/new\">Nova página</a>
{% endblock %}
", "pages/index.phtml", "C:\\Users\\erik_\\Documents\\dev\\cursos\\son\\rapidos\\php-do-jeito-certo-2-criando-um-cms\\projeto\\templates\\pages\\index.phtml");
    }
}
