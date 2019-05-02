<?php

/* /var/www/webuxr-oct/install-flatfile/docroot/themes/foundflat/pages/index.htm */
class __TwigTemplate_c9fac57555396dd9fc081f6d96d373adab3635df612de8d7062ebe89e638023e extends Twig_Template
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
        echo "## Hello! My name is ";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "!

Now we're getting somewhere.";
    }

    public function getTemplateName()
    {
        return "/var/www/webuxr-oct/install-flatfile/docroot/themes/foundflat/pages/index.htm";
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
        return new Twig_Source("## Hello! My name is {{ name }}!

Now we're getting somewhere.", "/var/www/webuxr-oct/install-flatfile/docroot/themes/foundflat/pages/index.htm", "");
    }
}
