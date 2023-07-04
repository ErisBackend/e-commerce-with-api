<template>
    <NavbarWis/>
    <Whislist/>
    <Footer/>
</template>

<script>
    import NavbarWis from '../components/Wis/NavbarWis.vue'
    import Whislist from '../components/Wis/Whislist.vue'
    import Footer from '../components/Footer.vue'
    export default {
        name: 'WisView',
        components: {
            NavbarWis,
            Whislist,
            Footer,
        }
    }
</script>