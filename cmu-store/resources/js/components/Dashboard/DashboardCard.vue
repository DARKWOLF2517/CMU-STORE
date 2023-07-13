<template>
    <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h6 class="card-title">
                        <b>{{ card_title }}</b>
                        <i :class="card_icon"> </i>
                    </h6>
                    <h3 class="card-text">{{ eventsCount}}</h3>
                </div>
            </div>
    </div>
</template>

<script>
export default {
    props: ['target_route', 'card_title', 'card_icon'],
    mounted() {
    this.fetchDataCount();
},
data() {
    return {
        eventsCount: 0
    };
},
methods: {
    fetchDataCount() {
        axios.get(this.target_route)
            .then(response => {
                this.eventsCount = response.data.count;
            })
            .catch(error => {
                console.log(error);
            });
        }
    },
    mounted() {
        this.fetchDataCount();
    },
}
</script>