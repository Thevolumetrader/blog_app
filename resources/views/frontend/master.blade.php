
<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from gmag.kwst.net/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Oct 2023 20:36:47 GMT -->
<head>
        <!--=============== basic  ===============-->
        <meta charset="UTF-8">
        <title>Gmag - Blog News Magazine   Template</title>
        <meta name="robots" content="index, follow" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/plugins.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/color.css')}}">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="images/favicon.ico">
    </head>
    <body>
        <!-- main start  -->
        <div id="main">
            <!-- progress-bar  -->
            <div class="progress-bar-wrap">
                <div class="progress-bar color-bg"></div>
            </div>
            <!-- progress-bar end -->
            <!-- header -->
            <header class="main-header">
                <!-- top bar -->
                <div class="top-bar fl-wrap">
                    <div class="container">
                        <div class="date-holder">
                            <span class="date_num"></span>
                            <span class="date_mounth"></span>
                            <span class="date_year"></span>
                        </div>
                        <div class="header_news-ticker-wrap">
                            <div class="hnt_title">Hot News :</div>
                            <div class="header_news-ticker fl-wrap">
                                <ul>
                                    <li><a href="post-single.html">They chose to leave rather than put up with a governor who follows science .</a></li>
                                    <li><a href="post-single.html">Hold On to Your Travel Dreams in the World.</a></li>
                                    <li><a href="post-single.html">White  endorses bill that would ensure abortion access.</a></li>
                                    <li><a href="post-single.html">NFL Power Rankings 2021: How all 32 teams stack up after Week 2.</a></li>
                                </ul>
                            </div>
                            <div class="n_contr-wrap">
                                <div class="n_contr p_btn"><i class="fas fa-caret-left"></i></div>
                                <div class="n_contr n_btn"><i class="fas fa-caret-right"></i></div>
                            </div>
                        </div>
                        <ul class="topbar-social">
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- top bar end -->
                <div class="header-inner fl-wrap">
                    <div class="container">
                        <!-- logo holder  -->
                        <a href="index.html" class="logo-holder"><img src="images/logo.png" alt=""></a>
                        <!-- logo holder end -->
                        <div class="search_btn htact show_search-btn"><i class="far fa-search"></i> <span class="header-tooltip">Search</span></div>
                        <div class="srf_btn htact show-reg-form"><i class="fal fa-user"></i> <span class="header-tooltip">Sign In</span></div>
                        <div class="show-cart sc_btn htact"><i class="fal fa-shopping-bag"></i><span class="show-cart_count">2</span><span class="header-tooltip">Your Cart</span></div>
                        <!-- header-search-wrap -->
                        <div class="header-search-wrap novis_sarch">
                            <div class="widget-inner">
                                <form action="#">
                                    <input name="se" id="se" type="text" class="search" placeholder="Search..." value="" />
                                    <button class="search-submit" id="submit_btn"><i class="fa fa-search transition"></i> </button>
                                </form>
                            </div>
                        </div>
                        <!-- header-search-wrap end -->
                        <!-- header-cart_wrap  -->
                        <div class="header-cart_wrap novis_cart">
                            <div class="header-cart_title">Your Cart <span><strong>2</strong> items</span></div>
                            <div class="header-cart_wrap_container fl-wrap">
                                <div class="box-widget-content">
                                    <div class="widget-posts fl-wrap">
                                        <ol>
                                            <li class="clearfix">
                                                <a href="#" class="widget-posts-img"><img src="images/shop/1.jpg" class="respimg" alt=""></a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" title="">Awesome Merch Wallet</a>
                                                    <div class="widget-posts-descr_calc clearfix">1 <span>x</span> $845</div>
                                                </div>
                                                <div class="clear-cart_button"><i class="far fa-times"></i></div>
                                            </li>
                                            <li class="clearfix">
                                                <a href="#" class="widget-posts-img"><img src="images/shop/2.jpg" class="respimg" alt=""></a>
                                                <div class="widget-posts-descr">
                                                    <a href="#" title="">Gmag Merch Wallet</a>
                                                    <div class="widget-posts-descr_calc clearfix">2 <span>x</span> $222</div>
                                                </div>
                                                <div class="clear-cart_button"><i class="fal fa-times"></i></div>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="header-cart_wrap_total fl-wrap">
                                <div class="header-cart_wrap_total_item">Subtotal : <span>$1559</span></div>
                            </div>
                            <div class="header-cart_wrap_footer fl-wrap">
                                <a href="cart.html"> View Cart</a>
                                <a href="checkout.html"> Checkout</a>
                            </div>
                        </div>
                        <!-- header-cart_wrap end  -->
                        <!-- nav-button-wrap-->
                        <div class="nav-button-wrap">
                            <div class="nav-button">
                                <span></span><span></span><span></span>
                            </div>
                        </div>
                        <!-- nav-button-wrap end-->
                        <!--  navigation -->
                        <div class="nav-holder main-menu">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">Home <i class="fas fa-caret-down"></i></a>
                                        <!--second level -->
                                        <ul>
                                            <li><a href="index.html">Slider</a></li>
                                            <li><a href="index2.html">Carousel</a></li>
                                            <li><a href="index3.html">Grid</a></li>
                                        </ul>
                                        <!--second level end-->
                                    </li>
                                    <li>
                                        <a href="#" class="act-link">Posts<i class="fas fa-caret-down"></i></a>
                                        <!--second level -->
                                        <ul>
                                            <li><a href="blog.html">List</a></li>
                                            <li><a href="blog2.html">2 Sidebars</a></li>
                                            <li><a href="blog3.html">Grid Sidebar</a></li>
                                            <li><a href="blog4.html">Full Width Sidebar </a></li>
                                            <li><a href="blog5.html">3 Columns Grid</a></li>
                                            <li>
                                                <a href="#">Single<i class="fas fa-caret-down"></i></a>
                                                <!--second level -->
                                                <ul>
                                                    <li><a href="post-single.html">Style 1</a></li>
                                                    <li><a href="post-single2.html">Style 2</a></li>
                                                </ul>
                                                <!--second level end-->
                                            </li>
                                        </ul>
                                        <!--second level end-->
                                    </li>
                                    <li><a href="blog.html">Business</a></li>
                                    <li><a href="blog.html">Technology</a></li>
                                    <li>
                                        <a href="#">Shop <i class="fas fa-caret-down"></i></a>
                                        <!--second level -->
                                        <ul>
                                            <li><a href="shop.html">Products</a></li>
                                            <li><a href="product-single.html">Product Single</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                        </ul>
                                        <!--second level end-->
                                    </li>
                                    <li>
                                        <a href="#">Pages<i class="fas fa-caret-down"></i></a>
                                        <!--second level -->
                                        <ul>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="contacts.html">Contacts</a></li>
                                            <li><a href="category.html">Category</a></li>
                                            <li><a href="author-single.html">Author Single</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                        <!--second level end-->
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- navigation  end -->
                    </div>
                </div>
            </header>
            <!-- header end  -->
            <!-- wrapper -->
            <div id="wrapper">
                <!-- content    -->
                <div class="content">
                    <div class="breadcrumbs-header fl-wrap">
                        <div class="container">
                            <div class="breadcrumbs-header_url">
                                <a href="#">Home</a><span>Blog List style</span>
                            </div>
                            <div class="scroll-down-wrap">
                                <div class="mousey">
                                    <div class="scroller"></div>
                                </div>
                                <span>Scroll Down To Discover</span>
                            </div>
                        </div>
                        <div class="pwh_bg"></div>
                    </div>
                    <!--section   -->
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="main-container fl-wrap fix-container-init">
                                        <div class="section-title">
                                            <h2>Most Recent World News</h2>
                                            <h4>Don't miss daily news</h4>
                                            <div class="steader_opt steader_opt_abs">
                                                <select name="filter" id="list" data-placeholder="Persons" class="style-select no-search-select">
                                                    <option>Latest</option>
                                                    <option>Most Read</option>
                                                    <option>Most Viewed</option>
                                                    <option>Most Commented</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="list-post-wrap">
                                           @forelse ( $posts as $post )
                                           <div class="list-post fl-wrap">
                                            <div class="list-post-media">
                                                <a href="post-single.html">
                                                    <div class="bg-wrap">
                                                        <div class="bg" data-bg="{{asset('frontend/images/all/20.jpg')}}"></div>
                                                    </div>
                                                </a>
                                                <span class="post-media_title">&copy; Image Copyrights Title</span>
                                            </div>
                                            <div class="list-post-content">
                                                <a class="post-category-marker" href="category.html">{{$post->Categories->name}}</a>
                                                <h3><a href="post-single.html">{{$post->title}}</a></h3>
                                                <span class="post-date"><i class="far fa-clock"></i> 16 january 2022</span>
                                                <p>{{$post->content}} </p>
                                                <ul class="post-opt">
                                                    <li><i class="far fa-comments-alt"></i>  67 </li>
                                                    <li><i class="fal fa-eye"></i>  1234 </li>
                                                </ul>
                                                <div class="author-link"><a href="author-single.html"><img src="images/avatar/1.jpg" alt="">  <span>By Jane Taylor</span></a></div>
                                            </div>
                                        </div>
                                           @empty
                                            <p>no post yet</p>
                                           @endforelse

                                            <!--list-post end-->
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="load-more_btn"><i class="fal fa-undo"></i>Load More</div>
                                        <!--pagination-->
                                        <div class="pagination">
                                            <a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i></a>
                                            <a href="#">01.</a>
                                            <a href="#" class="current-page">02.</a>
                                            <a href="#">03.</a>
                                            <a href="#">04.</a>
                                            <a href="#" class="nextposts-link"><i class="fas fa-caret-right"></i></a>
                                        </div>
                                        <!--pagination end-->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!-- sidebar   -->
                                    <div class="sidebar-content fl-wrap fixed-bar">
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            <div class="box-widget-content">
                                                <div class="search-widget fl-wrap">
                                                    <form action="#">
                                                        <input name="se" id="se12" type="text" class="search" placeholder="Search..." value="" />
                                                        <button class="search-submit2" id="submit_btn12"><i class="far fa-search"></i> </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- box-widget  end -->
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            <div class="box-widget-content">
                                                <div class="banner-widget fl-wrap">
                                                    <div class="bg-wrap bg-parallax-wrap-gradien">
                                                        <div class="bg  " data-bg="images/bg/7.jpg"></div>
                                                    </div>
                                                    <div class="banner-widget_content">
                                                        <h5>Visit our awesome merch and souvenir online shop.</h5>
                                                        <a href="#" class="btn float-btn color-bg small-btn">Our shop</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- box-widget  end -->
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            <div class="widget-title">Categories</div>
                                            <div class="box-widget-content">
                                                <ul class="cat-wid-list">
                                                    @forelse ($categories as $category )
                                                    <li><a href="#">{{$category->name}}</a><span>3</span></li>
                                                    @empty
                                                              <p>no categories</p>
                                                    @endforelse


                                                </ul>
                                            </div>
                                        </div>
                                        <!-- box-widget  end -->
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            <div class="widget-title">Popular Tags</div>
                                            <div class="box-widget-content">
                                                <div class="tags-widget">
                                                    @forelse ( $tags as $tag )
                                                    <a href="#">{{$tag->name}}</a>
                                                    @empty
                                               <p>not tag </p>
                                                    @endforelse


                                                </div>
                                            </div>
                                        </div>
                                        <!-- box-widget  end -->
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            <div class="widget-title">Follow Us</div>
                                            <div class="box-widget-content">
                                                <div class="social-widget">
                                                    <a href="#" target="_blank" class="facebook-soc">
                                                    <i class="fab fa-facebook-f"></i>
                                                    <span class="soc-widget-title">Likes</span>
                                                    <span class="soc-widget_counter">2640</span>
                                                    </a>
                                                    <a href="#" target="_blank" class="twitter-soc">
                                                    <i class="fab fa-twitter"></i>
                                                    <span class="soc-widget-title">Followers</span>
                                                    <span class="soc-widget_counter">1456</span>
                                                    </a>
                                                    <a href="#" target="_blank" class="youtube-soc">
                                                    <i class="fab fa-youtube"></i>
                                                    <span class="soc-widget-title">Followers</span>
                                                    <span class="soc-widget_counter">1456</span>
                                                    </a>
                                                    <a href="#" target="_blank" class="instagram-soc">
                                                    <i class="fab fa-instagram"></i>
                                                    <span class="soc-widget-title">Followers</span>
                                                    <span class="soc-widget_counter">1456</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- box-widget  end -->
                                        <!-- box-widget -->
                                        <div class="box-widget fl-wrap">
                                            <div class="box-widget-content">
                                                <!-- content-tabs-wrap -->
                                                <div class="content-tabs-wrap tabs-act tabs-widget fl-wrap">
                                                    <div class="content-tabs fl-wrap">
                                                        <ul class="tabs-menu fl-wrap no-list-style">
                                                            <li class="current"><a href="#tab-popular"> Popular News </a></li>
                                                            <li><a href="#tab-resent">Resent News</a></li>
                                                        </ul>
                                                    </div>
                                                    <!--tabs -->
                                                    <div class="tabs-container">
                                                        <!--tab -->
                                                        <div class="tab">
                                                            <div id="tab-popular" class="tab-content first-tab">
                                                                <div class="post-widget-container fl-wrap">
                                                                    <!-- post-widget-item -->
                                                                    <div class="post-widget-item fl-wrap">
                                                                        <div class="post-widget-item-media">
                                                                            <a href="post-single.html"><img src="images/all/thumbs/1.jpg"  alt=""></a>
                                                                        </div>
                                                                        <div class="post-widget-item-content">
                                                                            <h4><a href="post-single.html">How to start Home education.</a></h4>
                                                                            <ul class="pwic_opt">
                                                                                <li><span><i class="far fa-clock"></i> 25 may 2022</span></li>
                                                                                <li><span><i class="far fa-comments-alt"></i> 12</span></li>
                                                                                <li><span><i class="fal fa-eye"></i> 654</span></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- post-widget-item end -->
                                                                    <!-- post-widget-item -->
                                                                    <div class="post-widget-item fl-wrap">
                                                                        <div class="post-widget-item-media">
                                                                            <a href="post-single.html"><img src="images/all/thumbs/2.jpg"  alt=""></a>
                                                                        </div>
                                                                        <div class="post-widget-item-content">
                                                                            <h4><a href="post-single.html">The secret to moving this   screening.</a></h4>
                                                                            <ul class="pwic_opt">
                                                                                <li><span><i class="far fa-clock"></i> 13 april 2021</span></li>
                                                                                <li><span><i class="far fa-comments-alt"></i> 6</span></li>
                                                                                <li><span><i class="fal fa-eye"></i> 1227</span></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- post-widget-item end -->
                                                                    <!-- post-widget-item -->
                                                                    <div class="post-widget-item fl-wrap">
                                                                        <div class="post-widget-item-media">
                                                                            <a href="post-single.html"><img src="images/all/thumbs/3.jpg"  alt=""></a>
                                                                        </div>
                                                                        <div class="post-widget-item-content">
                                                                            <h4><a href="post-single.html">Fall ability to keep Congress on rails.</a></h4>
                                                                            <ul class="pwic_opt">
                                                                                <li><span><i class="far fa-clock"></i> 02 December 2021</span></li>
                                                                                <li><span><i class="far fa-comments-alt"></i> 12</span></li>
                                                                                <li><span><i class="fal fa-eye"></i> 654</span></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- post-widget-item end -->
                                                                    <!-- post-widget-item -->
                                                                    <div class="post-widget-item fl-wrap">
                                                                        <div class="post-widget-item-media">
                                                                            <a href="post-single.html"><img src="images/all/thumbs/4.jpg"  alt=""></a>
                                                                        </div>
                                                                        <div class="post-widget-item-content">
                                                                            <h4><a href="post-single.html">Innovations that Bring Aesthetic Pleasure to All.</a></h4>
                                                                            <ul class="pwic_opt">
                                                                                <li><span><i class="far fa-clock"></i> 30 september 2021</span></li>
                                                                                <li><span><i class="far fa-comments-alt"></i> 44</span></li>
                                                                                <li><span><i class="fal fa-eye"></i> 684</span></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- post-widget-item end -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--tab  end-->
                                                        <!--tab -->
                                                        <div class="tab">
                                                            <div id="tab-resent" class="tab-content">
                                                                <div class="post-widget-container fl-wrap">
                                                                    <!-- post-widget-item -->
                                                                    <div class="post-widget-item fl-wrap">
                                                                        <div class="post-widget-item-media">
                                                                            <a href="post-single.html"><img src="images/all/thumbs/5.jpg"  alt=""></a>
                                                                        </div>
                                                                        <div class="post-widget-item-content">
                                                                            <h4><a href="post-single.html">Magpie nesting zone sites.</a></h4>
                                                                            <ul class="pwic_opt">
                                                                                <li><span><i class="far fa-clock"></i> 05 april 2021</span></li>
                                                                                <li><span><i class="far fa-comments-alt"></i> 16</span></li>
                                                                                <li><span><i class="fal fa-eye"></i> 727</span></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- post-widget-item end -->
                                                                    <!-- post-widget-item -->
                                                                    <div class="post-widget-item fl-wrap">
                                                                        <div class="post-widget-item-media">
                                                                            <a href="post-single.html"><img src="images/all/thumbs/6.jpg"  alt=""></a>
                                                                        </div>
                                                                        <div class="post-widget-item-content">
                                                                            <h4><a href="post-single.html">Locals help create whole new community.</a></h4>
                                                                            <ul class="pwic_opt">
                                                                                <li><span><i class="far fa-clock"></i> 22 march 2021</span></li>
                                                                                <li><span><i class="far fa-comments-alt"></i> 31</span></li>
                                                                                <li><span><i class="fal fa-eye"></i> 63</span></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- post-widget-item end -->
                                                                    <!-- post-widget-item -->
                                                                    <div class="post-widget-item fl-wrap">
                                                                        <div class="post-widget-item-media">
                                                                            <a href="post-single.html"><img src="images/all/thumbs/7.jpg"  alt=""></a>
                                                                        </div>
                                                                        <div class="post-widget-item-content">
                                                                            <h4><a href="post-single.html">Tennis season still to proceed.</a></h4>
                                                                            <ul class="pwic_opt">
                                                                                <li><span><i class="far fa-clock"></i> 06 December 2021</span></li>
                                                                                <li><span><i class="far fa-comments-alt"></i> 05</span></li>
                                                                                <li><span><i class="fal fa-eye"></i> 145</span></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <!-- post-widget-item end -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--tab end-->
                                                    </div>
                                                    <!--tabs end-->
                                                </div>
                                                <!-- content-tabs-wrap end -->
                                            </div>
                                        </div>
                                        <!-- box-widget  end -->
                                    </div>
                                    <!-- sidebar  end -->
                                </div>
                            </div>
                            <div class="limit-box fl-wrap"></div>
                        </div>
                    </section>
                    <!-- section end -->
                    <!-- section  -->
                    <div class="gray-bg ad-wrap fl-wrap">
                        <div class="content-banner-wrap">
                            <img src="images/all/banner.jpg" class="respimg" alt="">
                        </div>
                    </div>
                    <!-- section end -->
                </div>
                <!-- content  end-->
                <!-- footer -->
                <footer class="fl-wrap main-footer">
                    <div class="container">
                        <!-- footer-widget-wrap -->
                        <div class="footer-widget-wrap fl-wrap">
                            <div class="row">
                                <!-- footer-widget -->
                                <div class="col-md-4">
                                    <div class="footer-widget">
                                        <div class="footer-widget-content">
                                            <a href="index.html" class="footer-logo"><img src="images/logo2.png" alt=""></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Eaque ipsa quae ab illo inventore veritatis et quasi architecto. </p>
                                            <div class="footer-social fl-wrap">
                                                <ul>
                                                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-vk"></i></a></li>
                                                    <li><a href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                                <!-- footer-widget -->
                                <div class="col-md-2">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Categories </div>
                                        <div class="footer-widget-content">
                                            <div class="footer-list footer-box fl-wrap">
                                                <ul>
                                                    <li> <a href="#">Politics</a></li>
                                                    <li> <a href="#">Technology</a></li>
                                                    <li> <a href="#">Business</a></li>
                                                    <li> <a href="#">Sports</a></li>
                                                    <li> <a href="#">Science</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                                <!-- footer-widget -->
                                <div class="col-md-2">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Links</div>
                                        <div class="footer-widget-content">
                                            <div class="footer-list footer-box fl-wrap">
                                                <ul>
                                                    <li> <a href="#">Home</a></li>
                                                    <li> <a href="#">About</a></li>
                                                    <li> <a href="#">Contacts</a></li>
                                                    <li> <a href="#">News</a></li>
                                                    <li> <a href="#">Shop</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                                <!-- footer-widget -->
                                <div class="col-md-4">
                                    <div class="footer-widget">
                                        <div class="footer-widget-title">Subscribe</div>
                                        <div class="footer-widget-content">
                                            <div class="subcribe-form fl-wrap">
                                                <p>Want to be notified when we launch a new template or an udpate. Just sign up and we'll send you a notification by email.</p>
                                                <form id="subscribe" class="fl-wrap">
                                                    <input class="enteremail" name="email" id="subscribe-email" placeholder="Your Email" spellcheck="false" type="text">
                                                    <button type="submit" id="subscribe-button" class="subscribe-button color-bg">Send </button>
                                                    <label for="subscribe-email" class="subscribe-message"></label>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer-widget  end-->
                            </div>
                        </div>
                        <!-- footer-widget-wrap end-->
                    </div>
                    <div class="footer-bottom fl-wrap">
                        <div class="container">
                            <div class="copyright"><span>&#169; Gmag 2022</span> . All rights reserved. </div>
                            <div class="to-top"> <i class="fas fa-caret-up"></i></div>
                            <div class="subfooter-nav">
                                <ul>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- footer end-->
                <div class="aside-panel">
                    <ul>
                        <li> <a href="category.html"><i class="far  fa-podium"></i><span>Politics</span></a></li>
                        <li> <a href="category.html"><i class="far fa-atom"></i><span>Technology</span></a></li>
                        <li> <a href="category.html"><i class="far fa-user-chart"></i><span>Business</span></a></li>
                        <li> <a href="category.html"><i class="far fa-tennis-ball"></i><span>Sports</span></a></li>
                        <li> <a href="category.html"><i class="far fa-flask"></i><span>Science</span></a></li>
                    </ul>
                </div>
            </div>
            <!-- wrapper end -->
            <!--register form -->
            <div class="main-register-container">
                <div class="reg-overlay close-reg-form"></div>
                <div class="main-register-holder">
                    <div class="main-register-wrap fl-wrap">
                        <div class="main-register_bg">
                            <div class="bg-wrap">
                                <div class="bg par-elem "  data-bg="images/bg/1.jpg"></div>
                                <div class="overlay"></div>
                            </div>
                            <div class="mg_logo"><img src="images/logo2.png" alt=""></div>
                        </div>
                        <div class="main-register tabs-act fl-wrap">
                            <ul class="tabs-menu">
                                <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                                <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
                            </ul>
                            <div class="close-modal close-reg-form"><i class="fal fa-times"></i></div>
                            <!--tabs -->
                            <div id="tabs-container">
                                <div class="tab">
                                    <!--tab -->
                                    <div id="tab-1" class="tab-content first-tab">
                                        <div class="custom-form">
                                            <form method="post" name="registerform">
                                                <label>Username or Email Address <span>*</span> </label>
                                                <input name="email" type="text" onClick="this.select()" value="">
                                                <label>Password <span>*</span> </label>
                                                <input name="password" type="password" onClick="this.select()" value="">
                                                <div class="filter-tags">
                                                    <input id="check-a" type="checkbox" name="check" checked>
                                                    <label for="check-a">Remember me</label>
                                                </div>
                                                <div class="lost_password">
                                                    <a href="#">Lost Your Password?</a>
                                                </div>
                                                <div class="clearfix"></div>
                                                <button type="submit" class="log-submit-btn color-bg"><span>Log In</span></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!--tab end -->
                                    <!--tab -->
                                    <div class="tab">
                                        <div id="tab-2" class="tab-content">
                                            <div class="custom-form">
                                                <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                                    <label>Full Name <span>*</span> </label>
                                                    <input name="name" type="text" onClick="this.select()" value="">
                                                    <label>Email Address <span>*</span></label>
                                                    <input name="email" type="text" onClick="this.select()" value="">
                                                    <label>Password <span>*</span></label>
                                                    <input name="password" type="password" onClick="this.select()" value="">
                                                    <button type="submit" class="log-submit-btn color-bg"><span>Register</span></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--tab end -->
                                </div>
                                <!--tabs end -->
                                <div class="log-separator fl-wrap"><span>or</span></div>
                                <div class="soc-log  fl-wrap">
                                    <p>For faster login or register use your social account.</p>
                                    <a href="#"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--register form end -->
        </div>
        <!-- Main end -->
        <!--=============== scripts  ===============-->
        <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
        <script src="{{asset('frontend/js/plugins.js')}}"></script>
        <script src="{{asset('frontend/js/scripts.js')}}"></script>
    </body>

<!-- Mirrored from gmag.kwst.net/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Oct 2023 20:36:47 GMT -->
</html>