<!DOCTYPE html>
<!--[if IE 9]> <html class="ie9 no-js" lang="ID"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 
<html class="scheme_original" lang="ID">
<!--<![endif]-->
    <head>
        <title>{{ Theme::place('title') }}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        {{ Theme::partial('seostuff') }} 
        {{ Theme::partial('defaultcss') }} 
        {{ Theme::asset()->styles() }} 
    </head>
    <body class="home page body_filled scheme_original top_panel_above sidebar_hide">
        <div class="body_wrap">
            <div class="page_wrap">
                <div class="top_panel_fixed_wrap"></div>
                {{ Theme::partial('header') }} 
                {{ Theme::partial('slider') }} 
                <div class="page_content_wrap page_paddings_no">
                    <div class="content_wrap">
                        <div class="content">
                            {{ Theme::place('content') }}
                            <section class="related_wrap related_wrap_empty"></section>
                        </div>
                    </div>
                </div>
                {{ Theme::partial('footer') }} 
            </div>
        </div>
        <a href="#" class="scroll_to_top" title="Scroll to top"></a>
        <div class="custom_html_section"></div>
            
        {{ Theme::partial('defaultjs') }} 
        {{ Theme::partial('analytic') }} 
        <div id="goToTop" style="display: none;"><span class="fa fa-long-arrow-up"></span></div>
    </body>
</html>