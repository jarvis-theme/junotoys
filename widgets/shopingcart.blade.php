
<a href="{{ url('checkout') }}" class="top_panel_cart_button" data-items="0" data-summa="&#036;0.00">
    <span class="contact_icon icon-basket"></span>
    <span class="contact_label contact_cart_label">Your cart:</span>
    <span class="contact_cart_totals">
    <span class="cart_items">{{ Shpcart::cart()->total_items() }} Items</span> -
    <span class="cart_summa">&#36;{{ price(Shpcart::cart()->total() )}}</span>
</span>
</a>
<ul class="widget_area sidebar_cart sidebar">
    <li>
        <div class="widget woocommerce widget_shopping_cart">
            <div class="hide_cart_widget_if_empty">
                <div class="widget_shopping_cart_content">
                    <ul class="cart_list product_list_widget ">
						@if(count(Shpcart::cart()->contents())>0)
    						@foreach (Shpcart::cart()->contents() as $key => $cart)
                            <li class="woocommerce-mini-cart-item mini_cart_item">												
    							<a href="#">
    								<img width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" src="{{product_image_url($cart['image'],'thumb')}}" >{{$cart['name']}}&nbsp;</a>				
    							<span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span>{{ price($cart['price'] )}}</span></span>					
    						</li>
    						@endforeach
                        @else
                            <li class="empty">No products in the cart.</li>
                        @endif
                    </ul>
					
					@if(count(Shpcart::cart()->contents())>0)
                    <p class="woocommerce-mini-cart__total total"><strong>Subtotal:</strong> <span class="woocommerce-Price-amount amount">
                    	<span class="woocommerce-Price-currencySymbol"></span>{{ price(Shpcart::cart()->total() )}}</span>
                    </p>
					<p class="woocommerce-mini-cart__buttons buttons">
						<a class="button checkout wc-forward" href="{{url('checkout')}}">Checkout</a>
					</p>
					@endif
                </div>
            </div>
        </div>
    </li>
</ul>