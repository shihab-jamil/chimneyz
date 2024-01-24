<template>
  <div class="image-container">
    <img src="" alt="Chimney Inspection Services">
  </div>
</template>

<script>
export default {
  name: 'MobileHero',
  // Your existing data and methods
};
</script>

<style scoped>
body, html {
  margin: 0;
  padding: 0;
  height: 100%;
}

.image-container {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0;
  padding: 0;
  width: 100%;
  overflow: hidden; /* This will clip any overflowing content */
}

.image-container img {
  max-width: 100%;
  height: auto;
  display: block;
  margin: auto;
}
</style>
