<template>

                    <div class="col-sm-4">
                        <div class="statistic">
<<<<<<< HEAD
                            <i :class="icons"></i>
                            <p class="stat-label">{{this.card_label }}</p>
                            <b><p class="stat-number">{{ }}</p></b>
=======
                            <div class="d-flex align-items-center">
                                <div class="ml-3">
                                    <p class="stat-label">{{this.card_label }}</p>
                                <b><p class="stat-number">{{ }}</p></b>
                                </div>
                            </div>

>>>>>>> c88c1803f9940f4899bc691a1b21633304b8bc43
                        </div>
                    </div>
</template>

<script>
export default {
<<<<<<< HEAD
    props: ['target_route', 'card_label', 'icons'],
=======
    props: ['target_route','card_label'],
>>>>>>> c88c1803f9940f4899bc691a1b21633304b8bc43

    mounted() {
    this.fetchDataCount();
    },

    data() {
        return {
            count: 0
        };
    },
methods: {
    fetchDataCount() {
        axios.get(this.target_route)
            .then(response => {
                this.count = response.data.count;
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
