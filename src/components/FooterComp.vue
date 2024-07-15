<template>
	<footer
		id="contact"
		aria-labelledby="contact-heading"
		class="mt-10 mb-auto bg-[#2b3d4f]"
	>
		<div
			class="flex flex-col justify-center py-14 text-center text-white"
			data-aos="fade-down"
		>
			<router-link
				to="/contact"
				class="px-6 py-3 bg-orange-500 inline-block w-auto mx-auto my-2 text-lg rounded hover:bg-orange-600 transition-colors duration-300 ease-in-out"
			>
				Email Jesse
			</router-link>
		</div>
	</footer>
</template>
<script setup>
import { onMounted } from 'vue'
import AOS from 'aos'
import 'aos/dist/aos.css'

onMounted(() => {
	AOS.init({
		duration: 3000,
	})
})
</script>
