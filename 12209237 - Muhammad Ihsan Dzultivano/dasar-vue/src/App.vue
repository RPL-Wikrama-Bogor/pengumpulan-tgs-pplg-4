<template>
  <p>----------------templating---------------</p>
  {{ nama }}
  {{ nis }}
  <div v-html="rombel"></div>

  <p>----------------data dinding---------------</p>
  <h1 v-bind="property">Login/Sign In</h1>
  <input type="password">
  <button :disabled="nonaktif">Submit</button>

  <p>----------------data dinding---------------</p>
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

</template>

<script>
export default{
  data(){
    return{
      typeInput:'password',
      counterButton: 0,
      numberComputed: 0,
      show: false,
      count: 1,
      nama:'Ihsan',
      nis:'12209237',
      rombel:'<h1>PPLG XI-4</h1>',
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