<?php

/* layout.html */
class __TwigTemplate_d28047b1c606875ce444d820b7af40e9e8996e4d66127ef187c5407cc0e64e95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
\t<title></title>
\t<!-- jquery -->
\t<script src=\"https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js\"></script>
\t<!-- tether -->
\t<link href=\"https://cdn.bootcss.com/tether/1.4.0/css/tether.min.css\" rel=\"stylesheet\">
\t<script src=\"https://cdn.bootcss.com/tether/1.4.0/js/tether.min.js\"></script>
\t<!-- bootstrap -->
\t<link href=\"https://cdn.bootcss.com/bootstrap/4.0.0-alpha.6/css/bootstrap-grid.min.css\" rel=\"stylesheet\">
\t<script src=\"https://cdn.bootcss.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\"></script>
\t<!-- vue.js -->
\t<script src=\"https://cdn.bootcss.com/vue/2.3.4/vue.common.js\"></script>
\t<!-- font-awsome -->
\t<link href=\"https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css\" rel=\"stylesheet\">
\t<!-- font -->
\t<link href=\"https://fonts.googleapis.com/css?family=Noto+Sans\" rel=\"stylesheet\">
</head>
<body>
\t<style type=\"text/css\">
\t\thead body {height: 100%}
\t\tbody {font-family: 'Noto Sans', sans-serif;}
\t</style>
\t<div class='header'></div>
\t<div class='container-fluid'>
\t\t";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "\t</div>
\t<div class='footer'></div>
</body>
</html>";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "\t\t";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  59 => 27,  56 => 26,  49 => 28,  47 => 26,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head>
\t<title></title>
\t<!-- jquery -->
\t<script src=\"https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js\"></script>
\t<!-- tether -->
\t<link href=\"https://cdn.bootcss.com/tether/1.4.0/css/tether.min.css\" rel=\"stylesheet\">
\t<script src=\"https://cdn.bootcss.com/tether/1.4.0/js/tether.min.js\"></script>
\t<!-- bootstrap -->
\t<link href=\"https://cdn.bootcss.com/bootstrap/4.0.0-alpha.6/css/bootstrap-grid.min.css\" rel=\"stylesheet\">
\t<script src=\"https://cdn.bootcss.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js\"></script>
\t<!-- vue.js -->
\t<script src=\"https://cdn.bootcss.com/vue/2.3.4/vue.common.js\"></script>
\t<!-- font-awsome -->
\t<link href=\"https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css\" rel=\"stylesheet\">
\t<!-- font -->
\t<link href=\"https://fonts.googleapis.com/css?family=Noto+Sans\" rel=\"stylesheet\">
</head>
<body>
\t<style type=\"text/css\">
\t\thead body {height: 100%}
\t\tbody {font-family: 'Noto Sans', sans-serif;}
\t</style>
\t<div class='header'></div>
\t<div class='container-fluid'>
\t\t{% block content %}
\t\t{% endblock %}
\t</div>
\t<div class='footer'></div>
</body>
</html>", "layout.html", "/home/berryxuxu/vendor/imnaifu/baobao/app/view/layout.html");
    }
}
