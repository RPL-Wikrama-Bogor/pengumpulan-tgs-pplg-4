<template>
  <p>---------------template----------------</p>
  {{ nama }}
  {{ number }}
  <div v-html="kelas"></div>
  <p>--------------data banding-------------</p>
  <button :disabled="nonaktif">button</button>
  <h1 v-bind="property">Frrrs</h1>
  <input :type="typeInput">
  <p>-------------data binding-------------</p>
  {{ count == 0 ? count + 1 : count + 2 }}
  <p>-------------v-if-----------</p>
  <button v-if="show">submit</button>
  <button v-show="show">submit</button>

  <div v-if="count==1">
  number 1
  </div>
  <div v-else-if="count==2">
    number 2
  </div>
  <div v-else>
    lebih dari 2
  </div> 
<p>------computed dan method</p>
<input :type="typeInput">
<button @click="showPassword">showPassword</button>
<!--<button @click="counterNumber">{{ counterButton }}</button>
<button @click="countComputed" >{{ numberComputed }}</button>-->

<p>-------class dan style------</p>
   <ul>
    <li class="fs" :class="{
      active:isActive,
      fs40px:isActive}">test</li>
   </ul>
   <button @click="ubahWarna">ubahWarna</button>
   <p>----list rendering---</p>
   <ul>
    <li v-for="(item,index) in daftarKelas">{{ index+1 }} {{ item }}</li>
    </ul>
    <p>-----v-model</p>
    <input type="text" v-model="InputKelas">
    {{ InputKelas }}
</template>

<script>
export default{
  data(){
    return {
      counterButton: 0,
      numberComputed: 0,
      show: false,
      count: 2,
      nama: 'Frieska',
      number: 8,
      kelas: '<h1> kelas 11 </h1',
      nonaktif:false,
      property: {
        id:1,
        class: 'color'
      },
      InputKelas:'',
      daftarKelas:['RPL 1','RPL 2','RPL 3'],
      typeInput: 'password',
      isActive:true
    }
  },
  methods:{
    counterNumber(){
      this.counterButton += 1;
    },
    showPassword(){
      if (this.typeInput == 'password'){
        this.typeInput = 'text';
      } else {
        this.typeInput = 'password'
      }
    },
    ubahWarna(){
      if(this.isActive){
      this.isActive = false;
      }else {
        this.isActive = true;
      }
    }
  },
  computed:{
    countComputed(){
      this.numberComputed += 6;
    }
  }
}
</script>

<style>
.color {
  color: blue;
}
.fs40px{
  font-size: 40px;
}
.active {
  color:brown
}
</style>
