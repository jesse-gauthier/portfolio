<template>
  <div class="mx-auto p-8 bg-white shadow-lg rounded-lg my-10 max-w-2xl" data-aos="fade-up" data-aos-duration="1000">
    <h2 class="text-3xl mb-6 capitalize font-bold text-secondary-700">I would love to hear from you</h2>

    <!-- Loading state indicator -->
    <div v-if="isSubmitting"
      class="absolute inset-0 bg-white bg-opacity-70 flex items-center justify-center rounded-lg z-10">
      <div class="flex flex-col items-center">
        <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-secondary-500"></div>
        <p class="mt-2 text-secondary-600">Sending message...</p>
      </div>
    </div>

    <form @submit.prevent="submitForm" class="space-y-6 flex flex-col relative" ref="formElement">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Left Column -->
        <div class="space-y-6">
          <div class="flex flex-col gap-2">
            <label for="name" class="text-secondary-700 font-medium">Name <span class="text-red-500">*</span></label>
            <input v-model="formData.name" type="text" id="name" name="name" required placeholder="Your name"
              class="input input-secondary w-full transition-all duration-300 focus:ring-2 focus:ring-secondary-400"
              :class="{ 'border-red-500': validationErrors.name }" />
            <p v-if="validationErrors.name" class="text-red-500 text-sm mt-1">{{ validationErrors.name }}</p>
          </div>

          <div class="flex flex-col gap-2">
            <label for="email" class="text-secondary-700 font-medium">Email <span class="text-red-500">*</span></label>
            <input v-model="formData.email" type="email" id="email" name="email" required
              placeholder="your.email@example.com"
              class="input input-secondary w-full transition-all duration-300 focus:ring-2 focus:ring-secondary-400"
              :class="{ 'border-red-500': validationErrors.email }" />
            <p v-if="validationErrors.email" class="text-red-500 text-sm mt-1">{{ validationErrors.email }}</p>
          </div>

          <div class="flex flex-col gap-2">
            <label for="phone" class="text-secondary-700 font-medium">Phone <span class="text-red-500">*</span></label>
            <input v-model="formData.phone" type="tel" id="phone" name="phone" required placeholder="(123) 456-7890"
              class="input input-secondary w-full transition-all duration-300 focus:ring-2 focus:ring-secondary-400"
              :class="{ 'border-red-500': validationErrors.phone }" />
            <p v-if="validationErrors.phone" class="text-red-500 text-sm mt-1">{{ validationErrors.phone }}</p>
          </div>
        </div>

        <!-- Right Column -->
        <div class="space-y-6">
          <div class="flex flex-col gap-2">
            <label for="company" class="text-secondary-700 font-medium">Company Name</label>
            <input v-model="formData.company" type="text" id="company" name="company"
              placeholder="Your company (optional)"
              class="input input-secondary w-full transition-all duration-300 focus:ring-2 focus:ring-secondary-400" />
          </div>

          <div class="flex flex-col gap-2">
            <label for="title" class="text-secondary-700 font-medium">Title</label>
            <input v-model="formData.title" type="text" id="title" name="title" placeholder="Your job title (optional)"
              class="input input-secondary w-full transition-all duration-300 focus:ring-2 focus:ring-secondary-400" />
          </div>

          <div class="flex flex-col gap-2">
            <label for="subject" class="text-secondary-700 font-medium">Subject <span
                class="text-red-500">*</span></label>
            <select v-model="formData.subject" id="subject" name="subject" required
              class="input input-secondary w-full transition-all duration-300 focus:ring-2 focus:ring-secondary-400"
              :class="{ 'border-red-500': validationErrors.subject }">
              <option value="" disabled selected>Select a subject</option>
              <option value="General Inquiry">General Inquiry</option>
              <option value="Project Opportunity">Project Opportunity</option>
              <option value="Job Opportunity">Job Opportunity</option>
              <option value="Collaboration">Collaboration</option>
              <option value="Other">Other</option>
            </select>
            <p v-if="validationErrors.subject" class="text-red-500 text-sm mt-1">{{ validationErrors.subject }}</p>
          </div>
        </div>
      </div>

      <div class="flex flex-col gap-2">
        <label for="message" class="text-secondary-700 font-medium">Message <span class="text-red-500">*</span></label>
        <textarea v-model="formData.message" id="message" name="message" required placeholder="Your message here..."
          class="input input-secondary w-full min-h-[150px] transition-all duration-300 focus:ring-2 focus:ring-secondary-400"
          :class="{ 'border-red-500': validationErrors.message }"></textarea>
        <p v-if="validationErrors.message" class="text-red-500 text-sm mt-1">{{ validationErrors.message }}</p>
        <p class="text-gray-500 text-sm">* Required fields</p>
      </div>

      <div class="flex items-center gap-2 mt-2">
        <input v-model="formData.agreement" type="checkbox" id="agreement" name="agreement" required
          class="w-4 h-4 text-secondary-600 rounded focus:ring-secondary-500"
          :class="{ 'border-red-500': validationErrors.agreement }" />
        <label for="agreement" class="text-gray-700 text-sm">
          I agree to be contacted regarding my inquiry
        </label>
      </div>
      <p v-if="validationErrors.agreement" class="text-red-500 text-sm mt-1">{{ validationErrors.agreement }}</p>

      <button type="submit"
        class="btn-secondary btn w-fit min-w-[200px] mx-auto px-6 py-3 font-semibold text-white rounded-lg transition-all transform duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-secondary-300 focus:ring-opacity-50 disabled:opacity-50"
        :disabled="isSubmitting">
        Submit Message
      </button>
    </form>

    <!-- Success/Error Modal -->
    <div v-if="showModal" class="fixed z-10 inset-0 overflow-y-auto" @keydown.esc="closeModal">
      <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center" @click="closeModal">
        <div class="fixed inset-0 transition-opacity" aria-hidden="true">
          <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <div @click.stop
          class="inline-block align-middle bg-white rounded-lg px-8 pt-6 pb-6 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg w-full"
          data-aos="zoom-in" data-aos-duration="400">
          <div class="flex flex-col items-center">
            <!-- Success Icon -->
            <div v-if="submitStatus === 'success'"
              class="w-16 h-16 mx-auto flex items-center justify-center rounded-full bg-green-100 mb-4">
              <svg class="h-10 w-10 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
            </div>

            <!-- Error Icon -->
            <div v-if="submitStatus === 'error'"
              class="w-16 h-16 mx-auto flex items-center justify-center rounded-full bg-red-100 mb-4">
              <svg class="h-10 w-10 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </div>

            <div class="text-center">
              <h3 class="text-xl font-bold text-gray-900 mb-2">
                {{ submitStatus === 'success' ? 'Message Sent Successfully!' : 'Something Went Wrong' }}
              </h3>
              <div class="mt-2">
                <p class="text-gray-600">
                  {{ responseMessage }}
                </p>
              </div>
            </div>
          </div>
          <div class="mt-6 flex justify-center">
            <button @click="closeModal" type="button"
              class="btn-secondary btn px-6 py-2 font-medium text-white rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary-500">
              {{ submitStatus === 'success' ? 'Great!' : 'Try Again' }}
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, reactive, onMounted } from "vue";
import AOS from "aos";
import "aos/dist/aos.css";
import { useHead } from "@unhead/vue";

