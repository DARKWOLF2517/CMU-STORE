<template>
    <div>
        <li class="nav-item">
            <a :href="link_route" class="nav-link link-dark" aria-current="page">
                <i  v-if="show" :class="link_icon"></i>
                <span class="nav-link-text">&nbsp;{{ link_name }} </span>
            </a>
            <!-- PUT DROPDOWN FOR THE CHURVA // ADDITIONAL LINKS -->
        </li>
    </div>
</template>

<script>
export default {
    props: ['link_name','link_icon','link_route' , 'show_icon'],
    data() { 
        return {
            show: this.showIcon
        }
    },

    mounted() {
        this.show = true;
    },
}
</script>