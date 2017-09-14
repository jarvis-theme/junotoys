<header class="top_panel_wrap top_panel_style_4 scheme_original">
    <div class="top_panel_wrap_inner top_panel_inner_style_4 top_panel_position_above">
        <div class="top_panel_top">
            <div class="content_wrap clearfix">
                <div class="top_panel_top_contact_area">
                    Contact us on <a href="tel:{{$toko->hp}}">{{$toko->hp}}</a> or
                    <a href="mailto:{{$toko->email}}">{{$toko->email}}</a>
                </div>
                <div class="top_panel_top_user_area">
                    <ul class="menu_user_nav" id="menu_user">
                        @if(is_login())
                        <li class="menu_user_register">
                            <a href="{{ url('member') }}" class="popup_link popup_register_link icon-edit27 inited" href="#popup_registration">{{user()->nama}}</a>
                        </li>

                        <li class="menu_user_login">
                            {{HTML::link('logout', 'Logout')}}
                        </li>
                        @else
                        <li class="menu_user_register">
                            <a class="popup_link popup_register_link icon-edit27 inited" href="#popup_registration">Register</a>
                        </li>

                        <li class="menu_user_login">
                            <a class="popup_link popup_login_link icon-lock29 inited" href="#popup_login">Login</a>
                        </li>
                        <!-- <li><a href="{{ url('member') }}" id="customer_login_link">Login</a></li>
                        <li><a href="{{ url('member/create') }}" id="customer_register_link">Register</a></li> -->
                        @endif
                        

                        <li class="menu_user_cart" id="shoppingcartplace">
                            {{ shopping_cart() }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="top_panel_middle">
            <div class="content_wrap">
                <div class="columns_wrap">
                    <div class="contact_logo column-1_4">
                        <div class="logo">
                            <a href="/">
                                {{ HTML::image(logo_image_url(), 'logo '.strtolower(Theme::place('title')), array('class'=>'logo_main', 'itemprop'=>'logo', 'srcset'=>logo_image_url(), 'style'=>'max-height: 45px;')) }}
                                {{ HTML::image(logo_image_url(), 'logo '.strtolower(Theme::place('title')), array('class'=>'logo_fixed', 'itemprop'=>'logo', 'srcset'=>logo_image_url(), 'style'=>'max-height: 45px;')) }}
                            </a>
                        </div>
                    </div>
                    <div class="menu_main_wrap column-3_4">
                        <div class="search_wrap search_style_fullscreen search_state_closed top_panel_icon">
                            <div class="search_form_wrap">
                                <form action="{{ url('search') }}" class="search_form" method="post" role="search">
                                    <button class="search_submit icon-search" title="Open search" type="submit"></button>
                                    <input class="search_field" name="search" placeholder="Search" type="text" value="">
                                    <a class="search_close icon-cancel"></a>
                                </form>
                            </div>
                        </div>
                        
                        <nav class="menu_main_nav_area menu_hover_fade">
                            <ul id="menu_main" class="menu_main_nav">
                                @foreach(main_menu()->link as $key=>$link)
                                    <li class="menu-item {{Request::url()==menu_url($link)?'current-menu-item current_page_item':''}}">
                                        <a href={{menu_url($link)}}>
                                            <span>{{$link->nama}}</span>
                                        </a>
                                    </li>
                                @endforeach
                                <!-- <li class="menu-item"><a href="{{url::to('/')}}"><span>Home</span></a></li>
                                @if(count(list_category()) > 0)
                                    @foreach(list_category () as $key=>$menu)
                                        @if($menu->parent=='0')
                                        <li class="menu-item {{ $menu->anak->count()>0 ? 'menu-item-has-children' : ''}}"><a href="{{ category_url($menu) }}"><span>{{ ucwords($menu->nama) }}</span></a>
                                            @if($menu->anak->count()>0)
                                            <ul class="sub-menu">
                                                @foreach($menu->anak as $key => $submenu)
                                                <li class="menu-item {{ $submenu->anak->count()>0 ? 'menu-item-has-children' : ''}}"><a href="{{ category_url($submenu) }}"><span>{{ ucwords($submenu->nama) }}</span></a>
                                                    @if($submenu->anak->count() > 0)
                                                    <ul class="sub-menu">
                                                        @foreach($submenu->anak as $submenu2)
                                                        <li class="menu-item"><a href="{{ category_url($submenu2) }}"><span>{{ ucwords($submenu2->nama) }}</span></a></li>
                                                        @endforeach
                                                    </ul>
                                                    @endif
                                                </li>
                                                @endforeach
                                            </ul>
                                            @endif
                                        </li>
                                        @endif
                                    @endforeach
                                @endif -->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="header_mobile">
    <div class="content_wrap">
        <div class="menu_button icon-menu"></div>
        <div class="logo">
            <a href="index.html">
                {{ HTML::image(logo_image_url(), 'logo '.strtolower(Theme::place('title')), array('class'=>'logo_main', 'itemprop'=>'logo', 'srcset'=>logo_image_url(), 'style'=>'max-height: 75px;')) }}
            </a>
        </div>
        <div class="menu_main_cart top_panel_icon">
            <a href="#" class="top_panel_cart_button" data-items="0" data-summa="$0.00">
                <span class="contact_icon icon-basket"></span>
                <span class="contact_label contact_cart_label">Your cart:</span>
                <span class="contact_cart_totals">
                    <span class="cart_items">0 Items</span> -
                    <span class="cart_summa">$0.00</span>
                </span>
            </a>
            <ul class="widget_area sidebar_cart sidebar">
                <li>
                    <div class="widget woocommerce widget_shopping_cart">
                        <div class="hide_cart_widget_if_empty">
                            <div class="widget_shopping_cart_content">
                                <ul class="cart_list product_list_widget ">
                                    <li class="empty">No products in the cart.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="side_wrap">
        <div class="close">
            Close
        </div>
        <div class="panel_top">
            <nav class="menu_main_nav_area">
                <ul id="menu_mobile" class="menu_main_nav">
                    <li class="menu-item current-menu-ancestor current-menu-parent menu-item-has-children"><a href="/"><span>Home</span></a></li>
                    @if(count(list_category()) > 0)
                        @foreach(list_category () as $key=>$menu)
                            @if($menu->parent=='0')
                            <li class="menu-item {{ $menu->anak->count()>0 ? 'menu-item-has-children' : ''}}"><a href="{{ category_url($menu) }}"><span>{{ ucwords($menu->nama) }}</span></a>
                                @if($menu->anak->count()>0)
                                <ul class="sub-menu">
                                    @foreach($menu->anak as $key => $submenu)
                                    <li class="menu-item {{ $submenu->anak->count()>0 ? 'menu-item-has-children' : ''}}"><a href="{{ category_url($submenu) }}"><span>{{ ucwords($submenu->nama) }}</span></a>
                                        @if($submenu->anak->count() > 0)
                                        <ul class="sub-menu">
                                            @foreach($submenu->anak as $submenu2)
                                            <li class="menu-item"><a href="{{ category_url($submenu2) }}"><span>{{ ucwords($submenu2->nama) }}</span></a></li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endif
                        @endforeach
                    @endif
                </ul>
            </nav>
            <div class="search_wrap search_style_ search_state_fixed search_ajax">
                <div class="search_form_wrap">
                    <form action="{{ url('search') }}" class="search_form" method="post" role="search">
                        <button class="search_submit icon-search" title="Start search" type="submit"></button>
                        <input class="search_field" name="search" placeholder="Search" type="text" value="">
                    </form>
                </div>
                <div class="search_results widget_area scheme_original">
                    <a class="search_results_close icon-cancel"></a>
                    <div class="search_results_content"></div>
                </div>
            </div>
            <div class="login">
                <a href="#popup_login" class="popup_link popup_login_link icon-user">Login</a>
            </div>
            <div class="login">
                <a href="#popup_registration" class="popup_link popup_register_link icon-pencil">Register</a>
            </div>
        </div>
        <div class="panel_bottom"></div>
    </div>
    <div class="mask"></div>
</div>

<div class="popup_wrap popup_registration" id="popup_registration">
    <a class="popup_close" href="#"></a>
    <div class="form_wrap">
        <form action="{{ url('member') }}" class="popup_form" id="" method="post" name="registration_form">
            <input name="redirect_to" type="hidden" value="">
            <div class="form_left">
                <div class="popup_form_field login_field iconed_field icon-user">
                    <input id="registration_username" name="nama" placeholder="User name" type="text" value="{{ Input::old('nama') }}">
                </div>
                <div class="popup_form_field email_field iconed_field icon-mail">
                    <input id="registration_email" name="email" placeholder="E-mail" type="text" value="{{ Input::old('email') }}">
                </div>
                <div class="popup_form_field  iconed_field icon-phone">
                    <input id="registration_phone" name="telp" placeholder="Phone" type="text" value="{{ Input::old('telp') }}">
                </div>
                <div class="popup_form_field  iconed_field icon-location hide">
                    <input id="registration_postal" name="kodepos" placeholder="Postal Code" type="hidden" value="0">
                </div>
                <div class="popup_form_field  iconed_field icon-home hide">
                    <input id="registration_address" name="alamat" placeholder="Address" type="hidden" value=" " >
                </div>
                <div class="popup_form_field agree_field">
                    <input id="registration_agree" name="readme" type="checkbox" value="1" checked>
                    <label for="registration_agree">I agree with</label>
                    <a href="{{url('service')}}" target="_blank">Terms & Conditions</a>
                </div>
                <div class="popup_form_field">
                    <input class="submit_button" type="submit" value="Sign Up">
                </div>
            </div>
            <div class="form_right">
                <div class="popup_form_field password_field iconed_field icon-lock">
                    <input id="registration_pwd" name="password" placeholder="Password" type="password" value="">
                </div>
                <div class="popup_form_field password_field iconed_field icon-lock">
                    <input id="registration_pwd2" name="password_confirmation" placeholder="Confirm Password" type="password" value="">
                </div>
                <div class="popup_form_field description_field">
                    Minimum 6 characters
                </div>
                <input name="negara" type="hidden" value="1">
                <input name="provinsi" type="hidden" value="0">
                <input name="kota" type="hidden" value="0">
                
            </div>
        </form>
        <div class="result message_block"></div>
    </div>
</div>
        
<div class="popup_wrap popup_login" id="popup_login">
    <a class="popup_close" href="#"></a>
    <div class="form_wrap">
        <div class="">
            <form action="{{url('member/login')}}" class="popup_form" id="" method="post" name="login_form">
                <div class="popup_form_field login_field iconed_field icon-user">
                    <input id="log" name="email" placeholder="Login or Email" type="text" value="">
                </div>
                <div class="popup_form_field password_field iconed_field icon-lock">
                    <input id="password" name="password" placeholder="Password" type="password" value="">
                </div>
                <div class="popup_form_field remember_field">
                    <a class="forgot_password" href="{{url('member/forget-password')}}">Forgot password?</a>
                    <input id="rememberme" name="rememberme" type="checkbox" value="forever">
                    <label for="rememberme">Remember me</label>
                </div>
                <div class="popup_form_field">
                    <input class="submit_button" type="submit" value="Login">
                </div>
            </form>
        </div>
        <!-- <div class="form_right">
            <div class="login_socials_title">
                You can login using your social profile
            </div>
            <div class="loginSoc login_plugin">
                <div class="social-login-widget">
                    <p>Connect with:</p>
                    <div class="social-login-provider-list">
                         <a href="#" rel="nofollow" title="Connect with Facebook">
                            <img alt="" src="images/facebook.png" title="Connect with Facebook">
                        </a>
                        <a href="#" rel="nofollow" title="Connect with Google">
                            <img alt="" src="images/google.png" title="Connect with Google">
                        </a>
                        <a href="#" rel="nofollow" title="Connect with Twitter">
                            <img alt="" src="images/twitter.png" title="Connect with Twitter">
                        </a>
                    </div> 
                </div>
            </div>
        </div>-->
    </div>
</div>

<div class="popup_wrap popup_reset" id="popup_reset">
    <a class="popup_close" href="#"></a>
    <h3 class="widget-title">Password Recovery</h3>
    <p>Enter Your Email and We Will Send the Instructions</p>
    <hr />
    <div class="">
        <form action="{{ url('member/forgetpassword' )}}" class="popup_form" id="" method="post" name="login_form">
            <div class="popup_form_field login_field iconed_field icon-user">
                <input id="log" name="recoveryEmail" placeholder="Login or Email" type="text" value="">
            </div>
            <div class="popup_form_field remember_field">
                <a class="forgot_password" href="#">Forgot password?</a>
                <input id="rememberme" name="rememberme" type="checkbox" value="forever">
                <label for="rememberme">Remember me</label>
            </div>
            <div class="popup_form_field">
                <input class="submit_button" type="submit" value="Reset Password">
            </div>
        </form>
    </div>
</div>