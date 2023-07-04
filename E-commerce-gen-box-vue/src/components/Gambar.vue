<template>
    <div class="gam">
        <img class="gam1" src="../assets/gambar.png" alt="">
    </div>
    <h3 class="dis">Discount</h3>
    <div class="duabelas">
        <h1 class="duabelasduabelas">12.12</h1>
        <p class="titik1">...</p> 
    </div>
    <div class="dfflec">
        <button class="next">{{'<'}}</button>
        
        <div v-for="dum in dummys">

    <!-- <div class="boxchard"> -->
        <div class="chard">
            <div class="boxduabelas">
                <h3 class="a">12.12</h3>
            </div> 
            <div class="des">
                <h2 class="pro">Product</h2>
                <p class="idr">IDR.$ 1.000</p>
                <button class="beli">beli</button>
                <button class="add">add</button>
                <img class="like" src="../assets/likem.png" alt="">
            </div> 
        </div>
    <!-- </div> -->
</div>
<button class="next">{{'>'}}</button>
    </div>
    

</template>

<script>
    export default {
        name: 'Gambar',
        data(){
            return{
                dummys:[{},{},{},{}]
            }
        }
    }
</script>

<style>
    .dfflec{
   
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        width: 80%;
        margin: auto;
        border: 1px solid #0D6EFD;
        padding-bottom: 20px;
        margin-top: 10px;
        padding-top: 15px;
    }
    .gam{
        width: 100%;
        height: 200px;
        /* background-color: aqua; */
    }
    .gam1{
        width: 80%;
        height: 200px;
    }
    /* .boxchard{
        width: 80%;
        padding: 10px;
        height: max-content;
        background-color: aqua;
        margin-right: 10px;
        margin-top: 14px;
    } */
    .chard{
        width: 200px;
        height: 250px;
        background-color: #C4C4C4;
        border-radius: 5px;
        position: relative;
        box-shadow: 1px 1px 5px #050505;
    }
    .dis{
        margin-top: 20px;
        text-align: left;
        margin-left: 130px;
        font-size: 20px;
        float: left;
        font-weight: lighter;
    }
    .duabelas{
        width: 100px;
        height: 35px;
        background-color: #5097FF;
        margin-top: -30px;
        margin-left: 220px;
        border-radius: 5px;
       
    }
    .duabelasduabelas{
        color: white;
        float: left;
        margin-left: 10px;
    }
    .boxduabelas{
        position: absolute;
        width: 100px;
        height: 35px;
        background-color: #5097FF;
        margin-top: 15px;
        margin-left: -15px;
        border-radius: 5px;
        display: flex;
    }
    .a{
        color: #ffffff;
        margin-top: 7px;
        margin-left: 25px;
    }
    .des{
        width: 200px;
        height: 100px;
        position:absolute;
        background-color: #ffffff;
        bottom: 0px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        
    }
    .pro{
        text-align: left;
        margin-left: 20px;
        margin-top: 5px;
    }
    .idr{
        text-align: left;
        margin-left: 20px;
        margin-top: 5px;
    }
    .beli{
        position: absolute;
        width: 70px;
        height: 30px;
        color: #ffffff;
        background-color: #5097FF;
        border: none;
        border-radius: 5px;
        margin-top: 5px;
        left: 20px;
        cursor: pointer;
    }
    .add{
        position: absolute;
        width: 70px;
        height: 30px;
        color: #ffffff;
        background-color: #5097FF;
        border: none;
        border-radius: 5px;
        margin-top: 5px;
        right: 20px;
        cursor: pointer;
    }
    .titik1{
        position: absolute;
        font-size: 70px;
        left: 320px;
        top: 290px;
        color:#C4C4C4 ; 
    }
    .next{
        width: 30px;
        height: 30px;
        background-color:#C4C4C4  ;
        border-radius: 15px;
        color: #ffffff;
        border: none;
        cursor: pointer;
        margin-top: 100px;
        margin-left: 10PX;
    }
    .like{
        position: absolute;
        top: 8px;
        right: 50px;
    }
    
 

</style>