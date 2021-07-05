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
                     
            <AddForm/>
         
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
import PageSidebar from '../../../components/dashboard/posts/PageSidebar.vue'
import DashboardStats from '../../../components/dashboard/posts/DashboardStats.vue'
import AddForm from '../../../components/dashboard/posts/AddForm'

export default{
   components:{
       PageNav,
       PageSidebar,
       DashboardStats,
       AddForm,
   }
}
</script>
