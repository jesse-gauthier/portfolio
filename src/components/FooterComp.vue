<template>
  <footer id="contact" aria-labelledby="contact-heading" class="bg-[#2b3d4f]">
    <div class="p-6 blue-bg text-center">
      <p class="text-white">&copy; 2023 Jesse Gauthier. All rights reserved.</p>
      <div class="flex justify-center gap-4 mt-4">
        <a
          href="https://github.com/jessegauthierhumber"
          target="_blank"
          rel="noopener noreferrer"
          class="text-white hover:text-[#e89e1d]"
        >
          GitHub
        </a>
        <a
          href="https://www.linkedin.com/in/jesse-gauthier-475a25168/"
          target="_blank"
          rel="noopener noreferrer"
          class="text-white hover:text-[#e89e1d]"
        >
          LinkedIn
        </a>
      </div>
    </div>
  </footer>
</template>
<script setup>
import { onMounted } from "vue";
import AOS from "aos";
import "aos/dist/aos.css";

onMounted(() => {
  AOS.init({
    duration: 3000,
  });
});
</script>
