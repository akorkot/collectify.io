<?php

/* FrontBundle:Includes:Sheet/sheet-list.html.twig */
class __TwigTemplate_0c5c78a3ff875e56111eb3600400ddba8c6d332c789d88bbdb1c3cc0766658ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontBundle:Includes:Sheet/sheet-list.html.twig", 1);
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
        $this->loadTemplate("FrontBundle:Includes:Default/body.html.twig", "FrontBundle:Includes:Sheet/sheet-list.html.twig", 7)->display($context);
    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->loadTemplate("FrontBundle:Includes:Default/footer.html.twig", "FrontBundle:Includes:Sheet/sheet-list.html.twig", 11)->display($context);
    }

    public function getTemplateName()
    {
        return "FrontBundle:Includes:Sheet/sheet-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  46 => 10,  42 => 7,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %}Collectify Sheet List{% endblock %}

{% block body %}
    <h1>Sheet List</h1>
    {% include \"FrontBundle:Includes:Default/body.html.twig\" %}
{% endblock %}

{% block footer %}
    {% include \"FrontBundle:Includes:Default/footer.html.twig\" %}
{% endblock %}";
    }
}
