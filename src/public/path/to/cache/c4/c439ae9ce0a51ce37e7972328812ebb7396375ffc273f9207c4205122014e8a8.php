<?php

/* layout.html */
class __TwigTemplate_fa206606703f8faba44b3db4c6f01bf012cb50f85bd1bd11c04e64d6a6241830 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>\$Title\$</title>
</head>
<body>
\$END\$
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html", "/srv/www/sovr-progr-platf/laba1/src/public/templates/layout.html");
    }
}
