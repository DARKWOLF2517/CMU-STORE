<!-- <template>
    <div class="col-md-4">
        <div class="card shadow">
            <div class="d-flex flex-row align-items-center card-body">
                <h6 class="d-flex align-items-center justify-content-center card-title">
                    <b>{{ card_title }}</b>
                    <i :class="card_icon"> </i>
                </h6>
                <h3 class="card-text">{{ count }}</h3>
            </div>
        </div>
    </div>
</template> -->

<script>
export default {
    props: ['target_route', 'card_title', 'card_icon'],

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
                // console.log(this.card_title + this.count);
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
</script> -->
