<template>
    <h1 class="product1">Product</h1>
    <div class="product">
        <div class="boxpro">
            <div v-for="data in datas" :key="data.id">
                <div class="chard">

                   <div class="gambar">
                    
                       <img class="likee" :src="'http://localhost:8000/images/'+data.gambar" :alt="data.nama_product">
                   </div>

                    <div class="des">
                        <h4 class="pro">{{data.nama_product}}</h4>
                        <p class="idr">IDR :{{data.harga}}</p>
                    <button class="belii">beli</button>
                    <button class="addd">add</button>

                    </div> 
                </div>

            </div>
        </div>
    </div>
    <ul class="aaa">
        <li><button class=" buttt">{{ '<' }}</button></li>
        <li><button class=" buttt">{{ '1' }}</button></li>
        <li><button class=" buttt">{{ '...' }}</button></li>
        <li><button class=" buttt">{{ '12' }}</button></li>
        <li><button class=" buttt">{{ '>' }}</button></li>
    </ul>
    

</template>

<script>
    import axios from 'axios'
    export default {
        name: 'Product',
       
        data(){
            return {
                datas:[],
            }
        },
        mounted() {
            axios.get("http://localhost:8000/api/products/list")
            .then(res => {
                this.datas = res.data.data
                console.log(this.datas);
            })
            
        },
        methods: {
            list(){
                axios.get("http://localhost:8000/api/products/list")
                .then(res => {
                this.datas = res.data.data
            })
            
            }
        },
    }
</script>

<style>
    .boxpro{
        width: 80%;
        /* padding: 10px; */
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        height: max-content;
        /* background-color: aqua; */
        margin: auto;
        /* margin-top: 16px; */
    }
    .product1{
        margin-top: 20px;
        text-align: left;
        margin-left: 130px;
        font-size: 25px;
        padding-bottom: 10px;
        font-weight: lighter;
    }
    .aaa{
        /* position: absolute; */
        left: 50px;
    } 
    li{
        display: inline-block;
    } 
    .buttt{
        width: 50px;
        height: 30px;
        background-color:#0D6EFD;
        border-radius: 5px;
        border: none;
        margin-top: 20px;
        margin-right: 30px;
        margin-bottom: 20px;
        color: white;
        cursor: pointer;

    }
    .gambar{
        width: 100%;
        height: 150px;
  
        display: flex;
        align-items: center;
        position: relative;
        border-radius: 5px;
    }
    .likee{
        width: 95%;
        height: 140px;
        position: absolute;
        margin: auto;
        left: 5px;
        border-radius: 3px;
    }
    .belii{
        position: absolute;
        width: 50px;
        height: 30px;
        color: #ffffff;
        background-color: #5097FF;
        border: none;
        border-radius: 5px;
        margin-top: 5px;
        left: 20px;
        cursor: pointer;
    }
    .addd{
        position: absolute;
        width: 50px;
        height: 30px;
        color: #ffffff;
        background-color: #5097FF;
        border: none;
        border-radius: 5px;
        margin-top: 5px;
        right: 20px;
        cursor: pointer;
    }
</style>

