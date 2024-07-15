<script setup>
import { onMounted } from 'vue'
import { useHead } from '@unhead/vue'
import ContactForm from '@/pages/ContactForm.vue'

import AOS from 'aos'
import 'aos/dist/aos.css'
import { education } from '../data/education.js'

onMounted(() => {
	AOS.init({
		duration: 3000,
	})
})

useHead({
	title: 'Jesse Gauthier - Web Developer',
	meta: [
		{
			name: 'Jesse Gauthier - Web Developer',
			content:
				'Jesse Gauthier - Front End Web Developer - Ottawa Ontario Canada',
		},
	],
})
</script>

<template>
	<main class="flex flex-col gap-6">
		<div class="mt-12">
			<!-- About Section -->
			<section
				data-aos="fade-up"
				id="about"
				class="grid grid-cols-1 lg:grid-cols-4 gap-4"
				aria-labelledby="tldr_title"
			>
				<div class="p-8 lg:col-span-2 flex justify-center flex-col gap-3">
					<img
						class="md:max-w-[70%] mx-auto rounded-lg"
						src="/assets/profile.jpg"
						alt=""
					/>
					<router-link
						to="/contact"
						class="btn bg-[#2b3d4f] text-white hover:bg-[#e89e1d] w-fit mx-auto"
					>
						Work with me
					</router-link>
				</div>
				<div
					id="intro"
					class="flex flex-col leading-relaxed lg:col-span-2 h-[100%] gap-8 border-[#e89e1d] border-4 p-5"
				>
					<p class="text-black text-justify text-xl self-center">
						<span class="font-semibold text-2xl mt-1 block"
							>Hey, I'm Jesse.</span
						>
						<br />
						I'm a dynamic and detail-oriented Web Developer with progressive
						experience in designing, developing, and maintaining robust websites
						and applications. I'm proficient in a variety of programming
						languages and frameworks, including JavaScript, Vue.js, React,
						MySQL, and PHP.
					</p>
					<div class="w-[100%] h-[3px] bg-[#e89e1d] rounded-full"></div>
					<p class="text-black text-justify text-xl self-center">
						Known for delivering client-focused solutions, enhancing user
						experiences, and driving business growth through innovative web
						strategies. I excel at collaborating with cross-functional teams to
						define project requirements, troubleshoot complex issues, and ensure
						the successful deployment of high-performance, scalable web
						solutions.
					</p>
				</div>
			</section>
			<!-- Education Section -->
			<section
				data-aos="fade-up"
				id="education"
				class="mt-10"
				aria-labelledby="education_heading"
			>
				<h2 id="education_heading" class="text-2xl font-bold mb-4">
					Education
				</h2>
				<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
					<article
						data-aos="fade-up"
						v-for="edu in education"
						:key="edu.program"
						class="p-8 blue-bg text-center w-full md:basis-1/2 flex flex-col justify-center rounded-lg"
					>
						<p v-if="edu.honours" class="font-bold text-xl">
							Dean's List Recipient
						</p>
						<p v-else class="font-bold text-xl">Part Time</p>
						<h3 data-aos="fade-up" class="text-medium text-xl m-0 self-center">
							{{ edu.program }}
						</h3>
						<p>{{ edu.institution }}</p>
						<p>{{ edu.years }}</p>
					</article>
				</div>
			</section>
			<!-- Skills Section -->
			<section
				data-aos="fade-up"
				id="skills"
				class="mt-10"
				aria-labelledby="skills_heading"
			>
				<h2 id="skills_heading" class="text-2xl font-bold mb-4">My Stack</h2>
				<div class="p-6 blue-bg rounded-lg shadow-md">
					<div>
						<h3 class="text-xl font-bold mb-2">Programming Languages</h3>
						<ul class="flex flex-wrap gap-4 text-lg text-gray-700">
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								JavaScript
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								PHP
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								HTML
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								CSS
							</li>
						</ul>
					</div>
					<div>
						<h3 class="text-xl font-bold mb-2">Frameworks and Libraries</h3>
						<ul class="flex flex-wrap gap-4 text-lg text-gray-700">
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								Node.js
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								Node Express
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								Vue.js
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								React.js
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								SASS
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								Tailwind CSS
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								Bootstrap
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								Express.js
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								Nuxt.js
							</li>
						</ul>
					</div>
					<div>
						<h3 class="text-xl font-bold mb-2">Tools and Technologies</h3>
						<ul class="flex flex-wrap gap-4 text-lg text-gray-700">
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								WordPress
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								Shopify
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								MySQL
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								MongoDB
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								Rest API
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								Git
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								Docker
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								Webpack
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								Google Cloud
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								Plesk
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								cPanel
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								OOP
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								GitHub
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								Strapi
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								WCAG
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								NPM
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								Gulp
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								Responsive Design
							</li>
							<li
								data-aos="fade-up"
								data-aos-duration="3000"
								class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
							>
								Agile Methodologies
							</li>
						</ul>
					</div>
				</div>
			</section>

			<!-- Experience Section -->
			<section
				data-aos="fade-up"
				id="experience"
				class="mt-10"
				aria-labelledby="experience_heading"
			>
				<h2 id="experience_heading" class="text-2xl font-bold mb-4">
					Experience
				</h2>
				<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
					<article
						data-aos="fade-up"
						data-aos-duration="3000"
						class="mb-6 flex"
					>
						<div class="p-8 blue-bg rounded-lg">
							<h3
								class="text-2xl font-bold"
								data-aos="fade-up"
								data-aos-duration="3000"
							>
								Senior Web Developer | Shopify Developer
							</h3>
							<p class="text-lg my-2 font-bold">The County Cooperage</p>
							<p class="my-2">May 2023 - Present</p>
							<p>
								Develop and implement web applications using HTML, CSS,
								JavaScript, jQuery, AJAX, and Shopify technologies to enhance
								user engagement and functionality. Debug cross-browser
								compatibility issues in IE, Chrome, Firefox, and Safari,
								ensuring a seamless user experience across major browsers.
								Research emerging technologies to identify new trends in web
								development, keeping projects up to date with the latest
								industry standards. Monitor page speed performance metrics
								through Google Analytics and Page Speed Insights, leading to
								optimized load times and better user retention.
							</p>
							<div>
								<hr class="my-4" />
								<h4 class="my-3 text-xl font-medium">Key Accomplishments:</h4>
								<ul class="list-disc list-inside">
									<li>
										Integrated third-party libraries such as jQuery, React.js,
										and Bootstrap to accelerate development time and enhance
										site features.
									</li>
									<li>
										Maintained websites to ensure content accuracy,
										accessibility, and security compliance standards, resulting
										in improved user trust and site integrity.
									</li>
									<li>
										Troubleshot coding errors utilizing browser debugging tools
										such as Firebug or Chrome DevTools, reducing issue
										resolution time and improving site performance
									</li>
									<li>
										Developed RESTful APIs that interacted with remote services,
										providing functionality such as payment gateways and 3rd
										party authentication systems, expanding service offerings.
									</li>
									<li>
										Designed And Development range of reuseable UI componenets
									</li>
									<li>
										Monitored Websites against user expereince metrics.
										Implemented Changes based on findings.
									</li>
								</ul>
							</div>
						</div>
					</article>
					<article
						data-aos="fade-up"
						data-aos-duration="3000"
						class="mb-6 flex"
					>
						<div class="p-8 blue-bg rounded-lg">
							<h3
								class="text-2xl font-bold"
								data-aos="fade-up"
								data-aos-duration="3000"
							>
								Wordpress Developer | UI Researcher
							</h3>
							<p class="text-lg my-2 font-bold">GottaGo Ottawa</p>
							<p class="my-2">Jan 2024 - Present</p>

							<p>
								Collaborated with a cross-functional team to define website
								objectives, aligning with the overall business strategy,
								resulting in a cohesive and effective online presence.
								Implemented SEO best practices and site optimization, boosting
								site performance and increasing visibility on search engines.
								Conducted user research and usability testing, refining design
								solutions based on insights and feedback, enhancing overall user
								experience. Managed version control and participated in code
								reviews, maintaining high-quality code standards, and ensuring
								team-wide code consistency.
							</p>
							<div>
								<hr class="my-4" />
								<h4 class="my-3 text-xl font-medium">Key Accomplishments:</h4>
								<ul class="list-disc list-inside">
									<li>
										Led the UX/UI design process, from concept to high-fidelity
										prototypes, enhancing usability and accessibility, and
										achieving a seamless responsive design
									</li>
									<li>
										Customized WordPress themes and plugins, balancing
										aesthetics and functionality, leading to improved user
										satisfaction and project success.
									</li>
									<li>
										Troubleshot coding errors utilizing browser debugging tools
										such as Firebug or Chrome DevTools, reducing issue
										resolution time and improving site performance
									</li>
									<li>
										Developed RESTful APIs that interacted with remote services,
										providing functionality such as payment gateways and 3rd
										party authentication systems, expanding service offerings.
									</li>
									<li>
										Designed And Development range of reuseable UI componenets
									</li>
									<li>
										Monitored Websites against user expereince metrics.
										Implemented Changes based on findings.
									</li>
									<li>
										Provided ongoing support and maintenance, resolving site
										performance and user experience issues, resulting in a more
										reliable and user-friendly website.
									</li>
								</ul>
							</div>
						</div>
					</article>
				</div>
			</section>
			<ContactForm data-aos="fade-up" class="w-[fit-content]" />
		</div>
	</main>
</template>
