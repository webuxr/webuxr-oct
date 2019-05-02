<?php

/* /Users/rsmith/projects/sites/octobercms/flatfile-install/themes/website/partials/footer.htm */
class __TwigTemplate_dd5f45fa0a7f0e0b168f3ba3c9ffbd7f9be1ca3c5b6adcf562c9229a9d42f9e6 extends Twig_Template
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
        echo "! Like us on facebook...

<a href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\">Return home</a>, or
<a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about", ["filename" => "welcome"]);
        echo "\">learn about us</a>";
    }

    public function getTemplateName()
    {
        return "/Users/rsmith/projects/sites/octobercms/flatfile-install/themes/website/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  29 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Thanks for visiting {{ name }}! Like us on facebook...

<a href=\"{{ 'index'|page }}\">Return home</a>, or
<a href=\"{{ 'about'|page({ filename: 'welcome' }) }}\">learn about us</a>", "/Users/rsmith/projects/sites/octobercms/flatfile-install/themes/website/partials/footer.htm", "");
    }
}
