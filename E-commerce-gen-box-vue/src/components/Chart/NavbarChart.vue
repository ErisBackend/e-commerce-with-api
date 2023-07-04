<template>
    <div class="navchart">
        <ul class="ulnavbarchart">
            <li class="li1"><router-link to="/">Home</router-link></li>
            <li class="li1"><router-link to="/DiscountView">Discount</router-link> </li>
            <li class="li1"> <router-link to="/CategoryView">Category</router-link></li>
            <li class="user2"> <router-link to="/user">User</router-link></li>
            
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
           
        </div>
    <div class="navshop">
        <ul>
            <li ><router-link class="shopchart" to="/">Shoop |</router-link></li>
            <li ><router-link class="charth" to="/">Chart</router-link></li>
        </ul>
        
        <input class="searchpro" type="text" placeholder="Search Product...">
    </div>
    
</template>

<script>
    export default {
  name: 'NavbarChart',
}

// let mouse = document.querySelector('.dropdownn')
//         let ul2 = document.querySelector('.dropdown')

    

//         mouse.addEventListener('mouseenter',function(){
//         ul2.classList.remove('dropdownn')
//         })
//         mouse.addEventListener('mouseleave',function(){
//         ul2.classList.add('dropdownn')
//         })

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
    .li1{
        
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
        margin-left: 50px;
        
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
        margin-left: 260px;
    }
    .gam3{
        width: 30px;
        margin-top: -5px;
    }
    .searchpro{
        width: 650px;
        height: 30px;
        color: #0D6EFD;
        border-radius: 5px ;
        border: solid #0D6EFD 1px;
        margin-top: 24px;
        padding-left: 55px;
        margin-left: 250px;
    }
    /* .dropdown{
        display: none;
        position: absolute;
        width: 100px;
        min-height: 100px;
        background-color: #0D6EFD;
        top: 45px;
        right: 190px;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 5px 5px 5px #050505;
    }
    .drop{
        display: flex;
        flex-direction: column;
        text-align: left;
        margin-bottom: 10px;
    }
    .okokok:hover.deopdown{
        display: block;
    } */
    /* .drop:hover{
        background-color: #a19595;
        padding: 5px;
        border-radius: 5px;
        box-shadow:  2px 2px 2px #050505;
    }

    .okokok {
        background-color: red !important;
    }

    .okokok::hover .dropdown{
        display: block !important;
    } */
  
 



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