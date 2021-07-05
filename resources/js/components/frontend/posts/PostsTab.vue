<template>
     <!-- post tabs -->
    <div class="post-tabs rounded bordered">
        <!-- tab navs -->
        <ul class="nav nav-tabs nav-pills nav-fill" id="postsTab" role="tablist">
            <li class="nav-item" role="presentation"><button aria-controls="popular" aria-selected="true" class="nav-link active" data-bs-target="#popular" data-bs-toggle="tab" id="popular-tab" role="tab" type="button">Recent</button></li>
            <li class="nav-item" role="presentation"><button aria-controls="recent" aria-selected="false" class="nav-link" data-bs-target="#recent" data-bs-toggle="tab" id="recent-tab" role="tab" type="button">Popular</button></li>
        </ul>
        <!-- tab contents -->
        <div class="tab-content" id="postsTabContent">
            <!-- loader -->
            <div class="lds-dual-ring"></div>
            <!-- popular posts -->
            <div aria-labelledby="popular-tab" class="tab-pane fade show active" id="popular" role="tabpanel">
                <div  v-for="recent_post in recent_posts"
                                :key="recent_post.post_id">
                    <!-- post -->
                    <div class="post post-list-sm circle">
                        <div class="thumb circle">
                           <router-link  :to="{
                                            name: 'PostDetail',
                                            params: { id: recent_post.post_id}
                                }" >
                                <div class="inner">
                                    <img src="/images/posts/tabs-2.jpg" alt="post-title" />
                                </div>
                            </router-link>
                        </div>
                        <div class="details clearfix">
                            <h6 class="post-title my-0"><router-link :to="{
                                            name: 'PostDetail',
                                            params: { id: recent_post.post_id }
                                }" >{{recent_post.title}}</router-link></h6>
                            <ul class="meta list-inline mt-1 mb-0">
                                <li class="list-inline-item">{{recent_post.created_at_formatted}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- recent posts -->
            <div aria-labelledby="recent-tab" class="tab-pane fade" id="recent" role="tabpanel">
                
            </div>
        </div>
    </div>
</template>
<script>
    export default {        
        data(){
            return{
               recent_posts: [],
            }
        },
        methods:{
            getRecentPosts(){
                axios.get('/api/recent-posts').then((response)=> {
                   this.recent_posts = response.data;                                 
                }).catch((error) =>{
                    this.errors = error.response.data.errors;
                })
            },          
        },
        created(){
            this.getRecentPosts();
        }
    }
</script>