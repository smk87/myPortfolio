<?php

/* C:\xampp\htdocs\myportfolio/themes/myportfolio/partials/site/imageslider.htm */
class __TwigTemplate_14470cf8277c86f282a5d747295fb5c513821037c5a8328ae4ccb370928379b7 extends Twig_Template
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
        echo "<div
  id=\"carouselExampleControls\"
  class=\"carousel slide\"
  data-ride=\"carousel\"
  style=\"background-color: white;\"
>
  <div class=\"carousel-inner\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["image"]) {
            echo " ";
            if (($context["key"] == 0)) {
                // line 9
                echo "    <div class=\"carousel-item active\">
      <img src=\"";
                // line 10
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", []), "html", null, true);
                echo "\" class=\"d-block mx-auto\" style=\"width:700px;border:5px solid black;border-radius: 6%\" alt=\"...\" />
    </div>
    ";
            } else {
                // line 13
                echo "    <div class=\"carousel-item\">
      <img src=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", []), "html", null, true);
                echo "\" class=\"d-block mx-auto\" style=\"width:700px;border:5px solid black;border-radius: 6%\" alt=\"...\" />
    </div>
    ";
            }
            // line 16
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  </div>
  <a
    class=\"carousel-control-prev\"
    href=\"#carouselExampleControls\"
    role=\"button\"
    data-slide=\"prev\"
  >
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a
    class=\"carousel-control-next\"
    href=\"#carouselExampleControls\"
    role=\"button\"
    data-slide=\"next\"
  >
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\myportfolio/themes/myportfolio/partials/site/imageslider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  56 => 16,  50 => 14,  47 => 13,  41 => 10,  38 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div
  id=\"carouselExampleControls\"
  class=\"carousel slide\"
  data-ride=\"carousel\"
  style=\"background-color: white;\"
>
  <div class=\"carousel-inner\">
    {% for key, image in images %} {% if key==0 %}
    <div class=\"carousel-item active\">
      <img src=\"{{ image.path }}\" class=\"d-block mx-auto\" style=\"width:700px;border:5px solid black;border-radius: 6%\" alt=\"...\" />
    </div>
    {% else %}
    <div class=\"carousel-item\">
      <img src=\"{{ image.path }}\" class=\"d-block mx-auto\" style=\"width:700px;border:5px solid black;border-radius: 6%\" alt=\"...\" />
    </div>
    {% endif %} {% endfor %}
  </div>
  <a
    class=\"carousel-control-prev\"
    href=\"#carouselExampleControls\"
    role=\"button\"
    data-slide=\"prev\"
  >
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a
    class=\"carousel-control-next\"
    href=\"#carouselExampleControls\"
    role=\"button\"
    data-slide=\"next\"
  >
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>", "C:\\xampp\\htdocs\\myportfolio/themes/myportfolio/partials/site/imageslider.htm", "");
    }
}
