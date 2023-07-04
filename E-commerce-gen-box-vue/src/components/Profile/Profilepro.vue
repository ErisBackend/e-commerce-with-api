<template>
    <div>
        <div class="kotwhis">
            <h1 class="wish1">Profile </h1>
            <h1 class="titikh1">. . .</h1>
            <div class="kotwhispro">
                <div v-for="p in pro">
                    <div class="chartwis">
                        <div class="deswis">
                            <h2 class="pro">Product</h2>
                            <p class="idr">IDR.$ 1.000</p>
                            <button class="beli">beli</button>
                            <img class="like" src="../../assets/likem.png" alt="">
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>

    <Footer/>
</template>

<script>
import Footer from '../Footer.vue'
    export default {
        name:'Profilepro',
        components:{
            Footer,
        },

        data () {
            return {
                pro : [{},{},{},{},{},{},{},{},{},{}]
            }
        }

    }
</script>

<style>
    .kotwhis{
       
        width: 90%;
        height: max-content;
        /* background-color: aqua; */
        margin: auto;
        margin-top: 0px;
    }.kotwhispro{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        width: 100%;
        height: max-content;
        /* background-color: brown; */
        margin: auto;
    }
    .chartwis{
        width: 200px;
        height: 250px;
        background-color: #C4C4C4;
        border-radius: 10px;
        position: relative;
        box-shadow: 1px 1px 5px #050505;
    }
    .deswis{
        width: 200px;
        height: 100px;
        position:absolute;
        background-color: #ffffff;
        bottom: 0px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }
    .wish1{
        margin-top: 20px;
        text-align: left;
        margin-left: 50px;
        font-size: 30px;
        float: left;
        font-weight: lighter;
        margin-bottom: 20px;
    }
    .titikh1{
        position: absolute;
        margin-left: 200px;
        margin-top: 10px;
        color:#C4C4C4 ; 
    }
</style>