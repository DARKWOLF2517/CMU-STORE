<template>
        <div class="event-card" v-for="evaluation in this.evaluation" :id="evaluation.event_id">
            <div class="event-date-container"><span class="event-date">{{evaluation['start_date']}}</span></div>
            <div class="event-title">{{ evaluation['name'] }}</div>
            <div class="event-description">Total Responses: 120</div>
            <a class="view-button" href="/student_organization_evaluation_results?id=1"><i class="fas fa-chevron-right button-icon"></i></a>
        </div>
</template>

<script>
    export default{
        data() {
            return {
                evaluation: [],
            }
        },

        mounted() {
            this.fetchData();
        },
        methods: {
            fetchData(){
                axios.get('/events/show')
                .then(response => {
                    this.evaluation = response.data;
                    console.log(this.evaluation);
                })
                .catch(error => {
                    console.log('error')
                });

            },
        },

    }
</script>