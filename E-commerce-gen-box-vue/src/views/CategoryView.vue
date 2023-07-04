<template>
    <body>
        <Navbar/>
       

        <Footer/>
    </body>
    
</template>

<script>
    import Navbar from '../components/Navbar.vue'
    import Footer from '../components/Footer.vue'
    export default {
        name: 'CategoryView',
        components:{
            Navbar,
            Footer
        }
    }
    
</script>

<style>
    /* body{
       display: flex;
       flex-direction: column;
       min-height: 100vh;

    } */
    .conten{
     
        height: 80px;
        background-color: beige;
    }

</style>