<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Katen - Minimal Blog & Magazine HTML Theme</title>
        <meta name="description" content="Katen - Minimal Blog & Magazine HTML Theme">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

        <!-- STYLES -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" media="all">
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" type="text/css" media="all">
        <link rel="stylesheet" href="{{ asset('css/slick.css') }}" type="text/css" media="all">
        <link rel="stylesheet" href="{{ asset('css/simple-line-icons.css') }}" type="text/css" media="all">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all">
    </head>
    <body class="antialiased">

<!-- site wrapper -->
<div class="site-wrapper">
	
    <div id="app">
        <header-component></header-component>
        <!-- hero section -->
        <section id="hero">
        <div class="container-xl">

<div class="row gy-4">

    <div class="col-lg-8">
        

    </div>

    <div class="col-lg-4">

        <!-- post tabs -->
        <div class="post-tabs rounded bordered">
            <!-- tab navs -->
            <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist">
                <li class="nav-item" role="presentation"><button aria-controls="popular" aria-selected="true" class="nav-link active" data-bs-target="#popular" data-bs-toggle="tab" id="popular-tab" role="tab" type="button">Popular</button></li>
                <li class="nav-item" role="presentation"><button aria-controls="recent" aria-selected="false" class="nav-link" data-bs-target="#recent" data-bs-toggle="tab" id="recent-tab" role="tab" type="button">Recent</button></li>
            </ul>
            <!-- tab contents -->
            <div class="tab-content" id="postsTabContent">
                <!-- loader -->
                <div class="lds-dual-ring"></div>
                <!-- popular posts -->
                <div aria-labelledby="popular-tab" class="tab-pane fade show active" id="popular" role="tabpanel">
                    <!-- post -->
                    <div class="post post-list-sm circle">
                        <div class="thumb circle">
                            <a href="blog-single.html">
                                <div class="inner">
                                    <img src="images/posts/tabs-1.jpg" alt="post-title" />
                                </div>
                            </a>
                        </div>
                        <div class="details clearfix">
                            <h6 class="post-title my-0"><a href="blog-single.html">3 Easy Ways To Make Your iPhone Faster</a></h6>
                            <ul class="meta list-inline mt-1 mb-0">
                                <li class="list-inline-item">29 March 2021</li>
                            </ul>
                        </div>
                    </div>
                    <!-- post -->
                    <div class="post post-list-sm circle">
                        <div class="thumb circle">
                            <a href="blog-single.html">
                                <div class="inner">
                                    <img src="images/posts/tabs-2.jpg" alt="post-title" />
                                </div>
                            </a>
                        </div>
                        <div class="details clearfix">
                            <h6 class="post-title my-0"><a href="blog-single.html">An Incredibly Easy Method That Works For All</a></h6>
                            <ul class="meta list-inline mt-1 mb-0">
                                <li class="list-inline-item">29 March 2021</li>
                            </ul>
                        </div>
                    </div>
                    <!-- post -->
                    <div class="post post-list-sm circle">
                        <div class="thumb circle">
                            <a href="blog-single.html">
                                <div class="inner">
                                    <img src="images/posts/tabs-3.jpg" alt="post-title" />
                                </div>
                            </a>
                        </div>
                        <div class="details clearfix">
                            <h6 class="post-title my-0"><a href="blog-single.html">10 Ways To Immediately Start Selling Furniture</a></h6>
                            <ul class="meta list-inline mt-1 mb-0">
                                <li class="list-inline-item">29 March 2021</li>
                            </ul>
                        </div>
                    </div>
                    <!-- post -->
                    <div class="post post-list-sm circle">
                        <div class="thumb circle">
                            <a href="blog-single.html">
                                <div class="inner">
                                    <img src="images/posts/tabs-4.jpg" alt="post-title" />
                                </div>
                            </a>
                        </div>
                        <div class="details clearfix">
                            <h6 class="post-title my-0"><a href="blog-single.html">15 Unheard Ways To Achieve Greater Walker</a></h6>
                            <ul class="meta list-inline mt-1 mb-0">
                                <li class="list-inline-item">29 March 2021</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- recent posts -->
                <div aria-labelledby="recent-tab" class="tab-pane fade" id="recent" role="tabpanel">
                    <!-- post -->
                    <div class="post post-list-sm circle">
                        <div class="thumb circle">
                            <a href="blog-single.html">
                                <div class="inner">
                                    <img src="images/posts/tabs-2.jpg" alt="post-title" />
                                </div>
                            </a>
                        </div>
                        <div class="details clearfix">
                            <h6 class="post-title my-0"><a href="blog-single.html">An Incredibly Easy Method That Works For All</a></h6>
                            <ul class="meta list-inline mt-1 mb-0">
                                <li class="list-inline-item">29 March 2021</li>
                            </ul>
                        </div>
                    </div>
                    <!-- post -->
                    <div class="post post-list-sm circle">
                        <div class="thumb circle">
                            <a href="blog-single.html">
                                <div class="inner">
                                    <img src="images/posts/tabs-1.jpg" alt="post-title" />
                                </div>
                            </a>
                        </div>
                        <div class="details clearfix">
                            <h6 class="post-title my-0"><a href="blog-single.html">3 Easy Ways To Make Your iPhone Faster</a></h6>
                            <ul class="meta list-inline mt-1 mb-0">
                                <li class="list-inline-item">29 March 2021</li>
                            </ul>
                        </div>
                    </div>
                    <!-- post -->
                    <div class="post post-list-sm circle">
                        <div class="thumb circle">
                            <a href="blog-single.html">
                                <div class="inner">
                                    <img src="images/posts/tabs-4.jpg" alt="post-title" />
                                </div>
                            </a>
                        </div>
                        <div class="details clearfix">
                            <h6 class="post-title my-0"><a href="blog-single.html">15 Unheard Ways To Achieve Greater Walker</a></h6>
                            <ul class="meta list-inline mt-1 mb-0">
                                <li class="list-inline-item">29 March 2021</li>
                            </ul>
                        </div>
                    </div>
                    <!-- post -->
                    <div class="post post-list-sm circle">
                        <div class="thumb circle">
                            <a href="blog-single.html">
                                <div class="inner">
                                    <img src="images/posts/tabs-3.jpg" alt="post-title" />
                                </div>
                            </a>
                        </div>
                        <div class="details clearfix">
                            <h6 class="post-title my-0"><a href="blog-single.html">10 Ways To Immediately Start Selling Furniture</a></h6>
                            <ul class="meta list-inline mt-1 mb-0">
                                <li class="list-inline-item">29 March 2021</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
        </section>       
    </div>   
    <script src="{{ mix('/js/app.js') }}"></script>



</div><!-- end site wrapper -->
<!-- JAVA SCRIPTS -->
    </body>
</html>
