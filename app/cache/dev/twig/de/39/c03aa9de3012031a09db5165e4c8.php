<?php

/* VaxFrontBundle:Page:deals.html.twig */
class __TwigTemplate_de39c03aa9de3012031a09db5165e4c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VaxFrontBundle:Page:base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ofertas' => array($this, 'block_ofertas'),
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
    public function block_ofertas($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"left\">
        <h2 class=\"title\"> OFERTAS</h2>
        <div class=\"texto\">
            Continuo stock de motherboards alta gama y discontinuo.
        </div>
        <div class=\"texto\">
            Amplio surtido de routers.
        </div>
    </div>

    <div class=\"right\">
        

        <div class=\"oferta-box\">
            <div class=\"up-box\">
                <div class=\"title\"> Mother BIOSTAR</div>
                <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/ofertas/productos/mother-biostar-n68s3.jpg"), "html", null, true);
        echo "\" alt=\"atención telefónica\"  width=\"80\" height=\"80\" />
            </div>
            <div class=\"description\"> n68s3</div>
            <div class=\"price\"> U\$D47,00</div>
            <div class=\"warranty\"> 6 meses de garantía </div>
        </div>

        <div class=\"oferta-box\">
            <div class=\"up-box\">
                <div class=\"title\"> Router Inálambrico TP-LINK</div>
                <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/ofertas/productos/router-wifi-TL-WR740N.jpg"), "html", null, true);
        echo "\" alt=\"atención telefónica\"  width=\"80\" height=\"80\" />
            </div>
            <div class=\"description\"> WR740N</div>
            <div class=\"price\"> U\$D35,00 </div>
            <div class=\"warranty\"> 6 meses de garantía </div>
        </div>
        
        <div class=\"oferta-box\">
            <div class=\"up-box\">
                <div class=\"title\"> Mother MSI </div>
                <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/ofertas/productos/mother-msi-880gm-e35.jpg"), "html", null, true);
        echo "\" alt=\"atención telefónica\"  width=\"80\" height=\"80\" />
            </div>
            <div class=\"description\"> 880gm e35</div>
            <div class=\"price\"> U\$D90,00</div>
            <div class=\"warranty\"> 6 meses de garantía </div>
        </div>
        
        <div class=\"oferta-box\">
            <div class=\"up-box\">
                <div class=\"title\"> Mother MSI </div>
                <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/ofertas/productos/mother-msi-880gm-e41.jpg"), "html", null, true);
        echo "\" alt=\"mother-msi-880gm-e41\"  width=\"80\" height=\"80\" />
            </div>
            <div class=\"description\"> 880gm e41</div>
            <div class=\"price\"> U\$D80,00 </div>
            <div class=\"warranty\"> 6 meses de garantía </div>
        </div>
        
        

        

    </div>

";
    }

    public function getTemplateName()
    {
        return "VaxFrontBundle:Page:deals.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 54,  82 => 44,  69 => 34,  56 => 24,  38 => 8,  35 => 7,  30 => 4,  27 => 3,);
    }
}
