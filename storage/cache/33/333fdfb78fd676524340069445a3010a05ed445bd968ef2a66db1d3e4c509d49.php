<?php

/* blog/setting.twig */
class __TwigTemplate_13ce905c45064d41e4be664f48458cc4b02bb67fc4923397cad4eb5a79b557ec extends Twig_Template
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
        <button type=\"submit\" form=\"form-setting\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
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
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 23
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 29
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 32
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-setting\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
\t\t\t<li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 34
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 35
        echo (isset($context["tab_option"]) ? $context["tab_option"] : null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 36
        echo (isset($context["tab_image"]) ? $context["tab_image"] : null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
\t\t  <div class=\"tab-pane active\" id=\"tab-general\">
\t\t\t\t<div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 41
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"configblog_name\" value=\"";
        // line 43
        echo (isset($context["configblog_name"]) ? $context["configblog_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
\t\t\t\t<div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-h1\">";
        // line 47
        echo (isset($context["entry_html_h1"]) ? $context["entry_html_h1"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"configblog_html_h1\" value=\"";
        // line 49
        echo (isset($context["configblog_html_h1"]) ? $context["configblog_html_h1"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_html_h1"]) ? $context["entry_html_h1"] : null);
        echo "\" id=\"input-h1\" class=\"form-control\" />
                  </div>
                </div>
\t\t\t\t<div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-meta-title\">";
        // line 53
        echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"configblog_meta_title\" value=\"";
        // line 55
        echo (isset($context["configblog_meta_title"]) ? $context["configblog_meta_title"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
        echo "\" id=\"input-meta-title\" class=\"form-control\" />
                  </div>
                </div>
\t\t\t\t<div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-meta-description\">";
        // line 59
        echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"configblog_meta_description\" rows=\"5\" placeholder=\"";
        // line 61
        echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
        echo "\" id=\"input-meta-description\" class=\"form-control\">";
        echo (isset($context["configblog_meta_description"]) ? $context["configblog_meta_description"] : null);
        echo "</textarea>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword\">";
        // line 65
        echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"configblog_meta_keyword\" rows=\"5\" placeholder=\"";
        // line 67
        echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
        echo "\" id=\"input-meta-keyword\" class=\"form-control\">";
        echo (isset($context["configblog_meta_keyword"]) ? $context["configblog_meta_keyword"] : null);
        echo "</textarea>
                  </div>
                </div>
\t\t  </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <fieldset>
                <legend>";
        // line 73
        echo (isset($context["text_article"]) ? $context["text_article"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 75
        echo (isset($context["help_article_count"]) ? $context["help_article_count"] : null);
        echo "\">";
        echo (isset($context["entry_article_count"]) ? $context["entry_article_count"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 78
        if ((isset($context["configblog_article_count"]) ? $context["configblog_article_count"] : null)) {
            // line 79
            echo "                      <input type=\"radio\" name=\"configblog_article_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 80
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 82
            echo "                      <input type=\"radio\" name=\"configblog_article_count\" value=\"1\" />
                      ";
            // line 83
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 85
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 87
        if ( !(isset($context["configblog_article_count"]) ? $context["configblog_article_count"] : null)) {
            // line 88
            echo "                      <input type=\"radio\" name=\"configblog_article_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 89
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 91
            echo "                      <input type=\"radio\" name=\"configblog_article_count\" value=\"0\" />
                      ";
            // line 92
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 94
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-catalog-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 98
        echo (isset($context["help_article_limit"]) ? $context["help_article_limit"] : null);
        echo "\">";
        echo (isset($context["entry_article_limit"]) ? $context["entry_article_limit"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"configblog_article_limit\" value=\"";
        // line 100
        echo (isset($context["configblog_article_limit"]) ? $context["configblog_article_limit"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_article_limit"]) ? $context["entry_article_limit"] : null);
        echo "\" id=\"input-catalog-limit\" class=\"form-control\" />
                    ";
        // line 101
        if ((isset($context["error_article_limit"]) ? $context["error_article_limit"] : null)) {
            // line 102
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_article_limit"]) ? $context["error_article_limit"] : null);
            echo "</div>
                    ";
        }
        // line 104
        echo "                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-list-description-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 107
        echo (isset($context["help_article_description_length"]) ? $context["help_article_description_length"] : null);
        echo "\">";
        echo (isset($context["entry_article_description_length"]) ? $context["entry_article_description_length"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"configblog_article_description_length\" value=\"";
        // line 109
        echo (isset($context["configblog_article_description_length"]) ? $context["configblog_article_description_length"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_article_description_length"]) ? $context["entry_article_description_length"] : null);
        echo "\" id=\"input-list-description-limit\" class=\"form-control\" />
                    ";
        // line 110
        if ((isset($context["error_article_description_length"]) ? $context["error_article_description_length"] : null)) {
            // line 111
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_article_description_length"]) ? $context["error_article_description_length"] : null);
            echo "</div>
                    ";
        }
        // line 113
        echo "                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-admin-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 116
        echo (isset($context["help_limit_admin"]) ? $context["help_limit_admin"] : null);
        echo "\">";
        echo (isset($context["entry_limit_admin"]) ? $context["entry_limit_admin"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"configblog_limit_admin\" value=\"";
        // line 118
        echo (isset($context["configblog_limit_admin"]) ? $context["configblog_limit_admin"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_limit_admin"]) ? $context["entry_limit_admin"] : null);
        echo "\" id=\"input-admin-limit\" class=\"form-control\" />
                    ";
        // line 119
        if ((isset($context["error_limit_admin"]) ? $context["error_limit_admin"] : null)) {
            // line 120
            echo "                    <div class=\"text-danger\">";
            echo (isset($context["error_limit_admin"]) ? $context["error_limit_admin"] : null);
            echo "</div>
                    ";
        }
        // line 122
        echo "                  </div>
                </div>
\t\t\t\t<div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 125
        echo (isset($context["help_blog_menu"]) ? $context["help_blog_menu"] : null);
        echo "\">";
        echo (isset($context["entry_blog_menu"]) ? $context["entry_blog_menu"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 128
        if ((isset($context["configblog_blog_menu"]) ? $context["configblog_blog_menu"] : null)) {
            // line 129
            echo "                      <input type=\"radio\" name=\"configblog_blog_menu\" value=\"1\" checked=\"checked\" />
                      ";
            // line 130
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 132
            echo "                      <input type=\"radio\" name=\"configblog_blog_menu\" value=\"1\" />
                      ";
            // line 133
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 135
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 137
        if ( !(isset($context["configblog_blog_menu"]) ? $context["configblog_blog_menu"] : null)) {
            // line 138
            echo "                      <input type=\"radio\" name=\"configblog_blog_menu\" value=\"0\" checked=\"checked\" />
                      ";
            // line 139
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 141
            echo "                      <input type=\"radio\" name=\"configblog_blog_menu\" value=\"0\" />
                      ";
            // line 142
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 144
        echo "                    </label>
                  </div>
                </div>
\t\t\t\t<div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 148
        echo (isset($context["entry_article_download"]) ? $context["entry_article_download"] : null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 151
        if ((isset($context["configblog_article_download"]) ? $context["configblog_article_download"] : null)) {
            // line 152
            echo "                      <input type=\"radio\" name=\"configblog_article_download\" value=\"1\" checked=\"checked\" />
                      ";
            // line 153
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 155
            echo "                      <input type=\"radio\" name=\"configblog_article_download\" value=\"1\" />
                      ";
            // line 156
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 158
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 160
        if ( !(isset($context["configblog_article_download"]) ? $context["configblog_article_download"] : null)) {
            // line 161
            echo "                      <input type=\"radio\" name=\"configblog_article_download\" value=\"0\" checked=\"checked\" />
                      ";
            // line 162
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 164
            echo "                      <input type=\"radio\" name=\"configblog_article_download\" value=\"0\" />
                      ";
            // line 165
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 167
        echo "                    </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 172
        echo (isset($context["text_review"]) ? $context["text_review"] : null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 174
        echo (isset($context["help_review"]) ? $context["help_review"] : null);
        echo "\">";
        echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 177
        if ((isset($context["configblog_review_status"]) ? $context["configblog_review_status"] : null)) {
            // line 178
            echo "                      <input type=\"radio\" name=\"configblog_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 179
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 181
            echo "                      <input type=\"radio\" name=\"configblog_review_status\" value=\"1\" />
                      ";
            // line 182
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 184
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 186
        if ( !(isset($context["configblog_review_status"]) ? $context["configblog_review_status"] : null)) {
            // line 187
            echo "                      <input type=\"radio\" name=\"configblog_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 188
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 190
            echo "                      <input type=\"radio\" name=\"configblog_review_status\" value=\"0\" />
                      ";
            // line 191
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 193
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 197
        echo (isset($context["help_review_guest"]) ? $context["help_review_guest"] : null);
        echo "\">";
        echo (isset($context["entry_review_guest"]) ? $context["entry_review_guest"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 200
        if ((isset($context["configblog_review_guest"]) ? $context["configblog_review_guest"] : null)) {
            // line 201
            echo "                      <input type=\"radio\" name=\"configblog_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 202
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 204
            echo "                      <input type=\"radio\" name=\"configblog_review_guest\" value=\"1\" />
                      ";
            // line 205
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 207
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 209
        if ( !(isset($context["configblog_review_guest"]) ? $context["configblog_review_guest"] : null)) {
            // line 210
            echo "                      <input type=\"radio\" name=\"configblog_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 211
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 213
            echo "                      <input type=\"radio\" name=\"configblog_review_guest\" value=\"0\" />
                      ";
            // line 214
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 216
        echo "                    </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 220
        echo (isset($context["help_review_mail"]) ? $context["help_review_mail"] : null);
        echo "\">";
        echo (isset($context["entry_review_mail"]) ? $context["entry_review_mail"] : null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\">
                      ";
        // line 223
        if ((isset($context["configblog_review_mail"]) ? $context["configblog_review_mail"] : null)) {
            // line 224
            echo "                      <input type=\"radio\" name=\"configblog_review_mail\" value=\"1\" checked=\"checked\" />
                      ";
            // line 225
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        } else {
            // line 227
            echo "                      <input type=\"radio\" name=\"configblog_review_mail\" value=\"1\" />
                      ";
            // line 228
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                      ";
        }
        // line 230
        echo "                    </label>
                    <label class=\"radio-inline\">
                      ";
        // line 232
        if ( !(isset($context["configblog_review_mail"]) ? $context["configblog_review_mail"] : null)) {
            // line 233
            echo "                      <input type=\"radio\" name=\"configblog_review_mail\" value=\"0\" checked=\"checked\" />
                      ";
            // line 234
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        } else {
            // line 236
            echo "                      <input type=\"radio\" name=\"configblog_review_mail\" value=\"0\" />
                      ";
            // line 237
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                      ";
        }
        // line 239
        echo "                    </label>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-image-category-width\">";
        // line 246
        echo (isset($context["entry_image_category"]) ? $context["entry_image_category"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"row\">
                    <div class=\"col-sm-6\">
                      <input type=\"text\" name=\"configblog_image_category_width\" value=\"";
        // line 250
        echo (isset($context["configblog_image_category_width"]) ? $context["configblog_image_category_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\" />
                    </div>
                    <div class=\"col-sm-6\">
                      <input type=\"text\" name=\"configblog_image_category_height\" value=\"";
        // line 253
        echo (isset($context["configblog_image_category_height"]) ? $context["configblog_image_category_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
                    </div>
                  </div>
                  ";
        // line 256
        if ((isset($context["error_image_category"]) ? $context["error_image_category"] : null)) {
            // line 257
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_image_category"]) ? $context["error_image_category"] : null);
            echo "</div>
                  ";
        }
        // line 259
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-image-article-width\">";
        // line 262
        echo (isset($context["entry_image_article"]) ? $context["entry_image_article"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"row\">
                    <div class=\"col-sm-6\">
                      <input type=\"text\" name=\"configblog_image_article_width\" value=\"";
        // line 266
        echo (isset($context["configblog_image_article_width"]) ? $context["configblog_image_article_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-article-width\" class=\"form-control\" />
                    </div>
                    <div class=\"col-sm-6\">
                      <input type=\"text\" name=\"configblog_image_article_height\" value=\"";
        // line 269
        echo (isset($context["configblog_image_article_height"]) ? $context["configblog_image_article_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
                    </div>
                  </div>
                  ";
        // line 272
        if ((isset($context["error_image_article"]) ? $context["error_image_article"] : null)) {
            // line 273
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_image_article"]) ? $context["error_image_article"] : null);
            echo "</div>
                  ";
        }
        // line 275
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-image-related\">";
        // line 278
        echo (isset($context["entry_image_related"]) ? $context["entry_image_related"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"row\">
                    <div class=\"col-sm-6\">
                      <input type=\"text\" name=\"configblog_image_related_width\" value=\"";
        // line 282
        echo (isset($context["configblog_image_related_width"]) ? $context["configblog_image_related_width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-image-related\" class=\"form-control\" />
                    </div>
                    <div class=\"col-sm-6\">
                      <input type=\"text\" name=\"configblog_image_related_height\" value=\"";
        // line 285
        echo (isset($context["configblog_image_related_height"]) ? $context["configblog_image_related_height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" class=\"form-control\" />
                    </div>
                  </div>
                  ";
        // line 288
        if ((isset($context["error_image_related"]) ? $context["error_image_related"] : null)) {
            // line 289
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_image_related"]) ? $context["error_image_related"] : null);
            echo "</div>
                  ";
        }
        // line 291
        echo "                </div>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
  </div>
";
        // line 299
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "blog/setting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  715 => 299,  705 => 291,  699 => 289,  697 => 288,  689 => 285,  681 => 282,  674 => 278,  669 => 275,  663 => 273,  661 => 272,  653 => 269,  645 => 266,  638 => 262,  633 => 259,  627 => 257,  625 => 256,  617 => 253,  609 => 250,  602 => 246,  593 => 239,  588 => 237,  585 => 236,  580 => 234,  577 => 233,  575 => 232,  571 => 230,  566 => 228,  563 => 227,  558 => 225,  555 => 224,  553 => 223,  545 => 220,  539 => 216,  534 => 214,  531 => 213,  526 => 211,  523 => 210,  521 => 209,  517 => 207,  512 => 205,  509 => 204,  504 => 202,  501 => 201,  499 => 200,  491 => 197,  485 => 193,  480 => 191,  477 => 190,  472 => 188,  469 => 187,  467 => 186,  463 => 184,  458 => 182,  455 => 181,  450 => 179,  447 => 178,  445 => 177,  437 => 174,  432 => 172,  425 => 167,  420 => 165,  417 => 164,  412 => 162,  409 => 161,  407 => 160,  403 => 158,  398 => 156,  395 => 155,  390 => 153,  387 => 152,  385 => 151,  379 => 148,  373 => 144,  368 => 142,  365 => 141,  360 => 139,  357 => 138,  355 => 137,  351 => 135,  346 => 133,  343 => 132,  338 => 130,  335 => 129,  333 => 128,  325 => 125,  320 => 122,  314 => 120,  312 => 119,  306 => 118,  299 => 116,  294 => 113,  288 => 111,  286 => 110,  280 => 109,  273 => 107,  268 => 104,  262 => 102,  260 => 101,  254 => 100,  247 => 98,  241 => 94,  236 => 92,  233 => 91,  228 => 89,  225 => 88,  223 => 87,  219 => 85,  214 => 83,  211 => 82,  206 => 80,  203 => 79,  201 => 78,  193 => 75,  188 => 73,  177 => 67,  172 => 65,  163 => 61,  158 => 59,  149 => 55,  144 => 53,  135 => 49,  130 => 47,  121 => 43,  116 => 41,  108 => 36,  104 => 35,  100 => 34,  95 => 32,  89 => 29,  85 => 27,  77 => 23,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-setting" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-setting" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/* 			<li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             <li><a href="#tab-option" data-toggle="tab">{{ tab_option }}</a></li>*/
/*             <li><a href="#tab-image" data-toggle="tab">{{ tab_image }}</a></li>*/
/*           </ul>*/
/*           <div class="tab-content">*/
/* 		  <div class="tab-pane active" id="tab-general">*/
/* 				<div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-name">{{ entry_name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="configblog_name" value="{{ configblog_name }}" placeholder="{{ entry_name }}" id="input-name" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/* 				<div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-h1">{{ entry_html_h1 }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="configblog_html_h1" value="{{ configblog_html_h1 }}" placeholder="{{ entry_html_h1 }}" id="input-h1" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/* 				<div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-meta-title">{{ entry_meta_title }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="configblog_meta_title" value="{{ configblog_meta_title }}" placeholder="{{ entry_meta_title }}" id="input-meta-title" class="form-control" />*/
/*                   </div>*/
/*                 </div>*/
/* 				<div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-meta-description">{{ entry_meta_description }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="configblog_meta_description" rows="5" placeholder="{{ entry_meta_description }}" id="input-meta-description" class="form-control">{{ configblog_meta_description }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-meta-keyword">{{ entry_meta_keyword }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="configblog_meta_keyword" rows="5" placeholder="{{ entry_meta_keyword }}" id="input-meta-keyword" class="form-control">{{ configblog_meta_keyword }}</textarea>*/
/*                   </div>*/
/*                 </div>*/
/* 		  </div>*/
/*             <div class="tab-pane" id="tab-option">*/
/*               <fieldset>*/
/*                 <legend>{{ text_article }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_article_count }}">{{ entry_article_count }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if configblog_article_count %}*/
/*                       <input type="radio" name="configblog_article_count" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="configblog_article_count" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not configblog_article_count %}*/
/*                       <input type="radio" name="configblog_article_count" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="configblog_article_count" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-catalog-limit"><span data-toggle="tooltip" title="{{ help_article_limit }}">{{ entry_article_limit }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="configblog_article_limit" value="{{ configblog_article_limit }}" placeholder="{{ entry_article_limit }}" id="input-catalog-limit" class="form-control" />*/
/*                     {% if error_article_limit %}*/
/*                     <div class="text-danger">{{ error_article_limit }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-list-description-limit"><span data-toggle="tooltip" title="{{ help_article_description_length }}">{{ entry_article_description_length }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="configblog_article_description_length" value="{{ configblog_article_description_length }}" placeholder="{{ entry_article_description_length }}" id="input-list-description-limit" class="form-control" />*/
/*                     {% if error_article_description_length %}*/
/*                     <div class="text-danger">{{ error_article_description_length }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group required">*/
/*                   <label class="col-sm-2 control-label" for="input-admin-limit"><span data-toggle="tooltip" title="{{ help_limit_admin }}">{{ entry_limit_admin }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="configblog_limit_admin" value="{{ configblog_limit_admin }}" placeholder="{{ entry_limit_admin }}" id="input-admin-limit" class="form-control" />*/
/*                     {% if error_limit_admin %}*/
/*                     <div class="text-danger">{{ error_limit_admin }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/* 				<div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_blog_menu }}">{{ entry_blog_menu }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if configblog_blog_menu %}*/
/*                       <input type="radio" name="configblog_blog_menu" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="configblog_blog_menu" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not configblog_blog_menu %}*/
/*                       <input type="radio" name="configblog_blog_menu" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="configblog_blog_menu" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/* 				<div class="form-group">*/
/*                   <label class="col-sm-2 control-label">{{ entry_article_download }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if configblog_article_download %}*/
/*                       <input type="radio" name="configblog_article_download" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="configblog_article_download" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not configblog_article_download %}*/
/*                       <input type="radio" name="configblog_article_download" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="configblog_article_download" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ text_review }}</legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_review }}">{{ entry_review }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if configblog_review_status %}*/
/*                       <input type="radio" name="configblog_review_status" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="configblog_review_status" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not configblog_review_status %}*/
/*                       <input type="radio" name="configblog_review_status" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="configblog_review_status" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_review_guest }}">{{ entry_review_guest }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if configblog_review_guest %}*/
/*                       <input type="radio" name="configblog_review_guest" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="configblog_review_guest" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not configblog_review_guest %}*/
/*                       <input type="radio" name="configblog_review_guest" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="configblog_review_guest" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="{{ help_review_mail }}">{{ entry_review_mail }}</span></label>*/
/*                   <div class="col-sm-10">*/
/*                     <label class="radio-inline">*/
/*                       {% if configblog_review_mail %}*/
/*                       <input type="radio" name="configblog_review_mail" value="1" checked="checked" />*/
/*                       {{ text_yes }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="configblog_review_mail" value="1" />*/
/*                       {{ text_yes }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                     <label class="radio-inline">*/
/*                       {% if not configblog_review_mail %}*/
/*                       <input type="radio" name="configblog_review_mail" value="0" checked="checked" />*/
/*                       {{ text_no }}*/
/*                       {% else %}*/
/*                       <input type="radio" name="configblog_review_mail" value="0" />*/
/*                       {{ text_no }}*/
/*                       {% endif %}*/
/*                     </label>*/
/*                   </div>*/
/*                 </div>*/
/*               </fieldset>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-image">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-image-category-width">{{ entry_image_category }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="row">*/
/*                     <div class="col-sm-6">*/
/*                       <input type="text" name="configblog_image_category_width" value="{{ configblog_image_category_width }}" placeholder="{{ entry_width }}" id="input-image-category-width" class="form-control" />*/
/*                     </div>*/
/*                     <div class="col-sm-6">*/
/*                       <input type="text" name="configblog_image_category_height" value="{{ configblog_image_category_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/*                     </div>*/
/*                   </div>*/
/*                   {% if error_image_category %}*/
/*                   <div class="text-danger">{{ error_image_category }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-image-article-width">{{ entry_image_article }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="row">*/
/*                     <div class="col-sm-6">*/
/*                       <input type="text" name="configblog_image_article_width" value="{{ configblog_image_article_width }}" placeholder="{{ entry_width }}" id="input-image-article-width" class="form-control" />*/
/*                     </div>*/
/*                     <div class="col-sm-6">*/
/*                       <input type="text" name="configblog_image_article_height" value="{{ configblog_image_article_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/*                     </div>*/
/*                   </div>*/
/*                   {% if error_image_article %}*/
/*                   <div class="text-danger">{{ error_image_article }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-image-related">{{ entry_image_related }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="row">*/
/*                     <div class="col-sm-6">*/
/*                       <input type="text" name="configblog_image_related_width" value="{{ configblog_image_related_width }}" placeholder="{{ entry_width }}" id="input-image-related" class="form-control" />*/
/*                     </div>*/
/*                     <div class="col-sm-6">*/
/*                       <input type="text" name="configblog_image_related_height" value="{{ configblog_image_related_height }}" placeholder="{{ entry_height }}" class="form-control" />*/
/*                     </div>*/
/*                   </div>*/
/*                   {% if error_image_related %}*/
/*                   <div class="text-danger">{{ error_image_related }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   </div>*/
/* {{ footer }}*/
