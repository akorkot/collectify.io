<?php

/* FrontBundle:Sheet:create.html.twig */
class __TwigTemplate_f119b08d72efe4f7738f9eb1f080d11c22a867841d14d5e7edcb5ce9b162689b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontBundle:Sheet:create.html.twig", 1);
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
        echo "Collectify  - Create";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Create Sheet</h1>
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["renderForm"]) ? $context["renderForm"] : $this->getContext($context, "renderForm")), 'form');
        echo "
";
    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->loadTemplate("FrontBundle:Includes:Default/footer.html.twig", "FrontBundle:Sheet:create.html.twig", 11)->display($context);
    }

    public function getTemplateName()
    {
        return "FrontBundle:Sheet:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  48 => 10,  42 => 7,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}

{% block title %}Collectify  - Create{% endblock %}

{% block body %}
    <h1>Create Sheet</h1>
    {{ form(renderForm) }}
{% endblock %}

{% block footer %}
    {% include \"FrontBundle:Includes:Default/footer.html.twig\" %}
{% endblock %}";
    }
}
