<template>

    <h3>STUDENT ORGANIZATIONS & ACTIVITIES EVALUATION FORM</h3>
        <hr>
        <h6 for="Activity">Event: </h6>
        <h6 for="StudentOrganization">Name of Organization:</h6>
        <h6 for="DateTime">Date & Time:</h6>
        <h6 for="Venue">Venue:</h6>
        <hr>
    <h6>1. PROGRAM/ACTIVITY</h6>
        <div class="row">
            <div class="col">
                <div class="piechart" id="q1"></div>
            </div>
            <div class="col">
                <div class="piechart" id="q2"></div>
            </div>
            <div class="col">
                <div class="piechart" id="q3"></div>
            </div>
            <div class="col">
                <div class="piechart" id="q4"></div>
            </div>
            <div class="col">
                <div class="piechart" id="q5"></div>
            </div>
            <div class="col">
                <div class="piechart" id="q6"></div>
            </div>
            <div class="col">
                <div class="piechart" id="q7"></div>
            </div>
            <div class="col">
                <div class="piechart" id="q8"></div>
            </div>
            <div class="col">
                <div class="piechart" id="q9"></div>
            </div>
        </div>
    <h6>3. Venue</h6>
        <div class="row">
            <div class="col">
                <div class="piechart" id="q10"></div>
            </div>
        </div>
    <h6>4. PARTICIPATION</h6>
        <div class="row">
            <div class="col">
                <div class="piechart" id="q11"></div>
            </div>
            <div class="col">
                <div class="piechart" id="q12"></div>
            </div>
            <div class="col">
                <div class="piechart" id="q13"></div>
            </div>
        </div>
    <h6>5. FOOD/HOSPITALITY</h6>
        <div class="row">
            <div class="col">
                <div class="piechart" id="q14"></div>
            </div>
        </div>
    <h6>6. TEAMWORK/COORDINATION OF ORGANIZATION</h6>
        <div class="row">
            <div class="col">
                <div class="piechart" id="q15"></div>
            </div>
        </div>


</template>

<script>

