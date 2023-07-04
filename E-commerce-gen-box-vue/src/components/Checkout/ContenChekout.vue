<template>
    
        <div class="conten">
                <div class="kotcek">
                    <input class="centang" type="checkbox">
                    <h4 class="allh44">All Product</h4>
                </div>

                <div class="boxcekout" v-for="dumm in dummy3">
                    <input class="centangg" type="checkbox">

                    <div class="item">
                        <img class="imgcek" src="../../assets/nasi.jpg" alt="">
                    </div>
                
                    <div class="deskripsi">
                        <h3 class="color">Product</h3>
                        <h4 class="color">$ 1</h4>
                        <h5 class="color">Qty : 5</h5>
                    </div>
                    
                    <button class="hapuscek">Hapus x</button>
                   
                </div>
                <div class="butcekoutt">
                    <button class="belicekot">Beli</button>
                    <button class="hapuscekot">Hapus</button>
                </div>
              
        </div>
    
  
</template>

<script>
    export default {
        name: 'ContenChekout',

        data (){
            return{
                dummy3:[{},{},{},{},{}]
            }
        }
    }
</script>

<style>
body{
    background-color: #f6f6f6;
}
    .conten{
        width: 1231px;
        height: max-content;
        background-color: #ffffff;
        margin: auto;
        margin-top: 1px;
        box-shadow: 5px 5px 5px #e6e6e6;
        border-radius: 10px;
    }
    .boxcekout{
        width: 1058px;
        height: 110px;
        /* background-color: aliceblue; */
        margin: auto;
        position: relative;
        display: flex;
    }
    .kotcek{
        width: 200px;
        height: 50px;
        /* background-color: blueviolet; */
        display: flex;
        flex-direction: row;
        position: relative;
        margin-left: 120px;
    }
    .centang{
        position: absolute;
        top: 18px;
        left: 20px;
    }
    .allh44{
        position: absolute;
        color: aliceblue;
        top: 17px;
        left: 70px;
        color: #9F9F9F;
    }
    .centangg{
        position: absolute;
        top: 43px;
        left: 55px;
    }
    .item{
        width: 100px;
        height: 100px;
        /* background-color: black; */
        margin-left: 100px;
        margin-top: 5px;
    }
    .deskripsi{
        width: 200px;
        height: 100px;
        /* background-color: blue; */
        margin-left: 20px;
        margin-top: 5px;
        position: relative;
        display: flex;
        /* align-items: center; */
        justify-content: center;
        text-align: left;
        flex-direction: column;
        
    }
    .color{
        color: #0c0c0c;
    }
    .imgcek{
       width: 90px;
       height: 90px;
       margin: auto;
       margin-top: 5px;
    }
    .hapuscek{
        border: none;
        background: transparent;
        cursor: pointer;
        margin-left: 500px;
    }
    .butcekoutt{
        width: 180px;
        height: 30px;
        /* background-color: chartreuse; */
        position: relative;
        display: flex;
        float: left;
        margin-left: 190px;
        margin-top: 10px;
        margin-bottom: 20px;
    }
    .belicekot{
        width: 80px;
        height: 30px; 
        border: none;
        background-color: #5097FF;   
        border-radius: 3px;
        color: aliceblue;
    }
    .hapuscekot{
        width: 80px;
        height: 30px;
        margin-left: 20px;
        border: 1px solid red;
        background-color: aliceblue;
        border-radius: 3px;
        color: red;
    }
</style>