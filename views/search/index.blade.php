<div class="top_panel_title top_panel_style_6 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_6 title_present_inner breadcrumbs_present_inner">
        <div class="content_wrap">
            <h1 class="page_title ">{{$name}}</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="{{url('/')}}">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Search</span>
            </div>
        </div>
    </div>
</div>
<div class="page_content_wrap page_paddings_yes">
    <div class="content_wrap">
        <div class="content">
            <div class="list_products shop_mode_list">
                <nav class="woocommerce-breadcrumb">
                    <a href="index.html">Search</a>&nbsp;&#47;&nbsp; {{$name}}
                </nav>
                <ul class="products">

                    @if(count($hasilpro) > 0)
                        @foreach($hasilpro as $produks)
                         <li class="product has-post-thumbnail column-1_3 ">
                            <div class="post_item_wrap">
                                <div class="post_featured">
                                    <div class="post_thumb">
                                        <a class="hover_icon hover_icon_link" href="{{ product_url($produks) }}">
                                            <img src="{{ product_image_url($produks->gambar1, 'thumb') }}" class="attachment-shop_catalog size-shop_catalog" alt="" title="product_3" />
                                        </a>
                                    </div>
                                </div>
                                <div class="post_content">
                                    <h3>
                                        <a href="{{ product_url($produks) }}">{{ $produks->nama }}</a>
                                    </h3>
                                    <div class="description">
                                        <p>
                                            {{ $produks->dmt }}
                                        </p>
                                    </div>
                                    <span class="price">
                                        <span class="woocommerce-Price-amount amount">
                                            <span class="woocommerce-Price-currencySymbol">&#36;</span>{{ price($produks->hargaJual) }}
                                        </span>
                                    </span>
                                <a href="{{ product_url($produks) }}" class="button product_type_simple add_to_cart_button ">View</a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    @endif

                    @if(count($hasilhal) > 0 || count($hasilblog) > 0)
                        @foreach($hasilblog as $blog)
                        <li class="product has-post-thumbnail column-1_3 ">
                            <div class="post_item_wrap">
                                @if(!empty(imgString($blog->isi)))
                                <div class="post_featured">
                                    <div class="post_thumb">
                                        <a class="hover_icon hover_icon_link" href="{{ blog_url($blog) }}">
                                            <img src="{{ imgString($blog->isi) }}" class="attachment-shop_catalog size-shop_catalog" alt="" title="product_3" />
                                        </a>
                                    </div>
                                </div>
                                @endif

                                <div class="post_content">
                                    <h3>
                                        <a href="{{ blog_url($blog) }}">{{ $blog->judul }}</a>
                                    </h3>
                                    <div class="description">
                                        <p>
                                            {{ short_description($blog->isi,300) }}
                                        </p>
                                    </div>
                                    <a rel="nofollow" href="{{ blog_url($blog) }}" data-quantity="1" data-product_id="263" data-product_sku="" class="button product_type_simple add_to_cart_button ">View</a>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    @endif

                </ul>
            </div>
        </div>
    </div>
</div>