useHead({
  title: "Contact - Jesse Gauthier - Web Developer",
  meta: [
    {
      name: "description",
      content: "Contact Jesse Gauthier - Front End Web Developer - Ottawa Ontario Canada",
    },
  ],
});

const formData = ref({
  name: "",
  email: "",
  company: "",
  title: "",
  phone: "",
  message: "",
  subject: "",
  agreement: false
});

const validationErrors = reactive({});
const responseMessage = ref("");
const showModal = ref(false);
const isSubmitting = ref(false);
const submitStatus = ref("");
const formElement = ref(null);

const validateForm = () => {
  validationErrors.name = !formData.value.name ? "Please enter your name" : "";
  validationErrors.email = !formData.value.email ? "Please enter your email address" :
    !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(formData.value.email) ? "Please enter a valid email address" : "";
  validationErrors.phone = !formData.value.phone ? "Please enter your phone number" : "";
  validationErrors.message = !formData.value.message ? "Please enter your message" :
    formData.value.message.length < 10 ? "Your message is too short" : "";
  validationErrors.subject = !formData.value.subject ? "Please select a subject" : "";
  validationErrors.agreement = !formData.value.agreement ? "You must agree to be contacted" : "";

  return !Object.values(validationErrors).some(error => error);
};

const submitForm = async () => {
  if (!validateForm()) {
    // Scroll to the first error
    setTimeout(() => {
      const firstErrorElement = document.querySelector('.border-red-500');
      if (firstErrorElement) {
        firstErrorElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
        firstErrorElement.focus();
      }
    }, 100);
    return;
  }

  isSubmitting.value = true;

  try {
    const response = await fetch("/php/contact-form.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify(formData.value),
    });

    const result = await response.text();

    isSubmitting.value = false;

    if (response.ok) {
      submitStatus.value = "success";
      responseMessage.value = "Thank you for your message! I'll get back to you as soon as possible.";
      showModal.value = true;

      // Reset form
      formData.value = {
        name: "",
        email: "",
        company: "",
        title: "",
        phone: "",
        message: "",
        subject: "",
        agreement: false
      };

      // Reset validation errors
      Object.keys(validationErrors).forEach(key => {
        validationErrors[key] = "";
      });

      if (formElement.value) {
        formElement.value.reset();
      }
    } else {
      submitStatus.value = "error";
      responseMessage.value = "There was a problem sending your message. Please try again or contact me directly via email.";
      showModal.value = true;
    }
  } catch (error) {
    console.error("Form submission error:", error);
    isSubmitting.value = false;
    submitStatus.value = "error";
    responseMessage.value = "A network error occurred. Please check your connection and try again.";
    showModal.value = true;
  }
};

const closeModal = () => {
  showModal.value = false;
};

// Handle escape key for modal
onMounted(() => {
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && showModal.value) {
      closeModal();
    }
  });

  AOS.init({
    duration: 1000,
    once: true,
    easing: 'ease-out-cubic',
  });
});
</script>

<style scoped>
/* Input focus styles */
.input:focus {
  border-color: var(--tw-color-secondary-400);
  box-shadow: 0 0 0 3px rgba(77, 111, 143, 0.2);
}

/* Smooth transitions */
.input,
.btn {
  transition: all 0.3s ease;
}

/* Button hover effect */
.btn:hover:not(:disabled) {
  transform: translateY(-2px);
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

/* Button active effect */
.btn:active:not(:disabled) {
  transform: translateY(0);
}
</style>