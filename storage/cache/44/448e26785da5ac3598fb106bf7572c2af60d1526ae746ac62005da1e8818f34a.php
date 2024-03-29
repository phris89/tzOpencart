<?php

/* marketplace/opencartforum_list.twig */
class __TwigTemplate_61cb6b52bf33c15bf7c07782283a7c6522fc6cceb3c986e5fad852cdfd0bb19b extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"></div>
      <h1>";
        // line 6
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 9
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-puzzle-piece\"></i> ";
        // line 17
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"well\">
          <div class=\"input-group\" id=\"extension-filter\">
            <input type=\"text\" name=\"filter_search\" value=\"";
        // line 22
        echo (isset($context["filter_search"]) ? $context["filter_search"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["text_search"]) ? $context["text_search"] : null);
        echo "\" class=\"form-control\" />
            <div class=\"input-group-btn\">";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 24
            echo "              ";
            if (($this->getAttribute($context["category"], "value", array()) == (isset($context["filter_category"]) ? $context["filter_category"] : null))) {
                // line 25
                echo "              <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">";
                echo (isset($context["text_category"]) ? $context["text_category"] : null);
                echo " (";
                echo $this->getAttribute($context["category"], "text", array());
                echo ") <span class=\"caret\"></span></button>
              ";
            }
            // line 27
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "              <ul class=\"dropdown-menu\">
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 30
            echo "                <li><a href=\"";
            echo $this->getAttribute($context["category"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["category"], "text", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "              </ul>
              <input type=\"hidden\" name=\"filter_category_id\" value=\"";
        // line 33
        echo (isset($context["filter_category_id"]) ? $context["filter_category_id"] : null);
        echo "\" class=\"form-control\" />
              <input type=\"hidden\" name=\"filter_download_id\" value=\"";
        // line 34
        echo (isset($context["filter_download_id"]) ? $context["filter_download_id"] : null);
        echo "\" class=\"form-control\" />
              <input type=\"hidden\" name=\"filter_rating\" value=\"";
        // line 35
        echo (isset($context["filter_rating"]) ? $context["filter_rating"] : null);
        echo "\" class=\"form-control\" />
              <input type=\"hidden\" name=\"filter_license\" value=\"";
        // line 36
        echo (isset($context["filter_license"]) ? $context["filter_license"] : null);
        echo "\" class=\"form-control\" />
              <input type=\"hidden\" name=\"filter_partner\" value=\"";
        // line 37
        echo (isset($context["filter_partner"]) ? $context["filter_partner"] : null);
        echo "\" class=\"form-control\" />
              <input type=\"hidden\" name=\"sort\" value=\"";
        // line 38
        echo (isset($context["sort"]) ? $context["sort"] : null);
        echo "\" class=\"form-control\" />
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary\"><i class=\"fa fa-filter\"></i></button>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-9 col-xs-7\">
            <div class=\"btn-group\">";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["licenses"]) ? $context["licenses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["license"]) {
            // line 46
            echo "              ";
            if (($this->getAttribute($context["license"], "value", array()) == (isset($context["filter_license"]) ? $context["filter_license"] : null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["license"], "href", array());
                echo "\" class=\"btn btn-default active\">";
                echo $this->getAttribute($context["license"], "text", array());
                echo "</a>";
            } else {
                echo "<a href=\"";
                echo $this->getAttribute($context["license"], "href", array());
                echo "\" class=\"btn btn-default\">";
                echo $this->getAttribute($context["license"], "text", array());
                echo "</a>";
            }
            // line 47
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['license'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
          </div>
          <div class=\"col-sm-3 col-xs-5\">
            <div class=\"input-group pull-right\">
              <div class=\"input-group-addon\"><i class=\"fa fa-sort-amount-asc\"></i></div>
              <select onchange=\"location = this.value;\" class=\"form-control\">
                
              
            
              
                  ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["sorts"]);
        foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
            // line 58
            echo "                  ";
            if (($this->getAttribute($context["sorts"], "value", array()) == (isset($context["sort"]) ? $context["sort"] : null))) {
                // line 59
                echo "                
              
            
              
                <option value=\"";
                // line 63
                echo $this->getAttribute($context["sorts"], "href", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["sorts"], "text", array());
                echo "</option>
                
              
            
              
                  ";
            } else {
                // line 69
                echo "                
              
            
              
                <option value=\"";
                // line 73
                echo $this->getAttribute($context["sorts"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["sorts"], "text", array());
                echo "</option>
                
              
            
              
                  ";
            }
            // line 79
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "              
            
          
            
              </select>
            </div>
          </div>
        </div>
        <br />
        <div id=\"extension-list\">";
        // line 89
        if ((isset($context["promotions"]) ? $context["promotions"] : null)) {
            // line 90
            echo "          <h3>Featured</h3>
          <div class=\"row\">";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["promotions"]) ? $context["promotions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 92
                echo "            ";
                if ($context["extension"]) {
                    // line 93
                    echo "            <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
              <section>
                <div class=\"extension-preview\"><a href=\"";
                    // line 95
                    echo $this->getAttribute($context["extension"], "href", array());
                    echo "\">
                  <div class=\"extension-description\"></div>
                  <img src=\"";
                    // line 97
                    echo $this->getAttribute($context["extension"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\" class=\"img-responsive\" /></a></div>
                <div class=\"extension-name\">
                  <h4><a href=\"";
                    // line 99
                    echo $this->getAttribute($context["extension"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "</a></h4>
                  ";
                    // line 100
                    echo $this->getAttribute($context["extension"], "price", array());
                    echo "</div>
                <div class=\"extension-rate\">
                  <div class=\"row\">
                    <div class=\"col-xs-6\">";
                    // line 103
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 104
                        echo "                      ";
                        if (($this->getAttribute($context["extension"], "rating", array()) >= $context["i"])) {
                            echo "<i class=\"fa fa-star\"></i>";
                        } else {
                            echo "<i class=\"fa fa-star-o\"></i>";
                        }
                        // line 105
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>
                    <div class=\"col-xs-6\">
                      <div class=\"text-right\">";
                    // line 107
                    echo $this->getAttribute($context["extension"], "rating_total", array());
                    echo " ";
                    echo (isset($context["text_reviews"]) ? $context["text_reviews"] : null);
                    echo "</div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            ";
                }
                // line 114
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</div>
          <hr />
          ";
        }
        // line 117
        echo "          
          ";
        // line 118
        if ((isset($context["extensions"]) ? $context["extensions"] : null)) {
            // line 119
            echo "          <div class=\"row\"> ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 120
                echo "            
            ";
                // line 121
                if ($context["extension"]) {
                    // line 122
                    echo "            <div class=\"col-lg-3 col-md-4 col-sm-6 col-xs-12\">
              <section>
                <div class=\"extension-preview\"><a href=\"";
                    // line 124
                    echo $this->getAttribute($context["extension"], "href", array());
                    echo "\">
                  <div class=\"extension-description\"></div>
                  <img src=\"";
                    // line 126
                    echo $this->getAttribute($context["extension"], "image", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "\" class=\"img-responsive\" /></a></div>
                <div class=\"extension-name\">
                  <h4><a href=\"";
                    // line 128
                    echo $this->getAttribute($context["extension"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["extension"], "name", array());
                    echo "</a></h4>
                  ";
                    // line 129
                    echo $this->getAttribute($context["extension"], "price", array());
                    echo "</div>
                <div class=\"extension-rate\">
                  <div class=\"row\">
                    <div class=\"col-xs-6\">";
                    // line 132
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 133
                        echo "                      ";
                        if (($this->getAttribute($context["extension"], "rating", array()) >= $context["i"])) {
                            echo "<i class=\"fa fa-star\"></i>";
                        } else {
                            echo "<i class=\"fa fa-star-o\"></i>";
                        }
                        // line 134
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>
                    <div class=\"col-xs-6\">
                      <div class=\"text-right\">";
                    // line 136
                    echo $this->getAttribute($context["extension"], "rating_total", array());
                    echo " ";
                    echo (isset($context["text_reviews"]) ? $context["text_reviews"] : null);
                    echo "</div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            ";
                }
                // line 143
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </div>
          ";
        } else {
            // line 145
            echo "          <p class=\"text-center\">";
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</p>
          ";
        }
        // line 146
        echo " </div>
        <div class=\"row\">
          <div class=\"col-sm-12 text-center\">";
        // line 148
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function(e) {
\tvar url = 'index.php?route=marketplace/opencartforum&user_token=";
        // line 155
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';

\tvar input = \$('#extension-filter :input');

\tfor (i = 0; i < input.length; i++) {
\t\tif (\$(input[i]).val() != '' && \$(input[i]).val() != null) {
\t\t\turl += '&' + \$(input[i]).attr('name') + '=' + \$(input[i]).val()
\t\t}
\t}

\tlocation = url;
});

\$('input[name=\"filter_search\"]').keydown(function(e) {
\tif (e.keyCode == 13) {
\t\te.preventDefault();

\t\t\$('#button-filter').trigger('click');
\t}
});
//--></script></div>
";
        // line 176
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "marketplace/opencartforum_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  450 => 176,  426 => 155,  416 => 148,  412 => 146,  406 => 145,  397 => 143,  385 => 136,  376 => 134,  369 => 133,  365 => 132,  359 => 129,  353 => 128,  344 => 126,  339 => 124,  335 => 122,  333 => 121,  330 => 120,  325 => 119,  323 => 118,  320 => 117,  310 => 114,  298 => 107,  289 => 105,  282 => 104,  278 => 103,  272 => 100,  266 => 99,  257 => 97,  252 => 95,  248 => 93,  245 => 92,  241 => 91,  238 => 90,  236 => 89,  225 => 80,  219 => 79,  208 => 73,  202 => 69,  191 => 63,  185 => 59,  182 => 58,  178 => 57,  161 => 47,  146 => 46,  142 => 45,  132 => 38,  128 => 37,  124 => 36,  120 => 35,  116 => 34,  112 => 33,  109 => 32,  98 => 30,  94 => 29,  91 => 28,  85 => 27,  77 => 25,  74 => 24,  70 => 23,  64 => 22,  56 => 17,  48 => 11,  37 => 9,  33 => 8,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right"></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-puzzle-piece"></i> {{ text_list }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <div class="well">*/
/*           <div class="input-group" id="extension-filter">*/
/*             <input type="text" name="filter_search" value="{{ filter_search }}" placeholder="{{ text_search }}" class="form-control" />*/
/*             <div class="input-group-btn">{% for category in categories %}*/
/*               {% if category.value == filter_category %}*/
/*               <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">{{ text_category }} ({{ category.text }}) <span class="caret"></span></button>*/
/*               {% endif %}*/
/*               {% endfor %}*/
/*               <ul class="dropdown-menu">*/
/*                 {% for category in categories %}*/
/*                 <li><a href="{{ category.href }}">{{ category.text }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               <input type="hidden" name="filter_category_id" value="{{ filter_category_id }}" class="form-control" />*/
/*               <input type="hidden" name="filter_download_id" value="{{ filter_download_id }}" class="form-control" />*/
/*               <input type="hidden" name="filter_rating" value="{{ filter_rating }}" class="form-control" />*/
/*               <input type="hidden" name="filter_license" value="{{ filter_license }}" class="form-control" />*/
/*               <input type="hidden" name="filter_partner" value="{{ filter_partner }}" class="form-control" />*/
/*               <input type="hidden" name="sort" value="{{ sort }}" class="form-control" />*/
/*               <button type="button" id="button-filter" class="btn btn-primary"><i class="fa fa-filter"></i></button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="row">*/
/*           <div class="col-sm-9 col-xs-7">*/
/*             <div class="btn-group">{% for license in licenses %}*/
/*               {% if license.value == filter_license %}<a href="{{ license.href }}" class="btn btn-default active">{{ license.text }}</a>{% else %}<a href="{{ license.href }}" class="btn btn-default">{{ license.text }}</a>{% endif %}*/
/*               {% endfor %}</div>*/
/*           </div>*/
/*           <div class="col-sm-3 col-xs-5">*/
/*             <div class="input-group pull-right">*/
/*               <div class="input-group-addon"><i class="fa fa-sort-amount-asc"></i></div>*/
/*               <select onchange="location = this.value;" class="form-control">*/
/*                 */
/*               */
/*             */
/*               */
/*                   {% for sorts in sorts %}*/
/*                   {% if sorts.value == sort %}*/
/*                 */
/*               */
/*             */
/*               */
/*                 <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*                 */
/*               */
/*             */
/*               */
/*                   {% else %}*/
/*                 */
/*               */
/*             */
/*               */
/*                 <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*                 */
/*               */
/*             */
/*               */
/*                   {% endif %}*/
/*                   {% endfor %}*/
/*               */
/*             */
/*           */
/*             */
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <br />*/
/*         <div id="extension-list">{% if promotions %}*/
/*           <h3>Featured</h3>*/
/*           <div class="row">{% for extension in promotions %}*/
/*             {% if extension %}*/
/*             <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">*/
/*               <section>*/
/*                 <div class="extension-preview"><a href="{{ extension.href }}">*/
/*                   <div class="extension-description"></div>*/
/*                   <img src="{{ extension.image }}" alt="{{ extension.name }}" title="{{ extension.name }}" class="img-responsive" /></a></div>*/
/*                 <div class="extension-name">*/
/*                   <h4><a href="{{ extension.href }}">{{ extension.name }}</a></h4>*/
/*                   {{ extension.price }}</div>*/
/*                 <div class="extension-rate">*/
/*                   <div class="row">*/
/*                     <div class="col-xs-6">{% for i in 1..5 %}*/
/*                       {% if extension.rating >= i %}<i class="fa fa-star"></i>{% else %}<i class="fa fa-star-o"></i>{% endif %}*/
/*                       {% endfor %}</div>*/
/*                     <div class="col-xs-6">*/
/*                       <div class="text-right">{{ extension.rating_total }} {{ text_reviews }}</div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </section>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endfor %}</div>*/
/*           <hr />*/
/*           {% endif %}*/
/*           */
/*           {% if extensions %}*/
/*           <div class="row"> {% for extension in extensions %}*/
/*             */
/*             {% if extension %}*/
/*             <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">*/
/*               <section>*/
/*                 <div class="extension-preview"><a href="{{ extension.href }}">*/
/*                   <div class="extension-description"></div>*/
/*                   <img src="{{ extension.image }}" alt="{{ extension.name }}" title="{{ extension.name }}" class="img-responsive" /></a></div>*/
/*                 <div class="extension-name">*/
/*                   <h4><a href="{{ extension.href }}">{{ extension.name }}</a></h4>*/
/*                   {{ extension.price }}</div>*/
/*                 <div class="extension-rate">*/
/*                   <div class="row">*/
/*                     <div class="col-xs-6">{% for i in 1..5 %}*/
/*                       {% if extension.rating >= i %}<i class="fa fa-star"></i>{% else %}<i class="fa fa-star-o"></i>{% endif %}*/
/*                       {% endfor %}</div>*/
/*                     <div class="col-xs-6">*/
/*                       <div class="text-right">{{ extension.rating_total }} {{ text_reviews }}</div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </section>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endfor %} </div>*/
/*           {% else %}*/
/*           <p class="text-center">{{ text_no_results }}</p>*/
/*           {% endif %} </div>*/
/*         <div class="row">*/
/*           <div class="col-sm-12 text-center">{{ pagination }}</div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function(e) {*/
/* 	var url = 'index.php?route=marketplace/opencartforum&user_token={{ user_token }}';*/
/* */
/* 	var input = $('#extension-filter :input');*/
/* */
/* 	for (i = 0; i < input.length; i++) {*/
/* 		if ($(input[i]).val() != '' && $(input[i]).val() != null) {*/
/* 			url += '&' + $(input[i]).attr('name') + '=' + $(input[i]).val()*/
/* 		}*/
/* 	}*/
/* */
/* 	location = url;*/
/* });*/
/* */
/* $('input[name="filter_search"]').keydown(function(e) {*/
/* 	if (e.keyCode == 13) {*/
/* 		e.preventDefault();*/
/* */
/* 		$('#button-filter').trigger('click');*/
/* 	}*/
/* });*/
/* //--></script></div>*/
/* {{ footer }} */
