<script setup>
import { onMounted } from "vue";
import { useHead } from "@unhead/vue";
import ContactForm from "@/pages/ContactForm.vue";
import FooterComp from "@/components/FooterComp.vue"; // Import FooterComp

import AOS from "aos";
import "aos/dist/aos.css";
import { education } from "../data/education.js";

const programmingLanguages = [
  "JavaScript",
  "PHP",
  "HTML",
  "CSS",
  "Python",
  "TypeScript",
];
const frameworksAndLibraries = [
  "Node.js",
  "Vue.js",
  "React.js",
  "SASS",
  "Tailwind CSS",
  "Bootstrap",
  "Express.js",
  "Nuxt.js",
  "AppWrite",
  "SupaBase",
  "Angular",
  "Django",
];
const toolsAndTechnologies = [
  "WordPress",
  "Shopify",
  "MySQL",
  "MongoDB",
  "Rest API",
  "Git",
  "Docker",
  "Webpack",
  "Google Cloud",
  "Plesk",
  "cPanel",
  "OOP",
  "GitHub",
  "Strapi",
  "WCAG",
  "NPM",
  "Gulp",
  "Responsive Design",
  "Agile Methodologies",
  "Jenkins",
  "Kubernetes",
];

const experiences = [
  {
    title: "Senior Web Developer | Shopify Developer",
    company: "The County Cooperage",
    period: "May 2023 - Present",
    description: `
     Develop and implement web applications using HTML, CSS, JavaScript, jQuery, AJAX, and Shopify technologies to enhance user engagement and functionality. Debug cross-browser compatibility issues in IE, Chrome, Firefox, and Safari, ensuring a seamless user experience across major browsers. Research emerging technologies to identify new trends in web development, keeping projects up to date with the latest industry standards. Monitor page speed performance metrics through Google Analytics and Page Speed Insights, leading to optimized load times and better user retention. In addition to development, manage SEO strategies to improve site rankings on search engines, optimize content for keyword targeting, and enhance site structure for better crawlability.`,
    accomplishments: [
      "Integrated third-party libraries such as jQuery, React.js, and Bootstrap to accelerate development time and enhance site features.",
      "Maintained websites to ensure content accuracy, accessibility, and security compliance standards, resulting in improved user trust and site integrity.",
      "Troubleshot coding errors utilizing browser debugging tools such as Firebug or Chrome DevTools, reducing issue resolution time and improving site performance.",
      "Developed RESTful APIs that interacted with remote services, providing functionality such as payment gateways and 3rd party authentication systems, expanding service offerings.",
      "Designed and developed a range of reusable UI components.",
      "Monitored websites against user experience metrics and implemented changes based on findings, improving user retention and overall performance.",
      "Optimized website SEO and implemented Google Ads campaigns, driving an increase in site traffic and conversions.",
      "Created and managed social media posts to improve brand visibility and audience engagement, contributing to business growth.",
    ],
  },
  {
    title: "Wordpress Developer | UI Researcher",
    company: "GottaGo Ottawa",
    period: "Jan 2024 - Present",
    description: `
      Collaborated with a cross-functional team to define website objectives, aligning with the overall business strategy, resulting in a cohesive and effective online presence. 
      Implemented SEO best practices and site optimization, boosting site performance and increasing visibility on search engines. 
      Conducted user research and usability testing, refining design solutions based on insights and feedback, enhancing overall user experience. 
      Managed version control and participated in code reviews, maintaining high-quality code standards, and ensuring team-wide code consistency.
    `,
    accomplishments: [
      "Led the UX/UI design process, from concept to high-fidelity prototypes, enhancing usability and accessibility, and achieving a seamless responsive design.",
      "Customized WordPress themes and plugins, balancing aesthetics and functionality, leading to improved user satisfaction and project success.",
      "Troubleshot coding errors utilizing browser debugging tools such as Firebug or Chrome DevTools, reducing issue resolution time and improving site performance.",
      "Developed RESTful APIs that interacted with remote services, providing functionality such as payment gateways and 3rd party authentication systems, expanding service offerings.",
      "Designed and developed a range of reusable UI components.",
      "Monitored websites against user experience metrics and implemented changes based on findings.",
      "Provided ongoing support and maintenance, resolving site performance and user experience issues, resulting in a more reliable and user-friendly website.",
    ],
  },
];

