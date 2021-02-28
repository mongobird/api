<template>
   <nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars" v-on:click="toggleSideMenu()"></i></button>
            </div>

            <div class="navbar-brand">
               <router-link to="/dashboard/index" v-if="toggleSidebarTheme == ''"><img src="../../../assets/logo.svg" alt="Lucid Logo" class="img-responsive logo"></router-link>
               <router-link to="/dashboard/index" v-if="toggleSidebarTheme == 'full-dark'"><img src="../../../assets/logo-white.svg" alt="Lucid Logo" class="img-responsive logo"></router-link>                 
            </div>
            
            <div class="navbar-right">
                <form id="navbar-search" class="navbar-form search-form">
                    <input value="" class="form-control" placeholder="Search here..." type="text">
                    <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                </form>                

                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                                                  <li>
                                   
                            
                                    <VMenu  placement='bottom'>
                                        <button type="button"  class="btn btn-sm btn-default mr-1"><i class="icon-bell"><span class="badge badge-info">5</span></i></button>
                                        <template #popper>
                                          
<b class="alert alert-info alert-dismissible">Общий форум:</b>
<br><br>
<div class="bs-example" data-example-id="media-alignment">
                    <div class="media">
                        <div class="media-left"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="http://placehold.it/64x64" width="64" height="64"> </a> </div>
                        <div class="media-body">
                            <h4 class="media-heading">Имя раздела. Имя раздела. Имя раздела</h4>
                            <p> Название темы. Название темы. Название темы </p>
            
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left media-middle"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="http://placehold.it/64x64" width="64" height="64"> </a> </div>
                        <div class="media-body">
                               <h4 class="media-heading">Имя раздела</h4>
                            <p> Название темы </p>
        
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left media-bottom"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="http://placehold.it/64x64" width="64" height="64"> </a> </div>
                        <div class="media-body">
                              <h4 class="media-heading">Имя раздела</h4>
                            <p> Название темы </p>
              
                        </div>
                    </div>
         <span class="badge badge-info">Смотреть все уведомления </span>
                
                </div>



                                        </template>
                                    </VMenu>
                          </li>

                         <li>
                                   
                                  
                                    <VMenu  placement='bottom'>
                                        <button type="button"  class="btn btn-sm btn-default mr-1"><i class="fa fa-bullhorn"></i><span class="badge badge-primary">7</span></button>
                                        <template #popper>
                                          
<b class="alert alert-primary alert-dismissible">Форум школы:</b>
<br><br>
<div class="bs-example" data-example-id="media-alignment">
                    <div class="media">
                        <div class="media-left"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="http://placehold.it/64x64" width="64" height="64"> </a> </div>
                        <div class="media-body">
                            <h4 class="media-heading">Имя раздела. Имя раздела. Имя раздела</h4>
                            <p> Название темы. Название темы. Название темы </p>
            
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left media-middle"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="http://placehold.it/64x64" width="64" height="64"> </a> </div>
                        <div class="media-body">
                               <h4 class="media-heading">Имя раздела</h4>
                            <p> Название темы </p>
        
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left media-bottom"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="http://placehold.it/64x64" width="64" height="64"> </a> </div>
                        <div class="media-body">
                              <h4 class="media-heading">Имя раздела</h4>
                            <p> Название темы </p>
              
                        </div>
                    </div>

                   <span class="badge badge-primary">Смотреть все уведомления </span>   
                </div>



                                        </template>
                                    </VMenu>
                          </li>

                         <li>
                                   
                                  
                                    <VMenu  placement='bottom'>
                                        <button type="button"  class="btn btn-sm btn-default mr-1"><i class="icon-bubbles"></i><span class="badge badge-success">7</span></button>
                                        <template #popper>
                                          
