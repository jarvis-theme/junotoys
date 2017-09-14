<div class="page_content_wrap page_paddings_no contactus sidebar_hide">
    <div class="content_wrap">
        <div class="content">
            <article class="post_item post_item_single post-15 page hentry">
                <section class="post_content">
                    <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1464101475265">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class="vc_empty_space em_height_12">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                    <h1 class="sc_title sc_title_regular sc_align_center text_uppercase">Sign Up</h1>
                                    <div id="sc_form_777_wrap" class="sc_form_wrap">
                                        <div id="sc_form_777" class=" sc_form_style_form_1 aligncenter">
                                            <form id="" class="sc_input_hover_default" data-formtype="form_1" method="post" action="{{ url('member') }}">
                                                <div class="sc_form_info">
                                                    <div class="columns_wrap">
                                                        <div class="sc_form_item sc_form_field label_over column-1_2">
                                                            <input id="sc_form_username" type="text" name="name" value="{{ Input::old('name') }}" placeholder="Name *" aria-required="true">
                                                        </div>
                                                        <div class="sc_form_item sc_form_field label_over column-1_2">
                                                            <select class="selects" id="negara" name="negara" data-rel="chosen" required>
                                                                @foreach ($negara as $key=>$item)
                                                                    <option value="1" {{ Input::old('negara')==1 ? 'selected' : '' }}>{{ $item }}</option>
                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="columns_wrap">
                                                        <div class="sc_form_item sc_form_field label_over column-1_2">
                                                            <input id="sc_form_username" type="text" name="email" value="{{ Input::old('email') }}" placeholder="E-mail *" aria-required="true">
                                                        </div>
                                                        <div class="sc_form_item sc_form_field label_over column-1_2">
                                                            {{ Form::select('provinsi', array('' => '-- Select Province --') + $provinsi, Input::old("provinsi"), array('required', "id"=>"provinsi", "data-rel"=>"chosen", "class"=>"selects")) }}
                                                        </div>
                                                    </div>
                                                    <div class="columns_wrap">
                                                        <div class="sc_form_item sc_form_field label_over column-1_2">
                                                            <input id="sc_form_username" type="text" name="password" value="" placeholder="Password *" aria-required="true">
                                                        </div>
                                                        <div class="sc_form_item sc_form_field label_over column-1_2">
                                                            {{ Form::select('kota', array('' => '-- Select City --') + $kota, Input::old("kota"), array('required', "id"=>"kota", "data-rel"=>"chosen", "class"=>"selects")) }}
                                                        </div>
                                                    </div>
                                                    <div class="columns_wrap">
                                                        <div class="sc_form_item sc_form_field label_over column-1_2">
                                                            <input id="sc_form_email" type="text" name="password_confirmation" value="" placeholder="Re-Type Password *" aria-required="true">
                                                        </div>
                                                        <div class="sc_form_item sc_form_field label_over column-1_2">
                                                            <input id="sc_form_email" type="text" name="kodepos" value="{{ Input::old('kodepos') }}" placeholder="Postal Code *" aria-required="true">
                                                        </div>
                                                    </div>
                                                    <div class="columns_wrap">
                                                        <div class="sc_form_item sc_form_field label_over column-1_2">
                                                            <input id="sc_form_email" type="text" name="phone" value="{{ Input::old('phone') }}" placeholder="Phone *" aria-required="true">
                                                        </div>
                                                        <div class="sc_form_item sc_form_field label_over column-1_2">
                                                            <input id="sc_form_username" type="text" placeholder="Address" aria-required="true" name="alamat" placeholder="Address" value="{{ Input::old('alamat') }}">
                                                        </div>
                                                    </div>
                                                    <div class="columns_wrap">
                                                        <div class="sc_form_item sc_form_field label_over column-1_2">
                                                            {{ HTML::image(Captcha::img(), 'Captcha image') }}
                                                        </div>
                                                        <div class="sc_form_item sc_form_field label_over column-1_2">
                                                            <input type="text" name="name" class="form-control" placeholder="Captcha" required>
                                                        </div>
                                                    </div>
                                                    
                                                </div>

                                                <div class="sc_form_item sc_form_message" style="color: #000;">
                                                     <input name="readme" value="1" type="checkbox" checked> I have read and agree to the <a href="{{ url('service') }}" target="_blank">Privacy Policy</a>
                                                </div>
                                                <button type="submit" class="sc_form_button sc_button sc_button_color_1 small sc_button_size_small">Sign Up</button>
                                                <div class="result sc_infobox"></div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="vc_empty_space em_height_6-7">
                                        <span class="vc_empty_space_inner"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width"></div>
                </section>
            </article>
            <section class="related_wrap related_wrap_empty"></section>
        </div>
    </div>
</div>