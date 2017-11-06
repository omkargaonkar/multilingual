<?php

/* themes/custom/professional_responsive_theme/templates/layout/page.html.twig */
class __TwigTemplate_bba29e330bd0e69e934316c1194c64728a78aa439bdda2b0d1d80a199505dfcf extends Twig_Template
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
        $tags = array("if" => 67);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
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

        // line 60
        echo "

<!-- Header and Navbar -->
<header class=\"main-header\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4 col-md-3\">
        ";
        // line 67
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 68
            echo "          ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
        ";
        }
        // line 70
        echo "      </div>

      ";
        // line 72
        if (($context["show_social_icon"] ?? null)) {
            // line 73
            echo "        <div class=\"col-sm-8 col-md-9\">
          <div class=\"social-media\">
            ";
            // line 75
            if (($context["facebook_url"] ?? null)) {
                // line 76
                echo "              <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["facebook_url"] ?? null), "html", null, true));
                echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
            ";
            }
            // line 78
            echo "            ";
            if (($context["google_plus_url"] ?? null)) {
                // line 79
                echo "              <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["google_plus_url"] ?? null), "html", null, true));
                echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
            ";
            }
            // line 81
            echo "            ";
            if (($context["twitter_url"] ?? null)) {
                // line 82
                echo "              <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["twitter_url"] ?? null), "html", null, true));
                echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
            ";
            }
            // line 84
            echo "            ";
            if (($context["linkedin_url"] ?? null)) {
                // line 85
                echo "              <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["linkedin_url"] ?? null), "html", null, true));
                echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
            ";
            }
            // line 87
            echo "            ";
            if (($context["pinterest_url"] ?? null)) {
                // line 88
                echo "              <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pinterest_url"] ?? null), "html", null, true));
                echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
            ";
            }
            // line 90
            echo "            ";
            if (($context["rss_url"] ?? null)) {
                // line 91
                echo "              <a href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rss_url"] ?? null), "html", null, true));
                echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
            ";
            }
            // line 93
            echo "          </div>
        </div>
      ";
        }
        // line 96
        echo "    </div>
  </div>
</header>

<div class=\"row primary-menu-wrap\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"navbar-header col-md-12\">
        <nav class=\"navbar navbar-default\" role=\"navigation\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button> 

          ";
        // line 112
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 113
            echo "            ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
          ";
        }
        // line 115
        echo "        </nav>
      </div>
    </div>
  </div>
</div>
<!--End Header & Navbar -->


<div class=\"container main-menuwrap\">
  
</div>



<!-- Banner -->
  ";
        // line 130
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "slideshow", array()))) {
            echo "  
    <div class=\"container slideshow\">
      <div class=\"row\">
        <div class=\"col-md-12\">
            ";
            // line 134
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slideshow", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 139
        echo "  <!-- End Banner -->


<!--Highlighted-->
  ";
        // line 143
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 144
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 147
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 152
        echo "<!--End Highlighted-->


<!-- Start Top Widget -->
";
        // line 156
        if (($context["is_front"] ?? null)) {
            echo "  
  ";
            // line 157
            if ((($this->getAttribute(($context["page"] ?? null), "topwidget_first", array()) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", array())) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", array()))) {
                // line 158
                echo "    <div class=\"topwidget\">
      <!-- start: Container -->
      <div class=\"container\">
        
        <div class=\"row\">
          <!-- Top widget first region -->
          <div class = ";
                // line 164
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 165
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", array())) {
                    // line 166
                    echo "              ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_first", array()), "html", null, true));
                    echo "
            ";
                }
                // line 168
                echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget second region -->
          <div class = ";
                // line 171
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 172
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", array())) {
                    // line 173
                    echo "              ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_second", array()), "html", null, true));
                    echo "
            ";
                }
                // line 175
                echo "          </div>
          <!-- End top widget third region -->
          <!-- Top widget third region -->
          <div class = ";
                // line 178
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["topwidget_third_class"] ?? null), "html", null, true));
                echo ">
            ";
                // line 179
                if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", array())) {
                    // line 180
                    echo "              ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "topwidget_third", array()), "html", null, true));
                    echo "
            ";
                }
                // line 182
                echo "          </div>
          <!-- End top widget third region -->
        </div>
      </div>
    </div>
  ";
            }
        }
        // line 189
        echo "<!--End Top Widget -->


<!-- Page Title -->
";
        // line 193
        if (($this->getAttribute(($context["page"] ?? null), "page_title", array()) &&  !($context["is_front"] ?? null))) {
            // line 194
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <!-- start: Container -->
      <div class=\"container\">
        ";
            // line 198
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "page_title", array()), "html", null, true));
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 203
        echo "<!-- End Page Title ---- >


