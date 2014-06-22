<?php

/* VaxFrontBundle:Page:contact.html.twig */
class __TwigTemplate_77dd75ca6d4c3b4c7fd360cd8e18bbc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VaxFrontBundle:Page:base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contacto' => array($this, 'block_contacto'),
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
    public function block_contacto($context, array $blocks = array())
    {
        // line 8
        echo "    
    <div class=\"left\">
        <h2 class=\"title\"> CONTACTO </h2>
        <div class=\"description\">
            Podés contactarnos, de Lunes a Viernes de 15hs a 20hs, acercarte a
            <span style=\"font-weight: bold\"> Av. San Martín 2683 </span>
            , también vía e-mail o utilizando el siguiente formulario de contacto.
        </div>
        <iframe width=\"270\" height=\"168\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com.ar/maps?f=q&amp;source=s_q&amp;hl=es&amp;q=Av+San+Mart%C3%ADn+2683,+Paternal,+Buenos+Aires,+Ciudad+Aut%C3%B3noma+de+Buenos+Aires&amp;aq=&amp;sll=-37.151895,-60.029182&amp;sspn=9.521337,19.753418&amp;t=m&amp;ie=UTF8&amp;geocode=FXL_7_0dGOqD_A&amp;split=0&amp;hq=&amp;hnear=Av+San+Mart%C3%ADn+2683,+Paternal,+Buenos+Aires&amp;ll=-34.603117,-58.463745&amp;spn=0.011869,0.023088&amp;z=14&amp;iwloc=A&amp;output=embed\"></iframe><br /><small><a href=\"https://maps.google.com.ar/maps?f=q&amp;source=embed&amp;hl=es&amp;q=Av+San+Mart%C3%ADn+2683,+Paternal,+Buenos+Aires,+Ciudad+Aut%C3%B3noma+de+Buenos+Aires&amp;aq=&amp;sll=-37.151895,-60.029182&amp;sspn=9.521337,19.753418&amp;t=m&amp;ie=UTF8&amp;geocode=FXL_7_0dGOqD_A&amp;split=0&amp;hq=&amp;hnear=Av+San+Mart%C3%ADn+2683,+Paternal,+Buenos+Aires&amp;ll=-34.603117,-58.463745&amp;spn=0.011869,0.023088&amp;z=14&amp;iwloc=A\" style=\"color:#AEAEAE;text-align:left\">Ver mapa más grande</a></small>
        <!-- <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/contacto/mapa.jpg"), "html", null, true);
        echo "\" alt=\"mapa direccion\"  width=\"270\" height=\"168\" /> -->
        <div class=\"txt-pie-mapa\">
            Te acercan 109, 24, 146, 24, 57, 34, 166 Metrobus
        </div>
        <div class=\"box-subtitles first\"> <!-- telefono -->
            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/contacto/tel.jpg"), "html", null, true);
        echo "\" alt=\"\"  width=\"30\" height=\"30\" />
            <h3 class=\"title\"> TELÉFONO </h3>
            <div class=\"dato\"> (5411) 4585.4041 </div>
        </div>
        <div class=\"box-subtitles\"> <!-- celular -->
            <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/contacto/celular.jpg"), "html", null, true);
        echo "\" alt=\"\"  width=\"30\" height=\"30\" />
            <h3 class=\"title\"> CELULAR </h3>
            <div class=\"dato\"> (15) 5497.2228 </div>
        </div>
        <div class=\"box-subtitles\"> <!-- email -->
            <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/contacto/email-icono.jpg"), "html", null, true);
        echo "\" alt=\"\"  width=\"30\" height=\"30\" />
            <h3 class=\"title\"> E-MAIL </h3>
            <div class=\"dato fine\"> info@vaxsoluciones.com.ar </div>
        </div>


    </div>

    <div class=\"right\">
        <div class=\"box-form\">
            ";
        // line 42
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ($this->getAttribute($this->getAttribute($_app_, "session"), "hasFlash", array(0 => "enviado"), "method")) {
            // line 43
            echo "                <div class=\"flash-enviado\">
                    ";
            // line 44
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "session"), "flash", array(0 => "enviado"), "method"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 47
        echo "
            <form action=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacto"), "html", null, true);
        echo "\" method=\"post\" ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'enctype');
        echo " class=\"contact-form\">
                
                <div class=\"izq\">
                    ";
        // line 51
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
        echo "
                    
                    ";
        // line 53
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "name"), 'row', array("label" => "Nombre y Apellido"));
        echo "
                    ";
        // line 54
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "email"), 'row');
        echo "                    
                    ";
        // line 55
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "subject"), 'row', array("label" => "Título"));
        echo "
                    
                </div>

                <div class=\"der\">
                    ";
        // line 60
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "body"), 'row', array("label" => "Mensaje"));
        echo "
                    ";
        // line 61
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "
                    <input class=\"btn-submit\" type=\"submit\" value=\"\" />
                </div>

            </form>
        </div>
        <div class=\"bottons\">
            <a class=\"msn\" href=\"#\" title=\"Agreganos por soporte: vilat_ale@hotmail.com\">

            </a>
            <a class=\"facebook\" href=\"http://www.facebook.com/pages/VAXSOLUCIONES/181271151934516?fref=ts\"
                    target=\"_blank\" >

            </a>
        </div>
    </div>

<script>
    \$(window).load(function() {
        \$(\"input#contact_email\").css('oninvalid', 'this.setCustomValidity(\"Witinnovation\")');
    });
</script>




";
    }

    public function getTemplateName()
    {
        return "VaxFrontBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 61,  136 => 60,  127 => 55,  122 => 54,  117 => 53,  111 => 51,  102 => 48,  99 => 47,  92 => 44,  89 => 43,  86 => 42,  73 => 32,  65 => 27,  57 => 22,  49 => 17,  38 => 8,  35 => 7,  30 => 4,  27 => 3,);
    }
}
