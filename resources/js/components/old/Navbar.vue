<template>
  <div class="navbar">
    <div class="navbar-logo">
      <!-- Updated image path -->
      <img src="\public\images\ChimneyzLogo.png" alt="Logo">
    </div>
    
    <!-- Hamburger Menu Button -->
    <button class="hamburger" @click="toggleMenu">&#9776;</button>

    <!-- Navigation Links -->
    <div class="navbar-nav-container" v-show="menuOpen">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="#" class="nav-link">Who we are</a>
        </li>
        <li class="nav-item">
          <a href="/global/en/about.html" class="nav-link">Services</a>
        </li>
        <li class="nav-item">
          <a href="/global/en/about.html" class="nav-link">Contact us</a>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Navbar',
  data() {
    return {
      menuOpen: false,
    };
  },
  methods: {
    toggleMenu() {
      this.menuOpen = !this.menuOpen;
    },
  },
};
</script>

<style scoped>
body, html {
  margin: 0;
  padding: 0;
}

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #000;
  height: 70px;
  width: 100%;
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

.navbar-logo img {
  height: auto;
  width: 120px;
  padding-left: 7px;
}

.hamburger {
  display: none;
  background-color: transparent;
  border: none;
  color: white;
  font-size: 24px;
  cursor: pointer;
  padding: 10px;
  align-self: center;
}

.navbar-nav-container {
  display: none;
  position: absolute;
  top: 70px;
  left: 0;
  right: 0;
  background-color: #000;
  z-index: 2;
}

.navbar-nav {
  list-style: none;
  margin: 0;
  padding: 0;
  flex-direction: column;
  align-items: center;
  width: 100%;
}

.nav-item {
  margin: 10px 0;
}

.nav-link {
  text-decoration: none;
  color: white;
  font-size: 16px;
  display: block;
}

@media (max-width: 768px) {
  .hamburger {
    display: block;
  }

  .navbar {
    flex-direction: row;
  }

  .navbar-nav-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
  }

  .nav-item {
    width: 100%;
  }

  .nav-link {
    text-align: left;
    padding: 10px 15px;
  }
}
</style>
