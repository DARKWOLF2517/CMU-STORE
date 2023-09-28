<template>
        <div class="event-card" v-for="evaluation in this.evaluation" :id="evaluation.event_id">
            <!-- <h5> {{ evaluation['event_id'] }}</h5> -->
            <div class="event-date-container"><span class="event-date">{{evaluation['start_date']}}</span></div>
            <div class="event-title">{{ evaluation['name'] }}</div>
            <div class="event-description">Total Responses: 120</div>
            <button class="view-button" @click="evaluation_result(evaluation.event_id)"> <i class="fas fa-chevron-right button-icon"></i></button>
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
            evaluation_result(id){

                window.location.href = `evaluation_form_summary/${id}`;
            },
        },

    }
</script>