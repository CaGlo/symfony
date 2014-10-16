<?php

/* ::base.html.twig */
class __TwigTemplate_b26f29601b8e495051c08aa76ee2e9e89e28c2bf6a1b0336a993446f6dfd2445 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>SF2</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <!-- Bootstrap -->
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
       
        <style type=\"text/css\">
            body{
                padding-top: 60px;
            }
        </style>
    </head>
    <body>
        
        ";
        // line 20
        $this->env->loadTemplate("BoAdminBundle:Default:menu.html.twig")->display($context);
        // line 21
        echo "        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "            </div>
        </div>

        <script src=\"http://code.jquery.com/jquery.js\"></script>
        <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    </body>
</html>";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "                ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 24,  70 => 23,  63 => 29,  57 => 25,  55 => 23,  51 => 21,  49 => 20,  36 => 10,  32 => 9,  20 => 2,  31 => 3,  28 => 8,);
    }
}
