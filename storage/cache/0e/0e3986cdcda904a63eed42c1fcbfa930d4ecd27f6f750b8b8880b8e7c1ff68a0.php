<?php

/* catalog/review_list.twig */
class __TwigTemplate_0dceab781af702e0ed38cea4b55936780b8d615d94739e6af9a6139b9cccd668 extends Twig_Template
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
      <div class=\"pull-right\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "\" onclick=\"\$('#filter-review').toggleClass('hidden-sm hidden-xs');\" class=\"btn btn-default hidden-md hidden-lg\"><i class=\"fa fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"submit\" form=\"form-review\" formaction=\"";
        // line 8
        echo (isset($context["enabled"]) ? $context["enabled"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_enable"]) ? $context["button_enable"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-play\"></i></button>
\t\t<button type=\"submit\" form=\"form-review\" formaction=\"";
        // line 9
        echo (isset($context["disabled"]) ? $context["disabled"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_disable"]) ? $context["button_disable"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-pause\"></i></button>
\t\t<button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 10
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-review').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 12
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
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
        // line 17
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">";
        // line 20
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 21
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 25
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 26
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 30
        echo "    <div class=\"row\">
      <div id=\"filter-review\" class=\"col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-filter\"></i> ";
        // line 34
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</h3>
          </div>
          <div  class=\"panel-body\">
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-product\">";
        // line 38
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_product\" value=\"";
        // line 39
        echo (isset($context["filter_product"]) ? $context["filter_product"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_product"]) ? $context["entry_product"] : null);
        echo "\" id=\"input-product\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-author\">";
        // line 42
        echo (isset($context["entry_author"]) ? $context["entry_author"] : null);
        echo "</label>
              <input type=\"text\" name=\"filter_author\" value=\"";
        // line 43
        echo (isset($context["filter_author"]) ? $context["filter_author"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_author"]) ? $context["entry_author"] : null);
        echo "\" id=\"input-author\" class=\"form-control\" />
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-status\">";
        // line 46
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
              <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                <option value=\"\"></option>
                
                  
              
              
          
          
                  
                  
                  
                  ";
        // line 58
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "1")) {
            // line 59
            echo "                  
                  
                  
                  
          
          
              
              
                  
                <option value=\"1\" selected=\"selected\">";
            // line 68
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                
                  
              
              
          
          
                  
                  
                  
                  ";
        } else {
            // line 79
            echo "                  
                  
                  
                  
          
          
              
              
                  
                <option value=\"1\">";
            // line 88
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                
                  
              
              
          
          
                  
                  
                  
                  ";
        }
        // line 99
        echo "                  ";
        if (((isset($context["filter_status"]) ? $context["filter_status"] : null) == "0")) {
            // line 100
            echo "                  
                  
                  
                  
          
          
              
              
                  
                <option value=\"0\" selected=\"selected\">";
            // line 109
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                
                  
              
              
          
          
                  
                  
                  
                  ";
        } else {
            // line 120
            echo "                  
                  
                  
                  
          
          
              
              
                  
                <option value=\"0\">";
            // line 129
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                
                  ";
        }
        // line 132
        echo "                
              </select>
            </div>
            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-date-added\">";
        // line 136
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "</label>
              <div class=\"input-group date\">
                <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 138
        echo (isset($context["filter_date_added"]) ? $context["filter_date_added"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_added"]) ? $context["entry_date_added"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-default\"><i class=\"fa fa-filter\"></i> ";
        // line 144
        echo (isset($context["button_filter"]) ? $context["button_filter"] : null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-md-pull-3 col-sm-12\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 152
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
          </div>
          <div class=\"panel-body\">
            <form action=\"";
        // line 155
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                      <td class=\"text-left\">";
        // line 161
        if (((isset($context["sort"]) ? $context["sort"] : null) == "pd.name")) {
            echo " <a href=\"";
            echo (isset($context["sort_product"]) ? $context["sort_product"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_product"]) ? $context["column_product"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_product"]) ? $context["sort_product"] : null);
            echo "\">";
            echo (isset($context["column_product"]) ? $context["column_product"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 162
        if (((isset($context["sort"]) ? $context["sort"] : null) == "r.author")) {
            echo " <a href=\"";
            echo (isset($context["sort_author"]) ? $context["sort_author"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_author"]) ? $context["column_author"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_author"]) ? $context["sort_author"] : null);
            echo "\">";
            echo (isset($context["column_author"]) ? $context["column_author"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 163
        if (((isset($context["sort"]) ? $context["sort"] : null) == "r.rating")) {
            echo " <a href=\"";
            echo (isset($context["sort_rating"]) ? $context["sort_rating"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_rating"]) ? $context["column_rating"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_rating"]) ? $context["sort_rating"] : null);
            echo "\">";
            echo (isset($context["column_rating"]) ? $context["column_rating"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 164
        if (((isset($context["sort"]) ? $context["sort"] : null) == "r.status")) {
            echo " <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_status"]) ? $context["sort_status"] : null);
            echo "\">";
            echo (isset($context["column_status"]) ? $context["column_status"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-left\">";
        // line 165
        if (((isset($context["sort"]) ? $context["sort"] : null) == "r.date_added")) {
            echo " <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a> ";
        } else {
            echo " <a href=\"";
            echo (isset($context["sort_date_added"]) ? $context["sort_date_added"] : null);
            echo "\">";
            echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
            echo "</a> ";
        }
        echo "</td>
                      <td class=\"text-right\">";
        // line 166
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 171
        if ((isset($context["reviews"]) ? $context["reviews"] : null)) {
            // line 172
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 173
                echo "                  <tr>
                    <td class=\"text-center\">";
                // line 174
                if (twig_in_filter($this->getAttribute($context["review"], "review_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 175
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["review"], "review_id", array());
                    echo "\" checked=\"checked\" />
                      ";
                } else {
                    // line 177
                    echo "                      <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["review"], "review_id", array());
                    echo "\" />
                      ";
                }
                // line 178
                echo "</td>
                    <td class=\"text-left\">";
                // line 179
                echo $this->getAttribute($context["review"], "name", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 180
                echo $this->getAttribute($context["review"], "author", array());
                echo "</td>
                    <td class=\"text-right\">";
                // line 181
                echo $this->getAttribute($context["review"], "rating", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 182
                echo $this->getAttribute($context["review"], "status", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 183
                echo $this->getAttribute($context["review"], "date_added", array());
                echo "</td>
                    <td class=\"text-right\"><a href=\"";
                // line 184
                echo $this->getAttribute($context["review"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                  </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 187
            echo "                  ";
        } else {
            // line 188
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"7\">";
            // line 189
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                  </tr>
                  ";
        }
        // line 192
        echo "                    </tbody>
                  
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 198
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 199
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = 'index.php?route=catalog/review&user_token=";
        // line 208
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';
\t
\tvar filter_product = \$('input[name=\\'filter_product\\']').val();
\t
\tif (filter_product) {
\t\turl += '&filter_product=' + encodeURIComponent(filter_product);
\t}
\t
\tvar filter_author = \$('input[name=\\'filter_author\\']').val();
\t
\tif (filter_author) {
\t\turl += '&filter_author=' + encodeURIComponent(filter_author);
\t}
\t
\tvar filter_status = \$('select[name=\\'filter_status\\']').val();
\t
\tif (filter_status !== '') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status); 
\t}\t\t
\t\t\t
\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
\t
\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tlocation = url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 239
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});
//--></script></div>
";
        // line 243
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "catalog/review_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  533 => 243,  526 => 239,  492 => 208,  480 => 199,  476 => 198,  468 => 192,  462 => 189,  459 => 188,  456 => 187,  445 => 184,  441 => 183,  437 => 182,  433 => 181,  429 => 180,  425 => 179,  422 => 178,  416 => 177,  410 => 175,  408 => 174,  405 => 173,  400 => 172,  398 => 171,  390 => 166,  372 => 165,  354 => 164,  336 => 163,  318 => 162,  300 => 161,  291 => 155,  285 => 152,  274 => 144,  263 => 138,  258 => 136,  252 => 132,  246 => 129,  235 => 120,  221 => 109,  210 => 100,  207 => 99,  193 => 88,  182 => 79,  168 => 68,  157 => 59,  155 => 58,  140 => 46,  132 => 43,  128 => 42,  120 => 39,  116 => 38,  109 => 34,  103 => 30,  95 => 26,  92 => 25,  84 => 21,  82 => 20,  77 => 17,  66 => 15,  62 => 14,  57 => 12,  50 => 10,  44 => 9,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_filter }}" onclick="$('#filter-review').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>*/
/*         <a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*         <button type="submit" form="form-review" formaction="{{ enabled }}" data-toggle="tooltip" title="{{ button_enable }}" class="btn btn-default"><i class="fa fa-play"></i></button>*/
/* 		<button type="submit" form="form-review" formaction="{{ disabled }}" data-toggle="tooltip" title="{{ button_disable }}" class="btn btn-default"><i class="fa fa-pause"></i></button>*/
/* 		<button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-review').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">{% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="row">*/
/*       <div id="filter-review" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-filter"></i> {{ text_filter }}</h3>*/
/*           </div>*/
/*           <div  class="panel-body">*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-product">{{ entry_product }}</label>*/
/*               <input type="text" name="filter_product" value="{{ filter_product }}" placeholder="{{ entry_product }}" id="input-product" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-author">{{ entry_author }}</label>*/
/*               <input type="text" name="filter_author" value="{{ filter_author }}" placeholder="{{ entry_author }}" id="input-author" class="form-control" />*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-status">{{ entry_status }}</label>*/
/*               <select name="filter_status" id="input-status" class="form-control">*/
/*                 <option value=""></option>*/
/*                 */
/*                   */
/*               */
/*               */
/*           */
/*           */
/*                   */
/*                   */
/*                   */
/*                   {% if filter_status == '1' %}*/
/*                   */
/*                   */
/*                   */
/*                   */
/*           */
/*           */
/*               */
/*               */
/*                   */
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 */
/*                   */
/*               */
/*               */
/*           */
/*           */
/*                   */
/*                   */
/*                   */
/*                   {% else %}*/
/*                   */
/*                   */
/*                   */
/*                   */
/*           */
/*           */
/*               */
/*               */
/*                   */
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 */
/*                   */
/*               */
/*               */
/*           */
/*           */
/*                   */
/*                   */
/*                   */
/*                   {% endif %}*/
/*                   {% if filter_status == '0' %}*/
/*                   */
/*                   */
/*                   */
/*                   */
/*           */
/*           */
/*               */
/*               */
/*                   */
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 */
/*                   */
/*               */
/*               */
/*           */
/*           */
/*                   */
/*                   */
/*                   */
/*                   {% else %}*/
/*                   */
/*                   */
/*                   */
/*                   */
/*           */
/*           */
/*               */
/*               */
/*                   */
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 */
/*                   {% endif %}*/
/*                 */
/*               </select>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-date-added">{{ entry_date_added }}</label>*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="filter_date_added" value="{{ filter_date_added }}" placeholder="{{ entry_date_added }}" data-date-format="YYYY-MM-DD" id="input-date-added" class="form-control" />*/
/*                 <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*             </div>*/
/*             <div class="form-group text-right">*/
/*               <button type="button" id="button-filter" class="btn btn-default"><i class="fa fa-filter"></i> {{ button_filter }}</button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div class="col-md-9 col-md-pull-3 col-sm-12">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-review">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                       <td class="text-left">{% if sort == 'pd.name' %} <a href="{{ sort_product }}" class="{{ order|lower }}">{{ column_product }}</a> {% else %} <a href="{{ sort_product }}">{{ column_product }}</a> {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'r.author' %} <a href="{{ sort_author }}" class="{{ order|lower }}">{{ column_author }}</a> {% else %} <a href="{{ sort_author }}">{{ column_author }}</a> {% endif %}</td>*/
/*                       <td class="text-right">{% if sort == 'r.rating' %} <a href="{{ sort_rating }}" class="{{ order|lower }}">{{ column_rating }}</a> {% else %} <a href="{{ sort_rating }}">{{ column_rating }}</a> {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'r.status' %} <a href="{{ sort_status }}" class="{{ order|lower }}">{{ column_status }}</a> {% else %} <a href="{{ sort_status }}">{{ column_status }}</a> {% endif %}</td>*/
/*                       <td class="text-left">{% if sort == 'r.date_added' %} <a href="{{ sort_date_added }}" class="{{ order|lower }}">{{ column_date_added }}</a> {% else %} <a href="{{ sort_date_added }}">{{ column_date_added }}</a> {% endif %}</td>*/
/*                       <td class="text-right">{{ column_action }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   */
/*                   {% if reviews %}*/
/*                   {% for review in reviews %}*/
/*                   <tr>*/
/*                     <td class="text-center">{% if review.review_id in selected %}*/
/*                       <input type="checkbox" name="selected[]" value="{{ review.review_id }}" checked="checked" />*/
/*                       {% else %}*/
/*                       <input type="checkbox" name="selected[]" value="{{ review.review_id }}" />*/
/*                       {% endif %}</td>*/
/*                     <td class="text-left">{{ review.name }}</td>*/
/*                     <td class="text-left">{{ review.author }}</td>*/
/*                     <td class="text-right">{{ review.rating }}</td>*/
/*                     <td class="text-left">{{ review.status }}</td>*/
/*                     <td class="text-left">{{ review.date_added }}</td>*/
/*                     <td class="text-right"><a href="{{ review.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                   {% else %}*/
/*                   <tr>*/
/*                     <td class="text-center" colspan="7">{{ text_no_results }}</td>*/
/*                   </tr>*/
/*                   {% endif %}*/
/*                     </tbody>*/
/*                   */
/*                 </table>*/
/*               </div>*/
/*             </form>*/
/*             <div class="row">*/
/*               <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*               <div class="col-sm-6 text-right">{{ results }}</div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function() {*/
/* 	url = 'index.php?route=catalog/review&user_token={{ user_token }}';*/
/* 	*/
/* 	var filter_product = $('input[name=\'filter_product\']').val();*/
/* 	*/
/* 	if (filter_product) {*/
/* 		url += '&filter_product=' + encodeURIComponent(filter_product);*/
/* 	}*/
/* 	*/
/* 	var filter_author = $('input[name=\'filter_author\']').val();*/
/* 	*/
/* 	if (filter_author) {*/
/* 		url += '&filter_author=' + encodeURIComponent(filter_author);*/
/* 	}*/
/* 	*/
/* 	var filter_status = $('select[name=\'filter_status\']').val();*/
/* 	*/
/* 	if (filter_status !== '') {*/
/* 		url += '&filter_status=' + encodeURIComponent(filter_status); */
/* 	}		*/
/* 			*/
/* 	var filter_date_added = $('input[name=\'filter_date_added\']').val();*/
/* 	*/
/* 	if (filter_date_added) {*/
/* 		url += '&filter_date_added=' + encodeURIComponent(filter_date_added);*/
/* 	}*/
/* */
/* 	location = url;*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* //--></script></div>*/
/* {{ footer }}*/
