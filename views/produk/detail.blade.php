<div class="top_panel_title top_panel_style_6  title_present navi_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_6  title_present_inner breadcrumbs_present_inner">
        <div class="content_wrap">
            <div class="post_navi">
                <span class="post_navi_item post_navi_next">
                    <a href="single-product.html" rel="next">{{ $produk->nama }}</a>
                </span>
            </div>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="{{url('/')}}">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item all" href="{{url('/produk')}}">Shop</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item cat_post" href="#">Arts &amp; Crafts</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">{{ $produk->nama }}</span>
            </div>
        </div>
    </div>
</div>
<div class="page_content_wrap page_paddings_yes">
    <div class="content_wrap">
        <div class="content">
            <article class="post_item post_item_single post_item_product">
                <nav class="woocommerce-breadcrumb">
                    <a href="index.html">Home</a>&nbsp;&#47;&nbsp;
                    <a href="#">Outdoor Games</a>&nbsp;&#47;&nbsp;Bruder Toys Mini Excavator Vehicle
                </nav>
                <div class="product has-post-thumbnail first">
                    <div class="images">
                        <a href="{{ product_image_url($produk->gambar1) }}" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto">
                            <img width="600" height="600" src="{{ product_image_url($produk->gambar1) }}" class="attachment-shop_single size-shop_single" alt="" title="TOY 3" />
                        </a>
                    </div>
                    <div class="summary entry-summary">
                        <h1 class="product_title entry-title">{{ $produk->nama }}</h1>
                        <div>
                            
                            <p class="">
                                <span class="woocommerce-Price-amount amount price" style="font-size:26px">
                                    <span  class="woocommerce-Price-currencySymbol"></span>{{ price($produk->hargaJual) }}
                                </span>
                                @if($produk->hargaCoret!=0)
                                    <span style="text-decoration:line-through">{{ price($produk->hargaCoret) }}</span>
                                @endif
                            </p>
                        </div>
                        <div>
                            <p>
                                {{ $produk->dmt }}
                            </p>
                        </div>
                        <form class="cart" action="#" id="addorder" >
                            @if($opsiproduk->count() > 0)
                                <div class="proVariants clearfix">
                                    <div class="selector-wrapper">
                                        <label for="productSelect-option-0">Option</label>
                                        <select class="single-option-selector" data-option="option1" id="productSelect-option-0" name="opsiproduk">
                                            <option value="">-- Choose Option --</option>
                                            @foreach ($opsiproduk as $key => $opsi)
                                            <option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':'' }} >
                                                {{ ucwords($opsi->opsi1).($opsi->opsi2=='' ? '':' / '.ucwords($opsi->opsi2)).($opsi->opsi3=='' ? '':' / '.ucwords($opsi->opsi3)) }} - {{ price($opsi->harga) }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            @endif
                            <br>
                            <div class="quantity">
                                <input type="number" step="1" min="1" max="" name="qty" value="1" title="Qty" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric" />
                            </div>
                            <button type="submit" id="AddToCart" class="single_add_to_cart_button button alt">Add to cart</button>
                        </form>
                        <div class="product_meta">
                            <span class="posted_in">Categories:
                                <a href="#" rel="tag">{{@$produk->kategori->nama}}</a>
                                <a href="#" rel="tag">{{@$produk->koleksi->nama}}</a>
                            </span>
                            <span class="tagged_as">Tags:
                                {{ getTagsProduk('<a rel="tag">,</a>,',$produk->tags) }} 
                            </span>
                            <span class="product_id">Barcode ID:
                                <span>{{$produk->barcode}}</span>
                            </span>
                        </div>
                    </div>
                    <div class="woocommerce-tabs wc-tabs-wrapper">
                        <ul class="tabs wc-tabs">
                            <li class="description_tab">
                                <a href="#tab-description">Description</a>
                            </li>
                            <li class="reviews_tab">
                                <a href="#tab-reviews">Reviews (0)</a>
                            </li>
                        </ul>
                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description">
                            <h2>Product Description</h2>
                            {{ $produk->deskripsi }}
                        </div>
                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews">
                            <div id="reviews" class="woocommerce-Reviews">
                                <div id="comments">
                                    <h2 class="woocommerce-Reviews-title">Reviews</h2>
                                    <p class="woocommerce-noreviews">There are no reviews yet.</p>
                                </div>
                                <div id="review_form_wrapper">
                                    <div id="review_form">
                                        {{ pluginComment(product_url($produk), @$produk) }}
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    @if(other_product($produk)->count() > 0)
                    <div class="related products">
                        <h2>Related Products</h2>
                        <ul class="products">
                            
                            @foreach(other_product($produk,4)  as $related)
                            <li class="product has-post-thumbnail column-1_4 first">
                                <div class="post_item_wrap">
                                    <div class="post_featured">
                                        <div class="post_thumb">
                                            <a class="hover_icon hover_icon_link" href="{{ product_url($related) }}">
                                                <img width="300" height="300" src="{{ product_image_url($related->gambar1,'medium') }}" class="attachment-shop_catalog size-shop_catalog" alt="" title="product_19" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="post_content">
                                        <h3>
                                            <a href="single-product.html">Outdoor Camping Adventures Vehicle in Pink</a>
                                        </h3>
                                        <span class="price">
                                            <span class="woocommerce-Price-amount amount">
                                                <span class="woocommerce-Price-currencySymbol">&#36;</span>111.99
                                            </span>
                                        </span>
                                        <a rel="nofollow" href="{{ price($related->hargaJual) }}" data-quantity="1" data-product_id="284" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </article>
        </div>
    </div>
</div>

