<template>
<div class="container">
    <h2>Chương trình sẽ kéo dài đến:</h2>
    <div class="foundings">
        <div class="founding p-3" v-for="founding in foundings" :key="founding.id" >
           <vc-donut :size="11" unit="rem" :thickness="30" :sections="resolve(founding)"> 
               <h4>{{percentage(founding)}}% </h4>
            </vc-donut>
           <h2 class="pt-2">{{founding.date_founding | moment("DD/MM")}}</h2>
        </div>
       
    </div>
     <div class="col-12 text-center">
            <span class="current-square">Số tiền ủng hộ</span>
            <span class="founding-square ml-2">Số tiền còn thiếu</span>
    </div>
</div>
</template>
<script>
export default {
    created() {
        this.$store.dispatch('loadFoundings')
    },
    computed: {
        foundings: function() {
            return this.$store.getters.getFoundings.sort( ( a, b) => {
                return new Date(a.date_founding) - new Date(b.date_founding);
            })
        }
    },
    methods: {
        loadFoundings() {
            this.$store.dispatch("loadFoundings");
        },
        resolve(founding) {
            // var total = founding.founding + founding.current;
            var rs = [
                {value: founding.current / founding.founding*100},
                // {value: (founding.founding - founding.current) / total *100},
            ]
            return rs
        },
        percentage(founding) {
            // var total = founding.founding + founding.current;
            return (founding.current / founding.founding * 100).toFixed(1);
        }
    }
}
</script>
<style scoped>
    .foundings{
        display: flex;
        justify-content: center;
        flex-direction: row;
        flex-wrap: wrap-reverse;
        justify-content: space-around;
    }
    .founding{
        text-align: center;
    }
    .foundings .cdc{
        max-width: 150px;
    }
    .founding-square,
    .current-square{
        padding-left:20px;
        position:relative;
    }
    .founding-square::before,
    .current-square::before{
        content: "";
        position: absolute;
        left: 0;
        top: 0;
        width: 15px;
        height: 15px;
        background: #FF6384;
    }
    .founding-square::before{
        background: #EEEEEE;
    }
    h2{
        font-weight: 900;
        color: #2A569F;
    }
</style>