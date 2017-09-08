<div class="top_panel_title top_panel_style_6 title_present breadcrumbs_present scheme_original">
    <div class="top_panel_title_inner top_panel_inner_style_6 title_present_inner breadcrumbs_present_inner">
        <div class="content_wrap">
            <h1 class="page_title ">{{ $detailblog->judul }}</h1>
            <div class="breadcrumbs">
                <a class="breadcrumbs_item home" href="{{url('/')}}">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item home" href="{{url('blog')}}">Blog</a>
            </div>
        </div>
    </div>
</div>
<div class="page_content_wrap page_paddings_yes sidebar_show sidebar_right">
    <div class="content_wrap">
        <div class="content">
            <article class="post_item post_item_single post has-post-thumbnail hentry">
                <section class="post_content">
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div id="sc_blogger_532" class="sc_blogger layout_excerpt sc_blogger_horizontal">

                                        <div class="post_item post_item_excerpt post">
                                            <p>{{ $detailblog->isi }}</p>
                                            <section class="post_content">
                                                <div class="post_info">
                                                    <span class="post_info_item post_info_posted">Posted
                                                        <a href="single-post.html" class="post_info_date">{{ date("M d, Y", strtotime($detailblog->created_at)) }}</a>
                                                    </span>
                                                    <span class="post_info_item post_info_tags">Tags:
                                                        {{ getTags('<a class="post_tag_link"></a>,',$detailblog->tags) }} 
                                                    </span>
                                                </div>
                                                <hr>
                                                <div class="form-submit">
                                                    @if(prev_blog($detailblog))
                                                    <div style="float: left;" class="btnExtendLeft">
                                                        <a href="{{ blog_url(prev_blog()) }}">Older Post</a>
                                                    </div>
                                                    @endif
                                                    @if(next_blog($detailblog))
                                                    <div style="float: right;" class="btnExtendRight">
                                                        <a href="{{ blog_url(next_blog()) }}">Newer Post</a>
                                                    </div>
                                                    @endif
                                                </div>
                                                <div class="clearfix"></div>
                                                <hr>
                                                <div>
                                                    {{ $fbscript }}
                                                    {{ fbcommentbox(blog_url($detailblog), '100%', '5', 'light') }}
                                                </div>
                                                <br>
                                                @if(horizontal_banner()->count() > 0)
                                                    @foreach(horizontal_banner(1) as $key => $banner)
                                                        @if($key==1)
                                                        <div class="post_item post_item_excerpt post_format_link last post hentry">
                                                            <div class="post_content clearfix">
                                                                <div class="">
                                                                    <a href="{{ url($banner->url) }}" ><img src="{{ banner_image_url($banner->gambar) }}"  target="_blank">{{ $banner->judul }}</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </section>
                                        </div>

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

