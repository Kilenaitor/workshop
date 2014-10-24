<?php

/* StudentWorkBundle:Work:index.html.twig */
class __TwigTemplate_87ee19ac340973bcb1fe0546582033c5484cda1e9b9bd2914bbf007bc39aeb04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" class=\"no-js\">
\t<head>
\t\t<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "\t</head>
\t<body style=\"background-image: none;\">
\t\t<div id=\"main\">
\t\t\t<p>
\t\t\t\tSuccessfully authenticated user: <h1><b>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "<b><h1><!-- Displaying that they were successfully authenticated -->
\t\t\t</p>
\t\t\t<p style=\"font-size:22px; text-decoration:none\">
\t\t\t\t<a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">
                    <button class=\"turquoise-flat-button\" style=\"background:#FC4144\">Log Out</button>
                </a>
\t\t\t</p>
\t\t</div><!-- end main -->
\t</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Success";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/default.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    public function getTemplateName()
    {
        return "StudentWorkBundle:Work:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 6,  61 => 5,  55 => 4,  44 => 15,  38 => 12,  32 => 8,  30 => 5,  26 => 4,  21 => 1,);
    }
}
