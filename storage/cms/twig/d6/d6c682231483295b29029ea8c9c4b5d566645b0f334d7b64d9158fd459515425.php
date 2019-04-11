<?php

/* C:\xampp\htdocs\myportfolio/plugins/rainlab/builder/components/recorddetails/default.htm */
class __TwigTemplate_406b7c7b3f57268f883722be602d6a4261f82d53533d65aef0ae9ffea0f31a8e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "record", []);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "displayColumn", []);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "notFoundMessage", []);
        // line 4
        echo "
";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), ($context["displayColumn"] ?? null)), "html", null, true);
            echo "
";
        } else {
            // line 8
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\myportfolio/plugins/rainlab/builder/components/recorddetails/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  34 => 6,  32 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set record = __SELF__.record %}
{% set displayColumn = __SELF__.displayColumn %}
{% set notFoundMessage = __SELF__.notFoundMessage %}

{% if record %}
    {{ attribute(record, displayColumn) }}
{% else %}
    {{ notFoundMessage }}
{% endif %}", "C:\\xampp\\htdocs\\myportfolio/plugins/rainlab/builder/components/recorddetails/default.htm", "");
    }
}
