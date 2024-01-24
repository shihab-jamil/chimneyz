<template>
    <div class="price-display">
      Price: $ {{ price.toFixed(2) }}
    </div>
</template>
  
<script>
  export default {
    name: 'Price',
    props: {
      price: {
        type: Number,
        default: 0 
      }
    }
  };
</script>
  
<style scoped>
  .price-display {
    margin-top: 10px;
    margin-right: auto; 
    margin-left: auto;  
    font-size: 20px;
    color: #4CAF50; 
    text-align: center;  
    font-weight: bold; 
    width: 60%; 
    padding: 10px 0;  
    background-color: #f3f3f3; 
    border-radius: 10px; 
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
    box-sizing: border-box; 
  }
  
  @media screen and (max-width: 768px) {
    .price-display {
      width: 100%; 
    }
  }
</style>
  