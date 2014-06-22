<?php

/* VaxFrontBundle:Page:ubiquiti.html.twig */
class __TwigTemplate_343e0ed5fa2cc1200284a03db8dc64b0 extends Twig_Template
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
        <h2 class=\"section-title\"> UBIQUITI </h2>
        
        <div class=\"box\">
            <div class=\"txt-left\">
                <p style=\"font-weight: bold; margin: 5px 0 0 5px;\"> Reparamos en nuestro Laboratorio: </p>
                <p style=\"margin: 10px 0 0 20px;\"> • Problemas de encendido, conexión de red o WIFI. </p>
                <p style=\"margin: 5px 0 0 20px;\"> • Recambiamos Chip LAN y Fuentes. </p>
                <p style=\"margin: 5px 0 0 20px;\"> • Reparación de Pistas y Corto por filtración de agua. </p>
                <img id=\"logo-ubi\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/footer/logo1.png"), "html", null, true);
        echo "\"
                    alt=\"ubiquiti\" title=\"Ubiquiti\" width=\"80\" height=\"32\" />
                <img id=\"logo-micro\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/footer/logo2.png"), "html", null, true);
        echo "\"
                    alt=\"microtik\" title=\"Microtik\" width=\"80\" height=\"32\" />
            </div>
            <div id=\"slideshow\">
                ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "images"));
        foreach ($context['_seq'] as $context["_key"] => $context["im"]) {
            // line 24
            echo "                    <img class=\"image-rigth\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/vaxfront/images/ubiquiti/" . $this->getContext($context, "im"))), "html", null, true);
            echo "\" alt=\"ubiquiti\" width=\"160\" height=\"150\" />
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['im'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 26
        echo "            </div>
        </div>
        
        <div class=\"subtitle\"> Fallas típicas: </div>
        <ul class=\"list\" style=\"margin: 30px 0 0 30px;\">
            
            <!-- NANO STATION -->
            <li> <span> • </span>
                <a href=\"http://www.ubnt.com/nanostation\" target=\"_blank\"> NanoStation. </a>
                <div class=\"column-pdf\">
                    <a href=\"http://www.ubnt.com/downloads/ns2_datasheet.pdf\" target=\"_blank\">
                        <img class=\"images-pdf\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/base/icon-pdf.jpg"), "html", null, true);
        echo "\" alt=\"ubiquiti\" width=\"30\" height=\"32\" title=\"DataSheet NS2\"/>
                    </a>
                    <a href=\"http://www.ubnt.com/downloads/ns5_datasheet.pdf\" target=\"_blank\">
                        <img class=\"images-pdf\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/base/icon-pdf.jpg"), "html", null, true);
        echo "\" alt=\"ubiquiti\" width=\"30\" height=\"32\" title=\"DataSheet NS5\"/>
                    </a>
                </div>
            </li>
            
            <!-- NANO STATION LOCO -->
            <li> <span> • </span>
                <a href=\"http://www.ubnt.com/nanostationloco\" target=\"_blank\"> NanoStation Loco. </a>
                <div class=\"column-pdf\">
                    <a href=\"http://www.ubnt.com/downloads/loco2_datasheet.pdf\" target=\"_blank\">
                        <img class=\"images-pdf\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/base/icon-pdf.jpg"), "html", null, true);
        echo "\" alt=\"ubiquiti\" width=\"30\" height=\"32\" title=\"DataSheet NS - Loco2\"/>
                    </a>
                    <a href=\"http://www.ubnt.com/downloads/loco5_datasheet.pdf\" target=\"_blank\">
                        <img class=\"images-pdf\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/base/icon-pdf.jpg"), "html", null, true);
        echo "\" alt=\"ubiquiti\" width=\"30\" height=\"32\" title=\"DataSheet NS - Loco5\"/>
                    </a>
                </div>
            </li>
            
            <!-- BULLET -->
            <li> <span> • </span>
                <a href=\"http://www.ubnt.com/bullet\" target=\"_blank\"> Bullet.  </a>
                <div class=\"column-pdf\">
                    <a href=\"http://www.ubnt.com/downloads/b2_datasheet.pdf\" target=\"_blank\">
                        <img class=\"images-pdf\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/base/icon-pdf.jpg"), "html", null, true);
        echo "\" alt=\"pdf bullet2\" width=\"30\" height=\"32\" title=\"DataSheet Bullet 2\"/>
                    </a>
                    <a href=\"http://www.ubnt.com/downloads/b2hp_datasheet.pdf\" target=\"_blank\">
                        <img class=\"images-pdf\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/base/icon-pdf.jpg"), "html", null, true);
        echo "\" alt=\"pdf bullet2 hp\" width=\"30\" height=\"32\" title=\"DataSheet Bullet 2 HP\"/>
                    </a>
                </div>
            </li>
            
            <!-- PICO STATION 2-->
            <li> <span> • </span>
                <a href=\"http://www.ubnt.com/picostation\" target=\"_blank\"> PicoStation 2.  </a>
                <div class=\"column-pdf\">
                    <a href=\"http://www.ubnt.com/downloads/pico2_datasheet.pdf\" target=\"_blank\">
                        <img class=\"images-pdf\" src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/base/icon-pdf.jpg"), "html", null, true);
        echo "\" alt=\"pdf picostation 2\" width=\"30\" height=\"32\" title=\"DataSheet Pico 2 Station\"/>
                    </a>
                    <a href=\"http://www.ubnt.com/downloads/pico2hp_ds.pdf\" target=\"_blank\">
                        <img class=\"images-pdf\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/base/icon-pdf.jpg"), "html", null, true);
        echo "\" alt=\"pdf picostation 2 hp\" width=\"30\" height=\"32\" title=\"DataSheet Pico 2 HP\"/>
                    </a>
                    <a href=\"http://www.ubnt.com/downloads/pico5_ds.pdf\" target=\"_blank\">
                        <img class=\"images-pdf\" src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/base/icon-pdf.jpg"), "html", null, true);
        echo "\" alt=\"pdf picostation 5\" width=\"30\" height=\"32\" title=\"DataSheet Pico 5\"/>
                    </a>
                </div>
            </li>

            <!-- POWER STATION -->
            <li> <span> • </span>
                <a href=\"http://www.ubnt.com/powerstation\" target=\"_blank\"> PowerStation.  </a>
                <div class=\"column-pdf\">
                    <a href=\"http://www.ubnt.com/downloads/ps2_datasheet.pdf\" target=\"_blank\">
                        <img class=\"images-pdf\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/base/icon-pdf.jpg"), "html", null, true);
        echo "\" alt=\"pdf powerstation2\" width=\"30\" height=\"32\" title=\"DataSheet PowerStation 2\"/>
                    </a>
                    <a href=\"http://www.ubnt.com/downloads/ps5_datasheet.pdf\" target=\"_blank\">
                        <img class=\"images-pdf\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/base/icon-pdf.jpg"), "html", null, true);
        echo "\" alt=\"pdf powerstation5\" width=\"30\" height=\"32\" title=\"DataSheet PowerStation 5\"/>
                    </a>
                </div>
            </li>
        </ul>


    </div>
";
    }

    public function getTemplateName()
    {
        return "VaxFrontBundle:Page:ubiquiti.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 95,  169 => 92,  156 => 82,  150 => 79,  144 => 76,  131 => 66,  125 => 63,  112 => 53,  106 => 50,  93 => 40,  87 => 37,  74 => 26,  65 => 24,  61 => 23,  54 => 19,  49 => 17,  38 => 8,  35 => 7,  30 => 4,  27 => 3,);
    }
}
