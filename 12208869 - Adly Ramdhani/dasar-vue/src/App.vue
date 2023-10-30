<template>
  <center>
    <p>------------------Template------------------</p>
    {{ nama }}
    {{ number }}
    <div v-html="kelas"></div>
    <p>-----------------Data Biding----------------</p>
    <button :disabled="nonaktif">button</button>
    <h1 :class="Property.class">suruh siapa masuk PPLG</h1>
    <input :type="typeInput">
    <p>--------------------v-if--------------------</p>
    {{ count == 0 ? count + 1 : count + 2 }}
    <br><br>
    <button v-if="show">button</button>
    <br><br>
    <button v-show="show">button</button>

    <div v-if="count == 1">
      number 1
    </div>
    <div v-if="count == 2">
      number 2
    </div>
    <div v-else>
      lebih dari 2
    </div>
    <p>--------------------computed dan methods-----------------</p>
    <button @click="counterNumber">methods {{ counterButton }}</button>
    <br><br>
    <button @click="counterComputed">computed {{ numberComputed }}</button>
    <p>--------------------Show password--------------------</p>
    <input :type="typeInput">
    <button @click="showPassword">show password</button>
    <p>--------------------class dan style--------------------</p>
    <ul >
      <li class="fs" :class="{ active: isActive, fs40px: isActive }">text</li>
    </ul>
    <button @click="ubahWarna">ubah warna</button>
    <p>--------------------list rendering --------------------</p>
    <ul>
      <li v-for=" (item,index) in daftarkelas">{{ index+1 }}{{ item }}</li>
    </ul>
    <p>--------------------list rendering --------------------</p>
    <input type="text" v-model="inputkelas">
    {{ inputkelas }}
  </center>
</template>

<script>
export default {
  data() {
    return {
      daftarkelas: ['RPL 1','RPL 2','RPL 3'],
      counterButton: 1,
      numberComputed: 0,
      show: true,
      count: 0,
      nama: 'adly',
      number: 1,
      kelas: '<h1> kelas 11</h1>',
      nonaktif: false,
      Property: {
        id: 1,
        class: 'color'
      },
      typeInput: 'password',
      isActive: true
    };
  },
  methods: {
    counterNumber() {
      this.counterButton += 1;
    },
    showPassword() {
      if (this.typeInput == 'password') {
        this.typeInput = 'text';
      } else {
        this.typeInput = 'password';
      }
    },
    ubahWarna() {
      this.isActive = !this.isActive;
    }
  },
  computed: {
    numberComputed() {
      return this.number;
    }
  }
};
</script>

<style>
.color {
  color: red;
}
.fs40px {
  font-size: 20px;
}
.active {
  color: blue;
}
</style>

