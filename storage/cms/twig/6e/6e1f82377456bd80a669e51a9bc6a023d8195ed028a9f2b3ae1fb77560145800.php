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
  class=\"carousel slide carousel-fade\"
  data-ride=\"carousel\"
  data-interval=2000
  style=\"background-color: white;width:1000px;margin-left: -18%\"
>
  <div class=\"carousel-inner\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["image"]) {
            echo " ";
            if (($context["key"] == 0)) {
                // line 10
                echo "    <div class=\"carousel-item active\">
      <img src=\"";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", []), "html", null, true);
                echo "\" class=\"d-block mx-auto\" style=\"max-width:1000px;border:5px solid black;border-radius: 6%\" alt=\"...\" />
    </div>
    ";
            } else {
                // line 14
                echo "    <div class=\"carousel-item\">
      <img src=\"";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", []), "html", null, true);
                echo "\" class=\"d-block mx-auto\" style=\"max-width:1000px;border:5px solid black;border-radius: 6%\" alt=\"...\" />
    </div>
    ";
            }
            // line 17
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
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
        return array (  63 => 18,  57 => 17,  51 => 15,  48 => 14,  42 => 11,  39 => 10,  33 => 9,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div
  id=\"carouselExampleControls\"
  class=\"carousel slide carousel-fade\"
  data-ride=\"carousel\"
  data-interval=2000
  style=\"background-color: white;width:1000px;margin-left: -18%\"
>
  <div class=\"carousel-inner\">
    {% for key, image in images %} {% if key==0 %}
    <div class=\"carousel-item active\">
      <img src=\"{{ image.path }}\" class=\"d-block mx-auto\" style=\"max-width:1000px;border:5px solid black;border-radius: 6%\" alt=\"...\" />
    </div>
    {% else %}
    <div class=\"carousel-item\">
      <img src=\"{{ image.path }}\" class=\"d-block mx-auto\" style=\"max-width:1000px;border:5px solid black;border-radius: 6%\" alt=\"...\" />
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
