<template>
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th v-if="number">#</th>
                    <th v-for="header in getHeaders(data)">{{ header }}</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(row,index) in data">
                    <td v-if="number">{{ index+1 }}</td>
                    <td v-for="column in getColumns(row)">{{ column }}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<style scoped>
    .panel {
        height: 430px;
        width: 430px;
    }
</style>
<script>
    export default {
        props: ['data','number'],
        methods: {
            getHeaders(data){
                return _.keys(data[0]);
            },
            getColumns(row){
                return _.values(row);
            }
        }
    }
</script>