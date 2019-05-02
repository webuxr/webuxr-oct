<?php

/* /Users/rsmith/projects/sites/octobercms/flatfile-install/themes/website/pages/about.htm */
class __TwigTemplate_e2ccd2b5dcef972182c361f2db9de8ee271799fbe527d1b2a5201886bb21811f extends Twig_Template
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
        return "/Users/rsmith/projects/sites/octobercms/flatfile-install/themes/website/pages/about.htm";
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
        return new Twig_Source("{% content filename ~ '.md' %}", "/Users/rsmith/projects/sites/octobercms/flatfile-install/themes/website/pages/about.htm", "");
    }
}
