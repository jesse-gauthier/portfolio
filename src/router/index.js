import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import ProjectListView from '@/views/ProjectListView.vue'
import ReactContactBook from '@/pages/projects/react_contact_book.vue'
import Password_Generator from '@/pages/projects/Password_Generator.vue'
import Pomodoro_Timer from '@/pages/projects/Pomodoro_Timer.vue'
import GottagoOttawa from '@/pages/projects/GottagoOttawa.vue'
import TheCountyCoperage from '@/pages/projects/TheCountyCooperage.vue'
import ContactForm from '@/pages/ContactForm.vue'

const router = createRouter({
	history: createWebHistory(import.meta.env.BASE_URL),
	routes: [
		{
			path: '/',
			name: 'home',
			component: HomeView,
		},
		{
			path: '/projects',
			name: 'Projects',
			component: ProjectListView,
		},
		{
			path: '/react_contact_book',
			name: 'React Contact Book',
			component: ReactContactBook,
		},
		{
			path: '/password_generator',
			name: 'Password Generator',
			component: Password_Generator,
		},
		{
			path: '/pomodoro_timer',
			name: 'Pomodoro Timer',
			component: Pomodoro_Timer,
		},
		{
			path: '/gotta_go_ottawa',
			name: 'Gotta Go Ottawa',
			component: GottagoOttawa,
		},
		{
			path: '/the_county_cooperage',
			name: 'The County Cooperage',
			component: TheCountyCoperage,
		},
		{
			path: '/contact',
			name: 'Contact Jesse',
			component: ContactForm,
		},

		{
			path: '/:pathMatch(.*)*',
			redirect: { name: 'home' },
		},
	],
})

export default router
