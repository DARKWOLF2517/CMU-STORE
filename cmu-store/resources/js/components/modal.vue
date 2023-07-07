<template>

<button @click="showModal = true">Open Modal</button>


  <div class="modal" v-if="showModal">
    <div class="modal-content">
      <h2>Modal Title</h2>
      <form @submit.prevent="submitForm">
        <div>
          <label for="name">Name:</label>
          <input type="text" id="name" v-model="form.name" required>
        </div>
        <div>
          <label for="email">Email:</label>
          <input type="email" id="email" v-model="form.email" required>
        </div>
        <div>
          <button type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      showModal: false,
      form: {
        name: '',
        email: ''
      }
    }
  },
  methods: {
    submitForm() {
      // Handle form submission logic here
      console.log(this.form);
      // Reset the form after submission
      this.form = {
        name: '',
        email: ''
      };
      this.showModal = false;
    }
  }
}
</script>
<!-- 
<style scoped>
.modal {
  /* Add your modal styles here */
}

.modal-content {
  /* Add your modal content styles here */
}
</style> -->