<b class="alert alert-success alert-dismissible">Чаты:</b>
<br><br>
<div class="bs-example" data-example-id="media-alignment">
                    <div class="media">
                        <div class="media-left"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="http://placehold.it/64x64" width="64" height="64"> </a> </div>
                        <div class="media-body">
                            <h4 class="media-heading">Название чата</h4>
                            <p> Название темы. Название темы. Название темы </p>
            
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left media-middle"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="http://placehold.it/64x64" width="64" height="64"> </a> </div>
                        <div class="media-body">
                               <h4 class="media-heading">Имя раздела</h4>
                            <p> Название темы </p>
        
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left media-bottom"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="http://placehold.it/64x64" width="64" height="64"> </a> </div>
                        <div class="media-body">
                              <h4 class="media-heading">Имя раздела</h4>
                            <p> Название темы </p>
              
                        </div>
                    </div>

                   <span class="badge badge-success">Смотреть все уведомления </span>   
                </div>



                                        </template>
                                    </VMenu>
                          </li>

                         <li>
                                   
                                  
                                    <VMenu  placement='bottom'>
                                        <button type="button"  class="btn btn-sm btn-default mr-1"><i class="fa fa-tasks"></i><span class="badge badge-warning">7</span></button>
                                        <template #popper>
                                          
<b class="alert alert-warning alert-dismissible">Задачи:</b>
<br><br>
<div class="bs-example" data-example-id="media-alignment">
                    <div class="media">
                        <div class="media-left"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="http://placehold.it/64x64" width="64" height="64"> </a> </div>
                        <div class="media-body">
                            <h4 class="media-heading">Название задачи</h4>
                            <p> Название темы. Название темы. Название темы </p>
            
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left media-middle"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="http://placehold.it/64x64" width="64" height="64"> </a> </div>
                        <div class="media-body">
                               <h4 class="media-heading">Название задачи</h4>
                            <p> Название темы </p>
        
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left media-bottom"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="http://placehold.it/64x64" width="64" height="64"> </a> </div>
                        <div class="media-body">
                              <h4 class="media-heading">Название задачи</h4>
                            <p> Название темы </p>
              
                        </div>
                    </div>

                   <span class="badge badge-warning">Смотреть все уведомления </span>   
                </div>



                                        </template>
                                    </VMenu>
                          </li>

                         <li>
                                   
                                  
                                    <VMenu  placement='bottom'>
                                        <button type="button"  class="btn btn-sm btn-default mr-1"><i class="icon-energy"></i><span class="badge badge-danger">7</span></button>
                                        <template #popper>
                                          
<b class="alert alert-danger alert-dismissible">Важные уведомления:</b>
<br><br>
<div class="bs-example" data-example-id="media-alignment">
                    <div class="media">
                        <div class="media-left"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="http://placehold.it/64x64" width="64" height="64"> </a> </div>
                        <div class="media-body">
                            <h4 class="media-heading">Название уведомления</h4>
                            <p> Название темы. Название темы. Название темы </p>
            
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left media-middle"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="http://placehold.it/64x64" width="64" height="64"> </a> </div>
                        <div class="media-body">
                               <h4 class="media-heading">Название уведомления</h4>
                            <p> Название темы </p>
        
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left media-bottom"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="http://placehold.it/64x64" width="64" height="64"> </a> </div>
                        <div class="media-body">
                              <h4 class="media-heading">Название уведомления</h4>
                            <p> Название темы </p>
              
                        </div>
                    </div>

                   <span class="badge badge-danger">Смотреть все уведомления </span>   
                </div>



                                        </template>
                                    </VMenu>
                          </li>


              
              

                        <li>
                            <router-link to="/authentication/page-login" class="icon-menu"  v-tooltip.top="'Выход из системы'"><i class="icon-login"></i></router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: 'HeaderComponent',
    methods:{
        outside: function() {
           this.dropActive = false
        },
        notificationOutside: function() {
           this.notificationMenu = false
        },
        toggleSideMenu: function () {
            document.body.classList.toggle('offcanvas-active')
        }
    },data() {
        return {
            dropActive: false,
            notificationMenu: false,
            toggleSidebarClass: false,
            toggleSidebarTheme: '',
        }
    },directives: {
    'click-outside': {
        bind: function(el, binding) {
            // Define Handler and cache it on the element
            const bubble = binding.modifiers.bubble
            const handler = (e) => {
            if (bubble || (!el.contains(e.target) && el !== e.target)) {
                binding.value(e)
            }
            }
            el.__vueClickOutside__ = handler

            // add Event Listeners
            document.addEventListener('click', handler)
            },
        }
    },
    
    mounted() {

 window.Echo.channel('DemoChannel')
 .listen('WebsocketDemoEvent', (e)=> {
     console.log(e);
 });


        Event.$on('theme', (theme) => {
            this.toggleSidebarTheme = theme
        })







    }
}
</script>
<style scoped>

</style>
