<?php

/* base.html.twig */
class __TwigTemplate_8720b8f76557d8359f4c18b2e87da485b1154c030e3267e2f7d87103e3456f20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29f52c6cf0973de56f392e5353e861bc474d8df450de1081c82ab6d05794e4c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29f52c6cf0973de56f392e5353e861bc474d8df450de1081c82ab6d05794e4c7->enter($__internal_29f52c6cf0973de56f392e5353e861bc474d8df450de1081c82ab6d05794e4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_03412c4e91f68777b7120f39a8c2e3d81d6171d1a794aa943b7af42b6fee97a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03412c4e91f68777b7120f39a8c2e3d81d6171d1a794aa943b7af42b6fee97a3->enter($__internal_03412c4e91f68777b7120f39a8c2e3d81d6171d1a794aa943b7af42b6fee97a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_29f52c6cf0973de56f392e5353e861bc474d8df450de1081c82ab6d05794e4c7->leave($__internal_29f52c6cf0973de56f392e5353e861bc474d8df450de1081c82ab6d05794e4c7_prof);

        
        $__internal_03412c4e91f68777b7120f39a8c2e3d81d6171d1a794aa943b7af42b6fee97a3->leave($__internal_03412c4e91f68777b7120f39a8c2e3d81d6171d1a794aa943b7af42b6fee97a3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfcee63b2e45b63332373584133e5a976cfb027e17e6fa13f168b52154fcc602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfcee63b2e45b63332373584133e5a976cfb027e17e6fa13f168b52154fcc602->enter($__internal_dfcee63b2e45b63332373584133e5a976cfb027e17e6fa13f168b52154fcc602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_29eafc11b39a44775ff3314b35ee43dd9cc253ec1d4d58c622480dfbc227ddb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29eafc11b39a44775ff3314b35ee43dd9cc253ec1d4d58c622480dfbc227ddb1->enter($__internal_29eafc11b39a44775ff3314b35ee43dd9cc253ec1d4d58c622480dfbc227ddb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_29eafc11b39a44775ff3314b35ee43dd9cc253ec1d4d58c622480dfbc227ddb1->leave($__internal_29eafc11b39a44775ff3314b35ee43dd9cc253ec1d4d58c622480dfbc227ddb1_prof);

        
        $__internal_dfcee63b2e45b63332373584133e5a976cfb027e17e6fa13f168b52154fcc602->leave($__internal_dfcee63b2e45b63332373584133e5a976cfb027e17e6fa13f168b52154fcc602_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e142aa054ac962e447dbe24c063ffda7a83cc8e64e1222cca4109c52084564b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e142aa054ac962e447dbe24c063ffda7a83cc8e64e1222cca4109c52084564b->enter($__internal_7e142aa054ac962e447dbe24c063ffda7a83cc8e64e1222cca4109c52084564b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c8fcba3a9afeca249d44938f14414a27662e619ba353bd8200418b3a5fc9e8bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8fcba3a9afeca249d44938f14414a27662e619ba353bd8200418b3a5fc9e8bb->enter($__internal_c8fcba3a9afeca249d44938f14414a27662e619ba353bd8200418b3a5fc9e8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c8fcba3a9afeca249d44938f14414a27662e619ba353bd8200418b3a5fc9e8bb->leave($__internal_c8fcba3a9afeca249d44938f14414a27662e619ba353bd8200418b3a5fc9e8bb_prof);

        
        $__internal_7e142aa054ac962e447dbe24c063ffda7a83cc8e64e1222cca4109c52084564b->leave($__internal_7e142aa054ac962e447dbe24c063ffda7a83cc8e64e1222cca4109c52084564b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_67e2666b87e935079488e73e72e17b3da4b776256e824f5fa35c3556180a3248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e2666b87e935079488e73e72e17b3da4b776256e824f5fa35c3556180a3248->enter($__internal_67e2666b87e935079488e73e72e17b3da4b776256e824f5fa35c3556180a3248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dd43247aacc28b43142121a2829bd83bebaf4e974a9a1149942fb89bfd3bb812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd43247aacc28b43142121a2829bd83bebaf4e974a9a1149942fb89bfd3bb812->enter($__internal_dd43247aacc28b43142121a2829bd83bebaf4e974a9a1149942fb89bfd3bb812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dd43247aacc28b43142121a2829bd83bebaf4e974a9a1149942fb89bfd3bb812->leave($__internal_dd43247aacc28b43142121a2829bd83bebaf4e974a9a1149942fb89bfd3bb812_prof);

        
        $__internal_67e2666b87e935079488e73e72e17b3da4b776256e824f5fa35c3556180a3248->leave($__internal_67e2666b87e935079488e73e72e17b3da4b776256e824f5fa35c3556180a3248_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c7f6f66c05e478bd79bd43093dce292951ad7c3137bdec0be710b0010c67e64a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7f6f66c05e478bd79bd43093dce292951ad7c3137bdec0be710b0010c67e64a->enter($__internal_c7f6f66c05e478bd79bd43093dce292951ad7c3137bdec0be710b0010c67e64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a764e8d2ea6e31dc20cf0de6a920319c3b3b02bc21fbfec7aabb9fd247ca0f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a764e8d2ea6e31dc20cf0de6a920319c3b3b02bc21fbfec7aabb9fd247ca0f0b->enter($__internal_a764e8d2ea6e31dc20cf0de6a920319c3b3b02bc21fbfec7aabb9fd247ca0f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a764e8d2ea6e31dc20cf0de6a920319c3b3b02bc21fbfec7aabb9fd247ca0f0b->leave($__internal_a764e8d2ea6e31dc20cf0de6a920319c3b3b02bc21fbfec7aabb9fd247ca0f0b_prof);

        
        $__internal_c7f6f66c05e478bd79bd43093dce292951ad7c3137bdec0be710b0010c67e64a->leave($__internal_c7f6f66c05e478bd79bd43093dce292951ad7c3137bdec0be710b0010c67e64a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\symfonyprojects\\symfony_api_project\\app\\Resources\\views\\base.html.twig");
    }
}
