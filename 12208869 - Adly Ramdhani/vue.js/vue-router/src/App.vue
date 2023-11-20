<template>
  <ul>
    <li>
      <router-link :to="{name: 'Home'}">Home</router-link>
      <br><br>
      <router-link :to="{name: 'About'}">About</router-link>
    </li>
  </ul>
  <router-view> </router-view>
</template>