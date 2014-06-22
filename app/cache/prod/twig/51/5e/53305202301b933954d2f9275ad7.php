<?php

/* VaxFrontBundle:Page:history.html.twig */
class __TwigTemplate_515e53305202301b933954d2f9275ad7 extends Twig_Template
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
        <h2 class=\"section-title\"> HISTORIA</h2>
        <div class=\"box\">
            <div class=\"txt-left\">
                <p> 9 años en el mercado informático. </p>
                <p> Más de 10000 soluciones satisfactorias.</p>
                <p> Laboratorio equipado con instrumentos de última tecnología en electrónica digital. </p>
            </div>
            <div id=\"slideshow\">
                <img class=\"image-rigth active\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/historia/chip-01.jpg"), "html", null, true);
        echo "\" alt=\"chip\" width=\"160\" height=\"150\" />
                <img class=\"image-rigth\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/historia/chip-02.jpg"), "html", null, true);
        echo "\" alt=\"chip\" width=\"160\" height=\"150\" />
                <img class=\"image-rigth\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/historia/chip-03.jpg"), "html", null, true);
        echo "\" alt=\"chip\" width=\"160\" height=\"150\" />
            </div>
        </div>
        <div class=\"subtitle\"> Avalan nuestras trayectoria, las siguientes firmas: </div>
        <ul class=\"list\">
            <li class=\"bold\"> <span> • </span> Luis a cuadro. </li>
            <li class=\"bold\"> <span> • </span> Núcleo distribuidora. </li>
            <li class=\"bold\"> <span> • </span> Pascal Informática. </li>
            <li class=\"bold\"> <span> • </span> Intcomex. </li>
            <li class=\"bold\"> <span> • </span> Beseder sistem. </li>
            <li class=\"bold\"> <span> • </span> Criterios Informaticos SRL. </li>
            <li class=\"bold\"> <span> • </span> Armytech. </li>
            <li class=\"bold\"> <span> • </span> G & A Informática. </li>
            <li class=\"bold\"> <span> • </span> TL Informática. </li>
            <li class=\"bold\"> <span> • </span> Tranders. </li>
            <li class=\"bold\"> <span> • </span> Recrearte. </li>
            <li class=\"bold\"> <span> • </span> Wireless Tigre. </li>
            <li class=\"bold\"> <span> • </span> Ditelco. </li>
            <li class=\"bold\"> <span> • </span> Connectis. </li>
        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "VaxFrontBundle:Page:history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 19,  53 => 18,  49 => 17,  38 => 8,  35 => 7,  30 => 4,  27 => 3,);
    }
}
