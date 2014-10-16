<?php

/* BoAdminBundle:Default:menu.html.twig */
class __TwigTemplate_bdb1e5ca3ba798d9f485d82ea8469c46d79ac62f889c856f566772701ec6a4a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!-- menu -->
        <nav class=\"navbar navbar-default navbar-inverse navbar-fixed-top\" role=\"navigation\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"#\">Exercices</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("Accueil", array("name" => "nico"));
        echo "\">Accueil</a></li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">---------- <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">----------</a></li>
                                <li><a href=\"#\">----------</a></li>
                            </ul>
                        </li>
                        <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("admin.aide");
        echo "\">Aide</a></li>
                    </ul>
<!--                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Identification <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Connection</a></li>
                            </ul>
                        </li>
                    </ul>-->
                </div>
            </div>
        </nav>
        <!-- menu end -->";
    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 20,  31 => 12,  19 => 2,);
    }
}
