<?php

/* form/templates/blocks/textarea.hbs */
class __TwigTemplate_0b8222bf2acfe209b56c3d0494b789a91bef7b08708079e48be3477c7f0605ec extends Twig_Template
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
        // line 1
        echo "<p>
  {{#unless params.label_within}}<label>{{ params.label }}{{#if params.required}} *{{/if}}</label>{{/unless}}
  <textarea placeholder=\"{{#if params.label_within}}{{ params.label }}{{#if params.required}} *{{/if}}{{/if}}\" disabled=\"disabled\" rows=\"{{#if params.lines}}{{ params.lines }}{{else}}1{{/if}}\">{{ params.text }}</textarea>
</p>";
    }

    public function getTemplateName()
    {
        return "form/templates/blocks/textarea.hbs";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/templates/blocks/textarea.hbs", "/www/wwwroot/blog.medprober.com/wp-content/plugins/mailpoet/views/form/templates/blocks/textarea.hbs");
    }
}
