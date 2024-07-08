<script setup>
import { RouterView } from 'vue-router'
import HeaderComp from './components/HeaderComp.vue'
import footerComp from './components/FooterComp.vue'
</script>

<template>
  <HeaderComp />
  <RouterView class="inner-wrapper" />
  <footerComp />
</template>

<style scoped></style>
