<template>
    <NavbarWis/>
    <Profilepro/>
</template>

<script>
    import NavbarWis from '../components/Wis/NavbarWis.vue'
    import Profilepro from '../components/Profile/Profilepro.vue'
    export default {
        name:'ProfileView',
        components:{
            NavbarWis,
            Profilepro,
        }
    }
</script>