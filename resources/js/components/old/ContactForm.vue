<template>
    <div class="contact-form-modal">
      <div class="contact-form-content">
        <h2>Contact Us</h2>
        <p>Location: {{ selectedLocation }}</p>
        <p>Service: {{ selectedService }}</p>
        <p>Quantity: {{ selectedQuantity }}</p>
        <form @submit.prevent="submitForm">
          <input type="text" class="name-input" placeholder="Your Name" required ref="nameInput">
          <input type="text" class="phone-input" placeholder="Your Phone" required ref="phoneInput">
          <input type="text" class="address-input" placeholder="Your Address" required ref="addressInput">
          <input type="email" class="email-input" placeholder="Your Email" required ref="emailInput">
          <textarea class="message-textarea" placeholder="Your Message" required ref="messageTextarea"></textarea>
          <div class="form-buttons">
            <button type="submit" class="submit-button">Submit</button>
            <button @click="closeForm" class="close-button">Close</button>
          </div>
        </form>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    name: 'ContactForm',
    props: {
      selectedLocation: String,
      selectedService: String,
      selectedQuantity: String
    },
    methods: {
      closeForm() {
        this.$emit('close-contact-form');
      },
      submitForm() {
        const formData = {
          name: this.$refs.nameInput.value,
          phone: this.$refs.phoneInput.value,
          address: this.$refs.addressInput.value,
          email: this.$refs.emailInput.value,
          message: this.$refs.messageTextarea.value
        };
  
        axios.post('/send-mail', formData)
          .then(response => {
            console.log('Mail sent:', response.data);
            // Handle successful response
          })
          .catch(error => {
            console.error('Error sending mail:', error);
            // Handle error
          });
  
        this.closeForm();
      }
    }
  };
  </script>
  
  <style scoped>
  .contact-form-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .contact-form-content {
    background-color: white;
    margin: 10px;
    padding: 20px;
    border-radius: 10px;
    width: 90%;
  }
  
  .contact-form-content form {
    display: flex;
    flex-direction: column;
    gap: 10px;
  }
  
  .name-input, .phone-input, .address-input, .email-input {
    padding: 10px;
    margin-top: 10px;
    border: 2px solid rgb(225, 232, 225);
    border-radius: 4px;
    color: #333333; /* Color for entered text */
  }
  
  .name-input::placeholder, .phone-input::placeholder, .address-input::placeholder,
  .email-input::placeholder, .message-textarea::placeholder {
    color: #888888; 
    opacity: 1; /* Ensure consistent opacity across browsers */
  }
  
  .message-textarea {
  padding: 10px;
  margin-top: 10px;
  border: 2px solid rgb(225, 232, 225);
  border-radius: 4px;
  color: #333333; /* Color for entered text */
  width: 100%; /* Full width of the parent container */
  height: 150px; /* Initial height */
  resize: vertical; /* Allows vertical resizing */
  max-width: 100%; /* Maximum width to fit its container */
  min-height: 100px; /* Minimum height when resized */
  max-height: 500px; /* Maximum height when resized */
}

  
  .form-buttons {
    display: flex;
    justify-content: space-between;
  }
  
  .submit-button, .close-button {
    padding: 10px;
    margin-top: 20px;
    border: none;
    border-radius: 4px;
    width: 40%;
    background-color: #000000;
    color: white;
    cursor: pointer;
  }
  </style>
  