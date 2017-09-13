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
        $__internal_41e6673974d73acc7c2e51c63abd604203c8c9f77cdbbd6fb692a64e7570e545 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41e6673974d73acc7c2e51c63abd604203c8c9f77cdbbd6fb692a64e7570e545->enter($__internal_41e6673974d73acc7c2e51c63abd604203c8c9f77cdbbd6fb692a64e7570e545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e289a6ad4cd4cf2c368334c74f29d24fbb9de3c77a98a98c824274311ba4a149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e289a6ad4cd4cf2c368334c74f29d24fbb9de3c77a98a98c824274311ba4a149->enter($__internal_e289a6ad4cd4cf2c368334c74f29d24fbb9de3c77a98a98c824274311ba4a149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_41e6673974d73acc7c2e51c63abd604203c8c9f77cdbbd6fb692a64e7570e545->leave($__internal_41e6673974d73acc7c2e51c63abd604203c8c9f77cdbbd6fb692a64e7570e545_prof);

        
        $__internal_e289a6ad4cd4cf2c368334c74f29d24fbb9de3c77a98a98c824274311ba4a149->leave($__internal_e289a6ad4cd4cf2c368334c74f29d24fbb9de3c77a98a98c824274311ba4a149_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4bdb958442e383d7e7993012b39af0e280c69a4644165dcee8e1c9e55cfcd73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4bdb958442e383d7e7993012b39af0e280c69a4644165dcee8e1c9e55cfcd73->enter($__internal_e4bdb958442e383d7e7993012b39af0e280c69a4644165dcee8e1c9e55cfcd73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d51c57bd3d061949844fbe2612a902fab0993e814908b8590447fb2e07260ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d51c57bd3d061949844fbe2612a902fab0993e814908b8590447fb2e07260ba2->enter($__internal_d51c57bd3d061949844fbe2612a902fab0993e814908b8590447fb2e07260ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d51c57bd3d061949844fbe2612a902fab0993e814908b8590447fb2e07260ba2->leave($__internal_d51c57bd3d061949844fbe2612a902fab0993e814908b8590447fb2e07260ba2_prof);

        
        $__internal_e4bdb958442e383d7e7993012b39af0e280c69a4644165dcee8e1c9e55cfcd73->leave($__internal_e4bdb958442e383d7e7993012b39af0e280c69a4644165dcee8e1c9e55cfcd73_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c0206b99ad36c61aff6029cb094526fe0d6a06d1dc6f2234882d8f76a15b0087 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0206b99ad36c61aff6029cb094526fe0d6a06d1dc6f2234882d8f76a15b0087->enter($__internal_c0206b99ad36c61aff6029cb094526fe0d6a06d1dc6f2234882d8f76a15b0087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fb1a08ef203ebad701324b8cb3d9033defb32a8dd2e67568938f5f1dc20172e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1a08ef203ebad701324b8cb3d9033defb32a8dd2e67568938f5f1dc20172e5->enter($__internal_fb1a08ef203ebad701324b8cb3d9033defb32a8dd2e67568938f5f1dc20172e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fb1a08ef203ebad701324b8cb3d9033defb32a8dd2e67568938f5f1dc20172e5->leave($__internal_fb1a08ef203ebad701324b8cb3d9033defb32a8dd2e67568938f5f1dc20172e5_prof);

        
        $__internal_c0206b99ad36c61aff6029cb094526fe0d6a06d1dc6f2234882d8f76a15b0087->leave($__internal_c0206b99ad36c61aff6029cb094526fe0d6a06d1dc6f2234882d8f76a15b0087_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd061e0c5cc52925616031930aad285f66beab9fab58c9cc5b1246a9facda58c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd061e0c5cc52925616031930aad285f66beab9fab58c9cc5b1246a9facda58c->enter($__internal_dd061e0c5cc52925616031930aad285f66beab9fab58c9cc5b1246a9facda58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff82ee4bd91f106fd11d86bd950bb15f93bd244f96d40acc65bbfb5a6723bb40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff82ee4bd91f106fd11d86bd950bb15f93bd244f96d40acc65bbfb5a6723bb40->enter($__internal_ff82ee4bd91f106fd11d86bd950bb15f93bd244f96d40acc65bbfb5a6723bb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ff82ee4bd91f106fd11d86bd950bb15f93bd244f96d40acc65bbfb5a6723bb40->leave($__internal_ff82ee4bd91f106fd11d86bd950bb15f93bd244f96d40acc65bbfb5a6723bb40_prof);

        
        $__internal_dd061e0c5cc52925616031930aad285f66beab9fab58c9cc5b1246a9facda58c->leave($__internal_dd061e0c5cc52925616031930aad285f66beab9fab58c9cc5b1246a9facda58c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e843b5b2479a9ed0b488c73a6a3add31f6835a66abd37f26dd7fa451ba4d1669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e843b5b2479a9ed0b488c73a6a3add31f6835a66abd37f26dd7fa451ba4d1669->enter($__internal_e843b5b2479a9ed0b488c73a6a3add31f6835a66abd37f26dd7fa451ba4d1669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_31f94a0429c8ab541193d4ace140ab9d473c7f0f3188380a1d7ad9588fb97f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f94a0429c8ab541193d4ace140ab9d473c7f0f3188380a1d7ad9588fb97f67->enter($__internal_31f94a0429c8ab541193d4ace140ab9d473c7f0f3188380a1d7ad9588fb97f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_31f94a0429c8ab541193d4ace140ab9d473c7f0f3188380a1d7ad9588fb97f67->leave($__internal_31f94a0429c8ab541193d4ace140ab9d473c7f0f3188380a1d7ad9588fb97f67_prof);

        
        $__internal_e843b5b2479a9ed0b488c73a6a3add31f6835a66abd37f26dd7fa451ba4d1669->leave($__internal_e843b5b2479a9ed0b488c73a6a3add31f6835a66abd37f26dd7fa451ba4d1669_prof);

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
