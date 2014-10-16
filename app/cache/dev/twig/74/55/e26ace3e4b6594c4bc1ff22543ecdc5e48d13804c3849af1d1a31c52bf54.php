<?php

/* BoAdminBundle:Default:menu.html.twig */
class __TwigTemplate_7455e26ace3e4b6594c4bc1ff22543ecdc5e48d13804c3849af1d1a31c52bf54 extends Twig_Template
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
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Produit <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("admin.produits");
        echo "\">Liste produit</a></li>
                                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("admin.produit_fixtures2");
        echo "\">Ajout catégorie</a></li>
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
        return array (  48 => 20,  42 => 17,  38 => 16,  31 => 12,  19 => 2,);
    }
}
