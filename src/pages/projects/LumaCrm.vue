<template>
    <div data-aos="fade-up" class="min-h-screen bg-neutral-100 dark:bg-dark text-dark  p-4 md:p-8 rounded-xl">
        <div class="flex justify-between">
            <router-link class="btn btn-warning w-100" to="/projects">Back To Projects</router-link>
            <a class="btn btn-primary text-black" href="https://www.lumacrm.ca/login" target="_blank">Prototype
                Preview</a>
        </div>
        <div class="bg-secondary h-[1px] my-8"></div>
        <div class="max-w-4xl mx-auto">
            <div class="flex flex-wrap flex-row-reverse justify-evenly items-center">
                <h2 class="text-3xl md:text-5xl font-bold mb-4 text-center self-center font-heading">
                    LumaCRM
                </h2>
                <img src="\assets\projects\lumacrm\logo.svg" alt="LumaCRM Interface Mockup"
                    class="w-[80%] md:w-1/2 lg:w-1/3 h-auto rounded-lg mb-4 md:mb-0" />
            </div>

            <p class="text-base md:text-lg my-4 font-body">
                LumaCRM is a mobile-first Customer Relationship Management platform
                designed to streamline lead management and team collaboration.
                The project focused on creating an intuitive, efficient interface
                that reduces cognitive load and enhances team productivity through
                modern UI/UX design principles.
            </p>

            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-xl md:text-3xl font-semibold mb-4 font-heading">Key Design Highlights</h3>
                    <ul class="space-y-2 list-disc pl-5">
                        <li>Mobile-first responsive design</li>
                        <li>Drag-and-drop lead management</li>
                        <li>Real-time collaboration features</li>
                        <li>Intuitive messaging system</li>
                        <li>Advanced analytics dashboard</li>
                        <li>Accessible design (WCAG compliant)</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl md:text-3xl font-semibold mb-4 font-heading">Technology Stack</h3>
                    <ul class="space-y-2 grid grid-cols-2 list-disc pl-5">
                        <li>Vue.js</li>
                        <li>Tailwind CSS</li>
                        <li>Figma</li>
                        <li>Responsive Design</li>
                        <li>Accessibility Tools</li>
                        <li>Micro-interactions</li>
                    </ul>
                </div>
            </div>

            <div class="mt-8">
                <h3 class="text-xl md:text-3xl font-semibold mb-4 font-heading">Design System Highlights</h3>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h4 class="text-lg font-semibold mb-2">Color Palette</h4>
                        <div class="flex space-x-2">
                            <div class="w-12 h-12 bg-primary rounded-full" title="Primary: #774868"></div>
                            <div class="w-12 h-12 bg-secondary rounded-full" title="Secondary: #D7C1E0"></div>
                            <div class="w-12 h-12 bg-accent rounded-full" title="Accent: #F4A259"></div>
                            <div class="w-12 h-12 bg-neutral rounded-full" title="Neutral: #FAF5F8"></div>
                            <div class="w-12 h-12 bg-dark rounded-full" title="Dark: #1A1A22"></div>
                        </div>
                    </div>
                    <div>
                        <h4 class="text-lg font-semibold mb-2">Typography</h4>
                        <p>
                            <span class="font-heading">Headings: Hanken Grotesk</span><br>
                            <span class="font-body">Body: Inter</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { onMounted } from 'vue'
import AOS from 'aos'
import { useHead } from '@unhead/vue'
import 'aos/dist/aos.css'

// Initialize AOS
onMounted(() => {
    AOS.init({
        duration: 3000,
    })
})

// Set the page title
const { title } = useHead({
    title: 'LumaCRM - Design Case Study',
})

// Placeholder for potential analytics tracking
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

<style scoped>
/* Additional custom styles can be added here */
</style>