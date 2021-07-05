<template>
    <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="/backend/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{active_username}}</p>
                  <p class="designation">Premium user</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Main Menu</li>
            <li class="nav-item">
              <router-link  class="nav-link"  to="/dashboard" >
                <i class="menu-icon typcn typcn-document-text"></i>
                 
                    <span class="menu-title">Dashboard</span>
                </router-link>
            </li>
          </ul>
        </nav>
</template>
<script>
export default{
    data(){
            return{
               active_username: '',
            }
        },
    
        created(){
           this.active_username = this.$store.state.active_username;
        }
}
</script>