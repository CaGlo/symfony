<?php

/* BoAdminBundle:Produit:produits.html.twig */
class __TwigTemplate_da217e92bfdca62f2d838b17b6d4c601f045890f6eb0c73c0e13cebb6395bf5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 4
            echo "    <div class=\"flash-notice\">
        ";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
<a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("admin.produit_fixtures");
        echo "\" class=\"btn btn-primary\" role=\"button\">Ajout</a>
<a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("admin.produit_form");
        echo "\" class=\"btn btn-primary\" role=\"button\">Nouveau produit</a>

<table class=\"table table-striped\">
    <tr>
        <td>N°</td>
        <td>Catégorie</td>
        <td>Nom</td>
        <td>Prix</td>
        <td>Description</td>
        <td>Disponibilité</td>
        <td>Image</td>
        <td>Crée le</td>
        <td>Mise à jour le</td>
        <td></td>
        <td></td> 
    </tr>
     ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 27
            echo "     <tr>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "id"), "html", null, true);
            echo "</td>
        ";
            // line 29
            if ($this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "produitCategorie")) {
                // line 30
                echo "           <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "produitCategorie"), "__toString", array(), "method"), "html", null, true);
                echo "</td>
        ";
            } else {
                // line 32
                echo "            <td> --- </td>
        ";
            }
            // line 34
            echo "        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "nom"), "html", null, true);
            echo "</td>
        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "prix"), "html", null, true);
            echo "</td>
        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "description"), "html", null, true);
            echo "</td>
        ";
            // line 37
            if ($this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "isDisponible")) {
                // line 38
                echo "            <td> Oui </td>
        ";
            } else {
                // line 40
                echo "            <td> Non </td>
        ";
            }
            // line 42
            echo "        ";
            if ($this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "fileImg")) {
                // line 43
                echo "            <td><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "fileImg"))), "html", null, true);
                echo "\" ></td>
        ";
            } else {
                // line 45
                echo "            <td> </td>
        ";
            }
            // line 47
            echo "        <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "created"), "d/m/y"), "html", null, true);
            echo "</td>
        <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "updated"), "d/m/y"), "html", null, true);
            echo "</td>
        <td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin.produit_form", array("id" => $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-info btn-xs\" role=\"button\">Modifier</a></td>
        <td><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin.produit_delete", array("id" => $this->getAttribute((isset($context["p"]) ? $context["p"] : $this->getContext($context, "p")), "id"))), "html", null, true);
            echo "\" class=\"btn btn-danger btn-xs\" role=\"button\">Supprimer</a></td>
    </tr>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Produit:produits.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 53,  146 => 50,  142 => 49,  138 => 48,  133 => 47,  129 => 45,  123 => 43,  120 => 42,  116 => 40,  112 => 38,  110 => 37,  106 => 36,  102 => 35,  97 => 34,  93 => 32,  87 => 30,  85 => 29,  81 => 28,  78 => 27,  74 => 26,  55 => 10,  51 => 9,  48 => 8,  39 => 5,  36 => 4,  31 => 3,  28 => 2,);
    }
}
