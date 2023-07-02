<template>
    <div>
      <div id="myModal" class="modal" v-show="isOpen">
        <div class="modal-content">
          <span class="close" @click="closeModal">&times;</span>
          <h3>{{ title }}</h3>
          <slot></slot>
        </div>
      </div>
      <button @click="openModal()">Open Modal</button>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        isOpen: false,
      };
    },
    methods: {
      openModal() {
        this.isOpen = true;
      },
      closeModal() {
        this.isOpen = false;
      },
    },
    props: {
      title: {
        type: String,
        default: 'Modal Title',
      },
    },
  };
  </script>
  
  <style scoped>
  /* Modal CSS styles */
  .modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
  }
  
  .modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 600px;
  }
  
  .close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
  }
  
  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
  }
  
  button {
    margin-top: 20px;
  }
  </style>
  