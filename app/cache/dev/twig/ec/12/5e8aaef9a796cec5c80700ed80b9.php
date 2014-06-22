<?php

/* VaxFrontBundle:Page:videocard.html.twig */
class __TwigTemplate_ec125e8aaef9a796cec5c80700ed80b9 extends Twig_Template
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
        <h2 class=\"section-title\"> PLACAS DE VIDEO O VGA</h2>
        <div class=\"box\">
            <div class=\"txt-left\">
                <p> Para una rápida y correcta reparación de tu Placa VGA, es recomendable una detallada descripción de la falla de la misma. </p>
                <p> FALLAS TIPICAS </p>
                <p> PROCEDIMIENTO </p>
                <p> REPARACION Y TESTEO </p>
            </div>
            <div id=\"slideshow\">
                ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "images"));
        foreach ($context['_seq'] as $context["_key"] => $context["im"]) {
            // line 19
            echo "                    <img class=\"image-rigth\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/vaxfront/images/servicios/videos/" . $this->getContext($context, "im"))), "html", null, true);
            echo "\" alt=\"placa-video\" width=\"160\" height=\"150\" />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['im'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 21
        echo "            </div>
        </div>
        <div class=\"subtitle\"> Fallas típicas: </div>
        <ul class=\"list\">
            <li> <span> • </span> Enciende, pero no da imágen. </li>
            <li> <span> • </span> Dá imágenes cin pixeles. </li>
            <li> <span> • </span> Dá imágen con rayas verticales u horizontales. </li>
            <li> <span> • </span> Dá imágen, pero se ven distintos colores. </li>
            <li> <span> • </span> La placa anda bien en Windows, pero pixela o hace lo anteriormente mencionado en juegos.</li>
            <li> <span> • </span> Levanta demasiada temperatura tanto en Windows como en juegos.</li>
        </ul>
        <div class=\"subtitle\"> Procedimiento: </div>
        <ul class=\"list\">
            <li> <span> • </span> Se testea la etapa de alimentación de la placa. </li>
            <li> <span> • </span> Se testean memorias y GPU de la placa. </li>
            <li> <span> • </span> Se testea BIOS de la placa. </li>
        </ul>
        <div class=\"subtitle\"> Reparación y testeo: </div>
        <ul class=\"list\">
            <li> <span> • </span> En el caso que la placa tenga reparación se presupuesta sin cargo. </li>
            <li> <span> • </span> Todas las placas de video se entregan testeadas con juegos full. </li>
        </ul>



    </div>
";
    }

    public function getTemplateName()
    {
        return "VaxFrontBundle:Page:videocard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 21,  54 => 19,  50 => 18,  38 => 8,  35 => 7,  30 => 4,  27 => 3,);
    }
}
