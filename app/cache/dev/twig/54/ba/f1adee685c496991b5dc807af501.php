<?php

/* VaxFrontBundle:Page:aboutus.html.twig */
class __TwigTemplate_54baf1adee685c496991b5dc807af501 extends Twig_Template
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
        <h2 class=\"section-title\"> QUIENES SOMOS</h2>
        <div class=\"box\">
            <div class=\"txt-left\">
                <p> VAX es una empresa dedicada a proveer soluciones tecnológicas en el campo de la reparación de motherboards y notebooks. </p>
                <p> Contamos con profesionales en electrónica digital,
                que mediante investigación y herramientas de ultima Tecnología, permiten innovar en métodos de reparación mas efectivos y precisos.  </p>
            </div>
            <div id=\"slideshow\">
                ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "images"));
        foreach ($context['_seq'] as $context["_key"] => $context["im"]) {
            // line 18
            echo "                        <img class=\"image-rigth\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/vaxfront/images/nosotros/" . $this->getContext($context, "im"))), "html", null, true);
            echo "\" alt=\"nosotros\" width=\"160\" height=\"150\" />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['im'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "            </div>

            <!-- <img class=\"image-rigth\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/nosotros/chip.jpg"), "html", null, true);
        echo "\" alt=\"chip\" width=\"160\" height=\"150\" /> -->
        </div>
        <div class=\"txt-box-pie\">
            <p> Con más de doce años brindando nuestros servicios, tanto a empresas como a particulares. </p>
            <p> Vax experimenta una mejora continua de sus procesos para una mayor satisfacción del cliente. </p>
        </div>
        <div class=\"subtitle\"> Nuestros Valores </div>
        <ul class=\"list\">
            <li> <span> • </span> Continuo perfeccionamiento de nuestro grupo de trabajo. </li>
            <li> <span> • </span> Vocación en la atención de nuestros clientes. </li>
            <li> <span> • </span> Continuidad en la innovacion de nuevos metodos y soluciones. </li>
            <li> <span> • </span> Responsabilidad y compromiso a fin de obtener un servicio satisfactorio. </li>
            <li> <span> • </span> Generar procesos que contengan una impronta de profesionalismo en cada tarea. </li>
            <li> <span> • </span> Lograr un ambiente de colaboracion y armonia a fin de mejorar nuestro desempeño. </li>
        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "VaxFrontBundle:Page:aboutus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 22,  62 => 20,  53 => 18,  49 => 17,  38 => 8,  35 => 7,  30 => 4,  27 => 3,);
    }
}
