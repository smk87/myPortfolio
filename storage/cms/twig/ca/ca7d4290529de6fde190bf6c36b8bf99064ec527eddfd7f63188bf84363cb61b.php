<?php

/* C:\xampp\htdocs\myportfolio/themes/myportfolio/partials/site/contact.htm */
class __TwigTemplate_65151a105958a87b52400dc5a173528f1429f23559bfcc8d733d7306aec85540 extends Twig_Template
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
        echo "<section id=\"contact\">
      <div class=\"container\" style=\"display:none\">
        <h2 class=\"text-center text-uppercase text-secondary mb-0\">
          Contact Me
        </h2>
        <hr class=\"star-dark mb-5\" />
        <div class=\"row\">
          <div class=\"col-lg-8 mx-auto\">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name=\"sentMessage\" id=\"contactForm\" novalidate=\"novalidate\">
              <div class=\"control-group\">
                <div
                  class=\"form-group floating-label-form-group controls mb-0 pb-2\"
                >
                  <label>Name</label>
                  <input
                    class=\"form-control\"
                    id=\"name\"
                    type=\"text\"
                    placeholder=\"Name\"
                    required=\"required\"
                    data-validation-required-message=\"Please enter your name.\"
                  />
                  <p class=\"help-block text-danger\"></p>
                </div>
              </div>
              <div class=\"control-group\">
                <div
                  class=\"form-group floating-label-form-group controls mb-0 pb-2\"
                >
                  <label>Email Address</label>
                  <input
                    class=\"form-control\"
                    id=\"email\"
                    type=\"email\"
                    placeholder=\"Email Address\"
                    required=\"required\"
                    data-validation-required-message=\"Please enter your email address.\"
                  />
                  <p class=\"help-block text-danger\"></p>
                </div>
              </div>
              <div class=\"control-group\">
                <div
                  class=\"form-group floating-label-form-group controls mb-0 pb-2\"
                >
                  <label>Phone Number</label>
                  <input
                    class=\"form-control\"
                    id=\"phone\"
                    type=\"tel\"
                    placeholder=\"Phone Number\"
                    required=\"required\"
                    data-validation-required-message=\"Please enter your phone number.\"
                  />
                  <p class=\"help-block text-danger\"></p>
                </div>
              </div>
              <div class=\"control-group\">
                <div
                  class=\"form-group floating-label-form-group controls mb-0 pb-2\"
                >
                  <label>Message</label>
                  <textarea
                    class=\"form-control\"
                    id=\"message\"
                    rows=\"5\"
                    placeholder=\"Message\"
                    required=\"required\"
                    data-validation-required-message=\"Please enter a message.\"
                  ></textarea>
                  <p class=\"help-block text-danger\"></p>
                </div>
              </div>
              <br />
              <div id=\"success\"></div>
              <div class=\"form-group\">
                <button
                  type=\"submit\"
                  class=\"btn btn-primary btn-xl\"
                  id=\"sendMessageButton\"
                >
                  Send
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\myportfolio/themes/myportfolio/partials/site/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"contact\">
      <div class=\"container\" style=\"display:none\">
        <h2 class=\"text-center text-uppercase text-secondary mb-0\">
          Contact Me
        </h2>
        <hr class=\"star-dark mb-5\" />
        <div class=\"row\">
          <div class=\"col-lg-8 mx-auto\">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name=\"sentMessage\" id=\"contactForm\" novalidate=\"novalidate\">
              <div class=\"control-group\">
                <div
                  class=\"form-group floating-label-form-group controls mb-0 pb-2\"
                >
                  <label>Name</label>
                  <input
                    class=\"form-control\"
                    id=\"name\"
                    type=\"text\"
                    placeholder=\"Name\"
                    required=\"required\"
                    data-validation-required-message=\"Please enter your name.\"
                  />
                  <p class=\"help-block text-danger\"></p>
                </div>
              </div>
              <div class=\"control-group\">
                <div
                  class=\"form-group floating-label-form-group controls mb-0 pb-2\"
                >
                  <label>Email Address</label>
                  <input
                    class=\"form-control\"
                    id=\"email\"
                    type=\"email\"
                    placeholder=\"Email Address\"
                    required=\"required\"
                    data-validation-required-message=\"Please enter your email address.\"
                  />
                  <p class=\"help-block text-danger\"></p>
                </div>
              </div>
              <div class=\"control-group\">
                <div
                  class=\"form-group floating-label-form-group controls mb-0 pb-2\"
                >
                  <label>Phone Number</label>
                  <input
                    class=\"form-control\"
                    id=\"phone\"
                    type=\"tel\"
                    placeholder=\"Phone Number\"
                    required=\"required\"
                    data-validation-required-message=\"Please enter your phone number.\"
                  />
                  <p class=\"help-block text-danger\"></p>
                </div>
              </div>
              <div class=\"control-group\">
                <div
                  class=\"form-group floating-label-form-group controls mb-0 pb-2\"
                >
                  <label>Message</label>
                  <textarea
                    class=\"form-control\"
                    id=\"message\"
                    rows=\"5\"
                    placeholder=\"Message\"
                    required=\"required\"
                    data-validation-required-message=\"Please enter a message.\"
                  ></textarea>
                  <p class=\"help-block text-danger\"></p>
                </div>
              </div>
              <br />
              <div id=\"success\"></div>
              <div class=\"form-group\">
                <button
                  type=\"submit\"
                  class=\"btn btn-primary btn-xl\"
                  id=\"sendMessageButton\"
                >
                  Send
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>", "C:\\xampp\\htdocs\\myportfolio/themes/myportfolio/partials/site/contact.htm", "");
    }
}
