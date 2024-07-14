<template>
	<div>
		<h2 class="text-2xl">{{ props.titleTwo }}</h2>
		<div
			class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 p-3 mt-2"
		>
			<router-link
				class="btn bg-[#2b3d4f] text-white hover:bg-[#e89e1d]"
				to="react_contact_book"
				>React Contact Book</router-link
			>
			<router-link
				class="btn bg-[#2b3d4f] text-white hover:bg-[#e89e1d]"
				to="password_generator"
				>Password Generator</router-link
			>
			<router-link
				class="btn bg-[#2b3d4f] text-white hover:bg-[#e89e1d]"
				to="pomodoro_timer"
				>Pomodoro Timer</router-link
			>
		</div>
	</div>
	<div>
		<h2 class="text-2xl">{{ props.title }}</h2>
		<!-- Gallery -->
		<div
			class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 p-3 mt-2"
		>
			<a
				class="self-start hover:scale-[1.02] shadow-md"
				target="_blank"
				v-for="project of WebProjects"
				:key="project.id"
				:href="project.link"
			>
				<img :src="project.image" :alt="project.name" />
			</a>
		</div>
	</div>
</template>

<script setup>
import { ref } from 'vue'

const props = defineProps(['title', 'titleTwo'])

// const applicationsProjects = ref([
// 	{
// 		id: 1,
// 		name: 'Contact Book - React',
// 		subtitle:
// 			'A contact manage application built using react and Google Firebase',
// 		image: './assets/misc/contact_book1.png',
// 		link: 'https://contactbook.jessegauthier.dev/',
// 		github: 'https://github.com/jesseagauthier/contact_book_react',
// 		page: '/react_contact_book',
// 	},
// 	{
// 		id: 2,
// 		name: 'Recipe Saver - Cook Book - Vue',
// 		subtitle:
// 			'A recipe saver application that allows the user to search and save recipes',
// 		image: './assets/misc/recipe_saver_mealplan.svg',
// 		link: 'https://recipe-saver.jessegauthier.dev/',
// 		github: 'https://github.com/jesseagauthier/firebase-recipe-saver',
// 	},
// 	{
// 		id: 4,
// 		name: 'password generator - Vanilla JS',
// 		subtitle:
// 			'a application that generates passwords based on the users requirements',
// 		link: 'https://passwordgenerator.jessegauthier.dev/',
// 		github: 'https://github.com/jesseagauthier/password_generator',
// 	},
// 	{
// 		id: 5,
// 		name: 'Game Review Directory - Nuxt',
// 		subtitle:
// 			'a application that fetches pre-written reviews from a custom CMS',
// 		link: 'https://gamereview.jessegauthier.dev/',
// 		github: 'https://github.com/jesseagauthier/mtm6407-review-site-frontend',
// 	}
// ])

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
