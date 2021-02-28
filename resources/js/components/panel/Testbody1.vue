<style >



@import '/assets/vendor/bootstrap/css/bootstrap.min.css';
@import '/assets/vendor/font-awesome/css/font-awesome.min.css';
@import '/assets/css/main.css';
@import '/assets/css/color_skins.css';


</style>


<template >

 <div  class="container" v-if= "page === '/'">


<home></home>
   
</div>




 <div  class="container" v-else-if= "page === '/login'">

<login></login>

   
    </div>


 <div  class="container" v-else-if= "page === '/register'">


<login></login>
   
    </div>


 <div  class="container" v-else>
  <toolbar></toolbar>
  <div id="left-sidebar" class="sidebar">
 <profile></profile>
<mainmenu></mainmenu>
  </div>
        <div id="main-content">
             <div class="container-fluid">
<mcontent></mcontent>


              </div>
            </div>     
    </div>




</template>







<script>
import login from '../auth/Login'
import home from '../auth/Home'
import toolbar from './Toolbar'
import mainmenu from './Menu'
import profile from './Profile'
import mcontent from '../mainusers/UsersDirectors'


    export default {
      components:{toolbar,mainmenu,profile,mcontent,login,home},
	data() {
	return {
    page:this.$route.name,

    }
    
	
	
    },



    methods:{

    },
	
        mounted() {
            

	
	}
	}
	
	
</script>

