<template>
  <div class="page-container">
    <div class="content-wrap">
      <!-- Your main content goes here -->
    </div>
    
    <footer class="footer">
      <div class="footer-content">
        <p>&copy; {{ new Date().getFullYear() }} Chimeyz. All rights reserved.</p>
        <!-- Additional footer content -->
      </div>
    </footer>
  </div>
</template>

<script>
export default {
  name: 'YourComponent',
  // Your script content
};
</script>

<style scoped>

.content-wrap {
  flex: 1; /* Flex grow to push the footer down */
}

.footer {
  background-color: rgb(0, 0, 0);
  color: white;
  text-align: center;
  padding: 20px 0;
  width: 100%;
  margin-top: 40px;
}

/* Reset styles */
body, html {
  margin: 0;
  padding: 0;
  height: 100%;
}
</style>
