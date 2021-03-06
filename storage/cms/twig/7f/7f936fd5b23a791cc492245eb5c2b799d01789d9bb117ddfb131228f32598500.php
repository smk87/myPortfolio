<?php

/* C:\xampp\htdocs\myportfolio/themes/myportfolio/layouts/default.htm */
class __TwigTemplate_9df91c01a6b2d4f6db40d159a6c9666f55b75975a9d2001af1dcc31a6bf6afdf extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\" />
    <title>Saqlain Mahmud</title>
    <meta name=\"description\" content=\"Online Portfolio of Saqlain Mahmud\" />
    <meta name=\"author\" content=\"Saqlain Mahmud\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link
      rel=\"icon\"
      type=\"image/png\"
      href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\"
    />
    <link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\" />

    <!-- Bootstrap core CSS -->
    <link
      href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/css/bootstrap.min.css");
        echo "\"
      rel=\"stylesheet\"
    />

    <!-- Custom fonts for this template -->
    <link
      href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/fontawesome-free/css/all.min.css");
        echo "\"
      rel=\"stylesheet\"
      type=\"text/css\"
    />
    <link
      href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\"
      rel=\"stylesheet\"
      type=\"text/css\"
    />
    <link
      href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\"
      rel=\"stylesheet\"
      type=\"text/css\"
    />

    <!-- Plugin CSS -->
    <link
      href=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/magnific-popup/magnific-popup.css");
        echo "\"
      rel=\"stylesheet\"
      type=\"text/css\"
    />

    <!-- Custom styles for this template -->
    <link
      href=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/freelancer.min.css");
        echo "\"
      rel=\"stylesheet\"
    />
    ";
        // line 52
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 53
        echo "  </head>
  <body id=\"page-top\">
    
     ";
        // line 56
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework'.($_minify ? '-min' : '').'.js"></script>'.PHP_EOL;
        unset($_minify);
        // line 57
        echo "     ";
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 58
        echo "     ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 59
        echo "    
    <header id=\"layout-header\">
      ";
        // line 61
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 62
        echo "    </header>

    <!-- Content -->
    <section id=\"layout-content\">
      ";
        // line 66
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 67
        echo "    </section>

      ";
        // line 69
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 70
        echo "      ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 71
        echo "
    <!-- Scripts -->
    <script src=\"";
        // line 73
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery/jquery.min.js");
        echo "\"></script>
    <script src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap/js/bootstrap.bundle.min.js");
        echo "\"></script>
    <script src=\"";
        // line 75
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery-easing/jquery.easing.min.js");
        echo "\"></script>
    <script src=\"";
        // line 76
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/magnific-popup/jquery.magnific-popup.min.js");
        echo "\"></script>
    <script src=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jqBootstrapValidation.js");
        echo "\"></script>
    <script src=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/contact_me.js");
        echo "\"></script>
    <script src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/freelancer.min.js\"");
        echo "\"></script>
    <script>
    // Auto open modal for direct link
    \$(document).ready(function() {
    if (window.location.hash && \$(window.location.hash).length) {
      \$(\"#auto-\"+window.location.hash.substring(17)).trigger(\"click\");
        }
    });
    </script>
    
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\myportfolio/themes/myportfolio/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 79,  184 => 78,  180 => 77,  176 => 76,  172 => 75,  168 => 74,  164 => 73,  160 => 71,  155 => 70,  151 => 69,  147 => 67,  145 => 66,  139 => 62,  135 => 61,  131 => 59,  126 => 58,  110 => 57,  105 => 56,  100 => 53,  97 => 52,  91 => 49,  81 => 42,  61 => 25,  52 => 19,  45 => 15,  41 => 14,  36 => 12,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\" />
    <title>Saqlain Mahmud</title>
    <meta name=\"description\" content=\"Online Portfolio of Saqlain Mahmud\" />
    <meta name=\"author\" content=\"Saqlain Mahmud\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link
      rel=\"icon\"
      type=\"image/png\"
      href=\"{{ 'assets/images/october.png' | theme }}\"
    />
    <link href=\"{{ 'assets/css/vendor.css' | theme }}\" rel=\"stylesheet\" />
    <link href=\"{{ 'assets/css/theme.css' | theme }}\" rel=\"stylesheet\" />

    <!-- Bootstrap core CSS -->
    <link
      href=\"{{ 'assets/vendor/bootstrap/css/bootstrap.min.css' | theme }}\"
      rel=\"stylesheet\"
    />

    <!-- Custom fonts for this template -->
    <link
      href=\"{{ 'assets/vendor/fontawesome-free/css/all.min.css' | theme }}\"
      rel=\"stylesheet\"
      type=\"text/css\"
    />
    <link
      href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\"
      rel=\"stylesheet\"
      type=\"text/css\"
    />
    <link
      href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\"
      rel=\"stylesheet\"
      type=\"text/css\"
    />

    <!-- Plugin CSS -->
    <link
      href=\"{{ 'assets/vendor/magnific-popup/magnific-popup.css' | theme }}\"
      rel=\"stylesheet\"
      type=\"text/css\"
    />

    <!-- Custom styles for this template -->
    <link
      href=\"{{ 'assets/css/freelancer.min.css' | theme }}\"
      rel=\"stylesheet\"
    />
    {% styles %}
  </head>
  <body id=\"page-top\">
    
     {% framework %}
     {% framework extras %}
     {% partial 'site/navbar' %}
    
    <header id=\"layout-header\">
      {% partial 'site/header' %}
    </header>

    <!-- Content -->
    <section id=\"layout-content\">
      {% page %}
    </section>

      {% partial 'site/about' %}
      {% partial 'site/footer' %}

    <!-- Scripts -->
    <script src=\"{{ 'assets/vendor/jquery/jquery.min.js' | theme }}\"></script>
    <script src=\"{{ 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js' | theme }}\"></script>
    <script src=\"{{ 'assets/vendor/jquery-easing/jquery.easing.min.js' | theme }}\"></script>
    <script src=\"{{ 'assets/vendor/magnific-popup/jquery.magnific-popup.min.js' | theme }}\"></script>
    <script src=\"{{ 'assets/js/jqBootstrapValidation.js' | theme }}\"></script>
    <script src=\"{{ 'assets/js/contact_me.js' | theme }}\"></script>
    <script src=\"{{ 'assets/js/freelancer.min.js\"' | theme }}\"></script>
    <script>
    // Auto open modal for direct link
    \$(document).ready(function() {
    if (window.location.hash && \$(window.location.hash).length) {
      \$(\"#auto-\"+window.location.hash.substring(17)).trigger(\"click\");
        }
    });
    </script>
    
  </body>
</html>", "C:\\xampp\\htdocs\\myportfolio/themes/myportfolio/layouts/default.htm", "");
    }
}
