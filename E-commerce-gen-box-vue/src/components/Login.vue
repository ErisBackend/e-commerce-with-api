<template>
    <body class="bglogin">
        <Navbar/>
    
    <div class="kotlogin">
        <form class="formdaf" action="">
            
                <input class="inpuser" type="text" name="" placeholder="User name" required>
                <hr class=" garis">
                <input class="inpuser" type="password" name="" placeholder="Password" required>
            <div class="kotlogin1">
                <button class="login">Login</button>
            </div>
        </form>
    </div>

        <p class="tanya">belum punya akun? </p> <li class=""> 
        <router-link class="daf" to="/Daftar">Daftar</router-link></li>
        <Product/>
    <Footer/>
    </body>
    
</template>

   

    <script>
import Navbar from '../components/Navbar.vue'
// import Daftar from '../components/Daftar.vue'
// import Product from '../components/Product.vue'
import Footer from '../components/Footer.vue'

      export default {
        name:'Login',
        components:{
            Navbar,
            // Daftar,
            // Product,
            Footer,
        }
      }
    </script>



<style>

    /* .formdaf{
        width: 400px;
        height: 300px;
        background-color: #bac525;
        margin: auto;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 30px;
        margin-top: 50px;
        border-radius: 20px;

    }
    .inpuser{
        width: 100%;
        border: none;
        outline: none;
        background-color: transparent;
        font-size: 28px;
        text-align: center;
        color: #219F94;
        padding: 8px;
        font-weight: 200;
    }

    .garis{
       width: 100%;
       border: 1px solid #D9D9D9;
    }
    ::placeholder{
        font-weight: 200;
        color: #0D6EFD;
    } */
    .inpuser{
        width: 400px;
        height: 50px;
        text-align: center;
        font-size: 30px;
        border: none;
        border-color: rgb(173, 170, 170);
    }
    .inpuser:focus{outline: none;}
    .conten{
        margin: 0;
        padding: 0;
        width: 100%px;
        height:555px;
        background-color: #cc1695;
    }
    .tanya{
        float: left;
        margin-top: 30px;
        position: absolute;
        top: 470px;
        left: 580px;
    }
 
    .login{
        width: 100%;
        height: 100%;
        background-color: #0D6EFD;
        border-radius: 5px;
        border: none;
        color: white;
        cursor: pointer;
    }
    .kotlogin{
        height: 200px;
        width: 400px;
        background-color: #ffffff;
        margin: auto;
        padding: 30px;
        padding-top: 40px;
        border-radius: 10px;
        position: relative;
        margin-top: 100px;
    }
    .kotlogin1{

        width: 300px;
        height: 30px;
        background-color: aqua;
        border-radius: 5px;
        bottom: 30px;
        margin-left: 40px;
        margin-bottom: 40px;
        position: absolute;

    }
    .daf{
        color: #0D6EFD;
        position: absolute;
        top:500px ;
        left: 730px;
    }
    .bglogin{
        background-color: #E5E5E5;
    }
</style>
