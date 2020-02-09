<template>
<div>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu-top" aria-controls="menu-top" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
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
</style>