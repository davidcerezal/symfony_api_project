<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_1134523be48537ccc35b3c16fde151786e4e7be1d6fa8eb59cbcc888d5382343 extends Twig_Template
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
        $__internal_9ac04b3f95fcf183344684b045f6696a46f1d568120f6ca10b5742659218a860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ac04b3f95fcf183344684b045f6696a46f1d568120f6ca10b5742659218a860->enter($__internal_9ac04b3f95fcf183344684b045f6696a46f1d568120f6ca10b5742659218a860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_5e9eca03e792ba088331d55d78a3f7777de5626e3861564c2d2ca742dc887cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9eca03e792ba088331d55d78a3f7777de5626e3861564c2d2ca742dc887cb8->enter($__internal_5e9eca03e792ba088331d55d78a3f7777de5626e3861564c2d2ca742dc887cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9ac04b3f95fcf183344684b045f6696a46f1d568120f6ca10b5742659218a860->leave($__internal_9ac04b3f95fcf183344684b045f6696a46f1d568120f6ca10b5742659218a860_prof);

        
        $__internal_5e9eca03e792ba088331d55d78a3f7777de5626e3861564c2d2ca742dc887cb8->leave($__internal_5e9eca03e792ba088331d55d78a3f7777de5626e3861564c2d2ca742dc887cb8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/Applications/XAMPP/xamppfiles/symphonyProjects/symfony_api_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
