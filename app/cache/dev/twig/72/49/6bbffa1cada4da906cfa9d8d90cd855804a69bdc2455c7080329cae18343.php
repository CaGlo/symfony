<?php

/* BoAdminBundle:Default:calcul.html.twig */
class __TwigTemplate_72496bbffa1cada4da906cfa9d8d90cd855804a69bdc2455c7080329cae18343 extends Twig_Template
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
        // line 1
        echo "Symfony2 possède <b style=\"color:#cc0000\">";
        echo twig_escape_filter($this->env, (isset($context["nbr_articles"]) ? $context["nbr_articles"] : $this->getContext($context, "nbr_articles")), "html", null, true);
        echo "</b> articles sur internet";
    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Default:calcul.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
