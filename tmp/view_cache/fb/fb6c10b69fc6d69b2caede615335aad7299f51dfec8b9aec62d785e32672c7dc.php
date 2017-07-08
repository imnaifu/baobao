<?php

/* home/main.html */
class __TwigTemplate_4488f35863c8f6ae57beaa3e2cbe39cc97506895f470387cd2ca430b7ff34753 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "home/main.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "
<style type=\"text/css\">
\t.center{
\t    margin: 0 auto;
\t    font-size: 80px
\t}
\t.top {height: 40%}
\t.bottom {height: 50%}
\t.full-height{ height: 100%;}
</style>

<div class='full-height'>
\t<div class='top'></div>
\t<div class=\"row\">
\t\t<span class='center'>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "value", array()), "html", null, true);
        echo "</span>
\t</div>
\t<div clas='bottom'></div>
</div>


";
    }

    public function getTemplateName()
    {
        return "home/main.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 17,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html\" %}
{% block content %}

<style type=\"text/css\">
\t.center{
\t    margin: 0 auto;
\t    font-size: 80px
\t}
\t.top {height: 40%}
\t.bottom {height: 50%}
\t.full-height{ height: 100%;}
</style>

<div class='full-height'>
\t<div class='top'></div>
\t<div class=\"row\">
\t\t<span class='center'>{{data.value}}</span>
\t</div>
\t<div clas='bottom'></div>
</div>


{% endblock %}
", "home/main.html", "C:\\xampp\\baobao\\app\\view\\home\\main.html");
    }
}