const testimonials = [
  {
    name: "John Doe",
    position: "CEO at Company",
    feedback:
      "Jesse is a fantastic developer who always delivers high-quality work on time.",
  },
  {
    name: "Jane Smith",
    position: "Project Manager at Another Company",
    feedback:
      "Working with Jesse has been a pleasure. His attention to detail is unmatched.",
  },
];

const projects = [
  {
    title: "Project One",
    description: "A brief description of Project One.",
    image: "/assets/project1.jpg",
  },
  {
    title: "Project Two",
    description: "A brief description of Project Two.",
    image: "/assets/project2.jpg",
  },
];

onMounted(() => {
  // Wait for the document to fully load before initializing AOS
  window.addEventListener("load", () => {
    AOS.init({
      duration: 1200, // Reduced the duration for a snappier experience
      once: true, // Ensures animations run only once when the element comes into view
      offset: 50, // Adjust offset to trigger animations earlier or later
    });
  });

  // Smooth scroll for navigation links
  const links = document.querySelectorAll('a[href^="#"]');
  links.forEach((link) => {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute("href")).scrollIntoView({
        behavior: "smooth",
      });
    });
  });
});

useHead({
  title: "Jesse Gauthier - Web Developer",
  meta: [
    {
      name: "description",
      content:
        "Jesse Gauthier - Front End Web Developer - Ottawa Ontario Canada",
    },
  ],
});
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
            alt="Profile picture of Jesse Gauthier"
            loading="lazy"
          />
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
            I'm a dynamic and detail-oriented Web Developer with extensive
            experience in designing, developing, and maintaining robust websites
            and applications. I am proficient in a wide range of programming
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
                v-for="language in programmingLanguages"
                :key="language"
                data-aos="fade-up"
                data-aos-duration="1500"
                class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
              >
                {{ language }}
              </li>
            </ul>
          </div>
          <!-- Frameworks and Libraries -->
          <div>
            <h3 class="text-xl font-bold mb-2">Frameworks and Libraries</h3>
            <ul class="flex flex-wrap gap-4 text-lg text-gray-700">
              <li
                v-for="framework in frameworksAndLibraries"
                :key="framework"
                data-aos="fade-up"
                data-aos-duration="1500"
                class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
              >
                {{ framework }}
              </li>
            </ul>
          </div>
          <!-- Tools and Technologies -->
          <div>
            <h3 class="text-xl font-bold mb-2">Tools and Technologies</h3>
            <ul class="flex flex-wrap gap-4 text-lg text-gray-700">
              <li
                v-for="tool in toolsAndTechnologies"
                :key="tool"
                data-aos="fade-up"
                data-aos-duration="1500"
                class="bg-white p-2 rounded-md shadow-sm hover:bg-blue-100 transition duration-300"
              >
                {{ tool }}
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
            v-for="experience in experiences"
            :key="experience.title"
            data-aos="fade-up"
            data-aos-duration="1500"
            class="mb-6 flex"
          >
            <div class="p-8 blue-bg rounded-lg">
              <h3
                class="text-2xl font-bold"
                data-aos="fade-up"
                data-aos-duration="1500"
              >
                {{ experience.title }}
              </h3>
              <p class="text-lg my-2 font-bold">{{ experience.company }}</p>
              <p class="my-2">{{ experience.period }}</p>
              <p v-html="experience.description"></p>
              <div>
                <hr class="my-4" />
                <h4 class="my-3 text-xl font-medium">Key Accomplishments:</h4>
                <ul class="list-disc list-inside">
                  <li
                    v-for="accomplishment in experience.accomplishments"
                    :key="accomplishment"
                  >
                    {{ accomplishment }}
                  </li>
                </ul>
              </div>
            </div>
          </article>
        </div>
      </section>
      <!-- Contact Form -->
      <ContactForm data-aos="fade-up" class="w-[fit-content]" />
    </div>
  </main>
</template>
