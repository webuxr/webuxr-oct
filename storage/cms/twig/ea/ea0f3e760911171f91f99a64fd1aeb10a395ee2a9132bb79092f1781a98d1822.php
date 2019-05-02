<?php

/* /var/www/webuxr-oct/install-flatfile/docroot/themes/foundflat/partials/sidebar.htm */
class __TwigTemplate_218aad3989405bff52e6eefc9764600663901fc367570e72ba52596d9e164fca extends Twig_Template
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
        echo "<div class=\"grid-x grid-padding-x\">
  <div class=\"large-12 cell\">
    <h5>Navigation</h5>
    <a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\">Return home</a>, or
    <a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about", ["filename" => "welcome"]);
        echo "\">learn about us</a>
  </div>
</div>

<!-- START: Nested Grid -->
<div class=\"grid-x grid-padding-x\">
  <div class=\"large-6 medium-6 cell\">
    <p>Six cell (L)</p>
  </div>
  <div class=\"large-6 medium-6 cell\">
    <p>Six cell (R)</p>
  </div>
</div>
<!-- END: Nested Grid -->";
    }

    public function getTemplateName()
    {
        return "/var/www/webuxr-oct/install-flatfile/docroot/themes/foundflat/partials/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"grid-x grid-padding-x\">
  <div class=\"large-12 cell\">
    <h5>Navigation</h5>
    <a href=\"{{ 'index'|page }}\">Return home</a>, or
    <a href=\"{{ 'about'|page({ filename: 'welcome' }) }}\">learn about us</a>
  </div>
</div>

<!-- START: Nested Grid -->
<div class=\"grid-x grid-padding-x\">
  <div class=\"large-6 medium-6 cell\">
    <p>Six cell (L)</p>
  </div>
  <div class=\"large-6 medium-6 cell\">
    <p>Six cell (R)</p>
  </div>
</div>
<!-- END: Nested Grid -->", "/var/www/webuxr-oct/install-flatfile/docroot/themes/foundflat/partials/sidebar.htm", "");
    }
}
