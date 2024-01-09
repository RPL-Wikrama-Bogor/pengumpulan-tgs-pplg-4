<template>
  <p>----------------templating---------------</p>
  {{ nama }}
  {{ nis }}
  <div v-html="rombel"></div>

  <p>----------------data binding---------------</p>
  <h1 v-bind="property">Login/Sign In</h1>
  <input type="password">
  <button :disabled="nonaktif">Submit</button>

  <p>----------------data binding---------------</p>
  {{ count == 0 ? count + 1 : count + 2}}

  <p>----------------v-if---------------</p>
  <button v-if="show">Submit</button>
  <button v-show="show">Submit</button>
  <div v-if="count == 1">
    number 1
  </div>
  <div v-else-if="count == 2">
    number 2
  </div>
  <div v-else>
    lebih dari 2
  </div>

  <p>----------------computed dan method---------------</p>
  <button @click="counterNumber">Methods {{ counterButton }} </button>
  <button @click="countComputed">Computed {{ numberComputed }} </button>
  <br>
  <br>
  <input :type="typeInput">
  <button @click="showPassword">Show Password</button>

  <p>----------------class dan style---------------</p>
  <ul>
    <li :class="{
      active: isActive, 
      fs40px: isActive}">
      test
    </li>
  </ul>
  <button @click="ubahWarna">Ubah Warna</button>

  <p>----------------list rendering---------------</p>
  <ul>
    <li v-for="(item,index) in daftarRombel">{{ index+1 }} {{ item }}</li>
  </ul>

  <p>----------------model---------------</p>
  <input type="text" v-model="inputRombel"> {{ inputRombel }}

  <p>----------------tabel---------------</p>
    <input type="text" placeholder="masukkan nama" v-model="formDataRombel.nama">
    <br>
    <input type="text" placeholder="masukkan rombel" v-model="formDataRombel.rombel">
    <br>
    <button @click="tambahRombel">Tambah Siswa</button>
    <table>
      <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Rombel</th>
      </tr>
      <tr v-for="(murid,index) in dataRombel" :key="index">
        <td>{{ index + 1 }}</td>
        <td>{{ murid.nama }}</td>
        <td>{{ murid.rombel }}</td>
        <td><button @click="hapusDataRombel(murid.id)">Hapus</button></td>
      </tr>
    </table>

</template>

<script>
export default{
  data(){
    return{
      inputRombel:'',
      daftarRombel:['PPLG 1', 'PPLG 2', 'PPLG 3'],
      typeInput:'password',
      counterButton: 0,
      numberComputed: 0,
      show: false,
      count: 1,
      nama:'Ardan',
      nis:'12209147',
      rombel:'<h1>PPLG XI-4</h1>',
      nonaktif: false,
      property: {
        id: 1,
        class: 'color'
      },
      type: 'password',
      isActive: true,

      dataRombel: [{
        nama: 'radit',
        rombel: '10'
      }],
      formDataRombel: {
        nama:'',
        rombel:''
      }
    }
  },
  methods: {
    counterNumber() {
      this.counterButton += 1;
    },
    showPassword() {
      if(this.typeInput == 'password') {
        this.typeInput ='text';
      }else {
        this.typeInput = 'password';
      }
    },
    ubahWarna() {
      if(this.isActive) {
        this.isActive = false;
      }else {
        this.isActive = true;
      }
    },
    tambahRombel() {
      this.formDataRombel.id = Date.now();

      this.dataRombel.push(this.formDataRombel);
      this.formDataRombel = {
        nama:'',
        rombel:''
      }
    },
    hapusDataRombel(id) {
      this.dataRombel = this.dataRombel.filter(item => item.id != id);
    }
  },
  computed: {
    countComputed() {
      this.numberComputed += 1;
    }
  }
}

</script>

<style>
  .color {
    color: red;
  }

  .fs40px {
    font-size: 40px;
  }

  .active {
    color: blue;
  }
</style>