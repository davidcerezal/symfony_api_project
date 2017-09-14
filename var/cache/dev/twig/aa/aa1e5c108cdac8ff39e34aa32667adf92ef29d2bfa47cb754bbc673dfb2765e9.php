<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_1a22e1b36f8481ffdffc896ef415fdfdf6a3d44c697379f09e625e8a602592fb extends Twig_Template
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
        $__internal_c20c9b7704859cdb20a6b0a8694892a4be8a257f22389b5cdf21f57b4505b231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c20c9b7704859cdb20a6b0a8694892a4be8a257f22389b5cdf21f57b4505b231->enter($__internal_c20c9b7704859cdb20a6b0a8694892a4be8a257f22389b5cdf21f57b4505b231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_86c9a15a7bfc2896a9b73c9cabf1f31c90b817583f65f5681919876b58e3cca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86c9a15a7bfc2896a9b73c9cabf1f31c90b817583f65f5681919876b58e3cca7->enter($__internal_86c9a15a7bfc2896a9b73c9cabf1f31c90b817583f65f5681919876b58e3cca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_c20c9b7704859cdb20a6b0a8694892a4be8a257f22389b5cdf21f57b4505b231->leave($__internal_c20c9b7704859cdb20a6b0a8694892a4be8a257f22389b5cdf21f57b4505b231_prof);

        
        $__internal_86c9a15a7bfc2896a9b73c9cabf1f31c90b817583f65f5681919876b58e3cca7->leave($__internal_86c9a15a7bfc2896a9b73c9cabf1f31c90b817583f65f5681919876b58e3cca7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\xampp\\symfonyprojects\\symfony_api_project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
