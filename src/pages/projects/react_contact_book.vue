<template>
	<div
		class="min-h-screen bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 p-4 md:p-8"
	>
		<div class="max-w-4xl mx-auto">
			<h2 class="text-2xl md:text-3xl font-bold mb-4 text-center">
				React Contact Book
			</h2>

			<div class="flex flex-col md:flex-row md:space-x-4">
				<img
					src="/src/assets/projects/contact_book/contact_book3.png"
					alt="Screenshot of the React Contact Book application"
					class="w-full md:w-1/2 h-auto rounded-lg mb-4 md:mb-0"
				/>
				<img
					src="/src/assets/projects/contact_book/contact_book1.png"
					alt="Another screenshot of the React Contact Book application"
					class="w-full md:w-1/2 h-auto rounded-lg"
				/>
			</div>
			<a
				class="mt-5 btn bg-[#2b3d4f] text-white hover:bg-[#e89e1d]"
				href="https://contactbook.jessegauthier.dev/"
				target="_blank"
				>Live Version</a
			>
			<p class="text-base md:text-lg my-4">
				The React Contact Book application showcases the powerful capabilities
				of React, utilizing a custom Google FireStore Database for seamless data
				storage. This project was entirely developed by me as an academic
				assignment, where I achieved a perfect grade of 100%.
			</p>

			<div>
				<h3 class="text-xl md:text-2xl font-semibold mb-2">App Features</h3>
				<ul class="list-disc list-inside space-y-2">
					<li>React</li>
					<li>FireStore</li>
					<li>Tailwind</li>
					<li>Vite</li>
					<li>
						The ability to toggle dark/light modes upon the press of a button
					</li>
					<li>Create and update new contacts</li>
					<li>View previously stored contacts</li>
				</ul>
			</div>
		</div>
	</div>
</template>