<!-- layout -->
<div id=\"wrapper\">
  <!-- start: Container -->
  <div class=\"container\">
    
    <!--Content top-->
      ";
        // line 212
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 213
            echo "        <div class=\"row\">
          ";
            // line 214
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 217
        echo "    <!--End Content top-->
    
    <!--start:content -->
    <div class=\"row\">
      <div class=\"col-md-12\">";
        // line 221
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "</div>
    </div>

    <div class=\"row layout\">
      <!--- Start Left SideBar -->
      ";
        // line 226
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 227
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 228
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarfirst"] ?? null), "html", null, true));
            echo " >
            ";
            // line 229
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 233
        echo "      <!---End Right SideBar -->

      <!--- Start content -->
      ";
        // line 236
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 237
            echo "        <div class=\"content_layout\">
          <div class=";
            // line 238
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contentlayout"] ?? null), "html", null, true));
            echo ">
            ";
            // line 239
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 243
        echo "      <!---End content -->

      <!--- Start Right SideBar -->
      ";
        // line 246
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 247
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 248
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebarsecond"] ?? null), "html", null, true));
            echo ">
            ";
            // line 249
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 253
        echo "      <!---End Right SideBar -->
      
    </div>
    <!--End Content -->

    <!--Start Content Bottom-->
    ";
        // line 259
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", array())) {
            // line 260
            echo "      <div class=\"row\">
        ";
            // line 261
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 264
        echo "    <!--End Content Bottom-->
  </div>
</div>
<!-- End layout -->









<!-- start: Footer -->
";
        // line 278
        if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())))) {
            // line 279
            echo "  <div class=\"footerwidget\">
    <div class=\"container\">
      
      <div class=\"row\">
        
        <!-- Start Footer First Region -->
        <div class = ";
            // line 285
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_class"] ?? null), "html", null, true));
            echo ">
          ";
            // line 286
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
                // line 287
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
                echo "
          ";
            }
            // line 289
            echo "        </div>
        <!-- End Footer First Region -->

        <!-- Start Footer Second Region -->
        <div class = ";
            // line 293
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_class"] ?? null), "html", null, true));
            echo ">
          ";
            // line 294
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
                // line 295
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
                echo "
          ";
            }
            // line 297
            echo "        </div>
        <!-- End Footer Second Region -->

        <!-- Start Footer third Region -->
        <div class = ";
            // line 301
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_class"] ?? null), "html", null, true));
            echo ">
          ";
            // line 302
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
                // line 303
                echo "            ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
                echo "
          ";
            }
            // line 305
            echo "        </div>
        <!-- End Footer Third Region -->
      </div>
    </div>
  </div>
";
        }
        // line 311
        echo "<!--End Footer -->

<!-- Start Footer Menu -->
";
        // line 314
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", array())) {
            // line 315
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-sm-6 col-md-6\">
          ";
            // line 319
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_menu", array()), "html", null, true));
            echo "
        </div>
        
      </div>
    </div>
  </div>
";
        }
        // line 326
        echo "<!-- End Footer Menu -->

";
        // line 328
        if ((($context["copyright_text"] ?? null) || ($context["show_credit_link"] ?? null))) {
            // line 329
            echo "<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Copyright -->
      <div class=\"col-sm-6 col-md-6\">
        ";
            // line 335
            if (($context["copyright_text"] ?? null)) {
                echo "        
          <p>";
                // line 336
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["copyright_text"] ?? null), "html", null, true));
                echo "</p>        
        ";
            }
            // line 338
            echo "      </div>
      <!-- End Copyright -->

      <!-- Credit link -->
      ";
            // line 342
            if (($context["show_credit_link"] ?? null)) {
                // line 343
                echo "        <div class=\"col-sm-6 col-md-6\">
          <p class=\"credit-link\">Designed by <a href=\"http://www.zymphonies.in\" target=\"_blank\">Zymphonies</a></p>
        </div>
      ";
            }
            // line 347
            echo "      <!-- End Credit link -->
            
    </div>
  </div>
</div>
";
        }
        // line 353
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/custom/professional_responsive_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  567 => 353,  559 => 347,  553 => 343,  551 => 342,  545 => 338,  540 => 336,  536 => 335,  528 => 329,  526 => 328,  522 => 326,  512 => 319,  506 => 315,  504 => 314,  499 => 311,  491 => 305,  485 => 303,  483 => 302,  479 => 301,  473 => 297,  467 => 295,  465 => 294,  461 => 293,  455 => 289,  449 => 287,  447 => 286,  443 => 285,  435 => 279,  433 => 278,  417 => 264,  411 => 261,  408 => 260,  406 => 259,  398 => 253,  391 => 249,  387 => 248,  384 => 247,  382 => 246,  377 => 243,  370 => 239,  366 => 238,  363 => 237,  361 => 236,  356 => 233,  349 => 229,  345 => 228,  342 => 227,  340 => 226,  332 => 221,  326 => 217,  320 => 214,  317 => 213,  315 => 212,  304 => 203,  296 => 198,  290 => 194,  288 => 193,  282 => 189,  273 => 182,  267 => 180,  265 => 179,  261 => 178,  256 => 175,  250 => 173,  248 => 172,  244 => 171,  239 => 168,  233 => 166,  231 => 165,  227 => 164,  219 => 158,  217 => 157,  213 => 156,  207 => 152,  199 => 147,  194 => 144,  192 => 143,  186 => 139,  178 => 134,  171 => 130,  154 => 115,  148 => 113,  146 => 112,  128 => 96,  123 => 93,  117 => 91,  114 => 90,  108 => 88,  105 => 87,  99 => 85,  96 => 84,  90 => 82,  87 => 81,  81 => 79,  78 => 78,  72 => 76,  70 => 75,  66 => 73,  64 => 72,  60 => 70,  54 => 68,  52 => 67,  43 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/professional_responsive_theme/templates/layout/page.html.twig", "/home/omkar/git/multilingual/themes/custom/professional_responsive_theme/templates/layout/page.html.twig");
    }
}
