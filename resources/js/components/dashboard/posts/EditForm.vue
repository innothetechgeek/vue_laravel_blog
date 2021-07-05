<template>
<div>
     <div class="row">
         <div class="col-8">
            <div class="alert alert-primary" role="alert"  v-if="message">
                New Post Updated successfully
            </div>
         </div>       
    </div> 
    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
             
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Edit Post</h4>
                <form id ="PostForm">
                    <div class="form-group">
                         <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Title" v-model="form.title">
                        <div class="col-12 d-flex justify-content-end">
                            <span class="w-full text-red-500 error" v-if="errors.title">{{errors.title[0]}}</span><br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Keywords</label>
                        <input type="text" name="keywords" class="form-control" id="keywords" placeholder="Keywords"  v-model="form.keywords">
                        <div class="col-12 d-flex justify-content-end">
                            <span class="w-full text-red-500 error" v-if="errors.keywords">{{errors.keywords[0]}}</span><br>
                        </div>
                    </div>
                    <div class="form-group">
                    <label>Post Image</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                        </span>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="Content">Content</label>
                        <textarea name="content" class="form-control" id="content" rows="7"  v-model="form.content"></textarea>
                        <div class="col-12 d-flex justify-content-end">
                            <span class="w-full text-red-500 error" v-if="errors.content">{{errors.content[0]}}</span><br>
                        </div>
                    </div>
                    <button  @click.prevent="EditPost" type="submit" class="btn btn-success mr-2">Update</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>
<script>  

    var user_token = localStorage.getItem("user_token");
    alert(user_token);
    const headers = {
            headers: { Authorization: 'Bearer '+user_token }
    };
     export default {
        
        data(){
            return{
                form:{
                    title: '',
                    keywords: '',
                    content:'',
                },
                errors:[],
                message:'',
            }
        },
        created(){
           this.getPost();
        },
        methods:{
            clearFields(){
                 window.scrollTo(0,0);
                 this.form={
                    title: '',
                    keywords: '',
                    content:'',
                } 
                    this.message = 'success';
            },
            getPost(){
                  axios.get('/api/posts/'+this.$route.params.id, this.form,headers).then((response)=> {
                      console.log(response.data);
                   this.form = response.data;                                 
                }).catch((error) =>{
                    this.errors = error.response.data.errors;
                })
            }
            ,
            EditPost(){
                axios.put('/api/posts/'+this.$route.params.id, this.form,headers).then((response)=> {
                     this.clearFields();                                 
                }).catch((error) =>{
                    this.errors = error.response.data.errors;
                })
            }
        }
    }
</script>