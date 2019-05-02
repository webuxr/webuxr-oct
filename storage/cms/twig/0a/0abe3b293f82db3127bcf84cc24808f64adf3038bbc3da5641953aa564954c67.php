<?php

/* /var/www/webuxr-oct/install-flatfile/docroot/themes/foundflat/layouts/default-blank.htm */
class __TwigTemplate_b7888937c1e9800646ce69df4d2c811986729dda21fbd64890c8cc198bf85000 extends Twig_Template
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
        echo "<!doctype html>
<html class=\"no-js\" lang=\"en\" dir=\"ltr\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []), "html", null, true);
        echo "</title>
  <link href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/foundation.min.css", 1 => "assets/css/app.css", 2 => "assets/css/styles.css"]);
        // line 12
        echo "\" rel=\"stylesheet\">

  <!-- <link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "partials/building-blocks/top-bar-nav.scss"]);
        // line 16
        echo "\" rel=\"stylesheet\"> -->
</head>

<body>
      <!-- START: Header -->
      ";
        // line 21
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 22
        echo "      <!-- END: Header -->


  <div class=\"grid-container\">
    <div class=\"grid-x grid-padding-x\">
      <!-- START: Content -->
      <div class=\"large-12 cell\">
        <h1>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []), "html", null, true);
        echo "</h1>
        ";
        // line 30
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 31
        echo "      </div>
      <!-- END: Content -->
    </div>


    <div class=\"grid-x grid-padding-x\">
      <!-- START: Footer -->
      <div class=\"large-12 cell\">
        ";
        // line 39
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 40
        echo "      </div>
      <!-- END: Footer -->
    </div>

  </div><!-- END: .grid-container -->

  <script src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/vendor/jquery-slim.min.js", 1 => "assets/js/vendor/what-input.min.js", 2 => "assets/js/vendor/foundation.min.js", 3 => "assets/js/app.js"]);
        // line 51
        echo "\"></script>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/webuxr-oct/install-flatfile/docroot/themes/foundflat/layouts/default-blank.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 51,  91 => 46,  83 => 40,  79 => 39,  69 => 31,  67 => 30,  63 => 29,  54 => 22,  50 => 21,  43 => 16,  41 => 14,  37 => 12,  35 => 8,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html class=\"no-js\" lang=\"en\" dir=\"ltr\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>{{ this.page.title }}</title>
  <link href=\"{{ [
    'assets/css/foundation.min.css',
    'assets/css/app.css',
    'assets/css/styles.css'
  ]|theme }}\" rel=\"stylesheet\">

  <!-- <link href=\"{{ [
    'partials/building-blocks/top-bar-nav.scss'
  ]|theme }}\" rel=\"stylesheet\"> -->
</head>

<body>
      <!-- START: Header -->
      {% partial 'header' %}
      <!-- END: Header -->


  <div class=\"grid-container\">
    <div class=\"grid-x grid-padding-x\">
      <!-- START: Content -->
      <div class=\"large-12 cell\">
        <h1>{{ this.page.title }}</h1>
        {% page %}
      </div>
      <!-- END: Content -->
    </div>


    <div class=\"grid-x grid-padding-x\">
      <!-- START: Footer -->
      <div class=\"large-12 cell\">
        {% partial 'footer' %}
      </div>
      <!-- END: Footer -->
    </div>

  </div><!-- END: .grid-container -->

  <script src=\"{{ [
    'assets/js/vendor/jquery-slim.min.js',
    'assets/js/vendor/what-input.min.js',
    'assets/js/vendor/foundation.min.js',
    'assets/js/app.js'
  ]|theme }}\"></script>
</body>

</html>", "/var/www/webuxr-oct/install-flatfile/docroot/themes/foundflat/layouts/default-blank.htm", "");
    }
}
