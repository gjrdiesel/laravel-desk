<template>
    <div class="dashboard">
        <div class="dashboard-grid">
            <bar-chart></bar-chart>
            <hud></hud>
            <quick-table :data="data"></quick-table>
        </div>
        <div class="dashboard-grid">
            <quick-table :data="data"></quick-table>
            <bar-chart></bar-chart>
            <bar-chart></bar-chart>
        </div>
    </div>
</template>
<style scoped>
    .dashboard {
        width: 100%;
        height: 100vh;
        background: rgba(0, 0, 0, 0.7);
    }
    h1 {
        margin: 0;
    }
    .dashboard-grid {
        display:flex;
        justify-content: space-around;
    }
    .dashboard-grid > div {
        margin: 10px;
    }
</style>
<script>
    import BarChart from '../Dashboard/BarChart.vue'
    import Hud from '../Dashboard/HUD.vue'
    import QuickTable from '../Dashboard/Table.vue'
    export default {
        components: { BarChart, Hud, QuickTable },
        data(){
            return {
                data: [
                    {id:1,name:'something',description:'lorem lipsum',year:1997},
                    {id:2,name:'bring',description:'lorem lipsum',year:1997},
                    {id:3,name:'your',description:'lorem lipsum',year:1997},
                    {id:4,name:'own',description:'lorem lipsum',year:1997},
                    {id:5,name:'data',description:'lorem lipsum',year:1997},
                    {id:6,name:'and',description:'lorem lipsum',year:1997},
                    {id:7,name:'maybe',description:'lorem lipsum',year:1997},
                ]
            }
        }
    }
</script>