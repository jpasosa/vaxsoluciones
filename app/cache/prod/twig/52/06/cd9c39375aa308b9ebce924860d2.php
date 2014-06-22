<?php

/* VaxFrontBundle:Page:faq.html.twig */
class __TwigTemplate_5206cd9c39375aa308b9ebce924860d2 extends Twig_Template
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
        <h2 class=\"section-title\"> FAQ (preguntas frecuentes)</h2>
        
        <div class=\"subtitle\"> CHIPSET </div>
        <ul class=\"list\">
            <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("faq"), "html", null, true);
        echo "#faq01\" name=\"top\">
                <li> <span> • </span> ¿Qué es el chipset? </li>
            </a>
            <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("faq"), "html", null, true);
        echo "#faq02\" name=\"top\">
                <li> <span> • </span> ¿Antes de comprar un MotherBoard (placa base)? </li>
            </a>
            <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("faq"), "html", null, true);
        echo "#faq03\" name=\"top\">
                <li> <span> • </span> Recomendaciones de Chipset. </li>
            </a>
        </ul>
        
        <a name=\"faq01\"> </a>
        <div class=\"subtitle\"> ¿Qué es el chipset? </div>
        <div class=\"simple-text\">
            <p>El \"chipset\" es el conjunto (set) de chips que se encargan de controlar determinadas funciones del ordenador, como la forma en que interacciona el microprocesador con la memoria o la caché, o el control de los puertos y slots ISA, PCI, AGP, USB.</p>
            <p>Antiguamente estas funciones eran relativamente sencillas de realizar y el chipset apenas influía en el rendimiento del ordenador, por lo que el chipset era el último elemento al que se concedía importancia a la hora de comprar una placa base, si es que alguien se molestaba siquiera en informarse sobre la naturaleza del mismo. Pero los nuevos y muy complejos micros, junto con un muy amplio abanico de tecnologías en materia de memorias, caché y periféricos que aparecen y desaparecen casi de mes en mes, han hecho que la importancia del chipset crezca enormemente. </p>
            <p>De la calidad y características del chipset dependerán: </p>
        </div>
        <ul class=\"list\">
            <li> <span> • </span> Obtener o no el máximo rendimiento del microprocesador. </li>
            <li> <span> • </span> Las posibilidades de actualización del ordenador.  </li>
            <li> <span> • </span> El uso de ciertas tecnologías más avanzadas de memorias y periféricos. </li>
        </ul>
        <div class=\"simple-text\">
            <p>Debe destacarse el hecho de que el uso de un buen chipset no implica que la placa base en conjunto sea de calidad. Como ejemplo, muchas placas con chipsets que darían soporte a enormes cantidades de memoria, 4GB o más, no incluyen zócalos de memoria para más de 2GB. O bien el caso de los puertos, cuyo soporte está previsto en la casi totalidad de los chipsets de los últimos dos años pero que hasta fecha reciente no han tenido los conectores necesarios en las placas base. </p>
        </div>
        <a class=\"to-menu\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("faq"), "html", null, true);
        echo "#top\"> VOLVER </a>

        <a name=\"faq02\"> </a>
        <div  class=\"subtitle\"> ¿Antes de comprar un MotherBoard (placa base)?  </div>
        <div class=\"simple-text\">
            <p>Chipset y placa base forman un conjunto indisoluble y de la máxima importancia, por lo que su compra debe estar acompañada de una cierta reflexión. Lo primero es recordar que un buen chipset sólo no hace una buena placa; si encontramos dos placas con el mismo chipset pero una cuesta el doble que la otra, por algo será (aunque a veces ese algo es simplemente la marca de la placa, por ejemplo las placas Intel, que en general no son tan avanzadas como las Asus, Iwill o Gigabyte pero que cuestan lo mismo o más que éstas...)</p>
            <p>Así mismo, una placa debe ser comprada pensando en el futuro. Por ejemplo, si vamos a comprar una para Pentium 4, merece la pena comprar una con un chipset capaz de trabajar a 1066 MHz de bus con lo que podremos ampliarla en el futuro a micros a 3 ghz MHz o más, cosa que no podremos hacer si compramos una LX, por ejemplo. </p>
            <p>No se obsesione con el Intel Inside. No es que le tenga una manía especial a Intel, y si la tuviera, me la aguantaría; se trata de que mucha gente prefiere dejarse llevar por el atractivo de una marca sin informarse de las características de lo que compra.  </p>
            <p>Y por último, estudie bien la compra. Puede ser que el chipset admita mucha memoria, pero que la placa tenga pocos zócalos para instalarla; o que estemos comprando una placa base o una computadora de segunda mano, y realmente nos importe más que la memoria sea suficiente y fácilmente ampliable que el hecho de que tenga un chipset sin PCI EXPRESS o sin SATA , cuando puede que no vayamos a usar uno ni otro. </p>
        </div>
        <a class=\"to-menu\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("faq"), "html", null, true);
        echo "#top\"> VOLVER </a>

        <a name=\"faq03\"> </a>
        <div class=\"subtitle\"> Recomendaciones de Chipset  </div>
        <div class=\"simple-text\"> VIA: </div>
        <div class=\"simple-text\">
            <p>Se comunican entre southbrige(S) y northbrige(N) a 533 MHz o mas bus vlink, compatibilidad ata 133 y SATA nativa, mejor chipset para pentium 3 y socket antes de nvidida nforce. Mejor sistemas de drivers muy estables, nula o casi nula incompatibilidades de hardware. Malos GPU’s integrados, sonido fenomenal el mejor que he visto con chips cmedia. </p>
        </div>
        <div class=\"simple-text\"> SIS: </div>
        <div class=\"simple-text\">
            <p>Se comunica S y N a 1ghz bus multi-compatibilidad fenomenal para almacenamiento, muy rápidos para transferencias de archivos, muy buen video GPU fenomenal (las incorporadas). Mal sistema de driver y muy lenta para juegos y tras tareas multimedia, pero aun así son muy buenas pero solo para equipos económicos.  </p>
        </div>
        <div class=\"simple-text\"> INTEL: </div>
        <div class=\"simple-text\">
            <p>Para mí el peor de los tres, incompatibilidades con el BIOS que manejan (en el caso de los mainboards manufacturados intel). Nula capacidad de overcloking, video integrado con muy buen soporte de los fabricantes de juegos lo que algo ayuda, calidad general muy buena. Chipsets con incompatibilidades con algunos de sus micros ( bueno eso se demostró con los p4 ,en serio jeje ). Integran muy pocas cosas lo que las hace muy costosas. Pagas la marca. Muy rápidos para programas de uso exhaustivo de memoria y video, Se corrige algunos defectos comprando manufacturas de MSI por ejemplo  </p>
        </div>
        <div class=\"simple-text\"> NFORCE: </div>
        <div class=\"simple-text\">
            <p>El mejor chipset hasta el momento para AMD es la mejor compra, queda como la mejor. </p>
        </div>
        <div class=\"simple-text\"> VIA: </div>
        <div class=\"simple-text\">
            <p>He leído muy buenas cosas de ese chipset pero en ciertos casos esta casi al mismo nivel que NFORCE, muy buen video incorporado (incluye las GPU’s que salieron al mercado)  </p>
        </div>

        <div class=\"simple-text\">
            <p>En definitiva, mejor compra un chipset NVIDIA tanto para AMD como INTEL. Un INTEL para P4 (otra mainboard que no sea made by intel ) y para AMD un VIA, después SIS como ultima opción.  </p>
        </div>
        <a class=\"to-menu\" href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("faq"), "html", null, true);
        echo "#top\"> VOLVER </a>




    </div>


";
    }

    public function getTemplateName()
    {
        return "VaxFrontBundle:Page:faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 77,  93 => 49,  80 => 39,  57 => 19,  51 => 16,  45 => 13,  38 => 8,  35 => 7,  30 => 4,  27 => 3,);
    }
}
