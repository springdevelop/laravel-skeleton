<template>
<div style="">
     <navigation></navigation>
     <div class="">
            <main role="main" class="py-4">
                 <founding></founding>
                 <div class="section-donate">
                      <div class="container">
                         <donate></donate>
                      </div>

                 </div>
            </main>
          <page-footer class="text-center footer py-3"></page-footer>

    </div>
</div>
</template>
<script>
     import Navigation from '@/js/components/Navigation.vue'
     import Founding from '@/js/components/Founding.vue'
     import Donate from '@/js/components/Donate.vue'
     import PageFooter from '@/js/components/Footer.vue'

     export default {
          components: {
               Navigation, Founding, Donate, PageFooter
          },
     }
</script>
<style  scoped>
.section-donate{
}
.footer{
     background-color:#F87401;
     color: #fff;
}
</style>