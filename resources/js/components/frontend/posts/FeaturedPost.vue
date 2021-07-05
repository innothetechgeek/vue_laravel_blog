<template>
    <!-- latest post -->
    <div class="post featured-post-lg lastest">
        <div class="details clearfix">
            <a href="category.html" class="category-badge">Inspiration</a>
            <h2 class="post-title"> <router-link  to="post/detail" >{{post[0].title}}</router-link></h2>
            <ul class="meta list-inline mb-0">
                <li class="list-inline-item"><a href="#">{{post[0].name}}</a></li>
                <li class="list-inline-item">{{post[0].created_at_formatted }}</li>
            </ul>
        </div>
        <router-link  to="post/detail" >
            <div class="thumb rounded">
                <div class="inner data-bg-image" data-bg-image="images/posts/featured-lg.jpg" style="background-image: url(images/posts/featured-lg.jpg);"></div>
            </div>
        </router-link>
    </div>     	
</template>
<script>
    export default {        
        data(){
            return{
               post: '',
            }
        },
        methods:{
            getLatestPost(){
                axios.get('/api/featured-post').then((response)=> {
                   this.post = response.data;                                 
                }).catch((error) =>{
                    this.errors = error.response.data.errors;
                })
            },          
        },
        created(){
            this.getLatestPost();
        }
    }
</script>
