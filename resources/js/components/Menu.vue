<template>
<div>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-top" aria-controls="menu-top" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon">
            <i class="fas fa-bars fa-1x"></i>
         </span>
      </button>
      <div class="collapse navbar-collapse" id="menu-top">
         <ul class="navbar-nav float-right">
            <li v-for="menu in menus"  :key="menu.id" class="nav-item">
               <a class="nav-link" :href="menu.link">{{menu.name}} </a>
            </li>
         </ul>
      </div>
</div>
</template>
<script>
export default {
    created() {
        this.$store.dispatch('loadMenus')
    },
    computed: {
        menus: function() {
            return this.$store.getters.getMenus;
        }
    },
}
</script>
<style scoped>
#menu-top {
   justify-content: flex-end;

}

.navbar-expand-md .navbar-nav .nav-link{
   padding-left: 0!important;
   padding-right: 0!important;
}
.nav-link{
   text-transform: uppercase;
   position: relative;
   padding: 0;
}
.navbar-toggler {
   position: fixed;
   top:20px;
   left: 20px;
   z-index: 100;
}
@media screen and (min-width: 768px) {
   .nav-item{
   padding: 5px 10px;
}
   .nav-item:hover .nav-link{
      color: #F9853C;
   }
   .nav-item .nav-link::before{
      content: "";
      width: 0;
      height: 1px;
      position: absolute;
      left: 0;
      bottom: 0;
      z-index: 1000;
      transition: all 0.2s linear;
      background-color: #F9853C;
   }
   .nav-item:hover .nav-link::before{
      width: 100%;
   }
}
@media screen and (max-width: 767px) {
   .collapse:not(.show) {
    display: block;
   }
   .navbar-nav .nav-item .nav-link{
      padding: 15px 20px;
      border-bottom: 1px solid #888;
   }
   .navbar-nav .nav-item:hover{
      background-color: #2a569f;

   }
   .navbar-light .navbar-nav .nav-link{
      color: #2a569f;
      text-align: center;
   }
   .navbar-nav .nav-item:hover .nav-link{
      color: #fff;
   }
   .navbar-nav{
      width: 100%;
   }
   #menu-top{
      position: fixed;
      top: 0;
      right: 0;
      height: 100vh;
      width: 70%;
      background-color: rgba(0, 0, 0, 0.9);
      box-shadow: -5px 0 5px -5px #333;
      z-index: 1000;
      transition: all 0.2s linear;
   }
   #menu-top:not(.show){
      transform: translate(100%, 0);
   }
   .collapsing {
      position: fixed;
      height: 100vh;
      overflow:unset;
      transition: none;
   }
}
</style>