<template>
    <div>
        <li class="nav-item">
            <a :href="link_route" class="nav-link link-dark" aria-current="page">
                <i :class="link_icon"></i>
                <span class="nav-link-text">&nbsp;{{ link_name }} </span>
            </a>
        </li>
    </div>
</template>

<script>
export default {
    props: ['link_name','link_icon','link_route']
}
</script>