<template>
  <div>
    <li v-bind="nameProperty">nama: {{ nama }}</li>
    <p>-------------------------------------------</p>
    <li v-show="show">kelas: {{ kelas }}</li>
    <p>-------------------------------------------</p>
    <li>umur: {{ umur }}</li>
    <p>-------------------------------------------</p>
    <button :disabled="innactive" @click="numberCounter(); changeColor()">
      Donat ada : {{ count }}
    </button>
    <p>-------------------------------------------</p>
    <div v-if="count % 2 === 1">
      ganjil
    </div>
    <div v-else>
      genap
    </div>
    <p>-------------------------------------------</p>
    <input :type="inputType" v-model="inputValue" placeholder="coba ketik" />
    <p>yang diketik: {{ inputValue }}</p>
    <p>-------------------------------------------</p>
    <button @click="resetCount">Reset donat</button>
    <p>-------------------------------------------</p>
    <ul>
      <li v-for="(item, index) in items" :key="index">
        {{ item }}
      </li>
    </ul>
    <p>-------------------------------------------</p>
    <div>
      <input v-model.trim="trimmedValue" placeholder="Trimmed input" />
      <p>Trimmed Value: {{ trimmedValue }}</p>
    </div>
    <p>-------------------------------------------</p>
    <div v-if="items.length === 0">
      <p>gaada item di list.</p>
    </div>
    <div v-else>
      <p>Total item di list: {{ items.length }}</p>
    </div>
    <p>-------------------------------------------</p>
    <button @click="removeAllItems">Hapus semua Item</button>
    <p>-------------------------------------------</p>
    <div>
      <p v-if="isStudent">Ini arpan.</p>
      <p v-else>Ini bukan arpan.</p>
    </div>
    <p>-------------------------------------------</p>
    <button @click="toggleStudentStatus">Rubah status</button>
    <p>-------------------------------------------</p>
    <input :value="computedValue" readonly />
    <p>-------------------------------------------</p>
    <div>
      <select v-model="selectedItem">
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
      </select>
      <p>Item terpilih: {{ selectedItem }}</p>
    </div>
    <p>-------------------------------------------</p>
    <div>
      <input type="checkbox" v-model="isChecked" />
      <p>Checkbox {{ isChecked ? 'di check' : 'tidak di check' }}</p>
    </div>
    <p>-------------------------------------------</p>
    <div>
      <input type="radio" value="radio1" v-model="selectedRadio" />
      <input type="radio" value="radio2" v-model="selectedRadio" />
      <p>Radio terpilih: {{ selectedRadio }}</p>
    </div>
    <p>-------------------------------------------</p>
    <div>
      <p>{{ reversedValue }}</p>
    </div>
    <p>-------------------------------------------</p>
    <div>
      <button @click="addToItems">tambah item</button>
    </div>
    <p>-------------------------------------------</p>
    <div>
      <p>{{ formattedItems }}</p>
    </div>
    <p>-------------------------------------------</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      nama: 'Arpan',
      kelas: 11,
      umur: 16,
      innactive: false,
      show: true,
      count: 1,
      isActive: false,
      nameProperty: {
        class: 'color',
        id: '1',
      },
      inputValue: '',
      items: ['Item 1', 'Item 2', 'Item 3'],
      trimmedValue: '',
      isStudent: true,
      computedValue: 'Rawr',
      selectedItem: 'option1',
      isChecked: false,
      selectedRadio: '',
      dynamicItems: [],
      colorClass: 'color',
      num: 0,
    };
  },
  methods: {
    numberCounter() {
      alert('ini donat ke ' + this.count);
      this.count++;
    },
    resetCount() {
      this.count = 1;
    },
    removeAllItems() {
      this.items = [];
    },
    toggleStudentStatus() {
      this.isStudent = !this.isStudent;
    },
    addToItems() {
      this.num = this.items.length + 1;
      this.items.push('Item ' + this.num);
      this.num++;
    },
  },
  computed: {
    computedValueLength() {
      return this.computedValue.length;
    },
    reversedValue() {
      return this.inputValue.split('').reverse().join('');
    },
    formattedItems() {
      return this.items.join(', ');
    },
    inputType() {
      return this.isChecked ? 'text' : 'password';
    },
  }
};
</script>

<style>
.color {
  color: #ff7e7e;
}
.color-alt {
  color: #7eff7e;
}
</style>
