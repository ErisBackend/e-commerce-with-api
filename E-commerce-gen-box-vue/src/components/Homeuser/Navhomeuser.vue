<template>
   <div class="nav">
        <ul>
            <li class="li"><router-link to="/">Home</router-link></li>
            <li class="li"><router-link to="/AboutView">Admin</router-link> </li>
            <li class="li"> <router-link to="/CategoryView">Category</router-link></li>
            
            <li class="homeuser" ><router-link to="/Login"><img class="homeuser" src="../../assets/user.png" alt=""></router-link></li>
            <!-- <li class="login"> <router-link to="/Daftar">Daftar</router-link></li> -->
            <li class="keranjang"> <router-link to="/ChartView"><button class="butker"><img src="../../assets/Vector.png" alt=""></button></router-link></li>
            <li class="shop"><router-link to="/Login">Shop</router-link></li>
        </ul><br>

        <form action="">
            <div class="divsearch1">
                <input class="input1" type="text" placeholder="Search...">
                <Button class="cari1" type="search ">Search</Button> 
            </div>   
        </form>
       
<!--         
        <div class="box1">
            <a href=""><img src="../assets/Vector.png" alt=""></a>
        </div>
        <div class="box2">
            <a href=""><h5 class="h5">login</h5></a>
        </div> -->
        
    </div>
</template>
<script>
    export default {
        name: 'Navhomeuser',
    }
</script>
<style>
    .nav{
        width: 100%;
        height: 120px;
        background-color: #0D6EFD;

    }
    ul{
        
        list-style: none;
        margin-left: 40px;
    }
    .li{
        
        float: left;
        margin-left: 50px;
        color: white;
        margin-top: 20px;

    }
   a {
        text-decoration: none;
        color: white;
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
    .input{
        width: 700px;
        height: 30px;
        /* position: absolute; */
        top: 55px;
        left: 300px;
        border-radius: 5px;
        border: none;
        padding-left: 15px;
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
    .cari1{
        width: 50px;
        height: 30px;
        color: white;
        border: solid 1px #fbfbfc;
        border-radius: 5px;
        background-color: #0D6EFD;
        cursor: pointer;
        right: 0;
        /* margin-top: 55px;
        right: 295px; */
        position: absolute;
    }
    .butker{
        width: 50px;
        height: 30px;
        background-color: #0D6EFD;
        border: solid #fff 1px;
        border-radius: 5px;
        cursor: pointer;
    }
    /* .butloghome{
        width: 50px;
        height: 30px;
        background-color: #0D6EFD;
        border: solid #fff 1px;
        border-radius: 5px;
        cursor: pointer;
    } */
    .homeuser{
        width: 35px;
        height: auto;
        right: 80px;
        top: 24px;
        position: absolute;
    }

    .divsearch1{
        position: relative;
        width: 700px;
        height: 30px;
        border-radius: 5px;
        background-color: #fbfbfc;
        margin-top: 37px;
        margin-left: 350px;

    }
    .input1{
        width:100%;
        height: 100%;
        border-radius: 5px;
        border: none;
        padding-left: 20px;
        
        top: 0;
    }
    .cari1{
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
</style>