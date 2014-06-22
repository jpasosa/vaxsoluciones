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
            <!--<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/contacto/img_contacto.jpg"), "html", null, true);
        echo "\" alt=\"atención telefónica\"  width=\"160\" height=\"150\" /> -->
            Podés contactarnos, de Lunes a Viernes de 15hs a 20hs, también vía e-mail o utilizando el siguiente formulario de contacto.
        </div>
        <div class=\"box-subtitles\"> <!-- telefono -->
            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/contacto/tel.jpg"), "html", null, true);
        echo "\" alt=\"\"  width=\"30\" height=\"30\" />
            <h3 class=\"title\"> TELÉFONO </h3>
            <div class=\"dato\"> (5411) 4585.4041 </div>
        </div>
        <div class=\"box-subtitles\"> <!-- celular -->
            <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/contacto/celular.jpg"), "html", null, true);
        echo "\" alt=\"\"  width=\"30\" height=\"30\" />
            <h3 class=\"title\"> CELULAR </h3>
            <div class=\"dato\"> (15) 5497.2228 </div>
        </div>
        <div class=\"box-subtitles\"> <!-- email -->
            <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/contacto/email-icono.jpg"), "html", null, true);
        echo "\" alt=\"\"  width=\"30\" height=\"30\" />
            <h3 class=\"title\"> E-MAIL </h3>
            <div class=\"dato fine\"> info@vaxsoluciones.com.ar </div>
        </div>


    </div>

    <div class=\"right\">
        <div class=\"box-form\">
            ";
        // line 36
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "hasFlash", array(0 => "enviado"), "method")) {
            // line 37
            echo "                <div class=\"flash-enviado\">
                    ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "enviado"), "method"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 41
        echo "
            <form action=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contacto"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"contact-form\">
                
                <div class=\"izq\">
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
                    
                    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "name"), 'row', array("label" => "Nombre y Apellido"));
        echo "
                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'row');
        echo "                    
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "subject"), 'row', array("label" => "Título"));
        echo "
                    
                </div>

                <div class=\"der\">
                    ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "body"), 'row', array("label" => "Mensaje"));
        echo "
                    ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
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
        return array (  127 => 55,  123 => 54,  115 => 49,  111 => 48,  107 => 47,  102 => 45,  94 => 42,  91 => 41,  85 => 38,  82 => 37,  80 => 36,  67 => 26,  59 => 21,  51 => 16,  44 => 12,  38 => 8,  35 => 7,  30 => 4,  27 => 3,);
    }
}
