<template>
    <body>
        <NavbarUserPro/>
        <ContentPor/>
        <Footer/>
    </body>
</template>

<script>
import Footer from '../components/Footer.vue'
    import ContentPor from '../components/userProfile/ContentPor.vue'
    import NavbarUserPro from '../components/userProfile/NavbarUserPro.vue'
    export default {
        name: 'UserProfile',
        components: {
            NavbarUserPro,
            ContentPor,
            Footer,
        }
    }
</script>