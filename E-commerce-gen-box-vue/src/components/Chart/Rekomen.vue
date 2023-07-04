<template>
    <h1 class="rekh1">Rekomendasi</h1>
    <div class="kotrekom">
        <div v-for="rek in rekom">
            <div class="chardrek">
                <div class="desrek">
                    <h3 class="pro">Product</h3>
                    <h4 class="idr">IDR : $ 20</h4>
                    <button class="beli">Beli</button>
                    <img class="like" src="../../assets/likem.png" alt="">
                </div>
            </div>
        </div>
    </div>
    
</template>

<script>

    // import Product from '../Product.vue'

    export default {
        name: 'Rekomen',
        data (){
            return{
                rekom:[{},{},{},{},{},{},{},{},{},{}]
            }
        }
        // components:{
        //     Product,
        // }
    }
</script>

<style>
    .kotrekom{
        width: 90%;
        height: max-content;
        /* background-color: aqua; */
        margin: auto;
        margin-top: 20px;
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }
    .chardrek{
        width: 200px;
        height: 250px;
        background-color: rgb(161, 156, 156);
        position: relative;
        border-radius: 10px;
        margin-top: 20px;
        margin-bottom: 20px;
        box-shadow: 1px 1px 5px #050505;
    }
    .desrek{
        width: 200px;
        height: 100px;
        background-color: aliceblue;
        position: absolute;
        bottom: 0px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        padding-top: 2px;

        
    }
    /* .pro{
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
        width: 100px;
        height: 30px;
        color: #ffffff;
        background-color: #5097FF;
        border: none;
        border-radius: 5px;
        margin-top: 5px;
        left: 20px;
        cursor: pointer;
    } */
    .rekh1{
        font-weight: lighter;
        display:flex;
        margin-left: 110px;
        margin-top: 30px;
    }
    </style>