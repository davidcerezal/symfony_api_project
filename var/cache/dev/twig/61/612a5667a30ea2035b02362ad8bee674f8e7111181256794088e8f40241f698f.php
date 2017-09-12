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
        $__internal_4b17efeebf76d2fc85c2fabf13fb9318446ee9a31350fbb3f9251a3dcc77b587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b17efeebf76d2fc85c2fabf13fb9318446ee9a31350fbb3f9251a3dcc77b587->enter($__internal_4b17efeebf76d2fc85c2fabf13fb9318446ee9a31350fbb3f9251a3dcc77b587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_2b5bbdc3b8ce5a80ba6817ec924999748018cc92df0b8a03a1fdebf3353981ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b5bbdc3b8ce5a80ba6817ec924999748018cc92df0b8a03a1fdebf3353981ac->enter($__internal_2b5bbdc3b8ce5a80ba6817ec924999748018cc92df0b8a03a1fdebf3353981ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4b17efeebf76d2fc85c2fabf13fb9318446ee9a31350fbb3f9251a3dcc77b587->leave($__internal_4b17efeebf76d2fc85c2fabf13fb9318446ee9a31350fbb3f9251a3dcc77b587_prof);

        
        $__internal_2b5bbdc3b8ce5a80ba6817ec924999748018cc92df0b8a03a1fdebf3353981ac->leave($__internal_2b5bbdc3b8ce5a80ba6817ec924999748018cc92df0b8a03a1fdebf3353981ac_prof);

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
", "@Twig/Exception/exception.json.twig", "/Applications/XAMPP/xamppfiles/symphonyProjects/api_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
