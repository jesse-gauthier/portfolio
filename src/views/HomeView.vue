<script setup>
import { skills } from '../data/skills.js'
import { education } from '../data/education.js'
</script>

<template>
	<main class="flex flex-col gap-6">
		<div class="mt-12">
			<!-- About Section -->
			<section
				id="about"
				class="grid grid-cols-1 lg:grid-cols-4 gap-4"
				aria-labelledby="tldr_title"
			>
				<div class="p-8 lg:col-span-2">
					<img
						class="md:max-w-[50%] mx-auto rounded-lg"
						src="/assets/profile.jpg"
						alt=""
					/>
				</div>
				<div id="intro" class="flex leading-relaxed lg:col-span-2 h-[100%]">
					<p class="text-black md:w-[80%] text-justify text-xl self-center">
						Web Developer with a strong technical background and extensive
						experience in front-end technologies such as HTML, CSS, and
						JavaScript. Proficient in creating responsive, user-friendly web
						applications with a focus on design and usability. Skilled in
						managing both SQL and NoSQL databases. Experienced in working with
						cross-functional teams to deliver high-quality solutions that meet
						and exceed client expectations. Expertise in implementing
						promotional features, troubleshooting technical issues, and
						monitoring performance metrics. Dedicated to staying current with
						the latest web development trends and technologies to foster
						innovation and continuous improvement.
					</p>
				</div>
			</section>
			<!-- Education Section -->
			<section id="education" class="mt-10" aria-labelledby="education_heading">
				<h2 id="education_heading" class="text-2xl font-bold mb-4">
					Education
				</h2>
				<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
					<article
						v-for="edu in education"
						:key="edu.program"
						class="p-8 blue-bg text-center w-full md:basis-1/2 flex flex-col justify-center rounded-lg"
					>
						<p v-if="edu.honours" class="font-bold text-xl">
							Graduated With Honours
						</p>

						<h3 class="text-medium text-xl m-0 self-center">
							{{ edu.program }}
						</h3>
						<p>{{ edu.institution }}</p>
						<p>{{ edu.years }}</p>
					</article>
				</div>
			</section>
			<!-- Skills Section -->
			<section id="skills" class="mt-10" aria-labelledby="skills_heading">
				<h2 id="skills_heading" class="text-2xl font-bold mb-4">Skills</h2>
				<div class="p-6 blue-bg rounded-lg shadow-md">
					<ul class="flex flex-wrap gap-4 justify-center text-lg text-gray-700">
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							JavaScript
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							Node.js
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							Node Express
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							Vue.js
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							React.js
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							PHP
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							SASS
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							WordPress
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							Shopify
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							MySQL
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							MongoDB
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							Rest API
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							Tailwind CSS
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							Git
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							Bootstrap
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							Docker
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							Webpack
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							Google Cloud
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							Express.js
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							Nuxt.js
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							Plesk
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							cPanel
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							HTML
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							OOP
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							GitHub
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							Strapi
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							WCAG
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							NPM
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							Gulp
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							Responsive Design
						</li>
						<li
							class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
						>
							Agile Methodologies
						</li>
					</ul>
				</div>
			</section>

			<!-- Experience Section -->
			<section
				id="experience"
				class="mt-10"
				aria-labelledby="experience_heading"
			>
				<h2 id="experience_heading" class="text-2xl font-bold mb-4">
					Experience
				</h2>
				<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
					<article class="mb-6 flex">
						<div class="p-8 blue-bg rounded-lg">
							<h3 class="text-2xl font-bold">
								Senior Web Developer | Shopify Developer
							</h3>
							<p class="text-lg my-2 font-bold">The County Cooperage</p>
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
								<ul class="list-disc">
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
					<article class="mb-6 flex">
						<div class="p-8 blue-bg rounded-lg">
							<h3 class="text-2xl font-bold">
								Wordpress Developer | UI Researcher
							</h3>
							<p class="text-lg my-2 font-bold">GottaGo Ottawa</p>
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
								<ul class="list-disc">
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
		</div>
	</main>
</template>
