<?php

/* FrontBundle:Sheet:show.html.twig */
class __TwigTemplate_6a16aef30a96d0f363c789263516d8b370893a736b6e6853603f0583cd0ec98c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontBundle:Sheet:show.html.twig", 1);
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
        echo "Collectify Sheet Show";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Sheet ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "</h1>
    ";
        // line 7
        $this->loadTemplate("FrontBundle:Includes:Sheets/informations.html.twig", "FrontBundle:Sheet:show.html.twig", 7)->display($context);
    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->loadTemplate("FrontBundle:Includes:Default/footer.html.twig", "FrontBundle:Sheet:show.html.twig", 11)->display($context);
    }

    public function getTemplateName()
    {
        return "FrontBundle:Sheet:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  48 => 10,  44 => 7,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %}Collectify Sheet Show{% endblock %}

{% block body %}
    <h1>Sheet {{ id }}</h1>
    {% include \"FrontBundle:Includes:Sheets/informations.html.twig\" %}
{% endblock %}

{% block footer %}
    {% include \"FrontBundle:Includes:Default/footer.html.twig\" %}
{% endblock %}";
    }
}
