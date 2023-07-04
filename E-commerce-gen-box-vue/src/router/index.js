import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },


  {
    path:'/Login',
    name:'Login',
    component: () => import('../components/Login.vue')
  },
  {
    path: '/Daftar',
    name: 'Daftar',
    component: () => import('../components/Daftar.vue')
  },
  {
    path: '/ChartView',
    name: 'ChartView',
    component: () => import('../views/ChartView.vue')
  },
  {
    path: '/WisView',
    name: 'WisView',
    component: () => import('../views/WisView.vue')
  },
  {
    path: '/ProfileView',
    name: 'ProfileView',
    component: () => import('../views/ProfileView.vue')
  },
  {
    path: '/HomeuserView',
    name: 'HomeuserView',
    component: () => import('../views/HomeuserView.vue')
    },
  {
    path: '/AbotView',
    name: 'AboutView',
    component: () => import('../views/AboutView.vue')
  },
   {
    path: '/CategoryView',
    name: 'CategoryView',
    component: () => import('../views/CategoryView.vue')
   },
   {
    path: '/Checkout',
    name: 'Checkout',
    component: () => import('../views/Checkout.vue')
   },
    {
      path: '/UserProfile',
      name: 'UserProfile',
      component: () => import('../views/UserProfile')
    }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
