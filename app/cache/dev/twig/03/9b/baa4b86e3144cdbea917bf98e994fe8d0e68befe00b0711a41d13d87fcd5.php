<?php

/* EnsJobeetBundle:Pages:about.html.twig */
class __TwigTemplate_039bbaa4b86e3144cdbea917bf98e994fe8d0e68befe00b0711a41d13d87fcd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EnsJobeetBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsJobeetBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "About";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <header>
        <h1>About symblog</h1>
    </header>
    <article>
        <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit
        amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.
        Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue
        urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida
        tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas
        condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis
        vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a
        lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
        posuere cubilia Curae.</p>
    </article>
";
    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Pages:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 53,  161 => 43,  150 => 35,  124 => 23,  76 => 41,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 48,  140 => 55,  132 => 26,  128 => 25,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 6,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 7,  94 => 53,  89 => 50,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 47,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 15,  31 => 5,  28 => 1,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 47,  163 => 62,  158 => 67,  156 => 40,  151 => 63,  142 => 59,  138 => 54,  136 => 27,  121 => 22,  117 => 44,  105 => 40,  91 => 27,  62 => 34,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 13,  111 => 11,  108 => 10,  101 => 32,  98 => 31,  96 => 54,  83 => 25,  74 => 40,  66 => 35,  55 => 22,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 6,  32 => 4,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 34,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 44,  80 => 43,  73 => 19,  64 => 17,  60 => 6,  57 => 31,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 10,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
