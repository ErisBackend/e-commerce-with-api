<template>
    <div class="kotakpro">
        <input class="checkhall" type="checkbox">
        <h4 class="allh4"> All product</h4>

        <div v-for="con in contoh">

            <div class="lupli">
                <ul class="ulcheck">
                    <li><Input class="chekboxpro" type="checkbox"></Input></li>
                    <div class="kotallpro">
    
                    </div>
                    <div class="kotallpro1">
                        <h2>Product</h2>
                        <h3>$ 1.000</h3>
                        <p>Qty : 5</p>
                    </div>
                    <button class="butcheck">Hapus X</button>
                    
                </ul>
            </div>
        </div>
    </div>
    

</template>

<script>




    export default {
        name:'Allproduct',
        components:{
            

        },
        data(){
            return{
                contoh:[{},{},{},{},{}]
            }
        }
    }
</script>

<style>
    .kotakpro{
        width: 90%;
        height: max-content;
        background-color: white;
        margin: auto;
        text-align: left;
        display: flex;
        flex-direction: column;
        box-shadow: 1px 1px 5px  rgb(160, 155, 155);
        border-radius: 5px;
    }
    .checkhall{
        margin-right: 995px;
        margin-top: 20px;
    }
    .allh4{
        color: rgb(80, 74, 74);
        position: absolute;
        margin-top: 19px;
        left: 200px;
        margin-left: 30px;

    }
    .lupli{
        width: 90%;
        height: 120px;
        /* background-color: brown; */
        margin: auto;
        margin-top: 10px;
    }
    .ulcheck{
        display: flex;
    }
    .chekboxpro{
        margin-top: 55px;
        margin-right: 30px;
    }
    .kotallpro{
        width: 100px;
        height: 100px;
        background-color: black;
        margin-top: 10px;   
        margin-right: 20px;
    }
    .kotallpro1{
        width: 200px;
        height: 100px;
        /* background-color: rgb(226, 214, 214); */
        margin-top: 10px;   
        padding-left: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        
    }
    .butcheck{
        border: none;
        background:transparent;
        margin-left: 500px;
        cursor: pointer;
    }
    .gamdel{
        width: 50px;
        height: auto;
    }
</style>