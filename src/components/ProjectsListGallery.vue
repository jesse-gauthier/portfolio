<template>
	<div>
		<p class="md:w-[60%] text-justify">
			Welcome to My Portfolio! Below, you'll find a collection of the projects I
			am most proud of. Each project showcases a variety of skills, ranging from
			web design to development and everything in between.
		</p>
		<div
			class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 p-3 mt-2"
		>
			<router-link
				data-aos="fade-up"
				data-aos-duration="3000"
				class="btn bg-[#2b3d4f] text-white hover:bg-[#e89e1d]"
				to="react_contact_book"
				>React Contact Book</router-link
			>
			<router-link
				data-aos="fade-up"
				data-aos-duration="3000"
				class="btn bg-[#2b3d4f] text-white hover:bg-[#e89e1d]"
				to="password_generator"
				>Password Generator</router-link
			>
			<router-link
				data-aos="fade-up"
				data-aos-duration="3000"
				class="btn bg-[#2b3d4f] text-white hover:bg-[#e89e1d]"
				to="pomodoro_timer"
				>Pomodoro Timer</router-link
			>
			<router-link
				data-aos="fade-up"
				data-aos-duration="3000"
				class="btn bg-[#2b3d4f] text-white hover:bg-[#e89e1d]"
				to="/gotta_go_ottawa"
				>Gotta Go Ottawa</router-link
			>
			<router-link
				class="btn bg-[#2b3d4f] text-white hover:bg-[#e89e1d]"
				to="/the_county_cooperage"
				data-aos="fade-up"
				data-aos-duration="3000"
				>The County Cooperage</router-link
			>
			<a
				class="btn bg-[#2b3d4f] text-white hover:bg-[#e89e1d]"
				href="https://github.com/jesse-gauthier"
				data-aos="fade-up"
				data-aos-duration="3000"
				referrerpolicy=""
				target="_blank"
				>Check Github For Active Projects</a
			>
		</div>
	</div>
</template>

<script setup>
import { ref } from 'vue'
import { onMounted } from 'vue'

import AOS from 'aos'
import 'aos/dist/aos.css'

onMounted(() => {
	AOS.init({})
})
const props = defineProps(['title', 'titleTwo'])

const WebProjects = ref([
	{
		id: 1,
		name: 'GottaGo',
		image: './assets/misc/1.png',
		link: 'https://dev-gottago.pantheonsite.io/',
	},
	{
		id: 2,
		name: 'UpMedia',
		image: './assets/misc/2.png',
		link: 'https://upmedia.video/',
	},
	{
		id: 3,
		name: 'The County Cooperage',
		image: './assets/misc/3.png',
		link: 'https://thecountycooperage.ca/',
	},
	{
		id: 4,
		name: 'W Flowers',
		image: './assets/misc/4.png',
		link: 'https://www.figma.com/design/YlbPOHAJ74GZAgk56PK5p2/Portfolio-Pieces?node-id=112-26&t=bvUxLcSLjbUOcs3I-1',
	},
	{
		id: 5,
		name: 'Real Adulting',
		image: './assets/misc/5.png',
		link: 'https://www.figma.com/design/YlbPOHAJ74GZAgk56PK5p2/Portfolio-Pieces?node-id=0-1&t=bvUxLcSLjbUOcs3I-1',
	},
])
</script>
