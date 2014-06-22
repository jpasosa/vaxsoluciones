<?php

/* VaxFrontBundle:Page:security.html.twig */
class __TwigTemplate_45d3ddfed8287e6a2f6489aa37104aed extends Twig_Template
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
        <h2 class=\"section-title\"> Seguridad y Comunicaciones de Cisco</h2>
        <div class=\"box\">
            <div class=\"txt-left\">
                <p> Para que su información este segura le ofrecemos una variedad de opcines acorde a cada necesidad;  </p>
                <p> Consultoria en Seguridad, Penetretation Test, Analisis Forense, Consultoria en Comunicaciones, Diseño de Comunicaciones y Seguridad. </p>
            </div>
            <img class=\"image-rigth active\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/servicios/seguridad/logo_cisco.jpg"), "html", null, true);
        echo "\" alt=\"chip\" width=\"160\" height=\"150\" />
        </div>

            <div class=\"subtitle notborder\"> Consultoria en seguridad </div>
            <div class=\"simple-text\">
              <p> Resguardo de su infraestructura tecnológica a través de las mejores prácticas en seguridad informática para ayudarlo a proteger la confidencialidad,integridad y disponibilidad de la información de su empresa. </p>
            </div>
            <div class=\"subtitle notborder\"> Penetretation Test: </div>
            <div class=\"simple-text\">
              <p> Realización de testeos de intrusion permitiendo la posterior corrección de las vulnerabilidades. </p>
            </div>
            <div class=\"subtitle notborder\"> Analisis Forense: </div>
            <div class=\"simple-text\">
              <p> Realización de análisis exhaustivos a raíz de un incidente de seguridad. </p>
            </div>
            <div class=\"subtitle notborder\">  Consultoria en Comunicaciones: </div>
            <div class=\"simple-text\">
              <p> Diseño y análisis de nuevas implementaciones como así también soporte de 3er nivel a incidentes dentro de un ambiente. </p>
            </div>
            <div class=\"subtitle notborder\">  Diseño de Comunicaciones y Seguridad:</div>
            <div class=\"simple-text\">
              <p> Realización de proyectos y documentación necesaria para ser implementada por el área de sistemas de la empresa que lo requiera. </p>
            </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "VaxFrontBundle:Page:security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 15,  38 => 8,  35 => 7,  30 => 4,  27 => 3,);
    }
}
