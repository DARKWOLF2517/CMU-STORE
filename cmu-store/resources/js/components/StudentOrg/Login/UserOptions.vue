<template>
    <div class="container">
        <div class="user-card"  v-for="userOrganizations in this.userOrganizations" >
        <div @click=" profileCLicked( userOrganizations['student_org_id'],  userOrganizations['role_id'])">
        <h3> Student Org: {{ userOrganizations['student_org_id'] }}</h3>
        <hr>
        <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="User 1">
        <p> Role: {{ userOrganizations['role_id'] }}</p>
        </div>
    </div>
    </div>

</template>

<script>

export default {

    props: ['id'],
    data() {
        return {
            userOrganizations: [],
        }
    },
    methods: {
        fetchData(){
            axios.get(`GetOrgList/${this.id}`)
                .then(response => {
                    this.userOrganizations = response.data
                    // // console.log(response.data)
                    // // console.log(this.userOrganizations)
                    // this.userOrganizations.forEach(userOrg => {
                    //     // console.log(response)
                    // console.log(userOrg['role_id'])
                    // });
                })
                .catch(error => {
                    
                });
        },
        profileCLicked(org_id, role_id){
            if (role_id == 1){
                window.location.assign('login')
            }
        }   
    },
    mounted() {
        this.fetchData()
    },


}

</script>