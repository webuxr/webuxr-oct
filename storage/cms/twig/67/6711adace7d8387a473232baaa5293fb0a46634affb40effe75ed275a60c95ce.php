<?php

/* /var/www/webuxr-oct/install-flatfile/docroot/themes/foundflat/pages/resume.htm */
class __TwigTemplate_249fe1a19f168dea5a1ca0a84a7c4f6ef1f3c2e7136426bdd842434bb66029d8 extends Twig_Template
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
        return "/var/www/webuxr-oct/install-flatfile/docroot/themes/foundflat/pages/resume.htm";
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
        return new Twig_Source("{% content filename ~ '.md' %}", "/var/www/webuxr-oct/install-flatfile/docroot/themes/foundflat/pages/resume.htm", "");
    }
}
