<template>
    <div>
    <page-nav></page-nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">

        <!-- sidebar -->
        <page-sidebar></page-sidebar>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">          

            <!-- stats -->
            <dashboard-stats></dashboard-stats>

            <posts-table></posts-table>
         
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
import PageNav from '..'

export default defineComponent({
    setup() {
        
    },
})
</script>
