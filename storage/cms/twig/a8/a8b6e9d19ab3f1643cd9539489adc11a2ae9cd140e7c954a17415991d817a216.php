<?php

/* /var/www/webuxr-oct/install-flatfile/docroot/themes/foundflat/pages/about.htm */
class __TwigTemplate_be3baed118bba0d9f63033eb3a9bcaadbe2046135d312d15fceb5e993f90603b extends Twig_Template
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
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction((($context["filename"] ?? null) . ".md")        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
    }

    public function getTemplateName()
    {
        return "/var/www/webuxr-oct/install-flatfile/docroot/themes/foundflat/pages/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% content filename ~ '.md' %}", "/var/www/webuxr-oct/install-flatfile/docroot/themes/foundflat/pages/about.htm", "");
    }
}
