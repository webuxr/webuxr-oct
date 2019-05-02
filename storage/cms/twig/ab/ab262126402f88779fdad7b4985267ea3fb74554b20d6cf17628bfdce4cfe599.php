<?php

/* /var/www/webuxr-oct/install-flatfile/docroot/themes/foundflat/partials/header.htm */
class __TwigTemplate_1ef93ec7f68e3ca67f8166140a20754619358caeac39cf58e666b75520481d0b extends Twig_Template
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
        echo "<!-- partials/header.htm -->

<!-- https://foundation.zurb.com/building-blocks/blocks/foundation-5-top-bar.html -->
<div class=\"top-bar foundation-5-top-bar\">
  <div class=\"top-bar-title\">
    <span data-responsive-toggle=\"responsive-menu\" data-hide-for=\"medium\">
      <button class=\"menu-icon\" type=\"button\" data-toggle></button>
    </span>
    <strong>Site Title</strong>
  </div>

  <div id=\"responsive-menu\">
    <div class=\"top-bar-left\">
      <ul class=\"dropdown vertical medium-horizontal menu\" data-responsive-menu=\"drilldown medium-dropdown\" data-auto-height=\"true\" data-animate-height=\"true\">
        <li>
          <a href=\"#\">One</a>
          <ul class=\"menu\">
            <li><a href=\"#\">One</a></li>
            <li><a href=\"#\">Two</a></li>
            <li>
              <a href=\"#\">Three</a>
              <ul class=\"menu\">
                <li><a href=\"#\">One</a></li>
                <li><a href=\"#\">Two</a></li>
                <li>
                  <a href=\"#\">Three</a>
                  <ul class=\"menu\">
                    <li><a href=\"#\">One</a></li>
                    <li><a href=\"#\">Two</a></li>
                    <li><a href=\"#\">Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href=\"#\">Two</a></li>
        <li><a href=\"#\">Three</a></li>
      </ul>
    </div>

    <div class=\"top-bar-right\">
      <ul class=\"menu\">
        <li><input type=\"search\" placeholder=\"Search\"></li>
        <li><button type=\"button\" class=\"button\">Search</button></li>
      </ul>
    </div>

  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/webuxr-oct/install-flatfile/docroot/themes/foundflat/partials/header.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- partials/header.htm -->

<!-- https://foundation.zurb.com/building-blocks/blocks/foundation-5-top-bar.html -->
<div class=\"top-bar foundation-5-top-bar\">
  <div class=\"top-bar-title\">
    <span data-responsive-toggle=\"responsive-menu\" data-hide-for=\"medium\">
      <button class=\"menu-icon\" type=\"button\" data-toggle></button>
    </span>
    <strong>Site Title</strong>
  </div>

  <div id=\"responsive-menu\">
    <div class=\"top-bar-left\">
      <ul class=\"dropdown vertical medium-horizontal menu\" data-responsive-menu=\"drilldown medium-dropdown\" data-auto-height=\"true\" data-animate-height=\"true\">
        <li>
          <a href=\"#\">One</a>
          <ul class=\"menu\">
            <li><a href=\"#\">One</a></li>
            <li><a href=\"#\">Two</a></li>
            <li>
              <a href=\"#\">Three</a>
              <ul class=\"menu\">
                <li><a href=\"#\">One</a></li>
                <li><a href=\"#\">Two</a></li>
                <li>
                  <a href=\"#\">Three</a>
                  <ul class=\"menu\">
                    <li><a href=\"#\">One</a></li>
                    <li><a href=\"#\">Two</a></li>
                    <li><a href=\"#\">Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href=\"#\">Two</a></li>
        <li><a href=\"#\">Three</a></li>
      </ul>
    </div>

    <div class=\"top-bar-right\">
      <ul class=\"menu\">
        <li><input type=\"search\" placeholder=\"Search\"></li>
        <li><button type=\"button\" class=\"button\">Search</button></li>
      </ul>
    </div>

  </div>
</div>", "/var/www/webuxr-oct/install-flatfile/docroot/themes/foundflat/partials/header.htm", "");
    }
}
