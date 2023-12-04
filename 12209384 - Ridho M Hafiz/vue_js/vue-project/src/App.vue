<template>
  <p>----------------templating-------------------</p>
  {{ nama }} <br>
  <div v-html="kelas"></div> <br>

  <button :disabled="nonaktif">Button</button>
  <h1 v-bind="property">RAF</h1>
  <input :type="typeInput">
  <p>-----------data-binding----------------------</p>
  {{ count == 0 ? count + 1 : count + 2 }}

  <p>-----------v-lif----------------------</p>
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



  <p>------------------Computed And Method-------------------</p>

  <button @click="counterNumber">Methode{{ counterButton }}</button>
  <button @click="countComputed">Computed{{ numberComputed }}</button>
  <br>
  <input :type="typeInput">
  <button @click="showPassword">show password</button>

  <p>----------------------class and style--------------------------</p>
  <ul>
    <li class="fs" :class="{
      active: isActive,
      fs40px: isActive
    }">
      test
    </li>

  </ul>
  <button @click="ubahWarna">ubah warna</button>
  
<p>----------------------class and style--------------------------</p>
<ul>
  <li v-for="(item, index) in daftarkelas">{{ index + 1  }}{{ item }}</li>
</ul>
<p>----------------------class and style--------------------------</p>
<ul>
  <input type="text" v-model="inputKelas">
  {{ inputKelas }}
</ul>
</template>
<script>
export default {
  data() {
    return {
      inputKelas:'',
      daftarkelas: ['RPL1','RPL2', 'RPL3'],
      typeInput: 'password',
      counterButton: 0,
      numberComputed: 0,
      show: true,
      count: 5,
      nama: 'Rafly',
      number: '1',
      umur: '<h1>Kelas</h1>',
      nonaktif: false,
      property: {
        id: 1,
        class: 'color'
      },
      type: 'password',
      isActive: true

    }

  },
  methods: {
    counterNumber() {
      this.counterButton+= 1;
    },
    showPassword() {
      if (this.typeInput == 'password') {
        this.typeInput = 'text';
      } else {
        this.typeInput = 'password';
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
      this.numberComputed += 6;
    }

  }

}

</script>
<style>
.color {
  color: red;
}

.fs40px {
  font-size: 50px;
}

.active {
  color: blue;

}
</style>