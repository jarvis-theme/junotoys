<section id="bingoBreadcrumbs">
    <div id="section-bingo-breacrumb-image">
        <div class="bingoBreadcrumbImage">
            <img class="img-responsive" alt="breadcrumb" src="{{ url(dirTemaToko().'celebandco/assets/img/breadcrumb.jpg') }}">
        </div>
        <div class="container">
        	<nav class="bingoBreadcrumbWrap">
                <div class="breadcrumbTitle">
                    <h3>Testimonial</h3>
                </div>
                <ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="/" title="Back to the frontpage" itemprop="item">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <span itemprop="item"><span itemprop="name">Testimonial</span></span>
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
            <h1 class="bingoPageTitle">Testimonial</h1>
            <div class="pageContent pageAboutUs">
                <div class="rte">
                    <h2>What customers say about us</h2>
                </div>
                <div id="section-bingo-template-aboutus">
                    <div class="sectionAboutUs">
                        @foreach(list_testimonial() as $testi)
                        <div class="customerReviews mt10">
                            <div class="customerAvatar">
                                <img class="img-responsive" alt="breadcrumb" src="{{ url(dirTemaToko().'celebandco/assets/img/avatar_customer.jpg') }}">
                            </div>
                            <div class="reviewContent">
                                <div class="reviews">{{ trim($testi->isi) }}</div>
                                <div class="customerName">{{ $testi->nama }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>