<?php

/* /var/www/webuxr-oct/install-flatfile/docroot/themes/foundflat/layouts/default.htm */
class __TwigTemplate_a509c172e6ae4b0e0f35573f88508b550bb6208b0e236e06b490418bbf6ef3dd extends Twig_Template
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
</head>

<body>
  <div class=\"grid-container\">

    <div class=\"grid-x grid-padding-x\">
      <!-- START: Header -->
      <div class=\"large-12 cell\">
        <h1>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []), "html", null, true);
        echo "</h1>
        <small>
         <a href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><i class=\"fas fa-home\"></i> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []), "html", null, true);
        echo "</a>
        </small>
        <!--<div class=\"oct-extras\">
        \textras: <br>
          ";
        // line 27
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
        // line 28
        echo "          <br> :extras
        </div>-->
      </div>
      <!-- END: Header -->
    </div>


    <div class=\"grid-x grid-padding-x\">
      <!-- START: Content -->
      <div class=\"large-8 medium-8 cell\">
        ";
        // line 38
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 39
        echo "
        <h5>Content continues...</h5>
        <div class=\"grid-x grid-padding-x\">
          <div class=\"large-12 cell\">
            <p>
              <strong>This is a twelve cell section in a grid-x.</strong>
            </p>
          </div>
        </div>
      </div>
      <!-- END: Content -->

      <!-- START: Sidebar -->
      <div class=\"large-4 medium-4 cell\">
        ";
        // line 53
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 54
        echo "
        <h5>Sidebar continues...</h5>
        <p>
          <a class=\"button\"
             href=\"#\">Simple Button</a><br>
          <a class=\"success button\"
             href=\"#\">Success Btn</a><br>
          <a class=\"alert button\"
             href=\"#\">Alert Btn</a><br>
          <a class=\"secondary button\"
             href=\"#\">Secondary Btn</a>
        </p>
      </div>
      <!-- END: Sidebar -->
    </div>


    <div class=\"grid-x grid-padding-x\">
      <!-- START: Footer -->
      <div class=\"large-12 cell\">
        ";
        // line 74
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 75
        echo "      </div>
      <!-- END: Footer -->
    </div>

  </div><!-- END: .grid-container -->

  <script src=\"";
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/vendor/jquery-slim.min.js", 1 => "assets/js/vendor/what-input.min.js", 2 => "assets/js/vendor/foundation.min.js", 3 => "assets/js/app.js"]);
        // line 86
        echo "\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/webuxr-oct/install-flatfile/docroot/themes/foundflat/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 86,  145 => 81,  137 => 75,  133 => 74,  111 => 54,  107 => 53,  91 => 39,  89 => 38,  77 => 28,  62 => 27,  53 => 23,  48 => 21,  37 => 12,  35 => 8,  31 => 7,  23 => 1,);
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
</head>

<body>
  <div class=\"grid-container\">

    <div class=\"grid-x grid-padding-x\">
      <!-- START: Header -->
      <div class=\"large-12 cell\">
        <h1>{{ this.page.title }}</h1>
        <small>
         <a href=\"{{ 'home'|page }}\"><i class=\"fas fa-home\"></i> {{ this.page.title }}</a>
        </small>
        <!--<div class=\"oct-extras\">
        \textras: <br>
          {% framework extras %}
          <br> :extras
        </div>-->
      </div>
      <!-- END: Header -->
    </div>


    <div class=\"grid-x grid-padding-x\">
      <!-- START: Content -->
      <div class=\"large-8 medium-8 cell\">
        {% page %}

        <h5>Content continues...</h5>
        <div class=\"grid-x grid-padding-x\">
          <div class=\"large-12 cell\">
            <p>
              <strong>This is a twelve cell section in a grid-x.</strong>
            </p>
          </div>
        </div>
      </div>
      <!-- END: Content -->

      <!-- START: Sidebar -->
      <div class=\"large-4 medium-4 cell\">
        {% partial 'sidebar' %}

        <h5>Sidebar continues...</h5>
        <p>
          <a class=\"button\"
             href=\"#\">Simple Button</a><br>
          <a class=\"success button\"
             href=\"#\">Success Btn</a><br>
          <a class=\"alert button\"
             href=\"#\">Alert Btn</a><br>
          <a class=\"secondary button\"
             href=\"#\">Secondary Btn</a>
        </p>
      </div>
      <!-- END: Sidebar -->
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
</html>", "/var/www/webuxr-oct/install-flatfile/docroot/themes/foundflat/layouts/default.htm", "");
    }
}
