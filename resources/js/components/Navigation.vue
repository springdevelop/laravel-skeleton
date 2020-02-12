<template>
<nav class="navbar navbar-expand-md navbar-light px-0 py-1 shadow">
   <div class="container">
         <a class="navbar-brand col-md-2 text-center text-md-left" href="#"><img src="@/imgs/logomoi.png" alt="logo hueic" /></a>
         <div class="text-right col-md-10">
            <h1 class=" w-100 mb-3">Chung tay cùng Hueic phòng chống dịch</h1>
            <Menu class="w-100"></Menu>
         </div>
   </div>
</nav>
</template>
<script>
     import Menu from '@/js/components/Menu.vue'
export default {
   components: {
      Menu
   },
}
</script>
<style lang="scss" scoped>
@media screen and (max-width: 767px) {
   nav {
      h1{
         font-size: 1.2em!important;
         width: 100vw;
         text-align: center;
      }
     
   }

}
nav{
   h1{
      font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #0833c5;
      text-transform: uppercase; 
      font-size: 2em;
      text-shadow: 2px 2px 1px rgba(0,0,0,0.45);
   }
}

nav.navbar {
   // background-color: rgba(43, 47, 58, 0.2);
    border-bottom: 2px solid #0833c5;
}
</style>