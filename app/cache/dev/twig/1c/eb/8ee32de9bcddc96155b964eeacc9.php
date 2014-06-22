<?php

/* VaxFrontBundle:Page:clients.html.twig */
class __TwigTemplate_1ceb8ee32de9bcddc96155b964eeacc9 extends Twig_Template
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
        <h2 class=\"section-title\"> NUESTROS CLIENTES</h2>
        <div class=\"client-box\">
          <a href=\"http://www.armytech.com.ar/\" target=\"_blank\">
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/nuestros-clientes/logo_army.gif"), "html", null, true);
        echo "\" alt=\"army tech\" />
          </a>
        </div>
        <div class=\"client-box\">
          <a href=\"http://www.intcomex.com/\" target=\"_blank\">
            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/nuestros-clientes/logo_incomex.gif"), "html", null, true);
        echo "\" alt=\"intcomex\" />
          </a>
        </div>
        <div class=\"client-box\">
          <a href=\"http://www.beseder.com.ar/\" target=\"_blank\">
            <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/nuestros-clientes/logo_beseder.gif"), "html", null, true);
        echo "\" alt=\"beseder\" />
          </a>
        </div>
        <div class=\"client-box\">
          <a href=\"http://www.criter.com.ar/\" target=\"_blank\">
            <img class=\"short-margin\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/nuestros-clientes/logo_criterios.gif"), "html", null, true);
        echo "\" alt=\"criter\" />
          </a>
        </div>
        <div class=\"client-box\">
          <a href=\"http://gyainformatica.com.ar/\" target=\"_blank\">
            <img class=\"short-margin\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/nuestros-clientes/logo_gya.gif"), "html", null, true);
        echo "\" alt=\"gya informatica\" />
          </a>
        </div>
        <div class=\"client-box\">
          <a href=\"http://www.nucleodistribuidora.com/\" target=\"_blank\">
            <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/nuestros-clientes/logo_nucleo.gif"), "html", null, true);
        echo "\" alt=\"nucleo distribuidora\" />
          </a>
        </div>
        <div class=\"client-box\">
          <a href=\"http://www.pascalonline.com.ar/\" target=\"_blank\">
            <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/nuestros-clientes/logo_pascal.gif"), "html", null, true);
        echo "\" alt=\"pascal\" />
          </a>
        </div>
        <div class=\"client-box\">
          <a href=\"http://www.luisacuadrado.com/\" target=\"_blank\">
            <img class=\"short-margin\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/nuestros-clientes/logo_cuadrado.gif"), "html", null, true);
        echo "\" alt=\"luis a cuadrado\" />
          </a>
        </div>
        <div class=\"client-box\">
          <a href=\"http://www.tranders.com.ar/\" target=\"_blank\">
            <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/nuestros-clientes/logo_tranders.gif"), "html", null, true);
        echo "\" alt=\"tranders\" />
          </a>
        </div>
        <div class=\"client-box\">
          <a href=\"http://wirelesstigre.com/\" target=\"_blank\">
            <img class=\"short-margin\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/nuestros-clientes/logo_wirelessT.jpg"), "html", null, true);
        echo "\" alt=\"wireless tigre\" width=\"95\" height=\"60\" />
          </a>
        </div>
        <div class=\"client-box\">
          <a href=\"http://www.connectis.com.ar/\" target=\"_blank\">
            <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/nuestros-clientes/connectis.gif"), "html", null, true);
        echo "\" alt=\"connectis\" />
          </a>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "VaxFrontBundle:Page:clients.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 62,  116 => 57,  108 => 52,  100 => 47,  92 => 42,  84 => 37,  76 => 32,  68 => 27,  60 => 22,  52 => 17,  44 => 12,  38 => 8,  35 => 7,  30 => 4,  27 => 3,);
    }
}
