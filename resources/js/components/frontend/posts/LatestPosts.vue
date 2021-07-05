<template>
<div class="padding-30 rounded bordered">
    <div class="row">  
                     
        <div class="col-md-12 col-sm-6" v-for="post in posts"
                                :key="post.post_id">
            <!-- post -->
            <div class="post post-list clearfix">
                <div class="thumb rounded">
                    <router-link  :to="{
                                            name: 'PostDetail',
                                            params: { id: post.post_id }
                                }" >
                        <div class="inner">
                            <img src="images/posts/latest-sm-3.jpg" alt="post-title" />
                        </div>
                    </router-link>                    
                </div>
                <div class="details">
                    <ul class="meta list-inline mb-3">
                        <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author"/>{{ post.name}}</a></li>
                        <li class="list-inline-item"><a href="#">Fashion</a></li>
                        <li class="list-inline-item">{{ post.created_at_formatted}}</li>
                    </ul>
                    <h5 class="post-title"><router-link  :to="{
                                            name: 'PostDetail',
                                            params: { id: post.post_id }
                                }" >{{ post.title }}</router-link>  </h5>
                    <p class="excerpt mb-0">{{ post.content.substring(1, 80)+'...' }}</p>
                    <div class="post-bottom clearfix d-flex align-items-center">
                        <div class="social-share me-auto">
                            <button class="toggle-button icon-share"></button>
                            <ul class="icons list-unstyled list-inline mb-0">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="far fa-envelope"></i></a></li>
                            </ul>
                        </div>
                        <div class="more-button float-end">
                            <a href="blog-single.html"><span class="icon-options"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>                         
    </div>
</div>
</template>
<script>
    export default {        
        data(){
            return{
               posts: [],
            }
        },
        methods:{
            getPosts(){
                axios.get('/api/posts',).then((response)=> {
                   this.posts = response.data;                                 
                }).catch((error) =>{
                    this.errors = error.response.data.errors;
                })
            },          
        },
        created(){
            this.getPosts();
        }
    }
</script>
