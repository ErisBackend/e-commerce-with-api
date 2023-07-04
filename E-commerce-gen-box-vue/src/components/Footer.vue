<template>
    <div class="footer">
        <h1 class="shop1">Shop</h1>
        <ul class="sosmed">
            <li><a class="psos" href=""><img class="imgsos" src="../assets/f.png" alt=""></a></li>
            <li><a class="psos" href=""><img class="imgsos" src="../assets/t.png" alt=""></a></li>
            <li><a class="psos" href=""><img class="imgsos" src="../assets/w.png" alt=""></a></li>
        </ul>
        <small>&copy; Copyright 2022</small>
        

    </div>
</template>

<script>
    export default {
        name:'Footer',
    }
</script>

<style>
    .footer{
        width: 100%;
        height: 120px;
        /* clear: both; */
        background-color: #0D6EFD;
        position: relative;
        margin-top: auto;
       

    }
    .shop1{
   
        color: white;
        margin: auto;
        font-size: 30px;
        padding-top: 10px;

    }
    .sosmed{
        margin: auto;
        margin-top: 3px;
    }
    .psos{
        margin: 10px;
    }
    small{
        color: white;
        display: inline-block;
        font-size: 20px;
        padding-top: 3PX;
    }
    .imgsos{
        width: 30px;

    }
</style>