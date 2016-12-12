<template>
    <div class="panel panel-default">
        <div class="panel-body">
            <canvas v-bind:class="[ id ]" width="400" height="400"></canvas>
        </div>
    </div>
</template>
<script>
    import Chart from 'chart.js'
    export default {
        data(){
            return {
                id: '',
                el: ''
            }
        },
        mounted(){
            this.id = Math.random().toString(36).substr(2, 5);
            setTimeout((e) => {
                this.el = $('.'+this.id);
            this.chart()
        }, 1000);
        },
        methods: {
            chart(){
                var myChart = new Chart(this.el, {
                    type: 'line',
                    data: {
                        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                        datasets: [{
                            label: '# of Votes',
                            data: [12, 19, 3, 5, 2, 3],
                        }]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero:true
                                }
                            }]
                        }
                    }
                });
            }
        }
    }
</script>