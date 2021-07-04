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

            <!-- stats -->
            <DashboardStats>

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
import PageNav from '../../components/backend/dashboard/posts/PageNav.vue'
import PageSidebar from '../../components/backend/dashboard/posts/PageSidebar.vue'
import DashboardStats from '../../components/backend/dashboard/posts/DashboardStats.vue'
import PostsTable from '../../components/backend/dashboard/posts/PostsTable.vue'

export default{
   components:{
       PageNav,
       PageSidebar,
       DashboardStats,
       PostsTable,
   }
}
</script>
