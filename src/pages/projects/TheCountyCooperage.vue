<template>
	<div
		data-aos="fade-up"
		data-aos-duration="3000"
		class="min-h-screen bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 p-4 md:p-8 rounded-xl"
	>
		<div class="flex justify-between">
			<router-link class="btn btn-warning w-100" to="/projects"
				>Back To Projects</router-link
			>
			<a
				class="btn bg-[#2b3d4f] text-white hover:bg-[#e89e1d]"
				href="https://thecountycooperage.ca/"
				target="_blank"
				>Live Version</a
			>
		</div>
		<div class="bg-[#e0ffff] block h-[1px] my-8"></div>
		<div class="max-w-4xl mx-auto">
			<div class="flex flex-wrap flex-row-reverse justify-evenly">
				<h2
					data-aos="fade-up"
					data-aos-duration="3000"
					class="text-3xl md:text-5xl font-bold mb-4 text-center self-center"
				>
					The County Cooperage
				</h2>
				<img
					data-aos="fade-up"
					data-aos-duration="3000"
					src="/src\assets\projects\county_cooperage\thecountycooperage.png"
					alt="Screenshot of the React Contact Book application"
					class="w-[80%] md:w-1/2 lg:w-1/6 h-auto rounded-lg mb-4 md:mb-0"
				/>
			</div>

			<p class="text-base md:text-lg my-4">
				My work at The County Cooperage spanned over a year, where I managed
				their Shopify e-commerce store. During this contract, I implemented a
				custom Shopify theme built off a template. This newly created theme
				resulted in a 120% month-over-month increase in new visitors and a 330%
				increase in total sales. Additionally, I developed a store blog and
				numerous landing pages to enhance SEO rankings. This initiative
				significantly improved keyword positions, moving many from the mid-20s
				to the top 5 results.
			</p>
			<div class="flex flex-col">
				<h3 class="text-xl md:text-3xl font-semibold mb-2">Website Stack</h3>
				<div class="flex flex-wrap lg:flex-nowrap justify-evenly mt-8">
					<ul class="list-disc grid grid-cols-3 *:self-center">
						<li>Shopify</li>
						<li>Liquid</li>
						<li>PHP</li>
						<li>Tailwind</li>
						<li>JavaScript</li>
						<li>Aria Standards</li>
						<li>SEO</li>
						<li>BootStrap</li>
						<li>Klaviyo</li>
					</ul>
					<img
						class="md:max-w-[400px] bg-white p-3 rounded-xl"
						src="/src\assets\projects\county_cooperage\thecountycooperage2.png"
						alt=""
					/>
				</div>
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
