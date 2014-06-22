<?php

/* VaxFrontBundle:Page:homepage.html.twig */
class __TwigTemplate_e8a13a24085ded1815b4601707b5a1da extends Twig_Template
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

    // line 8
    public function block_col_left($context, array $blocks = array())
    {
        // line 9
        echo "    <h2 class=\"title\">
      <p class=\"up\"> Bienvenido a </p>
      <p class=\"down\"> Vaxsoluciones </p>
    </h2>

    <ul class=\"services\">
      <li> <span> • </span> Proveemos soluciones tecnológicas. </li>
      <li> <span> • </span> Contamos con servicio técnico especializado. </li>
      <li> <span> • </span> Continua innovación de métodos y soluciones. </li>
      <li> <span> • </span> Más de ocho años brindando nuestro servicio. </li>
    </ul>

    <div class=\"conocer-mas\">
      <a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nosotros"), "html", null, true);
        echo "\"> CONOCER MAS SOBRE NOSOTROS </a>
    </div>

";
    }

    public function getTemplateName()
    {
        return "VaxFrontBundle:Page:homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 22,  38 => 9,  35 => 8,  30 => 4,  27 => 3,);
    }
}
