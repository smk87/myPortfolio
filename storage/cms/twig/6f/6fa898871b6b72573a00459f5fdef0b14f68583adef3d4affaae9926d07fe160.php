<?php

/* C:\xampp\htdocs\myportfolio/themes/myportfolio/pages/index.htm */
class __TwigTemplate_2e900cfe95d887a8e5c10f1c532875381acf23fd54dcca6752257c94feda606d extends Twig_Template
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
        echo "<section class=\"portfolio\" id=\"portfolio\">
  <div class=\"container\">
    <h2 class=\"text-center text-uppercase text-secondary mb-0\">
      Projects
    </h2>
    <hr class=\"star-dark mb-5\" />
    <div class=\"row\">
      ";
        // line 8
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["projectList"] ?? null), "records", []);
        echo " ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source,         // line 9
($context["projectList"] ?? null), "displayColumn", []);
        echo " ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source,         // line 10
($context["projectList"] ?? null), "noRecordsMessage", []);
        echo " ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source,         // line 11
($context["projectList"] ?? null), "detailsPage", []);
        echo " ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source,         // line 12
($context["projectList"] ?? null), "detailsKeyColumn", []);
        echo " ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source,         // line 13
($context["projectList"] ?? null), "detailsUrlParameter", []);
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            echo " ";
            // line 14
            echo " ";
            ob_start();
            echo " ";
            if (            // line 15
($context["detailsPage"] ?? null)) {
                // line 16
                echo "      <a
        href=\"";
                // line 17
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["detailsPage"] ?? null), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null))]);
                echo "\"
      >
        ";
            }
            // line 20
            echo "
        <div class=\"col-md-6 col-lg-4\">
          <a class=\"portfolio-item d-block mx-auto\" href=\"#portfolio-modal-";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", []), "html", null, true);
            echo "\">
            <div
              class=\"portfolio-item-caption d-flex position-absolute h-100 w-100\"
            >
              <div
                class=\"portfolio-item-caption-content my-auto w-100 text-center text-white\"
              >
                <i class=\"fas fa-search-plus fa-3x\"></i>
              </div>
            </div>
            <h4 class=\"text-center\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "name", []), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", []), "html", null, true);
            echo "</h4>
            <img
              class=\"img-fluid\"
              src=\"";
            // line 35
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/portfolio/cabin.png");
            echo "\"
              alt=\"\"
            />
          </a>
        </div>

        <!-- Modal -->
        <div class=\"portfolio-modal mfp-hide\" id=\"portfolio-modal-";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "id", []), "html", null, true);
            echo "\">
          <div class=\"portfolio-modal-dialog bg-white\">
            <a
              class=\"close-button d-none d-md-block portfolio-modal-dismiss\"
              href=\"#\"
            >
              <i class=\"fa fa-3x fa-times\"></i>
            </a>
            <div class=\"container text-center\">
              <div class=\"row\">
                <div class=\"col-lg-8 mx-auto\">
                  <h2 class=\"text-secondary text-uppercase mb-0\">
                    Project Name
                  </h2>
                  <hr class=\"star-dark mb-5\" />
                  <img
                    class=\"img-fluid mb-5\"
                    src=\"img/portfolio/cabin.png\"
                    alt=\"\"
                  />
                  <p class=\"mb-5\">
                    ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], "year", []), "html", null, true);
            echo "
                  </p>
                  <a
                    class=\"btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss\"
                    href=\"#\"
                  >
                    <i class=\"fa fa-close\"></i>
                    Close Project</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>

        ";
            // line 78
            if (($context["detailsPage"] ?? null)) {
                // line 79
                echo "      </a>
      ";
            }
            // line 80
            echo " ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            echo " ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 81
            echo "      <li class=\"no-data\">";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\myportfolio/themes/myportfolio/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 83,  159 => 81,  152 => 80,  148 => 79,  146 => 78,  128 => 63,  104 => 42,  94 => 35,  87 => 32,  74 => 22,  70 => 20,  64 => 17,  61 => 16,  59 => 15,  55 => 14,  47 => 13,  44 => 12,  41 => 11,  38 => 10,  35 => 9,  32 => 8,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"portfolio\" id=\"portfolio\">
  <div class=\"container\">
    <h2 class=\"text-center text-uppercase text-secondary mb-0\">
      Projects
    </h2>
    <hr class=\"star-dark mb-5\" />
    <div class=\"row\">
      {% set records = projectList.records %} {% set displayColumn =
      projectList.displayColumn %} {% set noRecordsMessage =
      projectList.noRecordsMessage %} {% set detailsPage =
      projectList.detailsPage %} {% set detailsKeyColumn =
      projectList.detailsKeyColumn %} {% set detailsUrlParameter =
      projectList.detailsUrlParameter %} {% for record in records %} {# Use
      spaceless tag to remove spaces inside the A tag. #} {% spaceless %} {% if
      detailsPage %}
      <a
        href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\"
      >
        {% endif %}

        <div class=\"col-md-6 col-lg-4\">
          <a class=\"portfolio-item d-block mx-auto\" href=\"#portfolio-modal-{{record.id}}\">
            <div
              class=\"portfolio-item-caption d-flex position-absolute h-100 w-100\"
            >
              <div
                class=\"portfolio-item-caption-content my-auto w-100 text-center text-white\"
              >
                <i class=\"fas fa-search-plus fa-3x\"></i>
              </div>
            </div>
            <h4 class=\"text-center\">{{ record.name }}{{record.id}}</h4>
            <img
              class=\"img-fluid\"
              src=\"{{ 'assets/img/portfolio/cabin.png' | theme }}\"
              alt=\"\"
            />
          </a>
        </div>

        <!-- Modal -->
        <div class=\"portfolio-modal mfp-hide\" id=\"portfolio-modal-{{record.id}}\">
          <div class=\"portfolio-modal-dialog bg-white\">
            <a
              class=\"close-button d-none d-md-block portfolio-modal-dismiss\"
              href=\"#\"
            >
              <i class=\"fa fa-3x fa-times\"></i>
            </a>
            <div class=\"container text-center\">
              <div class=\"row\">
                <div class=\"col-lg-8 mx-auto\">
                  <h2 class=\"text-secondary text-uppercase mb-0\">
                    Project Name
                  </h2>
                  <hr class=\"star-dark mb-5\" />
                  <img
                    class=\"img-fluid mb-5\"
                    src=\"img/portfolio/cabin.png\"
                    alt=\"\"
                  />
                  <p class=\"mb-5\">
                    {{record.year}}
                  </p>
                  <a
                    class=\"btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss\"
                    href=\"#\"
                  >
                    <i class=\"fa fa-close\"></i>
                    Close Project</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>

        {% if detailsPage %}
      </a>
      {% endif %} {% endspaceless %} {% else %}
      <li class=\"no-data\">{{ noRecordsMessage }}</li>
      {% endfor %}
    </div>
  </div>
</section>", "C:\\xampp\\htdocs\\myportfolio/themes/myportfolio/pages/index.htm", "");
    }
}
