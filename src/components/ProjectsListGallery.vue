<template>
  <div>
    <h2 class="text-2xl">{{ props.titleTwo }}</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 p-3 mt-2">
      <div
        v-for="project of applicationsProjects"
        :key="project.id"
        class="self-start hover:scale-[1.02] shadow-lg py-4 text-center capitalize flex justify-between px-5 border border-black"
      >
        <a class="flex w-80 hover:underline" target="_blank" :href="project.link">
          <span class="mr-auto">{{ project.name }}</span>
          <svg fill="#000000" width="25" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path
                d="M3,4V20a1,1,0,0,0,1,1H20a1,1,0,0,0,1-1V4a1,1,0,0,0-1-1H4A1,1,0,0,0,3,4ZM5,5H19V19H10V15a1,1,0,0,0-1-1H5Zm6.293,7.707a1,1,0,0,1,0-1.414L14.086,8.5H13a1,1,0,0,1,0-2h3.5a1.01,1.01,0,0,1,.382.077A1,1,0,0,1,17.5,7.5V11a1,1,0,0,1-2,0V9.914l-2.793,2.793A1,1,0,0,1,11.293,12.707Z"
              ></path>
            </g>
          </svg>
        </a>
        <a target="_blank" :href="project.github || ''">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            x="0px"
            y="0px"
            width="25"
            height="25"
            viewBox="0 0 50 50"
          >
            <path
              d="M17.791,46.836C18.502,46.53,19,45.823,19,45v-5.4c0-0.197,0.016-0.402,0.041-0.61C19.027,38.994,19.014,38.997,19,39 c0,0-3,0-3.6,0c-1.5,0-2.8-0.6-3.4-1.8c-0.7-1.3-1-3.5-2.8-4.7C8.9,32.3,9.1,32,9.7,32c0.6,0.1,1.9,0.9,2.7,2c0.9,1.1,1.8,2,3.4,2 c2.487,0,3.82-0.125,4.622-0.555C21.356,34.056,22.649,33,24,33v-0.025c-5.668-0.182-9.289-2.066-10.975-4.975 c-3.665,0.042-6.856,0.405-8.677,0.707c-0.058-0.327-0.108-0.656-0.151-0.987c1.797-0.296,4.843-0.647,8.345-0.714 c-0.112-0.276-0.209-0.559-0.291-0.849c-3.511-0.178-6.541-0.039-8.187,0.097c-0.02-0.332-0.047-0.663-0.051-0.999 c1.649-0.135,4.597-0.27,8.018-0.111c-0.079-0.5-0.13-1.011-0.13-1.543c0-1.7,0.6-3.5,1.7-5c-0.5-1.7-1.2-5.3,0.2-6.6 c2.7,0,4.6,1.3,5.5,2.1C21,13.4,22.9,13,25,13s4,0.4,5.6,1.1c0.9-0.8,2.8-2.1,5.5-2.1c1.5,1.4,0.7,5,0.2,6.6c1.1,1.5,1.7,3.2,1.6,5 c0,0.484-0.045,0.951-0.11,1.409c3.499-0.172,6.527-0.034,8.204,0.102c-0.002,0.337-0.033,0.666-0.051,0.999 c-1.671-0.138-4.775-0.28-8.359-0.089c-0.089,0.336-0.197,0.663-0.325,0.98c3.546,0.046,6.665,0.389,8.548,0.689 c-0.043,0.332-0.093,0.661-0.151,0.987c-1.912-0.306-5.171-0.664-8.879-0.682C35.112,30.873,31.557,32.75,26,32.969V33 c2.6,0,5,3.9,5,6.6V45c0,0.823,0.498,1.53,1.209,1.836C41.37,43.804,48,35.164,48,25C48,12.318,37.683,2,25,2S2,12.318,2,25 C2,35.164,8.63,43.804,17.791,46.836z"
            ></path>
          </svg>
        </a>
      </div>
    </div>
  </div>
  <div>
    <h2 class="text-2xl">{{ props.title }}</h2>
    <!-- Gallery -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 p-3 mt-2">
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
const applicationsProjects = ref([
  {
    id: 1,
    name: 'Contact Book - React',
    subtitle: 'A contact manage application built using react and Google Firebase',
    image: './assets/misc/contact_book1.png',
    link: 'https://contactbook.jessegauthier.dev/',
    github: 'https://github.com/jesseagauthier/contact_book_react'
  },
  {
    id: 2,
    name: 'Recipe Saver - Cook Book - Vue',
    subtitle: 'A recipe saver application that allows the user to search and save recipes',
    image: './assets/misc/recipe_saver_mealplan.svg',
    link: 'https://recipe-saver.jessegauthier.dev/',
    github: 'https://github.com/jesseagauthier/firebase-recipe-saver'
  },
  {
    id: 3,
    name: 'dr. seuss book api - Vanilla JS',
    subtitle: 'a book application that displays Dr. Seuss books from an RESTApi',
    image: './assets/misc/seuss.jpg',
    link: 'https://seusstreasury.jessegauthier.dev/',
    github: 'https://github.com/jesseagauthier/Seuss-Treasury'
  },
  {
    id: 4,
    name: 'password generator - Vanilla JS',
    subtitle: 'a application that generates passwords based on the users requirements',
    link: 'https://passwordgenerator.jessegauthier.dev/',
    github: 'https://github.com/jesseagauthier/password_generator'
  },
  {
    id: 5,
    name: 'Game Review Directory - Nuxt',
    subtitle: 'a application that fetches pre-written reviews from a custom CMS',
    link: 'https://gamereview.jessegauthier.dev/',
    github: 'https://github.com/jesseagauthier/mtm6407-review-site-frontend'
  },
  {
    id: 5,
    name: 'Pomodoro Timer',
    subtitle: 'a application that fetches pre-written reviews from a custom CMS',
    link: 'https://pomodorotimer.jessegauthier.dev/ ',
    github: ''
  }
])

const WebProjects = ref([
  {
    id: 1,
    name: 'GottaGo',
    image: './assets/misc/1.png',
    link: 'https://dev-gottago.pantheonsite.io/'
  },
  {
    id: 2,
    name: 'UpMedia',
    image: './assets/misc/2.png',
    link: 'https://upmedia.video/'
  },
  {
    id: 3,
    name: 'The County Cooperage',
    image: './assets/misc/3.png',
    link: 'https://thecountycooperage.ca/'
  },
  {
    id: 4,
    name: 'W Flowers',
    image: './assets/misc/4.png',
    link: 'https://www.figma.com/design/YlbPOHAJ74GZAgk56PK5p2/Portfolio-Pieces?node-id=112-26&t=bvUxLcSLjbUOcs3I-1'
  },
  {
    id: 5,
    name: 'Real Adulting',
    image: './assets/misc/5.png',
    link: 'https://www.figma.com/design/YlbPOHAJ74GZAgk56PK5p2/Portfolio-Pieces?node-id=0-1&t=bvUxLcSLjbUOcs3I-1'
  }
])
</script>
