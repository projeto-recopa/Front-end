<template>
  <div id="app">
    <!-- <div id="nav" class="navbar-light">
     
      <router-link to="/">Home</router-link> |
      <router-link to="/about">Sobre</router-link>
    </div> -->
    <router-view/>
  </div>
</template>

<style>

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  
  
  color: #2c3e50;
  
}

#nav {
  padding: 30px;
  background-color: #006633;
}

#nav a {
  font-weight: bold;
  color: white;
}

#nav a.router-link-exact-active {
  color: #48ff00;
}

</style>
