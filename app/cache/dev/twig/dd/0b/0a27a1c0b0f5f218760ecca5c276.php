<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_dd0b0a27a1c0b0f5f218760ecca5c276 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("WebProfilerBundle:Profiler:base_js.html.twig")->display($context);
        // line 3
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        Sfjs.load(
            'sfwdt";
        // line 6
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "',
            '";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  33 => 7,  29 => 6,  24 => 3,  22 => 2,  216 => 121,  205 => 113,  196 => 107,  188 => 102,  172 => 92,  164 => 87,  156 => 82,  148 => 77,  140 => 72,  124 => 62,  116 => 57,  92 => 42,  84 => 37,  76 => 32,  68 => 27,  60 => 22,  52 => 17,  44 => 12,  23 => 130,  21 => 2,  18 => 1,  95 => 59,  78 => 45,  56 => 29,  32 => 11,  28 => 10,  17 => 1,  526 => 178,  523 => 177,  519 => 167,  516 => 166,  512 => 162,  509 => 161,  503 => 193,  499 => 191,  497 => 190,  494 => 189,  490 => 187,  486 => 185,  484 => 184,  478 => 180,  476 => 177,  473 => 176,  469 => 174,  465 => 172,  463 => 171,  460 => 170,  455 => 168,  453 => 166,  449 => 164,  445 => 163,  443 => 161,  438 => 159,  435 => 158,  432 => 157,  427 => 136,  419 => 131,  413 => 130,  409 => 129,  403 => 128,  399 => 127,  393 => 126,  389 => 125,  383 => 124,  379 => 123,  373 => 122,  369 => 121,  363 => 120,  358 => 117,  356 => 110,  347 => 103,  339 => 98,  333 => 97,  329 => 96,  323 => 95,  318 => 92,  316 => 90,  310 => 88,  301 => 82,  295 => 81,  291 => 80,  285 => 79,  281 => 78,  275 => 77,  271 => 76,  265 => 75,  261 => 74,  256 => 73,  254 => 68,  250 => 67,  245 => 66,  243 => 65,  239 => 64,  233 => 63,  225 => 59,  220 => 152,  210 => 147,  204 => 146,  198 => 145,  192 => 144,  187 => 141,  185 => 140,  180 => 97,  178 => 88,  175 => 87,  173 => 59,  167 => 56,  163 => 54,  160 => 53,  150 => 29,  146 => 28,  142 => 27,  138 => 26,  135 => 25,  132 => 67,  126 => 20,  122 => 77,  117 => 75,  113 => 16,  108 => 52,  105 => 14,  100 => 47,  97 => 8,  91 => 203,  89 => 202,  81 => 196,  79 => 157,  73 => 43,  71 => 53,  51 => 27,  49 => 24,  45 => 22,  43 => 14,  36 => 7,  53 => 22,  38 => 11,  35 => 8,  30 => 3,  27 => 2,);
    }
}
