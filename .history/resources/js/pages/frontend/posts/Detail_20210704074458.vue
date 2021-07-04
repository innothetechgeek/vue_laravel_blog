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
                    
                </div>

                <div class="col-lg-4">
                    <!-- recent / popular tabs  -->
                    <PostsTab/>                       
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

                    <!-- sidebar -->
                    <div class="sidebar">
                        <!-- widget about -->
                        <About/>

                        <!-- popular posts -->
                        <PopularPosts/>                           

                        <!-- widget categories -->
                        <Categories/>

                    </div>

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
    import FeaturedPost from '../../../components/posts/FeaturedPost.vue'
    import Header from '../../../components/PageHeader.vue'
    import PostsTab from '../../../components/posts/PostsTab.vue'
    import LatestPosts from '../../../components/posts/LatestPosts.vue'
    import PopularPosts from '../../../components/posts/sidebar/PopularPosts.vue'
    import About from '../../../components/posts/sidebar/About.vue'
    import Categories from '../../../components/posts/sidebar/Categories.vue'
    import InstagranFeed from '../../../components/posts/InstagramFeed.vue'
    import PageFooter from '../../../components/PageFooter.vue'
    import PostTitle from '../../../components/posts/PostHeader.vue' 

     export default {
        components: {
            FeaturedPost,
            Header,
            PostsTab,
            PopularPosts,
            About,
            Categories,
            InstagranFeed,
            PageFooter,
            LatestPosts,
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