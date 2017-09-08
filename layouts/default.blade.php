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
    <body class="archive {{strpos($_SERVER['REQUEST_URI'],'kontak') !== false?'contactus':'aboutus'}} shoppg woocommerce woocommerce-page body_filled article_style_stretch layout_excerpt scheme_original top_panel_above wpb-js-composer single-product vc_responsive safari chrome top_panel_fixed page blogsidebar">
        <div class="body_wrap">
            <div class="page_wrap">
                <div class="top_panel_fixed_wrap"></div>
                {{ Theme::partial('header') }} 
                {{ Theme::place('content') }}
                {{ Theme::partial('footer') }} 
            </div>
        </div>
        <a href="#" class="scroll_to_top" title="Scroll to top"></a>
        <div class="custom_html_section"></div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
        {{ Theme::partial('defaultjs') }} 
        {{ Theme::asset()->scripts() }}
        {{ Theme::asset()->container('footer')->scripts() }}
        {{ Theme::partial('analytic') }} 
        <div id="goToTop" style="display: none;"><span class="fa fa-long-arrow-up"></span></div>
    </body>
</html>