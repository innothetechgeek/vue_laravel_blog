<template>
     <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Posts</h4>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Title</th>
                          <th>Content</th>
                          <th>Created</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr  v-for="post in posts"
                                :key="post.id">
                          <td>{{post.id}}</td>
                          <td>{{post.title}}</td>
                          <td>{{post.content}}</td>
                          <td>{{post.created_at}}</td>
                          <td>
                             <router-link :to="{
                                            name: 'EditPost',
                                            params: { id: post.id }
                                }" >
                                <label class="badge badge-success">edit</label>
                             </router-link>
                            <label class="badge badge-danger">delete</label>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
</template>

<script>
   var user_token = localStorage.getItem("user_token");
   const headers = {
        headers: { Authorization: 'Bearer '+user_token }
    };
    export default {        
        data(){
            return{
               posts: [],
            }
        },
        methods:{
            getPosts(){
                axios.get('/api/posts', this.form,headers).then((response)=> {
                   this.posts = response.data;                                 
                }).catch((error) =>{
                    this.errors = error.response.data.errors;
                })
            }            
        },
        created(){
            this.getPosts();
        }
    }
</script>