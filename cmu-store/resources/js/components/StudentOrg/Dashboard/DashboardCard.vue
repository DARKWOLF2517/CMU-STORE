<template>
                    <div class="col-sm-4">
                        <div class="statistic">
                            <i :class="icons"></i>
                            <p class="stat-label">{{this.card_label }}</p>
                            <b><p class="stat-number">{{ }}</p></b>
                        </div>
                    </div>
</template>

<script>
export default {
    props: ['target_route', 'card_label', 'icons'],

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
