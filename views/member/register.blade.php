<section id="pageContent">
    <div class="container">
        <div class="bingoAccountContainer">
            <div class="row">
                <div class="col-xs-12">
                    <div class="formAccount">
                        <h1 class="bingoAccountTitle">Create Account</h1>
                        <form method="post" action="{{ url('member') }}" id="create_customer" accept-charset="UTF-8">
                            <div class="formContent">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ Input::old('nama') }}" autocapitalize="words" autofocus required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control" placeholder="Email" autocorrect="off" autocapitalize="off" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="number" name="telp" class="form-control" placeholder="Phone Number" value="{{ Input::old('telp') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <label>Re-Type Password</label>
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="Re-Type Password">
                                        </div>
                                        <div class="form-group">
                                            <label>Captcha</label>
                                            <div class="input-group captcha">
                                                <div class="input-group-addon" style="padding: 0;">
                                                    {{ HTML::image(Captcha::img(), 'Captcha image') }}
                                                </div>
                                                <input type="text" name="name" class="form-control" placeholder="Captcha" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="form-group selects-wrapper">
                                            <label>Country</label>
                                            <select class="selects" id="negara" name="negara" data-rel="chosen" required>
                                                <option selected>-- Select Country --</option>
                                                @foreach ($negara as $key=>$item)
                                                    @if(strtolower($item)=='indonesia')
                                                    <option value="1" {{ Input::old('negara')==1 ? 'selected' : '' }}>{{ $item }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group selects-wrapper">
                                            <label>Province</label>
                                            {{ Form::select('provinsi', array('' => '-- Select Province --') + $provinsi, Input::old("provinsi"), array('required', "id"=>"provinsi", "data-rel"=>"chosen", "class"=>"selects")) }}
                                        </div>
                                        <div class="form-group selects-wrapper">
                                            <label>City</label>
                                            {{ Form::select('kota', array('' => '-- Select City --') + $kota, Input::old("kota"), array('required', "id"=>"kota", "data-rel"=>"chosen", "class"=>"selects")) }}
                                        </div>
                                        <div class="form-group">
                                            <label>Postal Code</label>
                                            <input type="number" name="kodepos" class="form-control" placeholder="Postal Code" value="{{ Input::old('kodepos') }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea class="form-control autoheight" rows="7" name="alamat" required placeholder="Address">{{ Input::old("alamat") }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                
                                <input name="readme" value="1" type="checkbox" checked> I have read and agree to the <a href="{{ url('service') }}" target="_blank">Privacy Policy</a>
                                <div class="formRegisterButton">
                                    <div class="form-group">
                                        <input type="submit" value="Create an account" class="btn btnbingoOne">
                                    </div>
                                    <p><a class="bingoLinkCancel" href="/">Return to Store</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>