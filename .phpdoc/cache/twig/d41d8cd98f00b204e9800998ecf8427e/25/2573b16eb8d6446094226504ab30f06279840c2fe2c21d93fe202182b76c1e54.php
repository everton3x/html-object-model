<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /graphs/class.html.twig */
class __TwigTemplate_d1e633bc66d93c5e9fad7efc439c2cac74762adfbec676d0834621817f653dd2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html.twig", "/graphs/class.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["css/jquery.iviewer.css"]), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"all\"/>
    <style>
        #viewer {
            position: relative;
            width: 100%;
        }
        .wrapper {
            overflow: hidden;
        }
    </style>
";
    }

    // line 16
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["js/jquery.mousewheel.js"]), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["js/jquery.iviewer.js"]), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
        \$(window).resize(function(){
            \$(\"#viewer\").height(\$(window).height() - 100);
        });

        \$(document).ready(function() {
            \$(\"#viewer\").iviewer({src: '";
        // line 25
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), ["graphs/classes.svg"]), "html", null, true);
        echo "', zoom_animation: false});
            \$('#viewer img').bind('dragstart', function(event){
                event.preventDefault();
            });
            \$(window).resize();
        });
    </script>
";
    }

    // line 34
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        echo "    <div class=\"row-fluid\">
        <div class=\"span12\">
            <div class=\"wrapper\">
                <div id=\"viewer\" class=\"viewer\"></div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "/graphs/class.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 35,  99 => 34,  87 => 25,  77 => 18,  72 => 17,  68 => 16,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/graphs/class.html.twig", "/graphs/class.html.twig");
    }
}
