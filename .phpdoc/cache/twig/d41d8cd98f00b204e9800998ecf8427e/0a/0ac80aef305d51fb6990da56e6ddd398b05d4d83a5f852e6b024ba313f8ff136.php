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

/* elements/namespaces.sidebar.html.twig */
class __TwigTemplate_0bab323f4194a2005df941338699298a359108b3d5ce5f54f2010fd384c58d1b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'sidebarNamespaces' => [$this, 'block_sidebarNamespaces'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('sidebarNamespaces', $context, $blocks);
    }

    public function block_sidebarNamespaces($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["code"] = twig_random($this->env);
        // line 3
        echo "    <div class=\"accordion\" style=\"margin-bottom: 0\">
        <div class=\"accordion-group\">
            <div class=\"accordion-heading\">
                ";
        // line 6
        if (((((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["namespace"] ?? null), "children", [], "any", false, false, false, 6)) > 0) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["namespace"] ?? null), "classes", [], "any", false, false, false, 6)) > 0)) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["namespace"] ?? null), "interfaces", [], "any", false, false, false, 6)) > 0)) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["namespace"] ?? null), "traits", [], "any", false, false, false, 6)) > 0))) {
            // line 7
            echo "                    <a class=\"accordion-toggle ";
            echo (((twig_get_attribute($this->env, $this->source, ($context["namespace"] ?? null), "name", [], "any", false, false, false, 7) != "\\")) ? ("collapsed") : (""));
            echo "\" data-toggle=\"collapse\" data-target=\"#namespace-";
            echo twig_escape_filter($this->env, ($context["code"] ?? null), "html", null, true);
            echo "\"></a>
                ";
        }
        // line 9
        echo "                <a href=\"";
        echo call_user_func_array($this->env->getFilter('route')->getCallable(), [($context["namespace"] ?? null), "url"]);
        echo "\" style=\"margin-left: 30px; padding-left: 0\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["namespace"] ?? null), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "</a>
            </div>
            <div id=\"namespace-";
        // line 11
        echo twig_escape_filter($this->env, ($context["code"] ?? null), "html", null, true);
        echo "\" class=\"accordion-body collapse ";
        echo (((twig_get_attribute($this->env, $this->source, ($context["namespace"] ?? null), "name", [], "any", false, false, false, 11) == "\\")) ? ("in") : (""));
        echo "\">
                <div class=\"accordion-inner\">

                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFilter('sort_asc')->getCallable(), ["asc", twig_get_attribute($this->env, $this->source, $context["namespace"], "children", [], "any", false, false, false, 14)]));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["namespace"]) {
            // line 15
            echo "                        ";
            $this->displayBlock("sidebarNamespaces", $context, $blocks);
            echo "
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['namespace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
                    <ul>
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFilter('sort_asc')->getCallable(), ["asc", twig_get_attribute($this->env, $this->source, ($context["namespace"] ?? null), "interfaces", [], "any", false, false, false, 19)]));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 20
            echo "                            <li class=\"interface\">";
            echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["class"], "class:short"]);
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFilter('sort_asc')->getCallable(), ["asc", twig_get_attribute($this->env, $this->source, ($context["namespace"] ?? null), "traits", [], "any", false, false, false, 22)]));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 23
            echo "                            <li class=\"trait\">";
            echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["class"], "class:short"]);
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(call_user_func_array($this->env->getFilter('sort_asc')->getCallable(), ["asc", twig_get_attribute($this->env, $this->source, ($context["namespace"] ?? null), "classes", [], "any", false, false, false, 25)]));
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 26
            echo "                            <li class=\"class\">";
            echo call_user_func_array($this->env->getFilter('route')->getCallable(), [$context["class"], "class:short"]);
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                    </ul>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "elements/namespaces.sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  158 => 28,  149 => 26,  144 => 25,  135 => 23,  130 => 22,  121 => 20,  117 => 19,  113 => 17,  96 => 15,  79 => 14,  71 => 11,  63 => 9,  55 => 7,  53 => 6,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "elements/namespaces.sidebar.html.twig", "elements/namespaces.sidebar.html.twig");
    }
}
