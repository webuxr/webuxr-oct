<?php

/* /Users/rsmith/projects/sites/octobercms/flatfile-install/themes/website/pages/index.htm */
class __TwigTemplate_d466bc9e49db9dccad85a0d102b32c828571f61c4d9e20846f696c74215796d2 extends Twig_Template
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
        echo "<h2>Hello ";
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "!</h2>
<p>Now we're getting somewhere.</p>";
    }

    public function getTemplateName()
    {
        return "/Users/rsmith/projects/sites/octobercms/flatfile-install/themes/website/pages/index.htm";
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
        return new Twig_Source("<h2>Hello {{ name }}!</h2>
<p>Now we're getting somewhere.</p>", "/Users/rsmith/projects/sites/octobercms/flatfile-install/themes/website/pages/index.htm", "");
    }
}
