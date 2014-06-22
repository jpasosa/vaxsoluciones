<?php

/* VaxFrontBundle:Page:contactEmail.txt.twig */
class __TwigTemplate_d374d38d5d77daeb2bf0dced2edb17a7 extends Twig_Template
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
        if (isset($context["enquiry"])) { $_enquiry_ = $context["enquiry"]; } else { $_enquiry_ = null; }
        if (($this->getAttribute($_enquiry_, "name") != "")) {
            // line 2
            echo "    ";
            if (isset($context["enquiry"])) { $_enquiry_ = $context["enquiry"]; } else { $_enquiry_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_enquiry_, "name"), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    Anonimo
";
        }
        // line 6
        echo " se contactó desde la WEB a las ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "H:i"), "html", null, true);
        echo " en la fecha ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo ".

Su email es: ";
        // line 8
        if (isset($context["enquiry"])) { $_enquiry_ = $context["enquiry"]; } else { $_enquiry_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_enquiry_, "email"), "html", null, true);
        echo "

Mensaje:
";
        // line 11
        if (isset($context["enquiry"])) { $_enquiry_ = $context["enquiry"]; } else { $_enquiry_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_enquiry_, "body"), "html", null, true);
        echo "

Título:
";
        // line 14
        if (isset($context["enquiry"])) { $_enquiry_ = $context["enquiry"]; } else { $_enquiry_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_enquiry_, "subject"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "VaxFrontBundle:Page:contactEmail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  46 => 11,  39 => 8,  31 => 6,  27 => 4,  20 => 2,  17 => 1,);
    }
}
