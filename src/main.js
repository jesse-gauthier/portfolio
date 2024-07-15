import './assets/main.css'
import { createHead } from '@unhead/vue'
import { createApp } from 'vue'
import { createPinia } from 'pinia'

import App from './App.vue'
import router from './router'

import VueGtag from 'vue-gtag'

import 'aos/dist/aos.css'

const app = createApp(App)
const head = createHead()

app.use(createPinia())
app.use(head)
app.use(router)
app.use(VueGtag, {
	config: { id: 'G-KMYXWLPGLK' },
	router,
})

app.mount('#app')
