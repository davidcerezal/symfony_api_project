<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_1de3a3c7a2aadc3df2844b0bc5d1a8b1a76d72a15ba59228bbba26c54101e230 extends Twig_Template
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
        $__internal_f67bdf71e4598d8cc450a41921af0db2518ed94718518cb9e996795666314bd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f67bdf71e4598d8cc450a41921af0db2518ed94718518cb9e996795666314bd1->enter($__internal_f67bdf71e4598d8cc450a41921af0db2518ed94718518cb9e996795666314bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_1bfd716d3434b5f6822026c4326273f0af1f085b6dbdd45d2bfe78aabb54b2c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bfd716d3434b5f6822026c4326273f0af1f085b6dbdd45d2bfe78aabb54b2c2->enter($__internal_1bfd716d3434b5f6822026c4326273f0af1f085b6dbdd45d2bfe78aabb54b2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f67bdf71e4598d8cc450a41921af0db2518ed94718518cb9e996795666314bd1->leave($__internal_f67bdf71e4598d8cc450a41921af0db2518ed94718518cb9e996795666314bd1_prof);

        
        $__internal_1bfd716d3434b5f6822026c4326273f0af1f085b6dbdd45d2bfe78aabb54b2c2->leave($__internal_1bfd716d3434b5f6822026c4326273f0af1f085b6dbdd45d2bfe78aabb54b2c2_prof);

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
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\symfonyprojects\\symfony_api_project\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
