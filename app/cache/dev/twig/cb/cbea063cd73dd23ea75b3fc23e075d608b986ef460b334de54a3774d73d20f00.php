<?php

/* FrontBundle:Includes:Sheets/informations.html.twig */
class __TwigTemplate_5417e580bafa64bb2a2fb6ac36b05b36faca87c93fedd5dab977004fb41eaa54 extends Twig_Template
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
        echo "<table class=\"tg\">
    <tr>
        <td class=\"tg-6k2t\">ID</td>
        <td class=\"tg-6k2t\">Name</td>
        <td class=\"tg-6k2t\">Type</td>
        <td class=\"tg-6k2t\">Duration</td>
        <td class=\"tg-6k2t\">Released</td>
    </tr>
    <tr>
        <td class=\"tg-6k2t\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sheet"]) ? $context["sheet"] : $this->getContext($context, "sheet")), "id", array()), "html", null, true);
        echo "</td>
        <td class=\"tg-6k2t\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sheet"]) ? $context["sheet"] : $this->getContext($context, "sheet")), "name", array()), "html", null, true);
        echo "</td>
        <td class=\"tg-6k2t\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sheet"]) ? $context["sheet"] : $this->getContext($context, "sheet")), "type", array()), "html", null, true);
        echo "</td>
        <td class=\"tg-6k2t\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sheet"]) ? $context["sheet"] : $this->getContext($context, "sheet")), "duration", array()), "html", null, true);
        echo "</td>
        <td class=\"tg-6k2t\">";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["sheet"]) ? $context["sheet"] : $this->getContext($context, "sheet")), "released", array()), "Y"), "html", null, true);
        echo "</td>
    </tr>
</table>";
    }

    public function getTemplateName()
    {
        return "FrontBundle:Includes:Sheets/informations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 14,  42 => 13,  38 => 12,  34 => 11,  30 => 10,  19 => 1,);
    }

    public function getSource()
    {
        return "<table class=\"tg\">
    <tr>
        <td class=\"tg-6k2t\">ID</td>
        <td class=\"tg-6k2t\">Name</td>
        <td class=\"tg-6k2t\">Type</td>
        <td class=\"tg-6k2t\">Duration</td>
        <td class=\"tg-6k2t\">Released</td>
    </tr>
    <tr>
        <td class=\"tg-6k2t\">{{ sheet.id }}</td>
        <td class=\"tg-6k2t\">{{ sheet.name }}</td>
        <td class=\"tg-6k2t\">{{ sheet.type }}</td>
        <td class=\"tg-6k2t\">{{ sheet.duration }}</td>
        <td class=\"tg-6k2t\">{{ sheet.released|date(\"Y\") }}</td>
    </tr>
</table>";
    }
}