export default{
    props: ['event_id'],
    data() {
        return {
            answers: {
                q1:{
                    1 : 0,
                    2 : 0,
                    3 : 0,
                    4 : 0,
                    5 : 0,
                },
                q2:{
                    1 : 0,
                    2 : 0,
                    3 : 0,
                    4 : 0,
                    5 : 0,
                },
                q3:{
                    1 : 0,
                    2 : 0,
                    3 : 0,
                    4 : 0,
                    5 : 0,
                },
                q4:{
                    1 : 0,
                    2 : 0,
                    3 : 0,
                    4 : 0,
                    5 : 0,
                },
                q5:{
                    1 : 0,
                    2 : 0,
                    3 : 0,
                    4 : 0,
                    5 : 0,
                },
                q6:{
                    1 : 0,
                    2 : 0,
                    3 : 0,
                    4 : 0,
                    5 : 0,
                },
                q7:{
                    1 : 0,
                    2 : 0,
                    3 : 0,
                    4 : 0,
                    5 : 0,
                },
                q8:{
                    1 : 0,
                    2 : 0,
                    3 : 0,
                    4 : 0,
                    5 : 0,
                },
                q9:{
                    1 : 0,
                    2 : 0,
                    3 : 0,
                    4 : 0,
                    5 : 0,
                },
                q10:{
                    1 : 0,
                    2 : 0,
                    3 : 0,
                    4 : 0,
                    5 : 0,
                },
                q11:{
                    1 : 0,
                    2 : 0,
                    3 : 0,
                    4 : 0,
                    5 : 0,
                },
                q12:{
                    1 : 0,
                    2 : 0,
                    3 : 0,
                    4 : 0,
                    5 : 0,
                },
                q13:{
                    1 : 0,
                    2 : 0,
                    3 : 0,
                    4 : 0,
                    5 : 0,
                },
                q14:{
                    1 : 0,
                    2 : 0,
                    3 : 0,
                    4 : 0,
                    5 : 0,
                },
                q15:{
                    1 : 0,
                    2 : 0,
                    3 : 0,
                    4 : 0,
                    5 : 0,
                },
                q16:{
                    text: ""
                },
            },

        }
    },
    mounted() {

        // this.fetchData(this.event_id);
        // console.log(this.id);
        this.fetchAnswer(1, 'q1', '1');
        this.fetchAnswer(1, 'q1', '2');
        this.fetchAnswer(1, 'q1', '3');
        this.fetchAnswer(1, 'q1', '4');
        this.fetchAnswer(1, 'q1', '5');

        this.fetchAnswer(1, 'q2', '1');
        this.fetchAnswer(1, 'q2', '2');
        this.fetchAnswer(1, 'q2', '3');
        this.fetchAnswer(1, 'q2', '4');
        this.fetchAnswer(1, 'q2', '5');

        this.fetchAnswer(1, 'q3', '1');
        this.fetchAnswer(1, 'q3', '2');
        this.fetchAnswer(1, 'q3', '3');
        this.fetchAnswer(1, 'q3', '4');
        this.fetchAnswer(1, 'q3', '5');

        this.fetchAnswer(1, 'q4', '1');
        this.fetchAnswer(1, 'q4', '2');
        this.fetchAnswer(1, 'q4', '3');
        this.fetchAnswer(1, 'q4', '4');
        this.fetchAnswer(1, 'q4', '5');

        this.fetchAnswer(1, 'q5', '1');
        this.fetchAnswer(1, 'q5', '2');
        this.fetchAnswer(1, 'q5', '3');
        this.fetchAnswer(1, 'q5', '4');
        this.fetchAnswer(1, 'q5', '5');

        this.fetchAnswer(1, 'q6', '1');
        this.fetchAnswer(1, 'q6', '2');
        this.fetchAnswer(1, 'q6', '3');
        this.fetchAnswer(1, 'q6', '4');
        this.fetchAnswer(1, 'q6', '5');

        this.fetchAnswer(1, 'q7', '1');
        this.fetchAnswer(1, 'q7', '2');
        this.fetchAnswer(1, 'q7', '3');
        this.fetchAnswer(1, 'q7', '4');
        this.fetchAnswer(1, 'q7', '5');

        this.fetchAnswer(1, 'q8', '1');
        this.fetchAnswer(1, 'q8', '2');
        this.fetchAnswer(1, 'q8', '3');
        this.fetchAnswer(1, 'q8', '4');
        this.fetchAnswer(1, 'q8', '5');

        this.fetchAnswer(1, 'q9', '1');
        this.fetchAnswer(1, 'q9', '2');
        this.fetchAnswer(1, 'q9', '3');
        this.fetchAnswer(1, 'q9', '4');
        this.fetchAnswer(1, 'q9', '5');

        this.fetchAnswer(1, 'q10', '1');
        this.fetchAnswer(1, 'q10', '2');
        this.fetchAnswer(1, 'q10', '3');
        this.fetchAnswer(1, 'q10', '4');
        this.fetchAnswer(1, 'q10', '5');

        this.fetchAnswer(1, 'q11', '1');
        this.fetchAnswer(1, 'q11', '2');
        this.fetchAnswer(1, 'q11', '3');
        this.fetchAnswer(1, 'q11', '4');
        this.fetchAnswer(1, 'q11', '5');

        this.fetchAnswer(1, 'q12', '1');
        this.fetchAnswer(1, 'q12', '2');
        this.fetchAnswer(1, 'q12', '3');
        this.fetchAnswer(1, 'q12', '4');
        this.fetchAnswer(1, 'q12', '5');

        this.fetchAnswer(1, 'q13', '1');
        this.fetchAnswer(1, 'q13', '2');
        this.fetchAnswer(1, 'q13', '3');
        this.fetchAnswer(1, 'q13', '4');
        this.fetchAnswer(1, 'q13', '5');

        this.fetchAnswer(1, 'q14', '1');
        this.fetchAnswer(1, 'q14', '2');
        this.fetchAnswer(1, 'q14', '3');
        this.fetchAnswer(1, 'q14', '4');
        this.fetchAnswer(1, 'q14', '5');

        this.fetchAnswer(1, 'q15', '1');
        this.fetchAnswer(1, 'q15', '2');
        this.fetchAnswer(1, 'q15', '3');
        this.fetchAnswer(1, 'q15', '4');
        this.fetchAnswer(1, 'q15', '5');

        this.fetchAnswer(1, 'q16', '1');
        this.fetchAnswer(1, 'q16', '2');
        this.fetchAnswer(1, 'q16', '3');
        this.fetchAnswer(1, 'q16', '4');
        this.fetchAnswer(1, 'q16', '5');

    },
    methods: {
        // fetchData(event_id){
        //     axios.get(`/evaluation_form/${event_id}`)
        //         .then(response => {
        //             this.evaluation = response.data;
        //             console.log(this.evaluation);
        //         })
        //         .catch(error => {
        //             console.log('error')
        //         });

        //     },

        fetchAnswer(evaluation_form_id, question_id, option){
        axios.get(`/evaluation_form_answer/${evaluation_form_id}/${question_id}/${option}`)
            .then(response => {
                // alert(response.data);
                this.answers[question_id][option] = response.data;
                // console.log(this.answers[question_id][option]);
                this.pieChart( this.answers);
            })
            .catch(error => {
                console.log(error)
            });

        },

            
        pieChart($answer){
            google.charts.load('current', {'packages':['corechart']});

            //question1
            google.charts.setOnLoadCallback(q1);
            function q1() {
                var data = google.visualization.arrayToDataTable([

                    ['Registration', 'Percentage'],
                    ['Outstanding', $answer['q1'][5]],
                    ['Very Satisfactory', $answer['q1'][4]],
                    ['Satisfactory',$answer['q1'][3]],
                    ['Moderately Satisfactory',$answer['q1'][2]],
                    ['Needs Improvement',$answer['q1'][1]],
                ]);

                var options = {
                    title: 'Stimulates the interest of the students.',
                    pieSliceText: 'value',
                    is3D: true
                };

                var chart = new google.visualization.PieChart(document.getElementById('q1'));
                chart.draw(data, options);
            }

            //question2
            google.charts.setOnLoadCallback(q2);
            function q2() {
                var data2 = google.visualization.arrayToDataTable([
                    ['Registration', 'Percentage'],
                    ['Outstanding', $answer['q2'][5]],
                    ['Very Satisfactory', $answer['q2'][4]],
                    ['Satisfactory',$answer['q2'][3]],
                    ['Moderately Satisfactory',$answer['q2'][2]],
                    ['Needs Improvement',$answer['q2'][1]],
                ]);

                var options2 = {
                    title: 'Provide equal opportunities to all students or participants.',
                    pieSliceText: 'value',
                    is3D: true
                };

                var chart2 = new google.visualization.PieChart(document.getElementById('q2'));
                chart2.draw(data2, options2);
            }

            //question3
            google.charts.setOnLoadCallback(q3);
            function q3() {
                var data3 = google.visualization.arrayToDataTable([
                    ['Registration', 'Percentage'],
                    ['Outstanding', $answer['q3'][5]],
                    ['Very Satisfactory', $answer['q3'][4]],
                    ['Satisfactory',$answer['q3'][3]],
                    ['Moderately Satisfactory',$answer['q3'][2]],
                    ['Needs Improvement',$answer['q3'][1]],
                ]);

                var options3 = {
                    title: 'Enhance the learning experience of the students.',
                    pieSliceText: 'value',
                    is3D: true
                };

                var chart3 = new google.visualization.PieChart(document.getElementById('q3'));
                chart3.draw(data3, options3);
            }

            //question4
            google.charts.setOnLoadCallback(q4);
            function q4() {
                var data4 = google.visualization.arrayToDataTable([
                    ['Registration', 'Percentage'],
                    ['Outstanding', $answer['q4'][5]],
                    ['Very Satisfactory', $answer['q4'][4]],
                    ['Satisfactory',$answer['q4'][3]],
                    ['Moderately Satisfactory',$answer['q4'][2]],
                    ['Needs Improvement',$answer['q4'][1]],
                ]);

                var options4 = {
                    title: 'Help in recognizing and developing students’ inner skills such as leadership qualities, creative and innovative skills, etc.',
                    pieSliceText: 'value',
                    is3D: true
                };

                var chart4 = new google.visualization.PieChart(document.getElementById('q4'));
                chart4.draw(data4, options4);
            }

            //question5
            google.charts.setOnLoadCallback(q5);
            function q5() {
                var data5 = google.visualization.arrayToDataTable([
                    ['Registration', 'Percentage'],
                    ['Outstanding', $answer['q5'][5]],
                    ['Very Satisfactory', $answer['q5'][4]],
                    ['Satisfactory',$answer['q5'][3]],
                    ['Moderately Satisfactory',$answer['q5'][2]],
                    ['Needs Improvement',$answer['q5'][1]],
                ]);

                var options5 = {
                    title: 'Help in developing richer learning experiences by giving the students chance to think in new ways to solve a problem or answer a question.',
                    pieSliceText: 'value',
                    is3D: true
                };

                var chart5 = new google.visualization.PieChart(document.getElementById('q5'));
                chart5.draw(data5, options5);
            }

            //question6
            google.charts.setOnLoadCallback(q6);
            function q6() {
                var data6 = google.visualization.arrayToDataTable([
                    ['Registration', 'Percentage'],
                    ['Outstanding', $answer['q6'][5]],
                    ['Very Satisfactory', $answer['q6'][4]],
                    ['Satisfactory',$answer['q6'][3]],
                    ['Moderately Satisfactory',$answer['q6'][2]],
                    ['Needs Improvement',$answer['q6'][1]],
                ]);

                var options6 = {
                title: 'Satisfy students’ need to take time outs to do more than just studying.',
                pieSliceText: 'value',
                is3D: true
                };

                var chart6 = new google.visualization.PieChart(document.getElementById('q6'));
                chart6.draw(data6, options6);
            }

            //question7
            google.charts.setOnLoadCallback(q7);
            function q7() {
                var data7 = google.visualization.arrayToDataTable([
                    ['Registration', 'Percentage'],
                    ['Outstanding', $answer['q7'][5]],
                    ['Very Satisfactory', $answer['q7'][4]],
                    ['Satisfactory',$answer['q7'][3]],
                    ['Moderately Satisfactory',$answer['q7'][2]],
                    ['Needs Improvement',$answer['q7'][1]],
                ]);

                var options7 = {
                title: 'Give students a chance to relax, refresh and mingle easily with others.',
                pieSliceText: 'value',
                is3D: true
                };

                var chart7 = new google.visualization.PieChart(document.getElementById('q7'));
                chart7.draw(data7, options7);
            }

            //question8
            google.charts.setOnLoadCallback(q8);
            function q8() {
                var data8 = google.visualization.arrayToDataTable([
                    ['Registration', 'Percentage'],
                    ['Outstanding', $answer['q8'][5]],
                    ['Very Satisfactory', $answer['q8'][4]],
                    ['Satisfactory',$answer['q8'][3]],
                    ['Moderately Satisfactory',$answer['q8'][2]],
                    ['Needs Improvement',$answer['q8'][1]],
                ]);

                var options8 = {
                title: 'Provide opportunity for students to apply learning in their practical life.',
                pieSliceText: 'value',
                is3D: true
                };

                var chart8 = new google.visualization.PieChart(document.getElementById('q8'));
                chart8.draw(data8, options8);
            }

            //question9
            google.charts.setOnLoadCallback(q9);
            function q9() {
                var data9 = google.visualization.arrayToDataTable([
                    ['Registration', 'Percentage'],
                    ['Outstanding', $answer['q9'][5]],
                    ['Very Satisfactory', $answer['q9'][4]],
                    ['Satisfactory',$answer['q9'][3]],
                    ['Moderately Satisfactory',$answer['q9'][2]],
                    ['Needs Improvement',$answer['q9'][1]],
                ]);

                var options9 = {
                title: 'Provide opportunity for student to work in team.',
                pieSliceText: 'value',
                is3D: true
                };

                var chart9 = new google.visualization.PieChart(document.getElementById('q9'));
                chart9.draw(data9, options9);
            }

            //question10
            google.charts.setOnLoadCallback(q10);
            function q10() {
                var data9 = google.visualization.arrayToDataTable([
                    ['Registration', 'Percentage'],
                    ['Outstanding', $answer['q10'][5]],
                    ['Very Satisfactory', $answer['q10'][4]],
                    ['Satisfactory',$answer['q10'][3]],
                    ['Moderately Satisfactory',$answer['q10'][2]],
                    ['Needs Improvement',$answer['q10'][1]],
                ]);

                var options9 = {
                title: 'The venue was accessible and comfortable.',
                pieSliceText: 'value',
                is3D: true
                };

                var chart9 = new google.visualization.PieChart(document.getElementById('q10'));
                chart9.draw(data9, options9);
            }




            //question11
            google.charts.setOnLoadCallback(q11);
            function q11() {
                var data17 = google.visualization.arrayToDataTable([
                    ['Registration', 'Percentage'],
                    ['Outstanding', $answer['q11'][5]],
                    ['Very Satisfactory', $answer['q11'][4]],
                    ['Satisfactory',$answer['q11'][3]],
                    ['Moderately Satisfactory',$answer['q11'][2]],
                    ['Needs Improvement',$answer['q11'][1]],
                ]);

                var options17 = {
                title: 'Attendance',
                pieSliceText: 'value',
                is3D: true
                };

                var chart17 = new google.visualization.PieChart(document.getElementById('q11'));
                chart17.draw(data17, options17);
            }

            //question12
            google.charts.setOnLoadCallback(q12);
            function q12() {
                var data18 = google.visualization.arrayToDataTable([
                    ['Registration', 'Percentage'],
                    ['Outstanding', $answer['q12'][5]],
                    ['Very Satisfactory', $answer['q12'][4]],
                    ['Satisfactory',$answer['q12'][3]],
                    ['Moderately Satisfactory',$answer['q12'][2]],
                    ['Needs Improvement',$answer['q12'][1]],
                ]);

                var options18 = {
                title: 'Cooperation',
                pieSliceText: 'value',
                is3D: true
                };

                var chart18 = new google.visualization.PieChart(document.getElementById('q12'));
                chart18.draw(data18, options18);
            }

            //question13
            google.charts.setOnLoadCallback(q13);
            function q13() {
                var data19 = google.visualization.arrayToDataTable([
                    ['Registration', 'Percentage'],
                    ['Outstanding', $answer['q13'][5]],
                    ['Very Satisfactory', $answer['q13'][4]],
                    ['Satisfactory',$answer['q13'][3]],
                    ['Moderately Satisfactory',$answer['q13'][2]],
                    ['Needs Improvement',$answer['q13'][1]],
                ]);

                var options19 = {
                title: 'Punctuality',
                pieSliceText: 'value',
                is3D: true
                };

                var chart19 = new google.visualization.PieChart(document.getElementById('q13'));
                chart19.draw(data19, options19);
            }

            //question14
            google.charts.setOnLoadCallback(q14);
            function q14() {
                var data19 = google.visualization.arrayToDataTable([
                    ['Registration', 'Percentage'],
                    ['Outstanding', $answer['q14'][5]],
                    ['Very Satisfactory', $answer['q14'][4]],
                    ['Satisfactory',$answer['q14'][3]],
                    ['Moderately Satisfactory',$answer['q14'][2]],
                    ['Needs Improvement',$answer['q14'][1]],
                ]);

                var options19 = {
                title: 'FOOD/HOSPITALITY',
                pieSliceText: 'value',
                is3D: true
                };

                var chart19 = new google.visualization.PieChart(document.getElementById('q14'));
                chart19.draw(data19, options19);
            }

            //question14
            google.charts.setOnLoadCallback(q15);
            function q15() {
                var data19 = google.visualization.arrayToDataTable([
                    ['Registration', 'Percentage'],
                    ['Outstanding', $answer['q15'][5]],
                    ['Very Satisfactory', $answer['q15'][4]],
                    ['Satisfactory',$answer['q15'][3]],
                    ['Moderately Satisfactory',$answer['q15'][2]],
                    ['Needs Improvement',$answer['q15'][1]],
                ]);

                var options19 = {
                title: 'TEAMWORK/COORDINATION OF ORGANIZATION',
                pieSliceText: 'value',
                is3D: true
                };

                var chart19 = new google.visualization.PieChart(document.getElementById('q15'));
                chart19.draw(data19, options19);
            }


            

        },

    },
    }
    </script>





<!-- <template>
    <div>
    <canvas id="myPieChart" width="400" height="400"></canvas>
    </div>
</template>

<script>
import { Pie } from 'vue-chartjs';

export default {
    extends: Pie,
    data() {
    return {
        chartData: {
        labels: ['Label 1', 'Label 2', 'Label 3'],
        datasets: [
            {
            data: [30, 40, 30], // Data values for each segment
            backgroundColor: ['#FF5733', '#33FF57', '#5733FF'], // Colors for each segment
            },
        ],
        },
        chartOptions: {
        responsive: true,
        maintainAspectRatio: false,
        },
    };
    },
    mounted() {
    this.renderChart(this.chartData, this.chartOptions);
    },
};
</script> -->
