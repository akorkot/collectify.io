<?php

/* FrontBundle:Sheet:list.html.twig */
class __TwigTemplate_12aeafa0e785ee106ab967d06c0e5bdef806c0be4e3920c59ef285390e5a088e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontBundle:Sheet:list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Collectify Sheet List";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Sheet List</h1>
    ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "machin"), "method"), "html", null, true);
        echo "
    ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "machin"), "method"), 0, array(), "array"), "html", null, true);
        echo "
    ";
        // line 9
        $this->loadTemplate("FrontBundle:Includes:Default/body.html.twig", "FrontBundle:Sheet:list.html.twig", 9)->display($context);
        // line 10
        echo "
    <a href=\"/web/app_dev.php/sheet/create\">Create sheet</a>
    <ul>
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sheets"]) ? $context["sheets"] : $this->getContext($context, "sheets")));
        foreach ($context['_seq'] as $context["_key"] => $context["sheet"]) {
            // line 14
            echo "            <li>
                    ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["sheet"], "name", array()), "html", null, true);
            echo "
                    <a href=\"/web/app_dev.php/sheet/";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["sheet"], "id", array()), "html", null, true);
            echo "\">View</a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </ul>


";
    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        $this->loadTemplate("FrontBundle:Includes:Default/footer.html.twig", "FrontBundle:Sheet:list.html.twig", 25)->display($context);
    }

    public function getTemplateName()
    {
        return "FrontBundle:Sheet:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 25,  84 => 24,  77 => 19,  68 => 16,  64 => 15,  61 => 14,  57 => 13,  52 => 10,  50 => 9,  46 => 8,  42 => 7,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %}Collectify Sheet List{% endblock %}

{% block body %}
    <h1>Sheet List</h1>
    {{ app.session.get(\"machin\") }}
    {{ app.session.flashbag.get(\"machin\")[0] }}
    {% include \"FrontBundle:Includes:Default/body.html.twig\" %}

    <a href=\"/web/app_dev.php/sheet/create\">Create sheet</a>
    <ul>
        {% for sheet in sheets %}
            <li>
                    {{ sheet.name }}
                    <a href=\"/web/app_dev.php/sheet/{{ sheet.id }}\">View</a>
            </li>
        {% endfor %}
    </ul>


{% endblock %}

{% block footer %}
    {% include \"FrontBundle:Includes:Default/footer.html.twig\" %}
{% endblock %}";
    }
}
