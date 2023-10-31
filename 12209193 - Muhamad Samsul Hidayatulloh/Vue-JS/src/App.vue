<template>
  <p>-----------------------Templating-------------------------</p>
  {{ nama }}
  {{ number }}
  <div v-html="kelas"></div>
  <p>-----------------------Data Binding-----------------------</p>
  <button :disabled="nonaktif">Button</button>
<h1 v-bind="property">Team Kiii</h1>
<input :typeInput="text">
<!--{{ count + 2 }}-->

  <p>----------------------------V-if---------------------------</p>
<button v-if="show">submit</button>

<div v-if="count == 1">number 1</div>
<div v-else-if="count == 2">number 2</div>
<div v-else>lebih 3</div>

<p>-----------------------conputed dan method-----------------------</p>
<button @click="counterNumber">{{ counterButton }}</button>
<button @click="countComputed"> Computed {{ numberComputed }} </button>
<input :type="typeInput">
<button @click="showPassword">show password</button>
<p>-----------------------class dan style-----------------------</p>
<ul>
  <li class="fs40px" :class="{
    active: isActive,
    fs40px: isActive}">
    Wota zombie
  </li>
</ul>
<button @click="ubahWarna">ubah warna</button>

<p>-----------------------list randering-----------------------</p>
<ul>
  <li v-for="(item, index) in listTeam">{{ item }}</li>
</ul>
<p>-----------------------v-model-----------------------</p>
<input type="text" v-model="inputKelas">
{{ inputKelas }}
</template>

<script>
export default {
  data() {
    return { 
      inputKelas:'',
      listTeam:['Team J', 'Team Kiii', 'Team T'],
      counterButton:0,
      numberCoputed:0,
      count:1,
      nama: 'Zee',
      number: 2,
      kelas: '<h1>JKT 48</h1>',
      nonaktif:true,
      property:{
        id:1,
        class:'color'
      },
      typeInput:'password',
      show:true
    }
  },

  methods: {
    counterNumber() {
      this.counterButton += 1;
    },
    showPassword() {
      if (this.typeInput == 'password') {
        this.typeInput = 'text'
      } else {
        this.typeInput = 'password'
      }
    },
    ubahWarna() {
      if (this.isActive == true) {
        this.isActive = false;
      }
      else {
        this.isActive = true;
      }
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
.color{
  color:red;
}
*{
  text-align: center;
}

.fs40px{
  font-size:20px
}

.active{
  color : rgb(140, 4, 136);
}
</style>
