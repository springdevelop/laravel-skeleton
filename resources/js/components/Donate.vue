<template>
    <div class="donates col-12">
        <h2 class="pt-4 text-center text-uppercase">Danh sách ủng hộ</h2>
        <table id="" class="table table-striped table-hover mb-0">
            <colgroup>
                <col width="5%" />
                <col width="70%" />
                <!-- <col width="20%" /> -->
                <col width="25%" />
            </colgroup>
            <thead>
                <tr>
                    <th class="pr-3">STT </th>
                    <th class="pl-2">Đươn vị/ Cá nhân</th>
                    <!-- <th class="text-center">Ghi chú</th> -->
                    <th class="text-right">Số tiền</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(donate, index) in donates"  :key="donate.id" class="align-middle">
                <td class="text-center pr-3">{{index +1}}</td>
                <td class="pl-2">
                   {{donate.name}}
                </td>
                <!-- <td class="text-center">
                   {{donate.desc}}
                </td> -->
                <td class="text-right">
                    {{donate.amount | toCurrency}}
                </td>
                </tr>
            </tbody>
         </table>
    </div>
</template>
<script>
export default {
    created() {
        this.$store.dispatch('loadDonates')
    },
    computed: {
        donates: function() {
            return this.$store.getters.getDonates;
        }
    },
    methods: {
     
    }
}
</script>
<style scoped>
    .donates{
        width: 100%;
    }
    table{
        box-shadow: 0 -5px 5px -5px #333, 5px 0 5px -5px #333, -5px 0 5px -5px #333;
    }
    th{
        font-size: 1.3em;
    }
    h2{
        font-weight: 900;
        color: #2A569F;
    }
</style>