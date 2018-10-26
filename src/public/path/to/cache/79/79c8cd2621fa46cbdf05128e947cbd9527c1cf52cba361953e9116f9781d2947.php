<?php

/* profile.html */
class __TwigTemplate_1215235aba2d019fbe4a30a213a16466ee1d356a3120a31e0efc444b131598a1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("layout.html", "profile.html", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<h1>User List</h1>
<ul>
    <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Slim\Views\TwigExtension']->pathFor("profile", array("name" => "josh")), "html", null, true);
        echo "\">Josh</a></li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "profile.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  35 => 5,  32 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profile.html", "/srv/www/sovr-progr-platf/laba1/src/public/templates/profile.html");
    }
}
