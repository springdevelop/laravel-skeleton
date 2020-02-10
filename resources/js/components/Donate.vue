<template>
    <div class="donates col-12 mt-5">
        <h3 class="text-center"> Tổng số tiền ủng hộ: <span class="total-founding"> <number
    ref="number1"
    :from="0"
    :to="total(donates)"
    :format="theFormat"
    :duration="6"
    :delay="1"
    easing="Power1.easeOut"/></span></h3>
        <h2 class="pt-4 text-center text-uppercase">Danh sách ủng hộ</h2>
        <table id="" class="table table-bordered table-hover mb-0">
            <colgroup>
                <col width="5%" />
                <col width="50%" />
                <col width="35%" />
                <col width="10%" />
            </colgroup>
            <thead class="thead-dark">
                <tr>
                    <th class="pr-3">STT </th>
                    <th class="pl-2">Đơn vị/ Cá nhân</th>
                    <th class="">Ủng hộ</th>
                    <th class="text-right">Số tiền</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(donate, index) in donates"  :key="donate.id" class="align-middle">
                <td class="text-center pr-3">{{index +1}}</td>
                <td class="pl-2">
                   {{donate.name}}
                </td>
                <td class="text-justify">
                   {{donate.desc}}
                </td>
                <td class="text-right">
                    <span v-if="donate.amount>0">{{donate.amount | toCurrency}}</span>
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
        total: function(data) {
            let sum = data.reduce(function (total, currentValue) {
                return total + currentValue.amount;
                }, 0);
            return sum;
        },
         theFormat(value) {
            if (typeof value !== "number") {
                return value;
            }
            var formatter = new Intl.NumberFormat('vi-VN', {
                style: 'currency',
                currency: 'VND',
                minimumFractionDigits: 0
            });
            return formatter.format(value);
        },
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
        font-size: 1.1em;
    }
    h2{
        font-weight: 900;
        color: #2A569F;
    }
    .total-founding{
        font-size: 1.2em;
        color: #f2680c;
        font-weight: 900;
        padding: 15px 7px;
    }
    h3 {
        text-transform: uppercase;
    }
</style>