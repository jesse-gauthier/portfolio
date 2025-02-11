<template>
	<div
		data-aos="fade-up"
		class="min-h-screen bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 p-4 md:p-8"
	>
		<div class="flex justify-between">
			<router-link class="btn btn-warning w-100" to="/projects"
				>Back To Projects</router-link
			>
			<a
				class="btn bg-[#2b3d4f] text-white hover:bg-[#e89e1d]"
				href="https://pokemon.jessegauthier.dev/"
				target="_blank"
				@click="fireGAEvent"
				>Live Version</a
			>
		</div>
		<div class="bg-[#e0ffff] block h-[1px] my-8"></div>
		<div class="max-w-4xl mx-auto">
			<h2 class="text-2xl md:text-3xl font-bold mb-4 text-center">
				Pokemon Catcher
			</h2>

			<div class="flex flex-col md:flex-row md:space-x-4">
				<img
					src="/src/assets/projects/pokemon/pokemoncard.png"
					alt="Screenshot of the Pokemon Application"
					class="w-full md:w-1/2 h-auto rounded-lg mb-4 md:mb-0"
				/>
				<img
					src="/src/assets/projects/pokemon/caughtpokemon.png"
					alt="Screenshot of the Pokemon Application"
					class="w-full md:w-1/2 h-auto rounded-lg mb-4 md:mb-0"
				/>
			</div>
			<p class="text-base md:text-lg my-4">
				I built a dynamic Pokémon application using React that leverages the
				Pokémon API. Upon entering the app, users are greeted with a random
				assortment of wild Pokémon, which reset every 12 hours to keep the
				experience fresh and exciting. Users have the ability to catch or
				release any Pokémon they encounter. When a user successfully catches a
				Pokémon, they are rewarded with a celebratory modal complete with
				fireworks and a congratulatory message
			</p>

			<div>
				<h3 class="text-xl md:text-2xl font-semibold mb-2">App Features</h3>
				<ul class="list-disc list-inside space-y-2">
					<li>React.js</li>
					<li>Catch & Release Pokemon</li>
					<li>Visual and Audio Alerts</li>
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
import { useHead } from '@unhead/vue'
import AOS from 'aos'
import 'aos/dist/aos.css'

// Initialize AOS
onMounted(() => {
	AOS.init({
		duration: 3000,
	})
})

// Set the page title
const { title } = useHead({
	title: 'Pokemon Catcher - Project Details',
})

// Fire Google Analytics event
function fireGAEvent() {
	if (window.ga) {
		window.ga('send', 'event', 'Link', 'click', `${title.value} link pressed`)
	} else if (window.gtag) {
		window.gtag('event', 'click', {
			event_category: 'Link',
			event_label: `${title.value} link pressed`,
		})
	} else {
		console.warn('Google Analytics not initialized')
	}
}
</script>
