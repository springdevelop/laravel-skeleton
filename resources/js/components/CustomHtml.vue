<template>
    <div class="customhtmls container" >
        <span v-html="html_top">{{html_top}}</span>
    </div>
</template>
<script>
export default {
    props: {
        position: {
            type: String,
            default: 'top'
        }
        
    },
    created() {
        this.$store.dispatch('loadCustomhtmls')
    },
    computed: {
        customhtmls: function() {
            return this.$store.getters.getCustomhtmls;
        },
        html_top: function() {
            return this.$store.getters.getCustomhtmls.filter(x => x.position === this.position).map(x => x.content)[0];
        }
    },
}
</script>
