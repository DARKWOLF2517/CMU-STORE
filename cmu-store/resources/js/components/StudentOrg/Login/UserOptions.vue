<template>
    <div class="container">
        <div class="user-card"  v-for="userOrg in this.userOrgs" >
            <div @click=" profileClicked( userOrg['student_org_id'],  userOrg['role_id'])">
            <h3> {{ userOrg['organization']['name'] }}</h3>
            <hr>
            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="User 1">
            <p>
                <span v-if="userOrg['role']['role_id'] == 1">Admin</span>
                <span v-else-if="userOrg['role']['role_id'] == 2">Student</span>
            </p>
            </div>
        </div>  
    </div>

</template>

<script>

import { ref } from 'vue';

export default {

    props: ['id'],
    // data() {
    //     return {
    //         userOrganizations: [],
    //     }
    // },
    methods: {
        
        // fetchData(){
        //     axios.get(`GetOrgList/${this.id}`)
        //         .then(response => {
        //         })
        //         .catch(error => {
                    
        //         });
        // },
        
        /**
         * 
         * @param {*} org_id organization Id to identify which dashboard to render
         * @param {*} role_id Role id of the user on that organization
         */
        profileClicked(org_id, role_id){
            axios.get(`${org_id}/${role_id}`)
            .then(response => {
                // console.log(response.data);
                // userOrgs.value = response.data;
                console.log(response.data.org_id)
                console.log(response.data.role)
                if (response.data.role == 1){
                
                window.location.href = 'org_dashboard';
            }
                else if (response.data.role == 2){
                    window.location.href = 'student_dashboard';
                }

            })
            .catch(error => {
                
            });


        }   
    },
    // mounted() {
    //     this.fetchData()
    // },
    //COMPOSITION API
    
    setup(props) {

        let userOrgs = ref();
        
        axios.get(`GetOrgList/${props.id}`)
            .then(response => {
                console.log(response.data);
                userOrgs.value = response.data;
            })
            .catch(error => {
                
            });

        // id.value = axios.get(`GetOrgList/${props.id}`)
        //         .then(response => {
        //             // // console.log(response.data)
        //             // // console.log(this.userOrganizations)
        //             // this.userOrganizations.forEach(userOrg => {
        //             //     // console.log(response)
        //             // console.log(userOrg['role_id'])
        //             // });
        //         })
        //         .catch(error => {
                    
        //         });
        
        return { userOrgs };
    }
}

</script>