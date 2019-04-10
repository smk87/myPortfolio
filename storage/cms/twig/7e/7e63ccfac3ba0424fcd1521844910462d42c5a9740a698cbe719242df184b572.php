<?php

/* C:\xampp\htdocs\myportfolio/themes/myportfolio/partials/site/header.htm */
class __TwigTemplate_37db30f7227b17a5cfe930e82d3a05fd3d8ddd08b41636f571c5e67e3f1cb1c2 extends Twig_Template
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
        echo "<header class=\"masthead bg-primary text-white text-center\">
      <div class=\"container\">
        <img
          class=\"img-fluid mb-5 d-block mx-auto\"
          src=\"img/profile.png\"
          alt=\"\"
        />
        <h1 class=\"text-uppercase mb-0\">Saqlain Mahmud</h1>
        <hr class=\"star-light\" />
        <h2 class=\"font-weight-light mb-0\">
          React - PHP/Laravel - NodeJS/Express - Django
        </h2>
      </div>
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\myportfolio/themes/myportfolio/partials/site/header.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header class=\"masthead bg-primary text-white text-center\">
      <div class=\"container\">
        <img
          class=\"img-fluid mb-5 d-block mx-auto\"
          src=\"img/profile.png\"
          alt=\"\"
        />
        <h1 class=\"text-uppercase mb-0\">Saqlain Mahmud</h1>
        <hr class=\"star-light\" />
        <h2 class=\"font-weight-light mb-0\">
          React - PHP/Laravel - NodeJS/Express - Django
        </h2>
      </div>
</header>", "C:\\xampp\\htdocs\\myportfolio/themes/myportfolio/partials/site/header.htm", "");
    }
}
