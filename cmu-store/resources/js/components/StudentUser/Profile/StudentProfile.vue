<template>
    <div class="row">
        <!-- Student Profile Container -->
        <div class="col-md-3 mt-4 mt-md-0">
            <div class="card profile-card">
                <div class="card-header">
                <h5>Student QR Code</h5>
                </div>
                <div class="card-body text-center">

                <!-- {{QrCode::generate(Auth::id())}} -->
                <qrcode-vue :value="qr_value"></qrcode-vue>
                <!-- Student's Name -->
                <h3 class="mt-2 ">{{}}</h3>
                <!-- Student ID -->
                <p>Student ID: {{this.profile['id']}}</p>
                <div class="d-grid gap-2">
        <a href="https://via.placeholder.com/150" download class="btn btn-secondary btn-sm">Download Image</a>
      </div>
                </div>
            </div>
        </div>
        <!-- Additional Information Container -->
        <div class="col-md-9 mt-4 mt-md-0">
            <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" href="#profile" data-bs-toggle="tab">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#organizations" data-bs-toggle="tab">Organizations</a>
        </li>
      </ul>
      <div class="tab-content mt-3">
        <div class="tab-pane fade show active" id="profile">
          <h5>Profile Information</h5>
          <p>Name: Alphalyn Queen Jerricho</p>
          <p>Year level: 1st year</p>
        </div>
        <div class="tab-pane fade" id="organizations">
          <h5>Organizations joined</h5>
          <i>You are a member of:</i>
          <li>College of Information Sciences and Computing Student Council (CSCo)</li>
            <li> Siglakas</li>
        </div>
        <div class="tab-pane fade" id="grades">
          <h5>Grades</h5>
          <p>View your grades...</p>
        </div>
        <div class="tab-pane fade" id="settings">
          <h5>Settings</h5>
          <p>Configure your preferences...</p>
        </div>
      </div>
    </div>
        </div>
</template>

<script>
import QrcodeVue from 'qrcode.vue';
export default {
    props:['user_id'],
    data() {
        return {
            profile: [],
            qr_value: this.user_id,
        }
    },
    created() {
        console.log("mounted")
        this.FetchUserData();
    },
    methods: {
        FetchUserData() {
            axios.get(`user/profile/${this.user_id}`)
                .then(response => {
                    this.profile = response.data

                })
                .catch(error => {

                });
        },
    },
    components: {
    QrcodeVue,
    },
}
</script>
