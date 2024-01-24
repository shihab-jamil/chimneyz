<template>
    <div class="container">
      <select class="dropdown" name="location" v-model="selectedLocation">
        <option value="">Select Location</option>
        <option value="Oregon/WA">Oregon/WA</option>
        <option value="Seattle/Tacoma">Seattle/Tacoma</option>
        <option value="Ohio">Ohio</option>
        <option value="California">California</option>
      </select>
  
      <select class="dropdown" name="service" v-model="selectedService">
        <option value="">Select Service</option>
        <option value="Open Fireplace">Open Fireplace</option>
        <option value="Wood Stove Insert with Liner">Wood Stove Insert with Liner</option>
        <option value="Wood Stove Insert without Liner">Wood Stove Insert without Liner</option>
        <option value="Gas Fireplace Service">Gas Fireplace Service</option>
        <option value="Free Standing Wood Stove">Free Standing Wood Stove</option>
        <option value="Pellet Stove Insert">Pellet Stove Insert</option>
        <option value="Pellet Stove Free Standin">Pellet Stove Free Standing</option>
      </select>
  
      <select class="dropdown" name="quantity" v-model="selectedQuantity">
        <option value="">Select Quantity</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="2">3</option>
        <option value="2">4</option>
        <option value="2">5</option>
        <option value="2">6</option>
      </select>
  
    </div>
  </template>
  
  <script>
  export default {
    name: 'Locator',
    data() {
      return {
        selectedLocation: '',
        selectedService: '',
        selectedQuantity: ''
      };
    },
    watch: {
      selectedLocation() {
        this.emitSelections();
      },
      selectedService() {
        this.emitSelections();
      },
      selectedQuantity() {
        this.emitSelections();
      }
    },
    methods: {
      emitSelections() {
        this.$emit('selections-changed', {
          location: this.selectedLocation,
          service: this.selectedService,
          quantity: this.selectedQuantity
        });
      }
    }
  };
  </script>
  
 <style scoped>

  .container {
    width: 100%;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f3f3f3;
    flex-direction: column;
  }
  
  .dropdown {
    margin: 10px 0;
    width: 80%;
    height: 50px;
    padding: 0 10px;
    font-size: 16px;
    background-color: #000303;
    border-radius: 25px;
    border: none;
    color: #90EE90;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" viewBox="0 0 16 16"><path d="M7.646 11.854a.5.5 0 0 1 0-.708L10.793 8 7.646 4.854a.5.5 0 1 1 .708-.708l3.5 3.5a.5.5 0 0 1 0 .708l-3.5 3.5a.5.5 0 0 1-.708 0z"/></svg>');
    background-repeat: no-repeat;
    background-position: right 10px center;
    background-size: 16px 16px;
    cursor: pointer;
  }

</style>
  