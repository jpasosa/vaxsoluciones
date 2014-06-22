<?php

/* VaxFrontBundle:Page:mother.html.twig */
class __TwigTemplate_c8fecdfe9cfa65006e30c296b7eaf04a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VaxFrontBundle:Page:base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'col_left' => array($this, 'block_col_left'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VaxFrontBundle:Page:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  :: VAX SOLUCIONES ::
";
    }

    // line 7
    public function block_col_left($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"content-common\">
        <h2 class=\"section-title\"> MOTHERBOARD</h2>
        <div class=\"box\">
            <div class=\"txt-left\">
                <p> En nuestros laboratorios contamos con profesionales en electrónica digital, que mediante investigación y herramientas de última Tecnología, permiten innovar en métodos de reparación más efectivos y precisos. </p>
                <p> Por esta razón reparamos todos los componentes en todo tipo de motherboard y marca . </p>
            </div>
            <div id=\"slideshow\">
            ";
        // line 16
        if (isset($context["images"])) { $_images_ = $context["images"]; } else { $_images_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_images_);
        foreach ($context['_seq'] as $context["_key"] => $context["im"]) {
            // line 17
            echo "                    <img class=\"image-rigth\" src=\"";
            if (isset($context["im"])) { $_im_ = $context["im"]; } else { $_im_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/vaxfront/images/servicios/mothers/" . $_im_)), "html", null, true);
            echo "\" alt=\"mother\" width=\"160\" height=\"150\" />
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['im'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "            </div>
        </div>
        <div class=\"subtitle\"> Reparamos en nuestro Laboratorio: </div>
        <ul class=\"list\">
            <li> <span> • </span> Filtros o capacitores electrolíticos. </li>
            <li> <span> • </span> Fets y reguladores de tensión. </li>
            <li> <span> • </span> Puertos de Video, Red y USB. </li>
            <li> <span> • </span> IControladora IDE y Winwond. </li>
            <li> <span> • </span> Reguladores de memoria y BIOS.</li>
            <li> <span> • </span> Integrados de superficie.</li>
            <li> <span> • </span> Grabación y actualización de BIOS. </li>
            <li> <span> • </span> Cambio de diodos y puente de diodos. </li>
            <li> <span> • </span> Cambio de reguladores fets renesas. </li>
            <li> <span> • </span> Cambio de etapa de fuente completa. </li>
            <li> <span> • </span> Cambio de conector de fuente 12v. y 6v. </li>
            <li> <span> • </span> Resoldado de southbridge y northbridge. </li>
            <li> <span> • </span>     Cambio de chip de red y de sonido. </li>
        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "VaxFrontBundle:Page:mother.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  53 => 17,  48 => 16,  38 => 8,  35 => 7,  30 => 4,  27 => 3,);
    }
}
