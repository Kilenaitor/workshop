<?php

/* StudentWorkBundle:Work:login.html.twig */
class __TwigTemplate_f12937dd9dbff2ed4995eef741a5a79fb7e7fc2138e280fea8f15df6cca2eda9 extends Twig_Template
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
        echo "<html lang=\"en\" class=\"no-js\">
\t<head>
        <title>";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "\t</head>
\t<body>
\t\t<div id=\"login\">
\t\t\t<div id=\"box\">
\t\t\t\t<form method=\"post\" action=\"\">
\t\t\t\t\t<p>
\t\t\t\t\t\t<input class=\"form\" id=\"Username\" name=\"username\" type=\"text\" placeholder=\"Username\" ><br> <!-- Username input box -->
\t\t\t\t\t\t<input class=\"form\" id=\"Password\" name=\"password\" type=\"password\" placeholder=\"Password\"><br> <!-- Password input box -->
\t\t\t\t\t\t<button type=\"submit\" name=\"submit\" class=\"btn btn-4 btn-4a\">Login</button> <!-- Login (submit) button -->
\t\t\t\t\t</p>
\t\t\t\t</form>
                ";
        // line 19
        if (array_key_exists("error", $context)) {
            echo "<h4 class='alert'>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</h4>";
        }
        // line 20
        echo "\t\t\t</div>
\t\t</div><!-- end login -->
\t</body>
</html>
";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/default.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/component.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    public function getTemplateName()
    {
        return "StudentWorkBundle:Work:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 6,  67 => 5,  64 => 4,  58 => 3,  50 => 20,  44 => 19,  31 => 8,  29 => 4,  25 => 3,  21 => 1,);
    }
}
