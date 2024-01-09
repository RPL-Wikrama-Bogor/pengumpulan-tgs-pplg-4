<!-- @format -->

<template>
  <p>---------------templating---------------</p>
  {{ nama }}
  {{ number }}
  <div v-html="kelas"></div>
  <p>---------------data binding---------------</p>
  <button :disabled="nonaktif">button</button>
  <h1 v-bind="property">mil</h1>
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
    <button @click="countComputed">Computed{{ counterButton }}</button>
  </p>
  <input type="typeInput" />
  <button @click="showPassword">Show Password</button>

  <p>---------------class dan style---------------</p>
  <ul>
    <li :class="{
      active: isActive,
      fs40px: isActive
    }">
      text
    </li>
  </ul>
  <button @click="ubahWarna">Ubah warna</button>

  <p>---------------class dan style---------------</p>
  <ul>
    <li v-for="(item, index) in daftarKelas">
      {{ index + 1 }}. {{ item }}</li>
  </ul>
  
  <p>---------------class dan style---------------</p>
<input type="text" v-model="inputKelas">
{{ inputKelas }}
</template>

<script>
export default {
  data() {
    return {
      inputKelas: '',
      daftarKelas: ['PPLG 1', 'PPLG 2', 'PPLG 3'],
      
      counterButton: 0,
      numberComputed: 0,
      show: true,
      count: 1,
      nama: "zaenal",
      number: 6,
      kelas: "<h1>kelas 11</h1>",
      nonaktif: true,
      property: {
        id: 1,
        class: "color",
      },
      typeInput: "password",
      isActive: true
    };
  },
  methods: {
    counterNumber() {
      this.counterButton += 1;
    },
    showPassword() {
      if (this.counterButton == 'password') {
        this.typeInput = 'text';;
      } else {
        this.typeInput = 'password';
      }
    },
    ubahWarna() {
      if (this.isActive) {
        this.isActive = false;
      } else {
        this.isActive = true;
      }
    }
  },
  computed: {
    countComputed() {
      this.numberComputed += 6;
    },
  },
};
</script>
<style>
.color {
  color: rgb(206, 156, 255);
}

.fs40px {
  font-size: 40px;
}

.active {
  color: blue;
}
</style>
