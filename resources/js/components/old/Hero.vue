<template>
  <div class="hero hide-on-mobile">
    <img src="\public\images\ChineyBanner2.jpg" alt="Our Services">
  </div>
</template>

<script>
export default {
  name: 'Hero'
};
</script>

<style scoped>
.hero img {
  width: 100%;
  height: auto;
}

@media (max-width: 768px) { /* Adjust breakpoint as needed */
  .hide-on-mobile {
    display: none;
  }
}
</style>
