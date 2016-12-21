<?php

/* FrontBundle:Default:index.html.twig */
class __TwigTemplate_85eab758180c98c6ab2f6b3bc9952c4a8b4e32f9d413732ad5d4156263ad5c80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pageTitle' => array($this, 'block_pageTitle'),
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
        echo "Collectify Index";
    }

    // line 4
    public function block_pageTitle($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, "Collectify"), "html", null, true);
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        echo " 
    ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d-m-Y"), "html", null, true);
        echo "
    ";
        // line 8
        $this->loadTemplate("FrontBundle:Includes:Default/body.html.twig", "FrontBundle:Default:index.html.twig", 8)->display($context);
        echo " 
";
    }

    // line 11
    public function block_footer($context, array $blocks = array())
    {
        echo "  
    ";
        // line 12
        $this->loadTemplate("FrontBundle:Includes:Default/footer.html.twig", "FrontBundle:Default:index.html.twig", 12)->display($context);
    }

    public function getTemplateName()
    {
        return "FrontBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 12,  58 => 11,  52 => 8,  48 => 7,  43 => 6,  37 => 4,  31 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %}Collectify Index{% endblock %}
{% block pageTitle %}{{ \"Collectify\"|upper }}{% endblock %}

{% block body %} 
    {{ \"now\"|date(\"d-m-Y\") }}
    {% include \"FrontBundle:Includes:Default/body.html.twig\" %} 
{% endblock %}

{% block footer %}  
    {% include \"FrontBundle:Includes:Default/footer.html.twig\" %}
{% endblock %}";
    }
}
