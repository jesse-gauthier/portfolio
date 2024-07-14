<template>
	<!-- Project Section -->
	<section id="projects" class="mt-10" aria-labelledby="projects_heading">
		<h2 id="projects_heading" class="text-2xl font-bold mb-4">My Projects</h2>
		<ProjectsListGallery
			title="Web Development Projects"
			titleTwo="Web Application Projects"
		/>
	</section>
</template>

<script setup>
import ProjectsListGallery from '../components/ProjectsListGallery.vue'
</script>
