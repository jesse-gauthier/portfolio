<template>
	<div
		class="min-w-[50vw] mx-auto min-h-screen p-8 bg-white shadow-lg rounded-lg"
	>
		<h2 class="text-3xl mb-4 capitalize">I would love to hear from you</h2>
		<form @submit.prevent="submitForm" class="space-y-6" data-aos="fade-up">
			<div>
				<label for="name" class="block text-sm font-medium text-gray-700"
					>Name:</label
				>
				<input
					v-model="formData.name"
					type="text"
					id="name"
					name="name"
					required
					class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
				/>
			</div>

			<div>
				<label for="email" class="block text-sm font-medium text-gray-700"
					>Email:</label
				>
				<input
					v-model="formData.email"
					type="email"
					id="email"
					name="email"
					required
					class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
				/>
			</div>

			<div>
				<label for="company" class="block text-sm font-medium text-gray-700"
					>Company Name:</label
				>
				<input
					v-model="formData.company"
					type="text"
					id="company"
					name="company"
					class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
				/>
			</div>

			<div>
				<label for="title" class="block text-sm font-medium text-gray-700"
					>Title:</label
				>
				<input
					v-model="formData.title"
					type="text"
					id="title"
					name="title"
					class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
				/>
			</div>

			<div>
				<label for="phone" class="block text-sm font-medium text-gray-700"
					>Phone:</label
				>
				<input
					v-model="formData.phone"
					type="tel"
					id="phone"
					name="phone"
					required
					class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
				/>
			</div>

			<div>
				<label for="message" class="block text-sm font-medium text-gray-700"
					>Message:</label
				>
				<textarea
					v-model="formData.message"
					id="message"
					name="message"
					required
					class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
				></textarea>
			</div>

			<button
				type="submit"
				class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
			>
				Submit
			</button>
		</form>
		<div v-if="showModal" class="fixed z-10 inset-0 overflow-y-auto">
			<div
				class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0"
			>
				<div class="fixed inset-0 transition-opacity" aria-hidden="true">
					<div class="absolute inset-0 bg-gray-500 opacity-75"></div>
				</div>

				<span
					class="hidden sm:inline-block sm:align-middle sm:h-screen"
					aria-hidden="true"
					>&#8203;</span
				>

				<div
					class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6"
				>
					<div>
						<div class="mt-3 text-center sm:mt-5">
							<h3 class="text-lg leading-6 font-medium text-gray-900">
								Form Submitted
							</h3>
							<div class="mt-2">
								<p class="text-sm text-gray-500">
									Your message has been successfully sent.
								</p>
							</div>
						</div>
					</div>
					<div class="mt-5 sm:mt-6">
						<button
							@click="closeModal"
							type="button"
							class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-indigo-600 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm"
						>
							Close
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script setup>
import { ref } from 'vue'
import { onMounted } from 'vue'
import AOS from 'aos'
import 'aos/dist/aos.css'

import { useHead } from '@unhead/vue'

useHead({
	title: 'Contact - Jesse Gauthier - Web Developer',
	meta: [
		{
			name: 'Jesse Gauthier - Web Developer',
			content:
				'Jesse Gauthier - Front End Web Developer - Ottawa Ontario Canada',
		},
	],
})

const formData = ref({
	name: '',
	email: '',
	company: '',
	title: '',
	phone: '',
	message: '',
})

const responseMessage = ref('')
const showModal = ref(false)

const submitForm = async () => {
	try {
		const response = await fetch('contact.php', {
			method: 'POST',
			headers: {
				'Content-Type': 'application/json',
			},
			body: JSON.stringify(formData.value),
		})

		const result = await response.text()
		responseMessage.value = result
		if (response.ok) {
			showModal.value = true
			formData.value = {
				name: '',
				email: '',
				company: '',
				title: '',
				phone: '',
				message: '',
			}
		} else {
			responseMessage.value = 'An error occurred. Please try again.'
		}
	} catch (error) {
		responseMessage.value = 'An error occurred. Please try again.'
	}
}

const closeModal = () => {
	showModal.value = false
}

onMounted(() => {
	AOS.init({
		duration: 3000,
	})
})
</script>

<style></style>
