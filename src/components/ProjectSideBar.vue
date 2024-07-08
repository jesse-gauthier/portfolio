<script setup>
import { defineProps } from 'vue'
import { RouterLink } from 'vue-router'

const props = defineProps({
  projects: {
    type: Array,
    required: true
  }
})
</script>

<template>
  <div>
    <h4 class="text-2xl font-bold">More Projects</h4>
    <div class="">
      <swiper-container
        :slides-per-view="3"
        :space-between="spaceBetween"
        :centered-slides="true"
        navigation="true"
        loop="true"
      >
        <swiper-slide class="p-3" v-for="project of props.projects" :key="project.id">
          <RouterLink :to="`/projects/${project.id}`"
            ><img :src="project.primaryImage"
          /></RouterLink>
        </swiper-slide>
      </swiper-container>
    </div>
  </div>
</template>

<style scoped></style>
