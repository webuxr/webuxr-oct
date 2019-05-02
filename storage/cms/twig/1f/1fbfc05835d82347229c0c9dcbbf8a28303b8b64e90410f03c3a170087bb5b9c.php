<?php

/* /Users/rsmith/projects/sites/octobercms/flatfile-install/themes/website/layouts/default.htm */
class __TwigTemplate_084f1cd5c8fbfa15dd3aeac662137450f080d341a97cea0f02bb72fd21801974 extends Twig_Template
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
        <title>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []), "html", null, true);
        echo "</title>
        <link href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/styles.css", 1 => "assets/fonts.css"]);
        echo "\" rel=\"stylesheet\">
    </head>
    <body>
        <h1><a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", []), "title", []), "html", null, true);
        echo "</a></h1>

        ";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 11
        echo "
        <hr>

        ";
        // line 14
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['name'] = "Joey Salads"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "/Users/rsmith/projects/sites/octobercms/flatfile-install/themes/website/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 15,  52 => 14,  47 => 11,  45 => 10,  38 => 8,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>{{ this.page.title }}</title>
        <link href=\"{{ ['assets/styles.css', 'assets/fonts.css']|theme }}\" rel=\"stylesheet\">
    </head>
    <body>
        <h1><a href=\"{{ 'home'|page }}\">{{ this.page.title }}</a></h1>

        {% page %}

        <hr>

        {% partial 'footer' name='Joey Salads' %}
    </body>
</html>", "/Users/rsmith/projects/sites/octobercms/flatfile-install/themes/website/layouts/default.htm", "");
    }
}
