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
                                <div class=\"price\"> U\$D47 </div>
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
                                <div class=\"price\"> U\$D35 </div>
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
                                <div class=\"price\"> U\$D90 </div>
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
                                <div class=\"price\"> U\$D80 </div>
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

</div>  <!-- fin class=\"out-container-slider\" -->
<div class=\"cotizaciones\">
    <div class=\"dolarhoy\">
        <a href=\"http://www.dolarhoy.com/index.php\" target=\"_blank\"> COTIZAR EN dolarhoy.com </a>
    </div>
    <div class=\"dolarblue\">
        <a href=\"http://www.dolarblue.net/\" target=\"_blank\"> COTIZAR EN dolarblue.net </a>
    </div>
</div>";
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
        return array (  95 => 59,  78 => 45,  56 => 29,  32 => 11,  28 => 10,  17 => 1,  553 => 179,  550 => 178,  546 => 168,  543 => 167,  539 => 163,  536 => 162,  530 => 194,  526 => 192,  524 => 191,  521 => 190,  517 => 188,  513 => 186,  510 => 185,  504 => 181,  502 => 178,  499 => 177,  495 => 175,  491 => 173,  488 => 172,  485 => 171,  480 => 169,  478 => 167,  474 => 165,  470 => 164,  468 => 162,  462 => 160,  459 => 159,  456 => 158,  451 => 136,  443 => 131,  436 => 130,  432 => 129,  425 => 128,  421 => 127,  414 => 126,  410 => 125,  403 => 124,  399 => 123,  392 => 122,  388 => 121,  381 => 120,  376 => 117,  373 => 110,  364 => 103,  356 => 98,  349 => 97,  345 => 96,  338 => 95,  333 => 92,  330 => 90,  324 => 88,  315 => 82,  308 => 81,  304 => 80,  297 => 79,  293 => 78,  286 => 77,  282 => 76,  275 => 75,  271 => 74,  266 => 73,  263 => 68,  259 => 67,  254 => 66,  251 => 65,  247 => 64,  240 => 63,  232 => 59,  227 => 153,  217 => 148,  211 => 147,  205 => 146,  199 => 145,  193 => 144,  188 => 141,  185 => 140,  180 => 137,  178 => 88,  175 => 87,  173 => 59,  167 => 56,  163 => 54,  160 => 53,  150 => 29,  146 => 28,  142 => 27,  138 => 26,  135 => 25,  132 => 24,  126 => 20,  122 => 77,  117 => 75,  113 => 16,  108 => 15,  105 => 14,  100 => 61,  97 => 8,  91 => 204,  89 => 203,  81 => 197,  79 => 158,  73 => 43,  71 => 53,  51 => 27,  49 => 24,  45 => 22,  43 => 14,  36 => 8,  53 => 22,  38 => 11,  35 => 8,  30 => 4,  27 => 1,);
    }
}
