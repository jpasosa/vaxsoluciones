<?php

/* VaxFrontBundle:Page:slide-ofertas.html.twig */
class __TwigTemplate_f1e61d825fca04d3acc9eac946ba64c1 extends Twig_Template
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
        echo "<!-- Activando jQuery lightBox plugin -->
<script type=\"text/javascript\">
\$(function() {
    \$('#gallery a').lightBox();
});
</script>


<!-- aparece el ver todas las ofertas abajo, usando position relative -->
<a class=\"ver-todas\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ofertas"), "html", null, true);
        echo "\">
    <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/ofertas/see-all.png"), "html", null, true);
        echo "\" width=\"177\" height=\"18\" />
</a>

<div class=\"out-container-slider\">
    <div class=\"title\"> Ofertas del mes </div>

    <!-- MODULO DE OFERTAS (SLIDER VERTICAL) -->
    <div class=\"contenedor-slider\">
        <div class=\"bloque-slider\">
            <div id=\"gallery\"> <!-- Para poder utilizar el lightBox de las imágenes -->        
                <ul>
                    <li> <div class=\"modulo-slider\"> </div> </li>

                    <li>
                        <div class=\"modulo-slider\">
                            <div class=\"left\">
                                <a class=\"image\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/ofertas/productos/mother-biostar-n68s3.jpg"), "html", null, true);
        echo "\"
                                        title=\"Mother BIOSTAR n68s3\">
                                    <img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/ofertas/productos/mother-biostar-n68s3.jpg"), "html", null, true);
        echo "\" width=\"80\" height=\"50\" />
                                </a>
                            </div>
                            <div class=\"right\">
                                <div class=\"slide-title\"> Mother BIOSTAR </div>
                                <div class=\"description\"> n68s3 </div>
                                <div class=\"price\"> U\$D47,00 </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class=\"modulo-slider\">
                            <div class=\"left\">
                                <a class=\"image\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/ofertas/productos/router-wifi-TL-WR740N.jpg"), "html", null, true);
        echo "\"
                                        title=\"Router Inalámbrico TP-LINK WR740N\">
                                    <img style=\"margin-left: 20px;\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/ofertas/productos/router-wifi-TL-WR740N.jpg"), "html", null, true);
        echo "\" width=\"45\" height=\"53\" />
                                </a>
                            </div>
                            <div class=\"right\">
                                <div class=\"slide-title\"> Router Inálambrico TP-LINK </div>
                                <div class=\"description\"> WR740N </div>
                                <div class=\"price\"> U\$D35,00 </div>
                            </div>
                        </div>
                    </li>
        
                    <li>
                        <div class=\"modulo-slider\">
                            <div class=\"left\">
                                <a class=\"image\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/ofertas/productos/mother-msi-880gm-e35.jpg"), "html", null, true);
        echo "\"
                                        title=\"Mother MSI 880gm e35\">
                                    <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/ofertas/productos/mother-msi-880gm-e35.jpg"), "html", null, true);
        echo "\" width=\"80\" height=\"50\" />
                                </a>
                            </div>
                            <div class=\"right\">
                                <div class=\"slide-title\"> Mother msi </div>
                                <div class=\"description\"> 880gm e35 </div>
                                <div class=\"price\"> U\$D90,00 </div>
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class=\"modulo-slider\">
                            <div class=\"left\">
                                <a class=\"image\" href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/ofertas/productos/mother-msi-880gm-e41.jpg"), "html", null, true);
        echo "\"
                                        title=\"Mother MSI 880gm e41\">
                                    <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/ofertas/productos/mother-msi-880gm-e41.jpg"), "html", null, true);
        echo "\" width=\"80\" height=\"50\" />
                                </a>
                            </div>
                            <div class=\"right\">
                                <div class=\"slide-title\"> Mother msi </div>
                                <div class=\"description\"> 880gm e41 </div>
                                <div class=\"price\"> U\$D80,00 </div>
                            </div>
                        </div>
                    </li>
                    
                </ul>
            </div> <!-- FIN id=gallery -->
      
        </div>
        <p class=\"mover-slider-vertical\">
            <a class=\"subir-slider\"> </a>
            <a class=\"bajar-slider\"> </a>
        </p>
    </div>
</div>  <!-- fin class=\"out-container-slider\" -->";
    }

    public function getTemplateName()
    {
        return "VaxFrontBundle:Page:slide-ofertas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 59,  78 => 45,  56 => 29,  32 => 11,  28 => 10,  17 => 1,  526 => 178,  523 => 177,  519 => 167,  516 => 166,  512 => 162,  509 => 161,  503 => 193,  499 => 191,  497 => 190,  494 => 189,  490 => 187,  486 => 185,  484 => 184,  478 => 180,  476 => 177,  473 => 176,  469 => 174,  465 => 172,  463 => 171,  460 => 170,  455 => 168,  453 => 166,  449 => 164,  445 => 163,  443 => 161,  438 => 159,  435 => 158,  432 => 157,  427 => 136,  419 => 131,  413 => 130,  409 => 129,  403 => 128,  399 => 127,  393 => 126,  389 => 125,  383 => 124,  379 => 123,  373 => 122,  369 => 121,  363 => 120,  358 => 117,  356 => 110,  347 => 103,  339 => 98,  333 => 97,  329 => 96,  323 => 95,  318 => 92,  316 => 90,  310 => 88,  301 => 82,  295 => 81,  291 => 80,  285 => 79,  281 => 78,  275 => 77,  271 => 76,  265 => 75,  261 => 74,  256 => 73,  254 => 68,  250 => 67,  245 => 66,  243 => 65,  239 => 64,  233 => 63,  225 => 59,  220 => 152,  210 => 147,  204 => 146,  198 => 145,  192 => 144,  187 => 141,  185 => 140,  180 => 137,  178 => 88,  175 => 87,  173 => 59,  167 => 56,  163 => 54,  160 => 53,  150 => 29,  146 => 28,  142 => 27,  138 => 26,  135 => 25,  132 => 24,  126 => 20,  122 => 77,  117 => 75,  113 => 16,  108 => 15,  105 => 14,  100 => 61,  97 => 8,  91 => 203,  89 => 202,  81 => 196,  79 => 157,  73 => 43,  71 => 53,  51 => 27,  49 => 24,  45 => 22,  43 => 14,  36 => 8,  53 => 22,  38 => 11,  35 => 8,  30 => 4,  27 => 1,);
    }
}
