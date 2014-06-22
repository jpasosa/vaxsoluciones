<?php

/* VaxFrontBundle:Page:warranty.html.twig */
class __TwigTemplate_1890c54d1442171404a4db6e6bc97a9c extends Twig_Template
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
        <h2 class=\"section-title\"> GARANTÍA</h2>
        <div class=\"box\">
            <div class=\"txt-left\">
                <p> Garantizamos nuestras reparaciones por un periodo de 6 meses en cualquier modelo de motherboards y notebooks.  </p>
                <p> Garantía escrita en todas las reparaciones de mothers y notebooks, garantía q se limita a la reparación efectuada. </p>
                <p> La garantía es sobre la falla reparada, no por nortbridge y southbridge.</p>
            </div>
            <img class=\"image-rigth active\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/vaxfront/images/servicios/garantia/warranty.jpg"), "html", null, true);
        echo "\" alt=\"garantia 6 meses\" width=\"160\" height=\"150\" />
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "VaxFrontBundle:Page:warranty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  38 => 8,  35 => 7,  30 => 4,  27 => 3,);
    }
}
