<script setup>
import { RouterView } from 'vue-router'
import HeaderComp from './components/HeaderComp.vue'
import footerComp from './components/FooterComp.vue'
</script>

<template>
	<div class="">
		<HeaderComp />
		<RouterView class="inner-wrapper min-h-[200vh]" />
		<footerComp class="mb-auto" />
	</div>
</template>

<style scoped></style>
