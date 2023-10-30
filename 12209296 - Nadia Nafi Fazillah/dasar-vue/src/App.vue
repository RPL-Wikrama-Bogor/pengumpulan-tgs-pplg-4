<template>
  <p>----------templating---------------</p>
{{nama}}
{{number}}
<div v-html="kelas"></div>
<p>--------------data dinding----------</p>
<button :disabled="nonaktif">button</button>
<h1  v-bind="property" >l0lypops</h1>
<input :type="typeInput">

<p>----------data binbing--------</p>
{{   count  == 0 ? count +  1 : count + 2 }}

<p>---------------v-if----------</p>
<button v-if="show">submit</button>
<button v-show="show">submit</button>
<div v-if="count == 1">number 1</div>
<div v-else-if="count == 2">number 2</div>
<div v-else> lebih dari 2 </div>

<p>-----------------computed & method---------------</p>
<button @click="counterNumber">method {{ counterButton }}</button>
<button @click="countComputed">Computed {{ numberComputed }}</button>

<!-- data dinding -->
<br> <br>
<input :type="typeInput">
<button @click="showPassword">show password</button>
<p>-------------------class & style-----------------</p>
<ul>
  <li :class="{active: isActive, fs40px: isActive}">
    bismillah pkl gelombang 1
  </li>
</ul>
<button @click="ubahWarna">ubah warna</button>

<p>--------------list rendering-----------</p>
<ul>
  <li v-for="(item,index) in daftarkelas">{{index+1}} {{ item }}</li>
</ul>

<p>-------------------- v-model ---------------</p>


</template>

<script>
export default{
  data() {
    return{
      daftarkelas :['RPL 1', 'RPL 2', 'RPL 3'],
      counterButton: 0,
      numberComputed: 0,
      show : false,
      count : 3,
      nama : "nadia",
      number : 7,
      kelas : '<h1>kelas 11</h1>',
      nonaktif  : false,
      property : {
        id : 1,
        class : 'color'
    },
    typeInput : 'password',
    isActive : true
  }
},
methods : {
   counterNumber(){
    this.counterButton += 1 ;
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
   color: #CE5A67 ;
   }
   .fs40px{
  font-size: 80px;
}

.active{
 color: #C70039;
}
</style>