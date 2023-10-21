<template>
        <div class="event-card" v-for="evaluation in this.evaluation" :id="evaluation.event_id">
            <!-- <h5> {{ evaluation['event_id'] }}</h5> -->
            <div class="event-date-container"><span class="event-date">{{evaluation['start_date']}}</span></div>
            <div class="event-title">{{ evaluation['name'] }}</div>
            <div class="event-description">{{evaluation['evaluation_count']}}</div>
            <button v-if="this.evaluation_count !== 0"  class="view-button" @click="evaluation_result(evaluation.event_id)"> <i class="fas fa-chevron-right button-icon"></i></button>
        </div>
</template>

<script>
    export default{
        props: ['organization_id'],
        data() {
            return {
                evaluation: {
                    
                },
                evaluation_count: 1,
                
            }
        },

        mounted() {
            this.fetchData();
        },
        methods: {
            fetchData(){
                // console.log(this.evaluation_count)
                axios.get(`/evaluation_list/${this.organization_id}`)
                .then(response => {
                    this.evaluation = response.data;
                    console.log (response.data)
                        // axios.get(`/evaluation_form_total_response/${this.evaluation['0']['event_id']}`)
                        // .then(response => {
                        //     //  this.evaluation['evaluation_count'] = response.data;


                        // })
                        // .catch(error => {
                        //     console.log('erroasdfdsafsdafr')
                        // });
                })
                .catch(error => {
                    console.log('error')
                });

            },
            evaluation_result(event_id){

                window.location.href = `evaluation_form_summary/${event_id}`;
            },
        },

    }
</script>