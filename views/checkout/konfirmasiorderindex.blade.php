<section id="bingoBreadcrumbs">
    <div id="section-bingo-breacrumb-image">
        <div class="bingoBreadcrumbImage">
            <img class="img-responsive" alt="breadcrumb" src="{{ url(dirTemaToko().'celebandco/assets/img/breadcrumb.jpg') }}">
        </div>
        <div class="container">
            <nav class="bingoBreadcrumbWrap">
                <div class="breadcrumbTitle">
                    <h3>Order Confirmation</h3>
                </div>
                <ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="/" title="Back to the frontpage" itemprop="item">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <span itemprop="item"><span itemprop="name">Order Confirmation</span></span>
                        <meta itemprop="position" content="2">
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section id="pageContent">
    <div class="container">
        <div class="pageContainer">
            <div id="shopify-section-bingo-template-contact" class="shopify-section">
                <div class="row">
                    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                        <div class="pageContact">
                            <h1 class="bingoContactTitle">Order Confirmation</h1>
                            <div class="pageContent">
                                <div class="formContactUs">
                                    <form method="post" action="http://example.jstore.dev/konfirmasiorder" id="contact_form" class="contact-form" accept-charset="UTF-8">
                                        <div class="formContent">
                                            <div class="form-group">
                                                <label for="ContactFormName" class="hidden-label">Order ID</label>
                                                <input type="text" id="ContactFormName" class="form-control" name="kodeorder" placeholder="Order ID" value="{{ Input::old('kodeorder') }}" required autofocus>
                                            </div>
                                            <div class="form-button">
                                                <input type="submit" class="btnbingoOne" value="Submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>