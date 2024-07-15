<script setup>
import { RouterView } from 'vue-router'
import HeaderComp from './components/HeaderComp.vue'
import footerComp from './components/FooterComp.vue'
</script>

<template>
	<div class="flex flex-col gap-4 min-h-screen">
		<HeaderComp />
		<RouterView class="inner-wrapper" />
		<footerComp class="mt-auto" />
	</div>
</template>

<style scoped></style>
