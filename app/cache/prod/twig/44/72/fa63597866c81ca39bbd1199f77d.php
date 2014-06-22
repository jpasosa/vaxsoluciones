<?php

/* VaxFrontBundle:Page:base.html.twig */
class __TwigTemplate_4472fa63597866c81ca39bbd1199f77d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'menu' => array($this, 'block_menu'),
            'submenu' => array($this, 'block_submenu'),
            'body' => array($this, 'block_body'),
            'contacto' => array($this, 'block_contacto'),
            'ofertas' => array($this, 'block_ofertas'),
            'col_left' => array($this, 'block_col_left'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html xmlns:fb=\"http://ogp.me/ns/fb#\"> <!-- agregado para facebook -->
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"title\" content=\"Vaxsoluciones. Reparación Notebooks, antenas wifi. Reballing.\" />
        <meta name=\"description\" content=\"Reparación de notebooks, Reballing, Reparación de antenas wifi, Reparacion de mothers, Reparacion de placas de video, de monitores.\" /> 
        <title>
            ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "        </title>
        
        
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "        

        ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "    
    </head>
    
    <body>
        <!-- boton like del facebook -->
        <div id=\"fb-root\"></div>
        <script>
                (function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = \"//connect.facebook.net/es_ES/all.js#xfbml=1\";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
        </script>

        <div class=\"out-container\">        
            <div class=\"header\">
                ";
        // line 53
        $this->displayBlock('header', $context, $blocks);
        // line 154
        echo "  <!-- FIN block HEADER -->
            </div> <!-- FIN class=\"header\" -->

            <div class=\"content\">
                ";
        // line 158
        $this->displayBlock('body', $context, $blocks);
        // line 197
        echo "            </div>

            

            
            <!-- FOOTER -->
            ";
        // line 203
        $this->env->loadTemplate("VaxFrontBundle:Page:footer.html.twig")->display($context);
        // line 204
        echo "        </div> <!-- cierro out-container -->
    </body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        // line 9
        echo "                :: VAXSOLUCIONES ::
            ";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/css/slider-vertical.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/css/jquery.lightbox-0.5.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href='http://fonts.googleapis.com/css?family=Quantico:400,400italic,700' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/css/jquery.nivo-slider.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link rel=\"shortcut icon\" type=\"image/icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/base/vax.ico"), "html", null, true);
        echo "\" />
        ";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "            <script src=\"http://jqueryjs.googlecode.com/files/jquery-1.2.6.min.js\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/js/slider-vertical.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/js/jquery.lightbox-0.5.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/js/jquery.nivo.slider.pack.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/js/slide-show.js"), "html", null, true);
        echo "\"></script>
            <!--[if lt IE 7]>
                <script src=\"http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js\"></script>
            <![endif]-->

        ";
    }

    // line 53
    public function block_header($context, array $blocks = array())
    {
        // line 54
        echo "                    <div class=\"inner-header\">
                        <div class=\"logo\">
                            <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\" > </a>
                        </div>
                        
                        ";
        // line 59
        $this->displayBlock('menu', $context, $blocks);
        // line 87
        echo "                        
                        ";
        // line 88
        $this->displayBlock('submenu', $context, $blocks);
        // line 137
        echo "  <!-- Termina bloque sub-menu -->

                        <!-- BANNERS de la home-->
                        ";
        // line 140
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "homepage")) {
            // line 141
            echo "                            <div id=\"wrapper\" class=\"banners\">  
                                <div class=\"slider-wrapper theme-default\">
                                    <div id=\"slider\" class=\"nivoSlider\">
                                        <img src=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/banners/banner00.jpg"), "html", null, true);
            echo "\" alt=\"ubiquiti\" data-thumb=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/banners/banner00.jpg"), "html", null, true);
            echo "\" width=\"940\" height=\"280\" />
                                        <img src=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/banners/banner01.jpg"), "html", null, true);
            echo "\" alt=\"reparacion notebooks\" data-thumb=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/banners/banner01.jpg"), "html", null, true);
            echo "\" width=\"940\" height=\"280\" />
                                        <img src=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/banners/banner02.jpg"), "html", null, true);
            echo "\" data-thumb=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/banners/banner02.jpg"), "html", null, true);
            echo "\" alt=\"reballing\"  width=\"940\" height=\"280\" />
                                        <img src=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/banners/banner03.jpg"), "html", null, true);
            echo "\" data-thumb=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/banners/banner03.jpg"), "html", null, true);
            echo "\" alt=\"reballing\" data-transition=\"slideInLeft\"   width=\"940\" height=\"280\" />
                                        <img src=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/banners/banner04.jpg"), "html", null, true);
            echo "\" data-thumb=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/banners/banner04.jpg"), "html", null, true);
            echo "\" alt=\"reparacion antenas wifi\" title=\"#htmlcaption\"   width=\"940\" height=\"280\" />
                                    </div>
                                </div>
                            </div> <!-- FIN banners -->
                        ";
        }
        // line 153
        echo "                    </div>  <!-- FIN inner-header -->
                ";
    }

    // line 59
    public function block_menu($context, array $blocks = array())
    {
        echo "    <!-- MENU -->
                            <div class=\"nav-container\">
                                <div>
                                    <ul class=\"nav\">
                                        <li> <a class=\"";
        // line 63
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "homepage")) {
            echo "active";
        }
        echo "\"
                                                        href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\"> Home </a> </li>
                                        <li> <a class=\"";
        // line 65
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ((($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "nosotros") || ($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "historia"))) {
            // line 66
            echo "active";
        }
        echo "\"
                                                        href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nosotros"), "html", null, true);
        echo "\"> Nosotros </a> </li>
                                        <li> <a class=\"";
        // line 68
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ((((((($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "servicios") || ($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "garantia")) || ($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "notebook")) || ($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "placavideo")) || ($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "seguridad")) || ($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "faq"))) {
            // line 73
            echo "active";
        }
        echo "\"
                                                        href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("servicios"), "html", null, true);
        echo "\"> Servicios </a> </li>
                                        <li> <a class=\"";
        // line 75
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "clientes")) {
            echo "active";
        }
        echo "\"
                                                        href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clientes"), "html", null, true);
        echo "\"> Nuestros Clientes </a> </li>
                                        <li> <a class=\"";
        // line 77
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "ubiquiti")) {
            echo "active";
        }
        echo "\"
                                                        href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ubiquiti"), "html", null, true);
        echo "\"> Ubiquiti </a> </li>
                                        <li> <a class=\"";
        // line 79
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "ofertas")) {
            echo "active";
        }
        echo "\"
                                                        href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ofertas"), "html", null, true);
        echo "\"> Ofertas </a> </li>
                                        <li> <a class=\"";
        // line 81
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "contacto")) {
            echo "active";
        }
        echo "\"
                                                        href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacto"), "html", null, true);
        echo "\"> Contacto </a> </li>
                                    </ul>
                                </div>
                            </div>
                        ";
    }

    // line 88
    public function block_submenu($context, array $blocks = array())
    {
        echo "  <!-- SUB-MENU -->
                            <!-- SI está en nosotros deben aparecer dos submenúes -->
                            ";
        // line 90
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ((($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "nosotros") || ($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "historia"))) {
            // line 92
            echo "                                  <div class=\"sub-nav\">
                                    <div>
                                      <ul class=\"sub-nav\">
                                        <li> <a class=\"";
            // line 95
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "nosotros")) {
                echo "active";
            }
            echo "\"
                                                        href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nosotros"), "html", null, true);
            echo "\"> Quienes Somos </a> </li>
                                        <li> <a class=\"";
            // line 97
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "historia")) {
                echo "active";
            }
            echo "\"
                                                        href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("historia"), "html", null, true);
            echo "\"> Historia </a> </li>
                                      </ul>
                                    </div>
                                  </div>
                            ";
        }
        // line 103
        echo "





                            <!-- SI está en servicios deben aparecer cinco submenúes -->
                            ";
        // line 110
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (((((((($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "servicios") || ($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "garantia")) || ($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "seguridad")) || ($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "placavideo")) || ($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "notebook")) || ($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "motherboard")) || ($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "faq"))) {
            // line 117
            echo "                                  <div class=\"sub-nav\">
                                    <div>
                                      <ul class=\"sub-nav\">
                                        <li> <a class=\"";
            // line 120
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "garantia")) {
                echo "active";
            }
            echo "\"
                                                        href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("garantia"), "html", null, true);
            echo "\"> Garantía </a> </li>
                                        <li> <a class=\"";
            // line 122
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "servicios")) {
                echo "active";
            }
            echo "\"
                                                        href=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("motherboard"), "html", null, true);
            echo "\"> Motherboard </a> </li>
                                        <li> <a class=\"";
            // line 124
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "notebook")) {
                echo "active";
            }
            echo "\"
                                                        href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notebook"), "html", null, true);
            echo "\"> Notebook </a> </li>
                                        <li> <a class=\"";
            // line 126
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "placavideo")) {
                echo "active";
            }
            echo "\"
                                                        href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("placavideo"), "html", null, true);
            echo "\"> Placa de Video </a> </li>
                                        <li> <a class=\"";
            // line 128
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "seguridad")) {
                echo "active";
            }
            echo "\"
                                                        href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("seguridad"), "html", null, true);
            echo "\"> Seguridad </a> </li>
                                        <li> <a class=\"";
            // line 130
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "faq")) {
                echo "active";
            }
            echo "\"
                                                        href=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("faq"), "html", null, true);
            echo "\"> Faq (Preg. Frecuentes) </a> </li>
                                      </ul>
                                    </div>
                                  </div>
                            ";
        }
        // line 136
        echo "
                        ";
    }

    // line 158
    public function block_body($context, array $blocks = array())
    {
        // line 159
        echo "                    
                    ";
        // line 160
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if (($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "contacto")) {
            echo " <!-- sección contacto -->
                            <div class=\"contact\">
                                ";
            // line 162
            $this->displayBlock('contacto', $context, $blocks);
            // line 164
            echo "                            </div>
                    ";
        } elseif (($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "ofertas")) {
            // line 165
            echo " <!-- sección ofertas -->               
                            <div class=\"ofertas\">
                                ";
            // line 167
            $this->displayBlock('ofertas', $context, $blocks);
            // line 169
            echo "                            </div>
                    
                    ";
        } else {
            // line 171
            echo "                    
                            ";
            // line 172
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "homepage")) {
                // line 173
                echo "                                <div class=\"home-col-left\">
                            ";
            } else {
                // line 175
                echo "                                <div class=\"col-left\">
                            ";
            }
            // line 177
            echo "                            
                            ";
            // line 178
            $this->displayBlock('col_left', $context, $blocks);
            // line 181
            echo "                            
                                </div>


                            ";
            // line 185
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            if (($this->getAttribute($this->getAttribute($_app_, "request"), "get", array(0 => "_route"), "method") == "homepage")) {
                // line 186
                echo "                                    <div class=\"home-col-right\">
                            ";
            } else {
                // line 188
                echo "                                    <div class=\"col-right\">
                            ";
            }
            // line 190
            echo "                                    
                            ";
            // line 191
            $this->env->loadTemplate("VaxFrontBundle:Page:slide-ofertas.html.twig")->display($context);
            // line 192
            echo "                                    </div>
                    ";
        }
        // line 194
        echo "                    

                ";
    }

    // line 162
    public function block_contacto($context, array $blocks = array())
    {
        // line 163
        echo "                                ";
    }

    // line 167
    public function block_ofertas($context, array $blocks = array())
    {
        // line 168
        echo "                                ";
    }

    // line 178
    public function block_col_left($context, array $blocks = array())
    {
        // line 179
        echo "                                esto esta en la base
                            ";
    }

    public function getTemplateName()
    {
        return "VaxFrontBundle:Page:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  553 => 179,  550 => 178,  546 => 168,  543 => 167,  539 => 163,  536 => 162,  530 => 194,  526 => 192,  524 => 191,  521 => 190,  517 => 188,  513 => 186,  510 => 185,  504 => 181,  502 => 178,  499 => 177,  495 => 175,  491 => 173,  488 => 172,  485 => 171,  480 => 169,  478 => 167,  474 => 165,  470 => 164,  468 => 162,  462 => 160,  459 => 159,  456 => 158,  451 => 136,  443 => 131,  436 => 130,  432 => 129,  425 => 128,  421 => 127,  414 => 126,  410 => 125,  403 => 124,  399 => 123,  392 => 122,  388 => 121,  381 => 120,  376 => 117,  373 => 110,  364 => 103,  356 => 98,  349 => 97,  345 => 96,  338 => 95,  333 => 92,  330 => 90,  324 => 88,  315 => 82,  308 => 81,  304 => 80,  297 => 79,  293 => 78,  286 => 77,  282 => 76,  275 => 75,  271 => 74,  266 => 73,  263 => 68,  259 => 67,  254 => 66,  251 => 65,  247 => 64,  240 => 63,  232 => 59,  227 => 153,  217 => 148,  211 => 147,  205 => 146,  199 => 145,  193 => 144,  188 => 141,  185 => 140,  180 => 137,  178 => 88,  175 => 87,  173 => 59,  167 => 56,  163 => 54,  160 => 53,  150 => 29,  146 => 28,  142 => 27,  138 => 26,  135 => 25,  132 => 24,  126 => 20,  122 => 19,  117 => 17,  113 => 16,  108 => 15,  105 => 14,  100 => 9,  97 => 8,  91 => 204,  89 => 203,  81 => 197,  79 => 158,  73 => 154,  71 => 53,  51 => 35,  49 => 24,  45 => 22,  43 => 14,  36 => 8,  53 => 22,  38 => 11,  35 => 8,  30 => 4,  27 => 1,);
    }
}
