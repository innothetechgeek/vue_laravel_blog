<template>
    <div class="post-header">
        <h1 class="title mt-0 mb-3">{{post.title}}</h1>
        <ul class="meta list-inline mb-0">
            <li class="list-inline-item"><img src="/images/other/author-sm.png" class="author" alt="author">&nbsp;{{post.name}}</li>
            <li class="list-inline-item">Trending</li>
            <li class="list-inline-item">{{post.created_at_formatted}}</li>
        </ul>
	</div>
</template>

<script>  
     export default {
        
        data(){
            return{
                post:'',
            }
        },
        created(){
           this.getPost();
        },
        methods:{
            getPost(){
                  axios.get('/api/posts/'+this.$route.params.id).then((response)=> {
                   this.post = response.data; 
                   console.log(this.post);                    
                }).catch((error) =>{
                    this.errors = error.response.data.errors;
                })
            }
        }
    }
</script>