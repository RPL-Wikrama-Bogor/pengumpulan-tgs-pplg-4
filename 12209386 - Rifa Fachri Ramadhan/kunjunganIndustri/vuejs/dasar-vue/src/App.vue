<template>   
  <p>-------------templating---------------</p>
  <br>
  <p> {{ nama }}</p>
  <br>
  <p>{{ number }}</p>
  <br>
  <div v-html ="kelas"></div>
  <br>
  <p>-------------data binding---------------</p>
  <br>

  <button :disabled ='nonaktif'>button</button>
  <br>
  <!-- jika nilai nonaktif:true maka tombol tidak bisa ditekan -->
  <!-- dan ini termasuk handling -->
  <h1 v-bind="property">Ri </h1>
  <br>
  <input :type="typeInput"> <br>
  <!-- mengubah type sesuai dengan yang ada di data() -->
  <p>-------------data binding---------------</p>
  <br>
  <!-- {{ count + 1 }} -->
  {{ count == 0 ? count + 1 : count + 2 }}
  <br>
  <p>-------------v-if---------------</p>
  <br>
  <button v-if="show">submit</button> <br>
  <!-- jika show:true maka akan diperlihatkan button jika false maka button tidak akan diperlihatkan -->
  <button v-show="show">tombol sholat</button> 
  <br>

  <div v-if="count == 1">
  number 1
  </div>
  <div v-else-if="count == 2">
  number 2
  </div>
  <div v-else="count">
  lebih dari 2
  </div>

  <br>
  <p>-------------computed dan method---------------</p>
  <br>
  <button @click="counterNumber">{{  counterButton }}</button> <br>

  <!-- @click="counterNumber" akan menjalankan function methods -->
  <button @click="countComputed">Computed {{ numberComputed }}</button> <br>
  <div class="studyCase">
    <input :type="typeInput">
    <button @click="showPassword">Tunjukan password</button></div> <br>

  <br>
  <p>-------------class dan style---------------</p>
  <br>
  <ul>
    <li class="fs" :class="{active:isActive, fs40px:isActive}">Kapan!!</li>
  </ul> <br>
  <button @click="ubahWarna">Ubah warna</button>
  <br>
  <p>-------------list rendering---------------</p>
  <br>
  <ul>
    <!-- <li v-for="item in daftarKelas">{{ item }}</li> untuk memanggil array -->
    <!-- <li v-for="(item, index) in daftarKelas">{{ index+1 }}   {{ item }}</li> -->
     <!--memanggil array beserta urutannya +1 untuk membuat itungannya dari angka 1 bukan 0  -->
    <li v-for="(item, index) in daftarKelas">{{ index }}   {{ item }}</li> 
  </ul>
  <br>
  <p>-------------v-Model---------------</p>
  <br>
  <div>  
    <input type="text" v-model="Inputkelas"> {{ Inputkelas }}
</div>


  <br>
  <br>
</template>

<script>
export default{
  
  data(){
// wajib harus data()
    return{
      Inputkelas:'',
      daftarKelas:['PPLG1', 'PPLG2', 'PPLG3'],
      counterButton:0,
      numberComputed:0,
      show:true,
      count:1,
      nama:'Rifa',
      number: 2,
      kelas: '<h1> Kelas 11</h1>',
      nonaktif: true,
      property: {
        id: 1,
        class: 'color'
      },
      typeInput: 'password',
      isActive: true,
    }
  },
  methods:{
    counterNumber(){
      this.counterButton +=1;
    },
    showPassword(){
      if(this.typeInput == 'password'){
        this.typeInput = 'text';
      } else{
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
  computed:{
    countComputed(){
      this.numberComputed +=6;
    }
  }
}
</script>


<style>
.color{
  color: red;
}
.fs{
  font-size: 20px;
}
.active {
  color: blue;
}
.fs40px{
  font-size: 40px;
}
</style>


<!-- tugas to do list -->