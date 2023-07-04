<template>
    <body>
        <Navbar/>
        <div v-if="edity===true">
            <h1>Edit Product</h1>
            <br>
            <div class="info"></div>
            <form @submit.prevent="update(id)">
            <div >
                <input class="inputttt" type="text" :value="beli.nama_product"  @input="e => nama_product =e.target.value" required placeholder="masukkan nama barang" >
            </div>
            <div >
                <input class="inputttt" type="number" :value="beli.harga" @input="e => harga =e.target.value" placeholder="masukkan harga barang"  required>
            </div>
            <div >
                <input class="inputttt" type="file"  @input="e => gambar = e.target.files[0]">
            </div>
            <button  class="buttonn" type="submit" >Edit</button>
        </form>
        </div>
        <div v-else>
            <h1>Tambahkan Barang</h1>
        <div class="info"></div>
        <form @submit.prevent="add()">
            <div >
                <input class="inputttt" type="text"   @input="e => nama_product =e.target.value" required placeholder="masukkan nama barang" >
            </div>
            <div >
                <input class="inputttt" type="number"  v-model="harga" placeholder="masukkan harga barang"  required>
            </div>
            <div >
                <input class="inputttt" type="file"  @input="e => gambar = e.target.files[0]">
            </div>
            <button  class="buttonn" type="submit" >Tambahkan</button>
        </form>

        </div>
   
        <table class="table">
            <thead>
                <tr>
                    <th>no</th>
                    <th>Nama Product</th>
                    <th>harga</th>
                    <th>gambar</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody v-for="(data , index) in datas" :key="data.id">
                <tr>
                    <td>{{ index +1}}</td>
                    <td>{{ data.nama_product }}</td>
                    <td>{{ data.harga }}</td>
                    <td><img class="gambarpro" :src="'http://localhost:8000/images/'+data.gambar" :alt="data.nama_product"></td>
                    <td>
                        <button class="edit-admin" @click="edit(data.id)">Edit</button>
                        <button class="hapus-admin" @click="hapus(data.id)">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <Footer/>
    </body>
          
</template>

<script>

    import Navbar from '../components/Navbar.vue'
    import Footer from '../components/Footer.vue'

    import axios from 'axios'

    export default {
        name: 'AboutView',
        components:{
            Navbar,
            Footer,
        },
        data(){
            return{
                nama_product: '',
                id: '',
                harga: '',
                gambar: null,
               datas:[],
               beli:[],
               edity: false,
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
            
            },
            add(){
            let formData = new FormData()

            formData.append('nama_product',this.nama_product)
            formData.append('harga',this.harga)
            formData.append('gambar',this.gambar)

            axios.post("http://localhost:8000/api/products/add", formData,{
                headers: {'Content-Type': 'multipart/form-data'}
            })
                .then(res => {
                    document.querySelector(".info").innerHTML = `
                    <div class="alert alert-success" role="alert">
                    ${res.data.message}
                    </div>`
                    this.list()
                    this.nama_product = ''
                    this.harga = ''
                    this.gambar = null
                })
        },
        update(id){
        let formData = new FormData()

        formData.append('nama_product', this.nama_product)
        formData.append('harga', this.harga)
        formData.append('gambar', this.gambar)
       

        axios.post("http://localhost:8000/api/products/edit/" + id, formData, {
          Headers: {'Content-Type': 'multipart/form-data'}
        })
          .then(res => {
            this.list()
            this.edity = false
            this.beli = []
            this.nama_product = ''
            this.harga = ''
            this.gambar = null
           
            setTimeout(()=>{
              document.querySelector('.info').innerHTML = `
              <div class="alert alert-success" role="alert">
                ${res.data.message}
              </div>`
            }, 3000)
          })
          .catch(err => console.log(err))
      },
      edit(id){
        axios.get("http://localhost:8000/api/products/detail/" + id)
        
          .then(res => {
            this.id = id
            this.beli = res.data.data
            this.edity = true
            this.nama_product = this.beli.nama_product
            this.harga = this.beli.harga
            this.gambar = this.beli.gambar
          })
      },
            hapus(id){
                axios.delete("http://localhost:8000/api/products/delete/" + id)
                .then(res => {
                    document.querySelector('info').innerHTML = `<div class="alert alert-success" role="alert">
              ${res.data.message}
            </div>`
            this.list()
                })
            }
        },
        
    }
</script>

<style>
    table,th,td{
        border: 1px solid ;
    }
    h1{
        padding: 20px;
        color: #0D6EFD;
    }
    .inputttt{
        width: 400px;
        height: 30px;
        padding-left: 10px;
        border-radius: 5px;
        border-color: #0D6EFD;
        margin-bottom: 5px;
    }
    .buttonn{
        width: 100px;
        height: 40px;
        background-color: #0D6EFD;
        color: aliceblue;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    table {
        margin-top: 20px;
    }
    .gambarpro{
        width: 100px;
        height: 50px;
    }
    .edit-admin{
        width: 50px;
        height: 40px;
        background-color: #06682f;
        border-radius: 5px;
        border: none;
        color: aliceblue;
        cursor: pointer;
        margin-right: 10px;
    }
    .hapus-admin{
        width: 50px;
        height: 40px;
        background-color: #fa0511;
        border-radius: 5px;
        border: none;
        color: aliceblue;
        cursor: pointer;
    }
</style>