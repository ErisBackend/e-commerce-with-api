<template>
    <div class="nav">
        <ul class="ulnavbaarutama">
            <li class="li"><router-link to="/">Home</router-link></li>
            <li class="li"><router-link to="/AbotView">Admin</router-link></li>
            <li class="li"> <router-link to="/CategoryView">Category</router-link></li>
            <li class="Login" ><button class="butlog"><router-link to="/Login">Login</router-link></button></li>
            <!-- <li class="login"> <router-link to="/Daftar">Daftar</router-link></li> -->
            <li class="keranjang"> <router-link to="/ChartView"><button class="butker"><img src="../assets/Vector.png" alt=""></button></router-link></li>
            <li class="shop"><router-link to="/Login">Shop</router-link></li>
        </ul><br>

        <form action="">
            <div class="divsearch">
                <input class="input" type="text" placeholder="Search...">
                <Button class="cari" type="search ">Search</Button> 
            </div>   
        </form>
        

        
    </div>
</template>

<script>
    export default {
  name: 'Navbar',
  
}
</script>

<style>
    .nav{
        width: 100%;
        height: 120px;
        background-color: #0D6EFD;
    }
    .ulnavbaarutama{
        
        list-style: none;
        margin-left: 40px;
    }
    .li{
        
        float: left;
        margin-left: 50px;
        color: rgb(240, 16, 16);
        margin-top: 20px;

    }
   a {
        text-decoration: none;
        color: rgb(253, 249, 249);
        font-weight: bold;
    }
    .shop{
        position: absolute;
        color: white;
        top: 50px;
        left: 100px;
        font-size: 50px;
        float: left;
    }
    .divsearch{
        position: relative;
        width: 700px;
        height: 30px;
        border-radius: 5px;
        background-color: #fbfbfc;
        margin-top: 37px;
        margin-left: 350px;

    }
    .input{
        width:100%;
        height: 100%;
        border-radius: 5px;
        border: none;
        padding-left: 20px;
        /* margin-left: 20px; */
        top: 0;
 
    }
    .Login{
        position: absolute;
        top: 55px;
        right: 140px;
    }
    .search{
        width: 50px;
        height: 25px;
        border-radius: 10px;
        position: absolute;
        top: 60px;
        left: 995px;
        border: none;
        background-color: #0D6EFD;
        color: white;
    }
    .box1{
        width: 50px;
        height: 25px;
        background-color: #0D6EFD;
        position: absolute;
        top: 60px;
        right: 250px;
        float: left;
        border-radius: 10px;
        border: solid white 2px;
    }
    .box2{
        width: 50px;
        height: 25px;
        background-color:#0D6EFD;
        position: absolute;
        top: 60px;
        right: 180px;
        float: left;
        border-radius: 10px;
        border:solid white 2px;
    }
    img{
        width: 20px;
        margin-top:3px;
        top: 5px;
    }
    .h5{
        color: white;
        margin-top: 5px;
    }
    
    
    .keranjang{
        position: absolute;
        top: 55px;
        right: 220px;
    }
    .cari{
        width: 50px;
        height: 30px;
        position: absolute;
        right: -19px;
        top: 0;
        color: white;
        border: solid 1px #fbfbfc;
        border-radius: 5px;
        background-color: #0D6EFD;
        cursor: pointer;
    }
    .butker{
        width: 50px;
        height: 30px;
        background-color: #0D6EFD;
        border: solid #fff 1px;
        border-radius: 5px;
        cursor: pointer;
    }
    .butlog{
        width: 50px;
        height: 30px;
        background-color: #0D6EFD;
        border: solid #fff 1px;
        border-radius: 5px;
        cursor: pointer;
    }
    
    
    
</style>