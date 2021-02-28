import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
import Testbody from '../panel/Testbody'
import Login from '../auth/Login'
import Home from '../auth/Home'
import Register from '../auth/Register'
import Forum from '../forum/Forum'
import Category from '../forum/Category'
import Question from '../forum/Question'
import M_admin from '../mainusers/M_admin'

const routes = [
    { path: '/',
     component: Home,
     name: 'home'
     },
    { path: '/login',
     component: Login,
     name: 'login'
  
     },
    { path: '/register',
    component: Register,
    name: 'register'

 },
 { path: '/forum',
 component: Forum,
 name: 'forum'


},

{ path: '/forum/category/:category_id',
component: Category,
name: 'category'


},


{ path: '/forum/category/:category_id/question/:question_id',
component: Question,
name: 'question'
},



{ path: '/user/admin/',
component: M_admin,
name: 'user_admin'
},


{ path: '/test',
component: Testbody,
name: 'test'
},


   
  ]

  const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history'
  })

  export default router