<div class="top_panel_title top_panel_style_6 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_6 title_present_inner breadcrumbs_present_inner">
        <div class="content_wrap">
            <h1 class="page_title ">Shop</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="{{url('/')}}">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Shop</span>
            </div>
        </div>
    </div>
</div>
<div class="page_content_wrap page_paddings_yes sidebar_show sidebar_left">
    <div class="content_wrap">
        <div style="float:right;" class="content">
            <div class="list_products shop_mode_thumbs">
                <nav class="woocommerce-breadcrumb">
                    <a href="index.html">Home</a>&nbsp;&#47;&nbsp;Shop
                </nav>
                <div class="mode_buttons">
                    <form action="shop.html" method="post">
                        <a href="#" class="woocommerce_thumbs icon-th" title="Show products as thumbs"></a>
                        <!-- <a href="shop-list.html" class="woocommerce_list icon-th-list" title="Show products as list"></a> -->
                    </form>
                </div>
                <p class="woocommerce-result-count">Showing all {{list_product(null, @$category, @$collection)->count()}} results</p>

                <form class="woocommerce-ordering">

                    <select class="category-selections-select" name="sort" id="sort" data-rel="{{URL::current()}}">
                        <option>Sort by</option>
                        <option value="az" {{Input::get('sort')=='az'?'selected="selected"':''}}>Name A - Z</option>
                        <option value="za" {{Input::get('sort')=='za'?'selected="selected"':''}}>Name Z - A</option>
                        <option value="high" {{Input::get('sort')=='high'?'selected="selected"':''}}>Price high - low</option>
                        <option value="low" {{Input::get('sort')=='low'?'selected="selected"':''}}>Price low - high</option>
                        <option value="new" {{Input::get('sort')=='new'?'selected="selected"':''}}>Date Newest</option>
                        <option value="old" {{Input::get('sort')=='old'?'selected="selected"':''}}>Date Oldest</option>
                    </select>
                </form>
                <ul class="products">

                    @foreach(list_product(null, @$category, @$collection) as $myproduk)
                        <li class="product has-post-thumbnail column-1_3 first featured">
                            <div class="post_item_wrap">
                                <div class="post_featured">
                                    <div class="post_thumb">
                                        <a class="hover_icon hover_icon_link" href="{{ product_url($myproduk) }}">
                                            <img src="{{ product_image_url($myproduk->gambar1,'medium') }}" class="attachment-shop_catalog size-shop_catalog" alt="{{ $myproduk->nama }}" title="product_4"/>
                                        </a>
                                    </div>
                                </div>
                                <div class="post_content">
                                    <h3>
                                        <a href="{{ product_url($myproduk) }}">{{ $myproduk->nama }}</a>
                                    </h3>
                                    <span class="price">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol"></span>{{ price($myproduk->hargaJual) }}
                                        </span>
                                    </span>
                                    <a rel="nofollow" href="{{ product_url($myproduk) }}" data-quantity="1" data-product_id="{{$myproduk->id}}" data-product_sku="{{$myproduk->barcode}}" class="button product_type_simple add_to_cart_button ajax_add_to_cart">View</a>
                                </div>
                            </div>
                        </li>
                    @endforeach

                    

                </ul>
            </div>
        </div>
        <div style="float:left;" class="sidebar widget_area scheme_original" role="complementary">
            <div class="sidebar_inner widget_area_inner">
                @if(list_category()->count() > 0)
                <aside id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
                    <h5 class="widget_title">Categories</h5>
                    <ul class="product-categories">
                        @foreach(list_category() as $side_menu)
                            @if($side_menu->parent == '0')
                                @if($side_menu->anak->count() < 1)
                                    <li class="cat-item">
                                        <a href="{{ category_url($side_menu) }}">{{ $side_menu->nama }}</a>
                                    </li>
                                @else
                                    <li class="cat-item">
                                        <a href="{{ category_url($side_menu) }}">{{ $side_menu->nama }}</a>
                                        <ul class="listSidebar list-unstyled">
                                            @foreach($side_menu->anak as $submenu)
                                                @if($submenu->parent == $side_menu->id)
                                                    <li><a href="{{ category_url($submenu) }}" title="{{ $submenu->nama }}">{{ $submenu->nama }}</a></li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>

                                @endif
                            @endif
                        @endforeach
                    </ul>
                </aside>
                @endif
                <aside class="widget woocommerce widget_product_search">
                    <form role="search" method="post" class="search_form" action="{{url('search')}}">
                        <input type="text" class="search_field" placeholder="Search for products &hellip;" value="" name="search" title="Search for products:" />
                        <button class="search_button icon-search" type="submit"></button>
                        <input type="hidden" name="post_type" value="product" />
                    </form>
                </aside>
                @if(best_seller()->count() > 0)
                    <aside class="widget woocommerce widget_products">
                        <h5 class="widget_title">Featured Products</h5>
                        <ul class="product_list_widget">
                            @foreach(best_seller() as $best)
                                <li>
                                    <a href="{{ product_url($best) }}" title="{{ $best->nama }}">
                                        <img src="{{ product_image_url($best->gambar1,'thumb') }}" alt="{{ $best->nama }}" />
                                        <span class="product-title">{{ $best->nama }}</span>
                                    </a>
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">&#36;</span>{{ price($best->hargaJual) }}
                                    </span>
                                </li>
                            @endforeach
                            

                        </ul>
                    </aside>
                @endif
            </div>
        </div>
    </div>
</div>