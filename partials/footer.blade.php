<footer class="contacts_wrap scheme_original">
    <div class="contacts_wrap_inner">
        <div class="content_wrap">
            <div class="logo">
                <a href="index.html">
                    {{ HTML::image(logo_image_url(),'logo '.strtolower(Theme::place('title')), array('class'=>'logo_footer', 'style'=>'max-height: 100px')) }}
                    <!-- <img alt="" class="logo_footer" height="60" src="images/logo-footer.png" width="121"> -->
                </a>
            </div>
            <div class="contact_info">
               {{ short_description(about_us()->isi,150) }}
            </div>

            <div class="sc_socials sc_socials_type_images sc_socials_shape_square sc_socials_size_large">

                @if($kontak->fb)
                <div class="sc_socials_item">
                    <a class="social_icons social_facebook" href="{{ url($kontak->fb) }}" target="_blank">
                        <span class="sc_socials_hover"></span>
                    </a>
                </div>
                @endif

                @if($kontak->tw)
                <div class="sc_socials_item">
                    <a class="social_icons social_twitter" href="{{ url($kontak->tw) }}" target="_blank">
                        <span class="sc_socials_hover"></span>
                    </a>
                </div>
                @endif

                @if($kontak->gp)
                <div class="sc_socials_item">
                    <a class="social_icons social_gplus" href="{{ url($kontak->gp) }}" target="_blank">
                        <span class="sc_socials_hover"></span>
                    </a>
                </div>
                @endif

                @if($kontak->pt)
                <div class="sc_socials_item">
                    <a class="social_icons social_pinterest" href="{{ url($kontak->pt) }}" target="_blank">
                        <span class="sc_socials_hover"></span>
                    </a>
                </div>
                @endif
                
            </div>

        </div>
    </div>
</footer>

<div class="copyright_wrap copyright_style_text scheme_original">
    <div class="copyright_wrap_inner">
        <div class="content_wrap">
            <div class="copyright_text">
                <figure class="sc_image alignright sc_image_shape_square">
                    @foreach(list_banks() as $value)
                        @if($value->status == 1)
                        <img src="{{bank_logo($value)}}" alt="{{$value->name}}" class="img-responsive" />
                        @endif
                    @endforeach
                    @foreach(list_payments() as $pay)
                        @if($pay->nama == 'paypal' && $pay->aktif == 1)
                        <img src="{{url('img/bank/paypal.jpg')}}" alt="support paypal" class="img-responsive" />
                        @endif
                        @if($pay->nama == 'ipaymu' && $pay->aktif == 1)
                        <img src="{{url('img/bank/ipaymu.jpg')}}" alt="support ipaymu" class="img-responsive" />
                        @endif
                        @if($pay->nama == 'bitcoin' && $pay->aktif == 1)
                        <img src="{{url('img/bank/bitcoin.jpg')}}" alt="support bitcoin" class="img-responsive" />
                        @endif
                    @endforeach
                    @if(count(list_dokus()) > 0 && list_dokus()->status == 1)
                        <img src="{{url('img/bank/doku.jpg')}}" alt="support doku myshortcart" class="img-responsive" />
                    @endif
                    @if(count(list_veritrans()) > 0 && list_veritrans()->status == 1 && list_veritrans()->type == 1)
                        <img src="{{url('img/bank/veritrans.jpg')}}" alt="support veritrans" class="img-responsive" />
                    @endif
                </figure>
                <p>&copy; 2017 {{ Theme::place('title') }} - All Rights Reserved.
                    <a href="{{url('service')}}">Terms of Use</a> and
                    <a href="{{url('service')}}">Privacy Policy</a>
                </p>
            </div>
        </div>
    </div>
</div>

{{ pluginPowerup() }} 