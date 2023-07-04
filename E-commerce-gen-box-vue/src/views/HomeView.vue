<template>
  <body>
    <Navbar/>
    <Gambar/>
    <Product/>
    <Footer/>
  </body>
  
</template>

<script>
// @ is an alias to /src
import Navbar from '../components/Navbar.vue'
import Gambar from '../components/Gambar.vue'
import Product from '../components/Product.vue'
import Footer from '../components/Footer.vue'


export default {
  name: 'HomeView',
  components: {
    Navbar,
    Gambar,
    Product,
    Footer,
  }
}
</script>

<style>
  body{
    display: flex;
       flex-direction: column;
       min-height: 100vh;
        background-color: #f6f6f6;
  }

</style>
