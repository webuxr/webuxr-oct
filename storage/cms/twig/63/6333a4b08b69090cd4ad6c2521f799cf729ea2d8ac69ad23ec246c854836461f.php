<?php

/* /var/www/webuxr-oct/install-flatfile/docroot/themes/foundflat/partials/footer.htm */
class __TwigTemplate_9cbcb7123dbb4c45183a1be10092f13c4e1a62bd8b86824948aa219bee772e3e extends Twig_Template
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
        echo "Thanks for visiting ";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "! Like us on facebook...";
    }

    public function getTemplateName()
    {
        return "/var/www/webuxr-oct/install-flatfile/docroot/themes/foundflat/partials/footer.htm";
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
        return new Twig_Source("Thanks for visiting {{ name }}! Like us on facebook...", "/var/www/webuxr-oct/install-flatfile/docroot/themes/foundflat/partials/footer.htm", "");
    }
}
