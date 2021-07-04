<template>
    <p>hello world</p>
</template>
<script>
    import FeaturedPost from '../../../components/posts/FeaturedPost.vue'
    import Header from '../../../components/PageHeader.vue'
    import PostsTab from '../../../components/posts/PostsTab.vue'
    import LatestPosts from '../../../components/posts/LatestPosts.vue'
    import PopularPosts from '../../../components/posts/sidebar/PopularPosts.vue'
    import About from '../../../components/posts/sidebar/About.vue'
    import Categories from '../../../components/posts/sidebar/Categories.vue'
    import InstagranFeed from '../../../components/posts/InstagramFeed.vue';   
    import PageFooter from '../../../components/PageFooter.vue';    

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
        }
    }
</script>