<!-- CSS styles  -->
{{ favicon() }} 

<link property="stylesheet" rel='stylesheet' href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700|Fredoka+One|Open+Sans:300,400,600,700,800|Raleway:100,200,300,400,500,600,700,800,900|Ubuntu:300,300i,400,400i,500,500i,700,700i&#038;ver=4.6.3' type='text/css' media='all' />
@if($tema->isiCss=='')
	{{ generate_theme_css('junotoys/assets/css/style.css?v=001') }} 
@else
	{{ generate_theme_css('junotoys/assets/css/editstyle.css?v=001') }} 
@endif
{{ generate_theme_css('junotoys/assets/css/socials.css') }} 
{{ generate_theme_css('junotoys/assets/css/fontello/css/fontello.css') }} 
{{ generate_theme_css('junotoys/assets/css/core.animation.css') }} 
{{ generate_theme_css('junotoys/assets/css/theme.shortcodes.css') }} 
{{ generate_theme_css('junotoys/assets/css/theme.css') }} 
{{ generate_theme_css('junotoys/assets/css/custom/custom.css') }} 
{{ generate_theme_css('junotoys/assets/css/custom/plugins.css') }} 
{{ generate_theme_css('junotoys/assets/css/core.messages.css') }} 
{{ generate_theme_css('junotoys/assets/js/vendor/essgrid/settings.css') }} 
{{ generate_theme_css('junotoys/assets/js/vendor/revslider/settings.css') }} 
{{ generate_theme_css('junotoys/assets/js/vendor/woo/woocommerce-smallscreen.css') }} 
{{ generate_theme_css('junotoys/assets/js/vendor/woo/woocommerce-layout.css') }} 
{{ generate_theme_css('junotoys/assets/js/vendor/woo/woocommerce.css') }} 
{{ generate_theme_css('junotoys/assets/js/vendor/woo/plugin.woocommerce.css') }} 
{{ generate_theme_css('junotoys/assets/js/vendor/mediaelement/mediaelementplayer.min.css') }} 
{{ generate_theme_css('junotoys/assets/js/vendor/grid.layout/grid.layout.min.css') }} 
{{ generate_theme_css('junotoys/assets/js/vendor/magnific/magnific-popup.css') }} 
{{ generate_theme_css('junotoys/assets/js/vendor/swiper/swiper.min.css') }} 
{{ generate_theme_css('junotoys/assets/js/vendor/essgrid/lightbox.css') }}
{{ generate_theme_css('junotoys/assets/css/responsive.css') }} 
{{ generate_theme_css('junotoys/assets/js/vendor/woo/prettyPhoto.css') }} 
