<template>
	<div
		data-aos="fade-up"
		data-aos-duration="3000"
		class="min-h-screen bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 p-4 md:p-8"
	>
		<div class="flex justify-between">
			<router-link class="btn btn-warning w-100" to="/projects"
				>Back To Projects</router-link
			>
			<a
				class="btn bg-[#2b3d4f] text-white hover:bg-[#e89e1d]"
				href="https://passwordgenerator.jessegauthier.dev/"
				target="_blank"
				>Live Version</a
			>
		</div>
		<div class="bg-[#e0ffff] block h-[1px] my-8"></div>
		<div class="max-w-4xl mx-auto">
			<h2 class="text-2xl md:text-3xl font-bold mb-4 text-center">
				Password Generator
			</h2>

			<div class="flex flex-col md:flex-row md:space-x-4">
				<img
					src="/src\assets\projects\password_generator\password_generator1.png"
					alt="Screenshot of the React Contact Book application"
					class="w-full md:w-1/2 h-auto rounded-lg mb-4 md:mb-0"
				/>
			</div>

			<p class="text-base md:text-lg my-4">
				Developed a robust password generator using pure JavaScript, featuring a
				click-to-copy functionality for user convenience. The tool ensures
				strong password creation with a user-friendly interface, enhancing
				security and usability for diverse applications.
			</p>

			<div>
				<h3 class="text-xl md:text-2xl font-semibold mb-2">App Features</h3>
				<ul class="list-disc list-inside space-y-2">
					<li>Vanilla JS - No Libraries</li>
					<li>Local Storage</li>
					<li>Tailwind</li>
					<li>Click To Copy</li>
					<li>
						The ability to toggle dark/light modes upon the press of a button
					</li>
				</ul>
			</div>
		</div>
	</div>
</template>

<script setup>
import { onMounted } from 'vue'

import AOS from 'aos'
import 'aos/dist/aos.css'

onMounted(() => {
	AOS.init({})
})
</script>
