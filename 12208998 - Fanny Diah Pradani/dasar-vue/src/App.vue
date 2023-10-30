<template>
  <p>--------------------templating--------------------</p>
  {{ nama }}
  {{ number }}
  <!-- kelas adalah nama property -->
  <div v-html="kelas"></div>
  <p>-------------------data binding------------------</p>
  <button :disabled="nonaktif">button </button>
  <!-- yang diawali oleh v- itu adalah directive (data langsung berubah jika data properti juga berubah) -->
  <h3 v-bind="property">fan</h3>
  <input :type="type">
  <p>-------------------data binding------------------</p>
  {{ count == 0 ? count + 1 : count + 2 }}
  <p>-----------------------v-if----------------------</p>
  <button v-if="show">submit</button>
  <button v-show="show">sumbit</button>
  
  <div v-if="count == 1">
    number 1
  </div>
  <div v-else-if="count == 2">
    number 2
  </div>
  <div v-else="count">
    number 3
  </div>
  <p>-----------------computed & method---------------</p>
  <button @click="counterNumber">method {{ counterButton }}</button>
  <button @click="countComputed">Computed {{ numberComputed }}</button>
  
  <!-- data binding -->
  <br> <br>
  <input :type="typeInput">
  <button @click="showPassword">show password</button>
  <p>-------------------class & style-----------------</p>
  <ul>
    <li :class="{active: isActive, fs20px: isActive}">
      test
    </li>
  </ul>
  <button @click="ubahWarna">ubah warna</button>
  <p>-------------------list rending-----------------</p>
  <ul>
    <li v-for="(item, index) in daftarRombel">{{index + 1}} {{ item }}</li>
  </ul>
  <p>-------------------v model-----------------</p>
  <input type="text" v-model="rombel">{{ rombel }}
  </template>
  
  <script>
  export default{
    data(){
      return {
        rombel:'',
        daftarRombel: ['PPLG 1', 'PPLG 2', 'PPLG 3'],
        typeInput: 'password',
        counterButton: 0,
        numberComputed: 0,
        show: true,
        count: 7,
        nama: 'fanny', 
        number: 1,
        kelas: '<h3>kelas 11</h3>',
        nonaktif: true,
        property: {
          id : 1,
          class: 'color',
        },
        typeInput: 'password',
        isActive: true
      }
    },
    methods: {
      counterNumber(){
        this.counterButton += 1;
      },
      showPassword(){
        if(this.typeInput=='password'){
          this.typeInput = 'text';
        } else {
          this.typeInput = 'password';
        }
      },
  
      ubahWarna(){
      if(this.isActive){
        this.isActive = false;
      } else {
        this.isActive = true;
      }
      }
      
    },
  
    
    computed: {
      countComputed(){
        this.numberComputed += 6;
      }
    }
  }
  </script>
  
  <style>
  .color{
    color: #C3ACD0;
  }
  
  .fs20px{
    font-size: 20px;
  }
  
  .active{
   color: #BEADFA;
  }
  </style>