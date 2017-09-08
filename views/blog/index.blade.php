<div class="top_panel_title top_panel_style_6 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_6 title_present_inner breadcrumbs_present_inner">
        <div class="content_wrap">
            <h1 class="page_title ">Blog</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="{{url('/')}}">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Blog</span>
            </div>
        </div>
    </div>
</div>
<div class="page_content_wrap page_paddings_yes sidebar_show sidebar_right">
    <div class="content_wrap">
        <div class="content">
            <article class="post_item post_item_single page hentry">
                <section class="post_content">
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div id="sc_blogger_532" class="sc_blogger layout_excerpt sc_blogger_horizontal">
                                        @if(list_blog(null,@$blog_category)->count() > 0)
                                            @foreach(list_blog(null,@$blog_category) as $blog)
                                                <div class="post_item post_item_excerpt post">
                                                    @if((imgString($blog->isi)))
                                                    <div class="post_featured">
                                                        <div class="post_thumb" data-image="{{ imgString($blog->isi) }}" data-title="Games for a Rainy Day Play">
                                                            <a class="hover_icon hover_icon_link" href="{{ blog_url($blog) }}">
                                                                <img alt="" src="{{ imgString($blog->isi) }}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    <div class="post_content clearfix">
                                                        <h2 class="post_title">
                                                            <a href="{{ blog_url($blog) }}">
                                                                <span class="post_icon icon-book-open"></span>
                                                                {{ $blog->judul }}
                                                            </a>
                                                        </h2>
                                                        <div class="post_info">
                                                            <span class="post_info_item post_info_posted">Posted
                                                                <a href="single-post.html" class="post_info_date">{{ date("M d, Y", strtotime($blog->created_at)) }}</a>
                                                            </span>
                                                            <span class="post_info_item post_info_posted_by">by
                                                                <a href="single-team.html" class="post_info_author">{{ @$blog->author->name }}</a>
                                                            </span>
                                                        </div>
                                                        <div class="post_descr">
                                                            <p>{{ short_description($blog->isi,400) }}</p>
                                                            <a href="{{ blog_url($blog) }}" class="sc_button sc_button_square sc_button_style_filled sc_button_size_small sc_button_color_4 small">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            {{ list_blog(null,@$blog_category)->links() }}
                                        @else
                                            <p>Blog not found.</p>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="related_wrap related_wrap_empty"></section>
                
            </article>
            <!-- <section class="related_wrap related_wrap_empty"></section> -->
        </div>
        <div class="sidebar widget_area scheme_original" role="complementary">
            <div class="sidebar_inner widget_area_inner">
                <aside class="widget widget_search">
                    <h5 class="widget_title">Search</h5>
                    <form role="search" method="post" class="search_form" action="{{ url('search') }}">
                        <input type="text" class="search_field" placeholder="Search &hellip;" value="" name="search" title="Search for:" />
                        <button type="submit" class="search_button icon-search"></button>
                    </form>
                </aside>

                @if(list_blog_category()->count() > 0)
                <aside class="widget widget_categories">
                    <h5 class="widget_title">Categories</h5>
                    <ul>
                        @foreach(list_blog_category() as $kat)
                        <li class="cat-item">
                            <a href="{{ blog_category_url($kat) }}" title="{{ $kat->nama }}">{{ $kat->nama }}</a>
                        </li>
                         @endforeach
                    </ul>
                </aside>
                @endif

                @if(recentBlog()->count() > 0)
                    <aside class="widget widget_recent_posts">
                        <h5 class="widget_title">Recent Posts</h5>

                        @foreach(recentBlog() as $key=>$artikel)
                            <article class="post_item with_thumb {{$key==0?'first':''}}">
                                @if((imgString($artikel->isi)))
                                <div class="post_thumb">
                                    <img alt="" src="{{ imgString($artikel->isi) }}">
                                </div>
                                @endif
                                <div class="post_content">
                                    <h6 class="post_title">
                                        <a href="{{ blog_url($artikel) }}">{{ short_description($artikel->judul, 40) }}</a>
                                    </h6>
                                    <div class="post_info">
                                        <span class="post_info_item post_info_posted">
                                            <a href="{{ blog_url($artikel) }}" class="post_info_date">{{ date("M d, Y", strtotime($artikel->created_at)) }}</a>
                                        </span>
                                        <span class="post_info_item post_info_posted_by">by
                                            <a href="{{ blog_url($artikel) }}" class="post_info_author">{{@$artikel->author->name}}</a>
                                        </span>
                                        <span class="post_info_item post_info_counters">
                                            <a href="{{ blog_url($artikel) }}" class="post_counters_item">
                                                <span class="post_counters_number"></span>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </article>
                         @endforeach

                    </aside>
                @endif

                @if(!is_login())
                <aside class="widget widget_meta">
                    <h5 class="widget_title">Meta</h5>
                    <ul>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Log in</a></li>
                    </ul>
                </aside>
                @endif

                @if(vertical_banner()->count() > 0)
                <aside class="widget widget_meta">
                    @foreach(vertical_banner() as $banner)
                    <div class="bingoBanner">
                        <a href="{{ url($banner->url) }}">
                            <img class="img-responsive" src="{{ banner_image_url($banner->gambar) }}">
                        </a>
                    </div>
                    <br>
                    @endforeach
                </aside>
                @endif
            </div>
        </div>

    </div>
</div>