<!-- @format -->

<template>
  <p>---------------templating---------------</p>
  {{ nama }}
  {{ number }}
  <div v-html="kelas"></div>
  <p>---------------data binding---------------</p>
  <button :disabled="nonaktif">button</button>
  <h1 v-bind="property">Fin</h1>
  <input :type="typeInput" />

  <p>---------------data binding---------------</p>
  {{ count == 0 ? count + 1 : count + 2 }}

  <p>---------------v-if---------------</p>
  <button v-if="show">submit</button>
  <button v-show="show">submit</button>
  <div v-if="count == 1">number 1</div>
  <div v-if="count == 2">number 2</div>
  <div v-if="count == 3">lebih dari 2</div>
  <p>---------------computed dan methods---------------</p>
  <p>
    <button @click="counterNumber">methods {{ counterButton }}</button>
  </p>
  <p>
  <button @click="countComputed">Computed{{ numberComputed }}</button>
  </p>
  <input type="typeInput" />
  <button @click="showPassword">Show Password</button>
  <p>---------------class dan style---------------</p>
  <ul>
<li class="fs" :class="{active:isActive,
                        fs2: isActive}" >test</li>
</ul>

<button @click="ubahWarna">ubah warna</button>

<p>---------------list rendering---------------</p>
<ul>
  <li v-for="(item,index) in daftarKelas">{{index+1}}.{{item}}</li>  

</ul>
<p>--------------v-model---------------</p>
<input type="text" v-model="inputkelas">
{{ inputkelas }}

</template>

<script>
export default {
  data() {
    return {
      inputkelas: '',
      daftarKelas:['PPLG 2','PPLG 4','PPLG 6'],

      counterButton: 0,
      numberComputed: 0,
      show: true,
      count: 1,
      nama: "Alfin",
      number: 14,
      kelas: "<h1>PLLG XI-4</h1>",
      nonaktif: true,
      property: {
        id: 1,
        class: "color",
      },
      typeInput: "password",
      isActive:true
    };
  },
  methods: {
    counterNumber() {
      this.counterButton += 1;
    },
    showPassword(){
      if (this.counterButton =='password'){
      this.typeInput = 'text';
      }else{
        this.typeInput = 'password';
      }
    },
    ubahWarna(){
      if (this.isActive){
        this.isActive = false;
      }else{
        this.isActive = true;
      }
    }
  },
  computed: {
    countComputed() {
      this.numberComputed +=6;
    },
  },
};
</script>
<style>
.color {
  color: red;
}
.fs2{
  font-size: 40px;
}
.active{
  color: aqua;
}
</style>