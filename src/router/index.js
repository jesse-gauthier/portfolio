import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import ProjectListView from '@/views/ProjectListView.vue'
import ReactContactBook from '@/pages/projects/react_contact_book.vue'
import Password_Generator from '@/pages/projects/Password_Generator.vue'

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
			path: '/:pathMatch(.*)*',
			redirect: { name: 'home' },
		},
	],
})

export default router
