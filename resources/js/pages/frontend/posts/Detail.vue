<template>
    <!-- site wrapper -->
<div class="site-wrapper">
    <Header/>
    <!-- hero section -->
    <section id="hero">
        <div class="container-xl">
            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="post post-single">
                        <!-- post title -->
                        <PostHeader/>
                        <div class="featured-image">
                                <img src="/images/posts/featured-lg.jpg" alt="post-title">
                        </div>
                        <PostContent/>
                   </div>                    
                </div>

                <div class="col-lg-4">
                    <!-- recent / popular tabs  -->
                    <PostsTab/>          

                    <!-- sidebar -->
                    <div class="sidebar" style="margin-top:15px">
                        <!-- popular posts -->
                        <PopularPosts/>                           

                        <!-- widget categories -->
                        <Categories/>

                    </div>

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


                </div>
                <div class="col-lg-4">

                    

                </div>

            </div>

            <!-- instagram -->
            <InstagranFeed/>

            <!-- footer -->
            <PageFooter/>

        </div>
    </section>  
</div><!-- end site wrapper -->
</template>
<script>
    import FeaturedPost from '../../../components/frontend/posts/FeaturedPost.vue'
    import PostHeader from '../../../components/frontend/posts/PostHeader.vue'
    import Header from '../../../components/frontend/PageHeader.vue'
    import PostsTab from '../../../components/frontend/posts/PostsTab.vue'
    import LatestPosts from '../../../components/frontend//posts/LatestPosts.vue'
    import PopularPosts from '../../../components/frontend/posts/sidebar/PopularPosts.vue'
    import About from '../../../components/frontend//posts/sidebar/About.vue'
    import Categories from '../../../components/frontend/posts/sidebar/Categories.vue'
    import PageFooter from '../../../components/frontend/PageFooter.vue'  
    import InstagramFeed from '../../../components/frontend/posts/InstagramFeed.vue' 
    import PostContent from '../../../components/frontend/posts/PostContent.vue' 

     export default {
        components: {
            FeaturedPost,
            Header,
            PostsTab,
            PopularPosts,
            About,
            Categories,
            InstagramFeed,
            PageFooter,
            LatestPosts,
            PostHeader,
            PostContent,
        },
        methods: { 
           scrollToTop() {
                window.scrollTo(0,0);
           }
        },
        created(){
            this.scrollToTop();
        }
    }
</script>