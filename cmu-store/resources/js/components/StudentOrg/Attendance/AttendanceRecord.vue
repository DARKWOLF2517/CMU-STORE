<template>
        <div class="record-card" v-for="evaluation in this.evaluation" :id="evaluation.event_id">
            <!-- <h5> {{ evaluation['event_id'] }}</h5> -->
            <div class="record-date-container"><span class="event-date">{{evaluation['start_date']}}</span></div>
            <div class="record-title">{{ evaluation['name'] }}</div>
            <div class="record-description">Number of Attendance recorded: {{evaluation['evaluation_form_answer']}}</div>
            <button v-if="evaluation['evaluation_form_answer'] !== 0"  class="view-button" @click="evaluation_result(evaluation.event_id)"> <i class="fas fa-chevron-right button-icon"></i></button>
        </div>

</template>


<script>
    export default{
        props: ['organization_id'],
        data() {
            return {
                evaluation: {
                    
                },
                // evaluation_count: 1,
                
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
                    const data = response.data;
                    data.forEach(item => {
        
                    // console.log(item);
                    item['evaluation_form_answer'] =  item['evaluation_form_answer'].length;
                    });
                    this.evaluation = response.data;
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