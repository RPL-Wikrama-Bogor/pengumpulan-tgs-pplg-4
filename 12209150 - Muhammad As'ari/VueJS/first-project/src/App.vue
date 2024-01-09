<template>
  <div class="container">
    <h1 class="title">Vue.js Playground</h1>
    <div class="content" :style="{ backgroundColor: backgroundColor }">
      <p>----------Data Binding----------</p>
      <p>{{ msg }}</p>
      <p>{{ year }}</p>
      <p>{{ boolean }}</p>
      <button :disabled="nonaktif">Button</button>
      <h1 :class="property.class">Test</h1>
      <input v-model="inputValue"><br>
      <p>Input Value: {{ inputValue }}</p>
      <button @click="count++">Click me!</button><br>
      <div v-if="count === 0">No clicks yet.</div>
      <div v-else-if="count === 1">1 click has been made.</div>
      <div v-else-if="count === 3">Rahmat</div>
      <div v-else>{{ count }} clicks have been made.</div><br>
      <button @click="generateRandomValue">Generate Random Value</button>
      <p>Random value: {{ randomValue }}</p>
    </div>

    <div class="content">
      <input v-model="name" placeholder="Enter your name here" />
      <button @click="displayName">Send</button>
      <div class="greeting">{{ greetingMessage }}</div>
    </div>

    <div class="content">
      <h2>To-Do List</h2>
      <input v-model="newTask" @keyup.enter="addTask" placeholder="Add a new task">
      <ul>
        <li v-for="(task, index) in tasks" :key="index">
          <input v-if="editingIndex === index" v-model="editedTask" @keyup.enter="updateTask(index)" @blur="cancelEdit">
          <span v-else>{{ task }}</span>
          <button @click="removeTask(index)">Delete</button>
          <button @click="startEditing(index)">Edit</button>
        </li>
      </ul>
    </div>

    <div class="content">
      <button @click="startColorChange">Start Random Color</button>
      <button @click="stopColorChange">Stop</button>
      <button @click="resetBackgroundColor">Reset Color</button>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      msg: 'Hello World!',
      count: 0,
      year: 2023,
      boolean: true,
      nonaktif: false,
      name: '',
      property: {
        id: 1,
        class: 'color'
      },
      inputValue: '',
      randomValue: 0,
      newTask: "",
      tasks: [],
      editedTask: "",
      editingIndex: -1,
      greetingMessage: '',
      backgroundColor: '#f4f4f4', // Initial background color
      originalBackgroundColor: '#f4f4f4', // Store the original background color
      colorChangeInterval: null, // Interval to change background color
    };
  },
  methods: {
    generateRandomValue() {
      this.randomValue = Math.floor(Math.random() * 1000) + 1;
    },
    addTask() {
      if (this.newTask.trim() !== "") {
        this.tasks.push(this.newTask);
        this.newTask = "";
      }
    },
    removeTask(index) {
      this.tasks.splice(index, 1);
    },
    displayName() {
      if (this.name.trim() !== '') {
        alert(`Hello, ${this.name}!`);
      }
    },
    startColorChange() {
      // Start changing background color rapidly
      this.colorChangeInterval = setInterval(this.changeBackgroundColor, 100);
    },
    stopColorChange() {
      // Stop changing background color
      clearInterval(this.colorChangeInterval);
    },
    changeBackgroundColor() {
      // Generate a random background color
      const randomColor = '#' + Math.floor(Math.random() * 16777215).toString(16);
      this.backgroundColor = randomColor;
    },
    resetBackgroundColor() {
      // Reset the background color to the original value
      this.backgroundColor = this.originalBackgroundColor;
    },
    startEditing(index) {
      this.editingIndex = index;
      this.editedTask = this.tasks[index];
    },
    updateTask(index) {
      if (this.editedTask.trim() !== "") {
        this.tasks[index] = this.editedTask;
      }
      this.cancelEdit();
    },
    cancelEdit() {
      this.editingIndex = -1;
      this.editedTask = "";
    },
  },
  created() {
    // Store the original background color when the component is created
    this.originalBackgroundColor = this.backgroundColor;
  },
};
</script>

<style>
.container {
  text-align: center;
}

.title {
  font-size: 24px;
  margin-bottom: 20px;
}

.content {
  margin: 20px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button {
  padding: 5px 10px;
  background-color: #007BFF;
  color: white;
  border: none;
  cursor: pointer;
  margin: 5px;
}

.greeting {
  font-weight: bold;
  margin: 10px;
}
</style>
