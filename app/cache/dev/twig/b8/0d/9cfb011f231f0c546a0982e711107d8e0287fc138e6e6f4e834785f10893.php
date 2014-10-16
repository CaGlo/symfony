<?php

/* BoAdminBundle:Form:fields.html.twig */
class __TwigTemplate_b80d9cfb011f231f0c546a0982e711107d8e0287fc138e6e6f4e834785f10893 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'form_label' => array($this, 'block_form_label'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'field_errors' => array($this, 'block_field_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 17
        echo "

";
        // line 19
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 35
        echo "



";
        // line 39
        $this->displayBlock('form_label', $context, $blocks);
        // line 55
        echo "

";
        // line 57
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 72
        echo "

       ";
        // line 74
        $this->displayBlock('field_errors', $context, $blocks);
    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        // line 4
        $context["help"] = (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "help", array(), "array"), null)) : (null));
        // line 5
        echo "<div class=\"form-group\">
    <label class=\"col-sm-3 control-l
           abel\">";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "</label>
    <div class=\"col-sm-6\">
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 11
        if (array_key_exists("help", $context)) {
            // line 12
            echo "        <span class=\"help-inline\">";
            echo twig_escape_filter($this->env, (isset($context["help"]) ? $context["help"] : $this->getContext($context, "help")), "html", null, true);
            echo "</span>
        ";
        }
        // line 14
        echo "    </div>
</div>
";
    }

    // line 19
    public function block_submit_widget($context, array $blocks = array())
    {
        // line 20
        ob_start();
        // line 21
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 22
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 23
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
        }
        // line 25
        echo "
<div class=\"form-group\">
    <label class=\"col-sm-3 control-label\"></label>
    <div class=\"col-sm-6\">
        <button class=\"btn btn-success\" type=\"submit\" ";
        // line 29
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</button>
    </div>
</div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 39
    public function block_form_label($context, array $blocks = array())
    {
        // line 40
        ob_start();
        // line 41
        if ((!((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false))) {
            // line 42
            if ((!(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")))) {
                // line 43
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 45
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 46
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class"), "")) : ("")) . " required"))));
            }
            // line 48
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 49
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
            // line 51
            echo "<label";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["attrname"]) ? $context["attrname"] : $this->getContext($context, "attrname")), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, (isset($context["attrvalue"]) ? $context["attrvalue"] : $this->getContext($context, "attrvalue")), "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo " :</label>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 57
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 58
        ob_start();
        // line 59
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 60
        echo "
";
        // line 61
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "file")) {
            // line 62
            echo "<input type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
            }
            echo " />
       ";
            // line 63
            if (array_key_exists("web_path", $context)) {
                // line 64
                echo "       <p><img src=\"";
                echo twig_escape_filter($this->env, (isset($context["web_path"]) ? $context["web_path"] : $this->getContext($context, "web_path")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" style=\"max-width: 150px;max-height: 100px;\"></p>
";
            }
        } else {
            // line 67
            echo "<input type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
            }
            echo " />
       ";
        }
        // line 69
        echo "
       ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 71
        echo "       ";
    }

    // line 74
    public function block_field_errors($context, array $blocks = array())
    {
        // line 75
        echo "       ";
        ob_start();
        // line 76
        echo "       ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 77
            echo "       <div class=\"error\">
    ";
            // line 78
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 79
                echo "    <div>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageTemplate"), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageParameters"), "validators"), "html", null, true);
                echo "</div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "</div>
<br>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "BoAdminBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  250 => 81,  241 => 79,  237 => 78,  234 => 77,  231 => 76,  228 => 75,  225 => 74,  221 => 71,  217 => 69,  203 => 67,  194 => 64,  192 => 63,  179 => 62,  177 => 61,  174 => 60,  172 => 59,  170 => 58,  167 => 57,  145 => 51,  142 => 49,  140 => 48,  137 => 46,  135 => 45,  132 => 43,  130 => 42,  128 => 41,  126 => 40,  123 => 39,  111 => 29,  105 => 25,  102 => 23,  100 => 22,  98 => 21,  96 => 20,  93 => 19,  87 => 14,  81 => 12,  79 => 11,  75 => 10,  71 => 9,  66 => 7,  62 => 5,  60 => 4,  57 => 3,  49 => 72,  41 => 39,  35 => 35,  29 => 17,  27 => 3,  24 => 2,  53 => 74,  47 => 57,  43 => 55,  38 => 5,  33 => 19,  30 => 3,  25 => 2,);
    }
}
