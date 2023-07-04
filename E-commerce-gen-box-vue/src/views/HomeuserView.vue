<template>
    <body>
        <Navhomeuser/>
        <Gambar/>
        <Product/>
        <Footer/>
    </body>
    
</template>

<script>

import Navhomeuser from '../components/Homeuser/Navhomeuser.vue'
import Gambar from '../components/Gambar.vue'
import Product from '../components/Product.vue'
import Footer from '../components/Footer.vue'
    export default {
        name: 'HomeuserView',

        components:{
            Navhomeuser,
            Gambar,
            Product,
            Footer,
        }
    }
</script>