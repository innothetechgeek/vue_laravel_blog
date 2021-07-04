<template>
    <!-- site wrapper -->
<div class="site-wrapper">
    <Header/>
    <!-- hero section -->
    <section id="hero">
        <div class="container-xl">
            <div class="row gy-4">

                <div class="col-lg-8">
                        <!-- featured post -->
                    <FeaturedPost/>
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

                        <!-- popular posts -->
                        <popular-posts></popular-posts>                           

                        <!-- widget categories -->
                        <categories/>

                    </div>

                </div>

            </div>

            <!-- instagram -->
            <instagram-feed></instagram-feed>

            <!-- footer -->
            <page-footer></page-footer>

        </div>
    </section>  
</div><!-- end site wrapper -->
</template>
<script>
    import FeaturedPost from '../../../components/posts/FeaturedPost.vue'
    import Header from '../../../components/PageHeader.vue'
    import PostsTab from '../../../components/posts/PostsTab.vue'
    import LatestPosts from '../../../components/posts/'
    import AddTask from '../components/AddTask'
</script>