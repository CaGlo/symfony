<?php

/* BoAdminBundle:Default:aide.html.twig */
class __TwigTemplate_867b74e59fd29d508f508b38cc6b9b98ffa83c7fc2ce8e68ee81800e4f702bdb extends Twig_Template
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
        echo "Symfony est un Framework Open-Source, dont l’objectif est de développer des applications web professionnelles en utilisant le langage PHP.
<br>
<br>Symfony apporte une architecture, des composants et des outils pour que les développeurs construisent des applications web complexes plus rapidement. Choisir Symfony permet de publier vos applications plus tôt, de les héberger et de les diffuser sans problème, et ainsi de les maintenir dans le temps sans mauvaise surprise. Symfony est basé sur l’expérience. Notre crédo ? Non pas créer pour créer, mais enrichir l’existant, dans une logique “open-source“. Des milliers de développeurs font désormais confiance à Symfony pour leurs applications ! Et tous les mois, plus d’ 1 000 000 de visiteurs différents se rendent sur le site officiel Symfony. Symfony est utilisé par de nombreuses entreprises comme Yahoo !, Dailymotion, Ted.com, Electronic Arts, Orange, ArianeEspace, et bien d’autres encore.
<br>
<br>";
        // line 5
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BoAdminBundle:Default:calcul"));
        echo "
<br>
<div align=\"center\">
    <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/symfony2.png"), "html", null, true);
        echo "\" alt=\"image_symfony2\">
</div>
";
    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Default:aide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  25 => 5,  19 => 1,);
    }
}
