<template>
<div class="padding-30 rounded bordered">
    <div class="row">  
                     
        <div class="col-md-12 col-sm-6" v-for="post in posts"
                                :key="post.id">
            <!-- post -->
            <div class="post post-list clearfix">
                <div class="thumb rounded">
                    <span class="post-format-sm">
                        <i class="icon-camrecorder"></i>
                    </span>
                    <a href="blog-single.html">
                        <router-link
  to="/about""
>
                        <div class="inner">
                            <img src="images/posts/latest-sm-3.jpg" alt="post-title" />
                        </div>
                    </a>
                </div>
                <div class="details">
                    <ul class="meta list-inline mb-3">
                        <li class="list-inline-item"><a href="#"><img src="images/other/author-sm.png" class="author" alt="author"/>Katen Doe</a></li>
                        <li class="list-inline-item"><a href="#">Fashion</a></li>
                        <li class="list-inline-item">29 March 2021</li>
                    </ul>
                    <h5 class="post-title"><a href="blog-single.html">{{ post.title }}</a></h5>
                    <p class="excerpt mb-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings</p>
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
    data() {
        return {
            posts: 
            [
               {    
                    id: 1,
                    title:"The Next 60 Things To Immediately Do About Building",
                    content:"A wonderful serenity has taken possession of my entire soul, like these sweet mornings", 
                    image:"images/posts/latest-sm-1.jpg"
               },
               { 
                    id: 2,
                    title:"Master The Art Of Nature With These 7 Tips",
                    content:"A wonderful serenity has taken possession of my entire soul, like these sweet mornings", 
                    color:"white"
               },
               {
                    id:3,
                    title:"Facts About Business That Will Help You Success",
                    content:"500", 
                    image:"white"
               },
            ],
        };
    },
    watch: {
        
    },
    created() {
      
    },
    methods: {
       
    }
};
</script>
