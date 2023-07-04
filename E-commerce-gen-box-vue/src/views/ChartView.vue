<template>
    <NavbarChart/>
    <Allproduct/>
    <Rekomen/>
    <Footer/>
</template>

<script>

    import NavbarChart from '../components/Chart/NavbarChart.vue'
    import Allproduct from '../components/Chart/Allproduct.vue'
    import Rekomen from '../components/Chart/Rekomen.vue'
    import Footer from '../components/Footer.vue' 

    export default {
        name:'ChartView',
        components: {
            NavbarChart,
            Allproduct,
            Rekomen,
            Footer,
            
        }
    }
</script>