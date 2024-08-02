<template>
	<!-- Project Section -->
	<section
		data-aos="fade-up"
		data-aos-duration="1000"
		id="projects"
		class="mt-10"
		aria-labelledby="projects_heading"
	>
		<h2 id="projects_heading" class="text-3xl font-bold mb-4">My Projects</h2>
		<ProjectsListGallery
			title="Web Development Projects"
			titleTwo="Web Application Projects"
		/>
	</section>
</template>

<script setup>
import ProjectsListGallery from '../components/ProjectsListGallery.vue'
import { onMounted } from 'vue'

import AOS from 'aos'
import 'aos/dist/aos.css'

onMounted(() => {
	AOS.init({})
})

import { useHead } from '@unhead/vue'

useHead({
	title: 'Projects - Jesse Gauthier - Web Developer',
	meta: [
		{
			name: 'Jesse Gauthier - Web Developer',
			content:
				'Jesse Gauthier - Front End Web Developer - Ottawa Ontario Canada',
		},
	],
})
</script>
