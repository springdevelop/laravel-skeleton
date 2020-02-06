<template>
    <div class="foundings">
        <div class="founding p-3" v-for="founding in foundings" :key="founding.id" >
           <vc-donut :size="10" unit="em" :thickness="30" :sections="resolve(founding)"><h2>{{percentage(founding)}}%</h2></vc-donut>
           <h2 class="pt-2">{{founding.date_founding | moment("DD/MM")}}</h2>
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
            return this.$store.getters.getFoundings;
        }
    },
    methods: {
        loadFoundings() {
            this.$store.dispatch("loadFoundings");
        },
        resolve(founding) {
            var total = founding.founding + founding.current;
            var rs = [
                {value: founding.current / total*100},
                // {value: (founding.founding - founding.current) / total *100},
            ]
            return rs
        },
        percentage(founding) {
            var total = founding.founding + founding.current;
           
            return (founding.founding / total * 100).toFixed(1);
        }
    }
}
</script>
<style scoped>
    .foundings{
        display: flex;
        justify-content: center;
    }
    .founding{
        text-align: center;
    }
    .foundings .cdc{
        max-width: 150px;
    }
</style>