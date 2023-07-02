<template>
  <div>
    <button @click="showModal = true">Open Modal</button>
    <modal v-if="showModal" @close="showModal = false">
      <h3 slot="header">My Modal</h3>
      <div slot="body">
        <form @submit.prevent="submitForm">
          <input type="text" v-model="formData.name" placeholder="Name">
          <input type="email" v-model="formData.email" placeholder="Email">
          <button type="submit">Submit</button>
        </form>
      </div>
    </modal>
  </div>
</template>

<script>
export default {
 
  data() {
    return {
      showModal: false,
      formData: {
        name: '',
        email: ''
      }
    }
  },
  methods: {
    submitForm() {
      axios.post('/my-endpoint', this.formData)
        .then(response => {
          // handle success
          this.showModal = false
        })
        .catch(error => {
          // handle error
        })
    }
  }
}
</script>
