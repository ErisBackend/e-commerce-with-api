<template>
    <body>
        <NavbarChart/>
        <ContenChekout/>
        <Rekomen/>
        <Footer/>
    </body>
</template>

<script>
import NavbarChart from '../components/Chart/NavbarChart.vue'
import ContenChekout from '../components/Checkout/ContenChekout.vue'
import Rekomen from '../components/Chart/Rekomen.vue'
import Footer from '../components/Footer.vue'
   export default {
        name: 'Checkout',
        components: {
            NavbarChart,
            ContenChekout,
            Rekomen,
            Footer,
        }
   }
   

   
</script>