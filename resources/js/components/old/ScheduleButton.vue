<template>
  <button class="schedule-btn" @click="openContactForm">
    SCHEDULE NOW
  </button>
</template>

<script>
export default {
  name: 'ScheduleButton',
  methods: {
    openContactForm() {
      // Emit an event when the button is clicked
      this.$emit('open-contact-form');
    }
  }
};
</script>

<style scoped>
.schedule-btn {
  padding: 12px 25px;
  background-color: #008000; /* Green background */
  color: white; /* White text */
  border: none;
  cursor: pointer;
  border-radius: 30px;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 1px;
  transition: background-color 0.3s ease, transform 0.3s ease;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  outline: none;
  display: block;
  margin: 20px auto;
  width: 70%; /* Adjust the width as needed */
}

.schedule-btn:active {
  background-color: #367c39; /* Darker green when active */
  transform: translateY(1px);
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}
</style>
