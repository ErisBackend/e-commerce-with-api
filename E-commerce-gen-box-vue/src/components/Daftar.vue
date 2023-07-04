<template>
    <Navbar/>
<div class="boxlog">
    <div class="kotakkanan">
        
    </div>
    <div class="kotakkiri">
        <div class="input1">
            <form action="">
                <label class="labell" for="">User Name</label>
                <input class="input2" type="text" placeholder="Masukkan User Name" required>

                <label class="labell" for="">Gmail</label>
                <input class="input2" type="text" placeholder="Maukkan Gamil" required>

                <label class="labell" for="">Password</label>
                <input class="input2" type="text" placeholder="Masukkan Password" required>

                <label class="labell" for="">Konfirmasi</label>
                <input class="input2" type="text" placeholder="Konfirmasi Password" required>
            </form>

            <div class="check">
                <input type="checkbox">
                Agree
            </div>
            
            <div class="button">
                <button class="but" type="submit">Daftar</button>
            </div>
        </div>
    </div>
</div>

</template>

<script>
    import Navbar from '../components/Navbar.vue'

    export default {
        name:'Daftar',
        components: {
            Navbar,
        }
    }
    
</script>

<style>
    .boxlog{
        width: 800px;
        height: 500px;
        box-shadow: 3px 1px 20px 11px rgb(196, 192, 192);
        margin: auto;
        margin-top: 35px;
        border-top-right-radius: 20px;
        border-bottom-right-radius: 20px;
    }
    .kotakkanan{
     width: 400px;
     height: 500px;
     background-image: url('../assets/tas.png');
     background-size: cover;
     float: left;
  
    }
    .kotakkiri{
     width: 400px;
     height: 480px;
     float: right;
     border-radius: 20px;
     padding-top: 20px;
    }
    .labell{
        display: block;
        color: #0D6EFD;
        text-align: left;
        padding-left: 60px;
        margin-top: 30px;
    }
    .input2{
        width: 270px;
        height: 30px;
        border-radius: 5px;
        border: solid #C4C4C4;
        padding-left: 10px;
    }
    .check{
        text-align: left;
        padding-left: 50px;
        margin-top: 20px;
    }
    .but{
        width: 300px;
        height: 33px;
        margin-top: 20px;
        background-color: #0D6EFD;
        border: none;
        border-radius: 5px;
        color: white;
        cursor: pointer;
    }


</style>