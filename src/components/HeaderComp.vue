<template>
	<header class="py-6 blue-bg" role="banner">
		<nav
			class="inner-wrapper flex justify-between items-center flex-wrap"
			role="navigation"
		>
			<router-link to="/">
				<div id="brand" class="cursor-pointer">
					<h1
						class="orange-text align-middle text-center text-4xl font-bold heading-text"
					>
						Jesse Gauthier
					</h1>
					<h2
						class="align-middle text-center text-xl font-bold sub-heading-text hover-orange"
					>
						Front End Developer
					</h2>
				</div>
			</router-link>

			<!-- Hamburger Menu Button (Visible on Mobile Only) -->
			<button
				aria-label="Open menu"
				class="md:hidden block ml-auto"
				@click="toggleMenu"
			>
				<svg viewBox="0 0 100 80" width="30" height="30">
					<rect width="100" height="20" fill="#e89e1d"></rect>
					<rect y="30" width="100" height="20" fill="#e89e1d"></rect>
					<rect y="60" width="100" height="20" fill="#e89e1d"></rect>
				</svg>
			</button>

			<!-- Desktop Navigation (Always Visible) -->
			<ul
				id="navigation"
				class="hidden md:flex capitalize items-center justify-center mt-3 md:mt-0"
			>
				<li class="mx-2 p-2 h-fit">
					<router-link
						to="/"
						class="sub-heading-text text-lg font-medium hover-orange"
						>Home</router-link
					>
				</li>
				<li class="mx-2 p-2 h-fit">
					<router-link
						to="/projects"
						class="sub-heading-text text-lg font-medium hover-orange"
						>Projects</router-link
					>
				</li>
				<li class="mx-2 p-2 h-fit">
					<router-link
						to="/contact"
						class="sub-heading-text text-lg font-medium hover-orange"
						>Contact</router-link
					>
				</li>
				<li class="mx-2 p-2 h-fit">
					<a
						href="https://github.com/jesse-gauthier"
						target="_blank"
						rel="noopener noreferrer"
						class="sub-heading-text text-lg font-medium hover-orange"
						>GitHub</a
					>
				</li>
				<li class="mx-2 p-2 h-fit">
					<a
						target="_blank"
						rel="noopener noreferrer"
						href="https://codepen.io/jessegauthier1994"
						class="sub-heading-text text-lg font-medium hover-orange"
						>CodePen</a
					>
				</li>
				<li class="mx-2 p-2 h-fit">
					<a
						target="_blank"
						rel="noopener noreferrer"
						href="https://www.linkedin.com/in/jesse-gauthier-475a25168/"
						class="sub-heading-text text-lg font-medium hover-orange"
						>LinkedIn</a
					>
				</li>
			</ul>

			<!-- Full-Screen Mobile Menu (Hidden by Default) -->
			<div
				v-if="isMenuOpen"
				class="fixed inset-0 z-10 blue-bg md:hidden flex flex-col items-center justify-center"
			>
				<button
					aria-label="Close menu"
					class="absolute top-4 right-4"
					@click="toggleMenu"
				>
					<svg viewBox="0 0 40 40" width="30" height="30">
						<path
							d="M 10,10 L 30,30 M 30,10 L 10,30"
							stroke="black"
							stroke-width="5"
						></path>
					</svg>
				</button>
				<ul class="text-center">
					<li class="block p-4 text-lg font-medium hover-orange">
						<router-link
							class="btn bg-[#2b3d4f] text-white hover:bg-[#e89e1d] w-[100%]"
							to="/"
							@click="toggleMenu"
							>Home</router-link
						>
					</li>
					<li class="block p-4 text-lg font-medium hover-orange">
						<router-link
							class="btn bg-[#2b3d4f] text-white hover:bg-[#e89e1d] w-[100%]"
							to="/projects"
							@click="toggleMenu"
							>Projects</router-link
						>
					</li>
					<li class="block p-4 text-lg font-medium hover-orange">
						<router-link
							class="btn bg-[#2b3d4f] text-white hover:bg-[#e89e1d] w-[100%]"
							to="/contact"
							@click="toggleMenu"
							>Contact</router-link
						>
					</li>

					<li class="block p-4 text-lg font-medium hover-orange">
						<a
							class="btn bg-[#2b3d4f] text-white hover:bg-[#e89e1d] w-[100%]"
							href="https://github.com/jesseagauthier"
							@click="toggleMenu"
							>GitHub</a
						>
					</li>
					<li class="block p-4 text-lg font-medium hover-orange">
						<a
							class="btn bg-[#2b3d4f] text-white hover:bg-[#e89e1d] w-[100%]"
							href="https://codepen.io/jessegauthier1994"
							@click="toggleMenu"
							>CodePen</a
						>
					</li>
					<li class="block p-4 text-lg font-medium hover-orange">
						<a
							class="btn bg-[#2b3d4f] text-white hover:bg-[#e89e1d] w-[100%]"
							href="https://www.linkedin.com/in/jesse-gauthier-475a25168/"
							@click="toggleMenu"
							>LinkedIn</a
						>
					</li>
				</ul>
			</div>
		</nav>
	</header>
</template>

<script setup>
import { ref } from 'vue'

const isMenuOpen = ref(false) // Controls the visibility of the menu

// Toggle menu visibility
const toggleMenu = () => {
	isMenuOpen.value = !isMenuOpen.value
}
</script>

<style>
/* Add your styles here */
</style>
