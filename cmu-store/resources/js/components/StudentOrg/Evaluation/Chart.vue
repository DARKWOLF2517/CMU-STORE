<template>
    <div class="col">
        <div class="piechart" id="piechart3d"></div>
        <ul>
            <li v-for="evaluation in this.evaluation">
                {{ evaluation['form_questions']['0'] }}
            </li>
        </ul>
    </div>
</template>

<script>
import Chart from 'chart.js/auto';
import { getRelativePosition } from 'chart.js/helpers';
export default{
    data() {
        return {
            evaluation:[],
        }
    },
    mounted() {
        this.pieChart();
        this.fetchData();
    },
    methods: {
        pieChart(){
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                ['Registration', 'Percentage'],
                ['Outstanding', 18.75],
                ['Very Satisfactory', 31.25],
                ['Satisfactory', 10],
                ['Moderately Satisfactory', 10],
                ['Needs Improvement', 17.5],
                ]);

                var options = {
                title: 'a.	Stimulates the interest of the students.',
                pieSliceText: 'value',
                is3D: true
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart3d'));
                chart.draw(data, options);
            }
        },
        fetchData(){
            axios.get('/fetchEvaluationResult')
                .then(response => {
                    // console.log(response.data);
                    this.evaluation = response.data;
                    // console.log(this.evaluation['0']['form_options']['0']['option']);
                    console.log(this.evaluation);
                })
                .catch(error => {
                    
                });

            },
    },
}
</script>