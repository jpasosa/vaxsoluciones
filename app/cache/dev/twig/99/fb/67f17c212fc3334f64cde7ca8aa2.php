<?php

/* VaxFrontBundle:Page:notebook.html.twig */
class __TwigTemplate_99fb67f17c212fc3334f64cde7ca8aa2 extends Twig_Template
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
        <h2 class=\"section-title\"> NOTEBOOK</h2>
        <div class=\"box\">
            <div class=\"txt-left\">
                <p> Contamos con servicio técnico especializado en nuestro staff, egresados de la UTN. Contamos con tecnología de avanzada que nos permiten innovar en métodos de reparación mas efectivos y precisos. </p>
                <p> Todas las notebook que contengan el GPU NVidia 6100/6150 que cuentan con aceleradora grafica GForce suelen tener distintas fallas debido a las altas temperaturas con las que trabajan. </p>
            </div>
            <div id=\"slideshow\">
                ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "images"));
        foreach ($context['_seq'] as $context["_key"] => $context["im"]) {
            // line 17
            echo "                    <img class=\"image-rigth\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/vaxfront/images/servicios/notebooks/" . $this->getContext($context, "im"))), "html", null, true);
            echo "\" alt=\"notebook\" width=\"160\" height=\"150\" />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['im'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "            </div>
        </div>
        <div class=\"subtitle\"> Detalle de Fallas: </div>
        <ul class=\"list\">
            <li> <span> • </span> No funciona la placa de conexion inalambrica a la red (WIFI). </li>
            <li> <span> • </span> Notebook con pantalla azul. </li>
            <li> <span> • </span> Se reinicia constantemente. </li>
            <li> <span> • </span> Enciende pero no da imagen, estos son motivos para realizar un reballing. </li>
        </ul>
        <div class=\"subtitle\"> Que es reballing? </div>
        <div class=\"simple-text\">
            <p>Este método es utilizado para resoldar o cambiar el chipset y GPU de los motherboards de notebooks. Estos mismos vienen soldados de fabrica con estaño sin plomo en esferas, que por normativa ecológica no pueden contenerlo, que a su vez forman puntos de soldadura en cada isla del chipset las cuales hacen contacto al soldarse con el motherboard. </p>
            <p>Nosotros reemplazamos estas esferas por esferas de estaño con plomo, que hacen la soldadura más resistente al calor quedando mejor que de fabrica y con 6 meses de garantía sobre la reparación.</p>
        </div>
        <div class=\"subtitle\"> Que marcas suelen tener estas fallas?  </div>
        <div class=\"simple-text\">
            <p>Todos los modelos dv de HP, todos los modelos F de Compaq, Acer One, Asus Eepc, LG, Acer, Bangho, Toshiba.. </p>
            <p>Vale Aclarar, que hay casos en donde los intentos de reparación anteriores fueron fallidos, debido a una mala aplicación de reflow mediante aire caliente, donde es muy probable que hayan SOBRECALENTADO el GPU o CPU, como también los RAM Bricks o el southbridge, y este ha quedado dañado y necesita ser reemplazado.</p>
            <p>En muchos casos ha ocurrido que usuarios que no cuentan con experiencia o con las herramientas adecuadas, han incurrido en intentar reparar los GPU con métodos caseros como por ej. Poner una moneda en el chipset y utilizar una pistola de aire caliente o SMD, lo cual genera q se sobrecaliente el GPU y se arriesgue a que se rompan los impresos debajo del mismo, lo cual puede producir la rotura definitiva del mother.  </p>
            <p>Este procedimiento dura muy poco y no es recomendable ya que las esferas de estaño al sobrecalentarse pueden poner en corto el chipset y así perder aun mas dinero para el usuario. </p>
        </div>




    </div>
";
    }

    public function getTemplateName()
    {
        return "VaxFrontBundle:Page:notebook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 19,  52 => 17,  48 => 16,  38 => 8,  35 => 7,  30 => 4,  27 => 3,);
    }
}
