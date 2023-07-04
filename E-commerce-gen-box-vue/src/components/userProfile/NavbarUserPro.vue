<template>
    <div class="navchart">
        <ul>
            <li class="li"><router-link to="/">Home</router-link></li>
            <li class="li"><router-link to="/AboutView">Discount</router-link> </li>
            <li class="li"> <router-link to="/CategoryView">Category</router-link></li>
            <li class="user2"> <router-link to="/user">User</router-link></li>
            <!-- <li class="login"> <router-link to="/Daftar">Daftar</router-link></li> -->
            
            <!-- <router-link to="/profile"><img class="gam2" src="../../assets/user.png" alt=""></router-link> -->
        </ul>
        <div class="dropdown">
        <button class="dropdown-btn"><img class="gam3" src="../../assets/user.png" alt=""></button>
        <div class="dropdown-content">
            <li class="lidrop"><router-link class="lidrop" to="/ProfileView">Profile</router-link></li>
            <li class="lidrop"><router-link class="lidrop" to="/WisView">Whislist</router-link></li>
            <li class="lidrop"><router-link class="lidrop" to="/ProfileView">Setting</router-link></li>
            <li class="lidrop"><router-link class="lidrop" to="/ProfileView">Logout</router-link></li>
         
        </div>
        </div>

<!-- 
        <h1 class="shop"><a href="#">Shop</a></h1>
        <form action="">
            <input class="input" type="text" placeholder="Search">
            
        </form> -->
<!--         
        <div class="box1">
            <a href=""><img src="../assets/Vector.png" alt=""></a>
        </div>
        <div class="box2">
            <a href=""><h5 class="h5">login</h5></a>
        </div> -->
        
    </div>
    <div class="navshop">
        <ul>
            <li ><router-link class="shopchart" to="/">Shoop |</router-link></li>
            <li ><router-link class="charth" to="/">Profile</router-link></li>
        </ul>
        
        <input class="searchpro" type="text" placeholder="Search Product...">
    </div>
    
</template>

<script>
    export default {
        name: 'NavbarUserPro',
        components:{

        }
    }
</script>

<style>
    
    .navchart{
        width: 100%;
        height: 60px;
        background-color: #0D6EFD;
    }
    ul{
        
        list-style: none;
        margin-left: 50px;
    }
    .li{
        
        float: left;
        margin-left: 50px;
        color: white;
        margin-top: 20px;

    }
   /* a {
        text-decoration: none;
        color: white;
        font-weight: bold;
    } */
    .navshop{
        width: 100%;
        height: 80px;
        display: flex;
        /* background-color: #ccc0c0; */
    }
    .shopchart{
        color: #0D6EFD;
        /* background-color: red !important; */
        display: flex;
        margin-top: 20px;
        font-size: 35px;
        margin-left: 30px;
        
    }
    .charth{
        position: absolute;
        color: #0D6EFD;
        float: left;
        margin-top: -23px;
        margin-left: 40px;
        font-weight: lighter;
        font-size: 25px;
    }
    .user2{
        position: absolute;
        margin-top: 22px;
        margin-left: 240px;
    }
    .gam2{
        position: absolute;
       margin-top: 10px;
       margin-left: 300px;    
       width: 30px;
    }
    .searchpro{
        width: 650px;
        height: 30px;
        color: #0D6EFD;
        border-radius: 5px ;
        border: solid #0D6EFD 1px;
        margin-top: 24px;
        padding-left: 20px;
        margin-left: 270px;
    }


    .dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-btn {
  
  border: none;
  background: transparent;
  cursor: pointer;
  position: absolute;
  top: 5px;
  right: -350px;
}

.dropdown-content {
  width: 120px;
  height: 150px;
  display: none;
  position: absolute;
  box-shadow: 5px 5px 5px rgb(105, 104, 104);
  border-radius: 5px;
  background-color: rgb(235, 232, 232);
  top: 30px;
  left: 250px;
  z-index: 1;
}

/* .dropdown-content a {
  color: rgb(243, 233, 233);
  padding: 12px 16px;
  text-decoration: none;
  display: block;
} */

.dropdown:hover .dropdown-content {
  display: block;
}
.lidrop{
    color: #000007;
    cursor: pointer;
    display: flex;margin-top: 10px;
    margin-left: 10px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: left;
    margin-top: 8px;
}
.lidrop:hover{
    color: #0D6EFD;
}
    
</style>