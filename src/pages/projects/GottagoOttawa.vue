<template>
	<div
		data-aos="fade-up"
		class="min-h-screen bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 p-4 md:p-8 rounded-xl"
	>
		<div class="flex justify-between">
			<router-link class="btn btn-warning w-100" to="/projects"
				>Back To Projects</router-link
			>
			<a
				class="btn bg-[#2b3d4f] text-white hover:bg-[#e89e1d]"
				href="https://thewebmasters.online/"
				target="_blank"
				>Live Version</a
			>
		</div>
		<div class="bg-[#e0ffff] block h-[1px] my-8"></div>
		<div class="max-w-4xl mx-auto">
			<div class="flex flex-wrap flex-row-reverse justify-evenly">
				<h2
					data-aos="fade-up"
					class="text-3xl md:text-5xl font-bold mb-4 text-center self-center"
				>
					Gotta Go Ottawa
				</h2>
				<img
					data-aos="fade-up"
					src="/src\assets\projects\gotta_go\logo.svg"
					alt="Screenshot of the React Contact Book application"
					class="w-[80%] md:w-1/2 lg:w-1/6 h-auto rounded-lg mb-4 md:mb-0"
				/>
			</div>

			<p class="text-base md:text-lg my-4">
				Gotta Go Ottawa's new website was my capstone project in the final
				semester of my Interactive Media Program. As the team second in a group
				of five, I played a key role in revamping the information architecture
				and redesigning the entire website. This project is ongoing and is
				expected to fully launch in fall 2024.
			</p>
			<h3 class="text-xl md:text-3xl font-semibold mb-2">Website Features</h3>
			<div class="flex flex-wrap justify-evenly mt-8">
				<ul class="list-disc list-inside space-y-2">
					<li>WordPress</li>
					<li>Elementor</li>
					<li>PHP</li>
					<li>Tailwind</li>
					<li>Contact Form 7</li>
					<li>Aria Standards</li>
				</ul>
				<img
					class="md:max-w-[400px] bg-white p-3 rounded-xl"
					src="/src\assets\projects\gotta_go\findtoilets.svg"
					alt=""
				/>
			</div>
		</div>
	</div>
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
