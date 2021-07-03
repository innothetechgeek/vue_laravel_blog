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
                         <!-- featured post -->
                        <featured-post></featured-post>
                    </div>

                    <div class="col-lg-4">
                        <!-- recent / popular tabs  -->
                        <posts-tab></posts-tab>                        
                    </div>

                </div>
            </div>
        </section>     

        <!-- section main content -->
        <section class="main-content">
            <div class="container-xl">
                <div class="row gy-4">
                    <div class="col-lg-8">

                        <div class="spacer" data-height="50"></div>

                        <!-- section header -->
                        <div class="section-header">
                            <h3 class="section-title">Latest Posts</h3>
                            <img src="images/wave.svg" class="wave" alt="wave" />
                        </div>


                        <!-- latest posts -->
                        <latest-posts></latest-posts>

                    </div>
                    <div class="col-lg-4">

                        <!-- sidebar -->
                        <div class="sidebar">
                            <!-- widget about -->
                            <about></about>

                            

                           

                            <!-- widget categories -->
                            <div class="widget rounded">
                                <div class="widget-header text-center">
                                    <h3 class="widget-title">Explore Topics</h3>
                                    <img src="images/wave.svg" class="wave" alt="wave" />
                                </div>
                                <div class="widget-content">
                                    <ul class="list">
                                        <li><a href="#">Lifestyle</a><span>(5)</span></li>
                                        <li><a href="#">Inspiration</a><span>(2)</span></li>
                                        <li><a href="#">Fashion</a><span>(4)</span></li>
                                        <li><a href="#">Politic</a><span>(1)</span></li>
                                        <li><a href="#">Trending</a><span>(7)</span></li>
                                        <li><a href="#">Culture</a><span>(3)</span></li>
                                    </ul>
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
