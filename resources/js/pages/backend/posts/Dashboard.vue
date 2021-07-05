<template>
    <div>
    <PageNav/>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">

        <!-- sidebar -->
        <PageSidebar/>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            <ContentHeader/>        

            <!-- stats -->
            <DashboardStats/>

            <PostsTable/>
         
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
    </div>
</template>
<script>
import PageNav from '../../../components/dashboard/posts/PageNav.vue'
import ContentHeader from '../../../components/dashboard/posts/ContentHeader.vue'
import PageSidebar from '../../../components/dashboard/posts/PageSidebar.vue'
import DashboardStats from '../../../components/dashboard/posts/DashboardStats.vue'
import PostsTable from '../../../components/dashboard/posts/PostsTable.vue'

export default{
   components:{
       PageNav,
       PageSidebar,
       DashboardStats,
       PostsTable,
       ContentHeader,
   },
    data(){
            return{
                form:{
                    name: '',
                    email: '',
                    password:'',
                    password_confirmation:''
                },
                errors:[],
                token:'',
            }
        },
        methods:{
            register(){
                axios.post('/api/register', this.form).then((response) =>{
                    this.token = response.data.token;
                }).catch((error) =>{
                    this.errors = error.response.data.errors;
                })
            }
        }
}
</script>
