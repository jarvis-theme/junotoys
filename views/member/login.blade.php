<section id="pageContent">
    <div class="container">
        <div class="bingoAccountContainer">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="formAccount formLogin">
                        <div class="alert alert-success" id="ResetSuccess" style="display:none;">
                            We've sent you an email with a link to update your password.
                        </div>
                        <div id="CustomerLoginForm" class="formAccountLogin">
                            <h1 class="bingoAccountTitle">Login</h1>
                            <form method="post" action="{{ url('member/login') }}" id="customer_login" accept-charset="UTF-8">
                                <div class="formContent">
                                    <div class="form-group">
                                        <label for="CustomerEmail">Email</label>
                                        <input type="email" name="email" id="CustomerEmail" class="form-control" placeholder="Email" value="{{ Input::old('email') }}" autocorrect="off" autocapitalize="off" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <label for="CustomerPassword">Password</label>
                                        <input type="password" name="password" id="CustomerPassword" class="form-control" placeholder="Password" required>
                                    </div>
                                    <p class="forgetPassword"><a href="#recover" id="RecoverPassword">Forgot your password?</a></p>
                                    <p><input type="submit" class="btn btnbingoOne" value="Sign In"></p>
                                </div>
                            </form>
                        </div>
                        <div id="RecoverPasswordForm" class="formAccountRecover" style="display: none;">
                            <h2 class="bingoAccountTitle">Reset your password</h2>
                            <form method="post" action="{{ url('member/forgetpassword') }}" accept-charset="UTF-8">
                                <div class="formContent">
                                    <p>We will send you an email to reset your password.</p>
                                    <div class="form-group">
                                        <label for="RecoverEmail">Email</label>
                                        <input type="email" value="{{ Input::old('recoveryEmail') }}" name="recoveryEmail" id="RecoverEmail" class="form-control" placeholder="Email" autocorrect="off" autocapitalize="off" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btnbingoOne" value="Submit">
                                        <button type="button" id="HideRecoverPasswordLink" class="btn btnbingoCancel">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="formAccount formLogin">
                        <h3 class="bingoAccountTitle">Create Account</h3>
                        <div class="formContent">
                            <div class="registerDescription">
                                <p>Registration is quick and easy. It allows you to be able to order from our shop. To start shopping click register.</p>
                            </div>
                            <div class="submit">
                                <a class="btn btnbingoOne" href="{{ url('member/create') }}">
                                    <span>Create an account</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>