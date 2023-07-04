<template>
    <div class="kotprofile">
        <div class="kot1profile">
            <router-link to="">
                <div class="lingkaranpoto">
                    
                    <div class="divpoto">
                        <!-- <router-link to=""><img src="" alt=""> -->
                            <img class="gamprofile" src="../../assets/delete.png" alt="">
                               <div class="divedit">

                                   <router-link to=""><img class="pen" src="../../assets/pen.png" alt=""></router-link>
                                   <router-link to=""><h5 class="edith5">Edit Profile</h5></router-link>
                               </div> 

                        <!-- </router-link> -->
                        
                    </div>
                </div>
               
                <h3 class="nama">Eris Sitompul</h3>
                <h5 class="nama">a@gmail.com</h5>
            </router-link>
        </div>
        <div class="kot2profile">
            <h3 class="judulpro">Profile Saya</h3>
            <h5 class="judulpro1">Kelola Informasi profile Anda untuk megontrol,melindungi dan mengamankan akun</h5>
            
            <div class="kotakeditpro">
                    <form action="">
                        <table>
                            <tr>
                                <td class="label"><label for="">usernama</label></td>
                                <td class="tdd">eris</td>
                            </tr>
                            <tr>
                                <td class="label"><label for="">nama</label></td>
                                <td class="tdd"><input class="inputtd" type="text"></td>
                            </tr>
                            <tr>
                                <td class="label"><label for="">no.hp</label></td>
                                <td class="tdd"><input class="inputtd" type="text"></td>
                            </tr>
                            <tr>
                                <td class="label"><label for="">email</label></td>
                                <td class="tdd"><input class="inputtd" type="text"></td>
                            </tr>
                            <tr>
                                <td class="label"><label for="">nama toko</label></td>
                                <td class="tdd"><input class="inputtd" type="text"></td>
                            </tr>
                            <tr>
                                <td class="label"><label for="">jeis kelamin</label></td>
                                <td class="tdd">
                                    <input type="radio">laki-laki
                                    <input type="radio">perempuan
                                </td >
                            </tr>
                            <tr>
                                <td class="label"><label for="">tanggal lahir</label></td>
                                <td><input class="inputtd" type="date"></td>
                            </tr>
                            
                        </table>
                       
                    </form>
                <button class="submit" type="submit">Simpan</button>
            </div>

        </div>
    </div>

</template>

<script>
  export default {
    name: 'ContentPor',
  }
</script>

<style>


    .kotprofile{
        width: 80%;
        height: max-content;
        background-color: #ffffff;
        border-radius: 10px;
        margin: auto;
        display: flex;
        box-shadow: 0px 0px 2px 2px #515253;
    }
    .kot1profile{
        width: 400px;
        height: 500px;
        /* background-color: blue; */
        float: left;
        position: relative;
    }
    .kot2profile{
        width: 700px;
        height: 500px;
        /* background-color: brown; */
    
    }
    .logouser{
        width: 250px;
        margin-top: 80px;
        color: rgb(2, 2, 8);
    }
    .pen{
        width: 15px;
        /* position: absolute; */
        float: left;
        margin-left: 45px;
    }
    .editpro{
        width: 130px;
        height: 30px;
        background-color: cornflowerblue;
        position: relative;
        top: -50px;
        right: -135px;
        /* border-bottom-left-radius: 100px;
        border-bottom-right-radius: 100px; */
    }
    .bb{
        font-size: 10px;
        position: absolute;
        top: 8px;
        left: 50px;
    }
    .judulpro{
        margin-top: 30px;
        text-align: left;
    }
    .judulpro1{
        margin-top: 5px;
        text-align: left;margin-bottom: 10px;
    }
   .kotakeditpro{
    width: 600px;
    height: 400px;
    /* background-color: aqua; */
    margin-left: 50px;
   }
  .label{
    text-align: right;
    padding-right: 30px;
  }
  .inputtd{
   
    width: 300px;
    height: 30px;
    border-radius: 5px;
  }
  tr{
    margin-top: 20px;
  }
  .submit{
    background-color: #0D6EFD;
    width: 100px;
    height: 30px;
    /* margin-top: 30px; */
    border: 1px solid;
    border-radius: 5px;
    color: aliceblue;
    cursor: pointer;
    margin-top: 30px;
  }
  .lingkaranpoto{
    width: 200px;
    height: 200px;
    background-color: black;
    border-radius: 100px;
    overflow: hidden;
    margin: auto;
    margin-top: 80px;
    margin-bottom: 50px;
    box-shadow: 5px 5px 5px #161313;
  }
   .divpoto{
    width: 250px;
    height: 250px;
    background-color: crimson;
    margin: auto;
    overflow: hidden;
    
   }
  .gamprofile{
    width: 270px;
    height: 270px;
    margin-top: -30px;
    position: relative;
    margin-left: -20px;
  
  }
  .edith5{
    position: relative;
    top: 4px;
    right: 20px;

    
  }
  .koteditpen{
    width: 150px;
    height: 50px;
    background-color: chartreuse;
    position: absolute;
    top: 10px;
    right: 150px;
  }
  .nama{
    color: #746868;
  }
  .divedit{
    width: 200px;
    height: 100px;
    background-color: #515253;
    position: relative;
    top: -100px;
    opacity:0.8 ;
  }
</style>