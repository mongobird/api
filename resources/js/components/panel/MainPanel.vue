<template> 
 
 
  <div>
<HeaderComponent v-if="!['home','login', 'register','lockscreen','fpassword','404','403','500','503','maintanance'].includes($route.name)" />
<SidebarComponent  v-if="!['home','login', 'register','lockscreen','fpassword','404','403','500','503','maintanance'].includes($route.name)"/>
    <router-view></router-view>
  </div>
</template>
<script>
import HeaderComponent from '../admin/layouts/HeaderComponent.vue'
import SidebarComponent from '../admin/layouts/SidebarComponent.vue'

export default {
  name: 'App',
  components: {
    HeaderComponent,
    SidebarComponent
  },watch: {
    $route: {
      immediate: true, // also trigger handler on initial value
      handler() {
         if (this.$route.name === 'maintanance') {
            document.body.className = '';
          }else{
            document.body.className = 'theme-cyan';
          }
      }
    }   
  },methods:{
    
  },data (){
      return{
      page:this.$route.name,
      }
  },
  created(){
 



    }
}
</script>