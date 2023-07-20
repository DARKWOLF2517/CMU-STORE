<template>
    <div class="col-lg-4" v-for="event in this.events" :id="event.event_id">
        <div class="card mb-3" >
            <a href="#"> 
                <div >
                    <img src="https://via.placeholder.com/300x200" alt="" class="card-img">
                </div>
            </a>
            <div class="card-body"> 
                <h5 class="card-title">{{ event['name'] }}</h5>
                <p class="card-text card-desciprtion">{{ event['start_date'] }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ['target_route'],
    data() { 
        return {
            events: [],
        }
    },
    created() {
        this.fetchData();
        console.log("mounted")
    },
    methods: {
        fetchData() {
            // document.getElementById("event-spinner").show();
            fetch(this.target_route, {
                method: "GET",
                headers: {
                    //TYPE OF DATA THAT THE SERVER SHOULD RESPOND
                    "Content-Type":"application/json"
                }
            }).then( (response) => {
                // document.getElementById("event-spinner").classList.add("hidden");
                response.json().then((data) => {
                    this.events = data;
                })
            })
        },
        deleteEvent(id) {
            console.log(id);
            //Send fetch delete type here.
        },
        editEvent(id) {
            //Show modal here
        }
    }
}
</script>