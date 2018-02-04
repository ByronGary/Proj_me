<?php

/* themes/custom/proj_me_theme/templates/page--front.html.twig */
class __TwigTemplate_6239ab6f104039abbbc0b35c933a82a91def1f7c86c3fd9b7801e1d4827c589a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 59, "if" => 74, "block" => 78);
        $filters = array("clean_class" => 83, "t" => 96);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 59
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 60
        echo "
<link href=\"https://fonts.googleapis.com/css?family=Oswald|Playfair+Display|Poly\" rel=\"stylesheet\">


<style>
@import url('https://fonts.googleapis.com/css?family=Oswald|Playfair+Display|Poly');
</style>


<link href=\"https://fonts.googleapis.com/css?family=Oswald:400,600|Playfair+Display:400,700|Poly\" rel=\"stylesheet\">
<style>
@import url('https://fonts.googleapis.com/css?family=Oswald:400,600|Playfair+Display:400,700|Poly');
</style>

<div id=\"hero\" ";
        // line 74
        if (($context["proj_me_header"] ?? null)) {
            echo " style = \"background-image: url(";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["proj_me_header"] ?? null), "html", null, true));
            echo ");\" ";
        }
        echo ">

";
        // line 77
        if (($this->getAttribute(($context["page"] ?? null), "navigation", array()) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()))) {
            // line 78
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 128
        echo "
";
        // line 130
        $this->displayBlock('main', $context, $blocks);
        // line 209
        echo "
<footer class=\"footer ";
        // line 210
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\" role=\"contentinfo\">
      ";
        // line 211
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 212
            echo "        ";
            $this->displayBlock('footer', $context, $blocks);
            // line 215
            echo "      ";
        }
        // line 216
        echo "      <div class=\"footer-copyright\">
      <span class=\"footer-copyright-year\">&#169; ";
        // line 217
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["year"] ?? null), "html", null, true));
        echo "</span> ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true));
        echo " all rights reserved
      </div>
</footer>
 
";
    }

    // line 78
    public function block_navbar($context, array $blocks = array())
    {
        // line 79
        echo "    ";
        // line 80
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 82
($context["theme"] ?? null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 83
($context["theme"] ?? null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "navbar_position", array())))) : (($context["container"] ?? null))));
        // line 86
        echo "
    <header";
        // line 87
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", array(0 => ($context["navbar_classes"] ?? null)), "method"), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 88
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 89
            echo "        <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
      ";
        }
        // line 91
        echo "      <div class=\"navbar-header\">
        ";
        // line 92
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
        echo "
        ";
        // line 94
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 95
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 96
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 102
        echo "      </div>

      ";
        // line 105
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 106
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 107
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 110
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 111
            echo "        </div>
      ";
        }
        // line 113
        echo "
    <div class=\"hero-section-border\"></div>
    <div class=\"hero-section\">
      <h2 class=\"hero-text\">Digital development </br> <u>&</u> design that is built </br> to <span class=\"last\">last</span>.</h2>
      <div class=\"call-to-action\">
        <button class=\"button\" type=\"button\">get a quote on your project</button>
      </div>
    </div>
    

    </header>
    </div>

  ";
    }

    // line 130
    public function block_main($context, array $blocks = array())
    {
        // line 131
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 135
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 136
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 141
            echo "      ";
        }
        // line 142
        echo "
      ";
        // line 144
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 145
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 150
            echo "      ";
        }
        // line 151
        echo "
      ";
        // line 153
        echo "      ";
        // line 154
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 155
($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 156
($context["page"] ?? null), "sidebar_first", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 157
($context["page"] ?? null), "sidebar_second", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 158
($context["page"] ?? null), "sidebar_first", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 161
        echo "      <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">

        ";
        // line 164
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 165
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 168
            echo "        ";
        }
        // line 169
        echo "
        ";
        // line 171
        echo "        ";
        if (($context["breadcrumb"] ?? null)) {
            // line 172
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 175
            echo "        ";
        }
        // line 176
        echo "
        ";
        // line 178
        echo "        ";
        if (($context["action_links"] ?? null)) {
            // line 179
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 182
            echo "        ";
        }
        // line 183
        echo "
        ";
        // line 185
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 186
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 189
            echo "        ";
        }
        // line 190
        echo "
        ";
        // line 192
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 196
        echo "      </section>

      ";
        // line 199
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 200
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 205
            echo "      ";
        }
        // line 206
        echo "    </div>
  </div>
";
    }

    // line 136
    public function block_header($context, array $blocks = array())
    {
        // line 137
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 138
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 145
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 146
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 147
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 165
    public function block_highlighted($context, array $blocks = array())
    {
        // line 166
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 172
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 173
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["breadcrumb"] ?? null), "html", null, true));
        echo "
          ";
    }

    // line 179
    public function block_action_links($context, array $blocks = array())
    {
        // line 180
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
        echo "</ul>
          ";
    }

    // line 186
    public function block_help($context, array $blocks = array())
    {
        // line 187
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 192
    public function block_content($context, array $blocks = array())
    {
        // line 193
        echo "          <a id=\"main-content\"></a>
          ";
        // line 194
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 200
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 201
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 202
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 212
    public function block_footer($context, array $blocks = array())
    {
        // line 213
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "themes/custom/proj_me_theme/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 213,  416 => 212,  409 => 202,  406 => 201,  403 => 200,  397 => 194,  394 => 193,  391 => 192,  384 => 187,  381 => 186,  374 => 180,  371 => 179,  364 => 173,  361 => 172,  354 => 166,  351 => 165,  344 => 147,  341 => 146,  338 => 145,  331 => 138,  328 => 137,  325 => 136,  319 => 206,  316 => 205,  313 => 200,  310 => 199,  306 => 196,  303 => 192,  300 => 190,  297 => 189,  294 => 186,  291 => 185,  288 => 183,  285 => 182,  282 => 179,  279 => 178,  276 => 176,  273 => 175,  270 => 172,  267 => 171,  264 => 169,  261 => 168,  258 => 165,  255 => 164,  249 => 161,  247 => 158,  246 => 157,  245 => 156,  244 => 155,  243 => 154,  241 => 153,  238 => 151,  235 => 150,  232 => 145,  229 => 144,  226 => 142,  223 => 141,  220 => 136,  217 => 135,  210 => 131,  207 => 130,  190 => 113,  186 => 111,  183 => 110,  177 => 107,  174 => 106,  171 => 105,  167 => 102,  158 => 96,  155 => 95,  152 => 94,  148 => 92,  145 => 91,  139 => 89,  137 => 88,  133 => 87,  130 => 86,  128 => 83,  127 => 82,  126 => 80,  124 => 79,  121 => 78,  110 => 217,  107 => 216,  104 => 215,  101 => 212,  99 => 211,  95 => 210,  92 => 209,  90 => 130,  87 => 128,  83 => 78,  81 => 77,  72 => 74,  56 => 60,  54 => 59,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/proj_me_theme/templates/page--front.html.twig", "/var/www/dev-2/portfolio/web/themes/custom/proj_me_theme/templates/page--front.html.twig");
    }
}
