<?php

/* /Users/rsmith/projects/sites/octobercms/flatfile-install/themes/website/layouts/fallback.htm */
class __TwigTemplate_8e6eb3e9c603f904d93de7ff14cd6e98ecdd6fcb9eaaf30ae087f7fcc6b3d3c4 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "/Users/rsmith/projects/sites/octobercms/flatfile-install/themes/website/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "/Users/rsmith/projects/sites/octobercms/flatfile-install/themes/website/layouts/fallback.htm", "");
    }
}
