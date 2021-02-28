<style >



@import '/assets/vendor/bootstrap/css/bootstrap.min.css';
@import '/assets/vendor/font-awesome/css/font-awesome.min.css';
@import '/assets/css/main.css';
@import '/assets/css/color_skins.css';


</style>



<template>
    <div class="container">
		<ul class="nav">
  <li class="nav-item">
      <transition>
       <router-link to="/">
 <button class="btn btn-outline-primary">На главную страницу</button>
    </router-link>
    </transition>
  </li>


  
</ul>	
<div class="vertical-align-wrap">
	<div class="vertical-align-middle auth-main">
		<div class="auth-box">
            <div class="top">
                <img src="/assets/logo.png" alt="Lucid">
            </div>




            <div class="card">
                <div class="header">
                    <span v-if="message" class="badge badge-danger">{{message}}</span>
                    <p class="lead">Вход в учётную запись</p>
                </div>
                <div class="body">
                    <form class="form-auth-small" @submit.prevent="login">
                        <div class="form-group">
                           <span v-if="errors.email" class="badge badge-danger">{{errors.email[0]}}</span>
                            <label for="signin-email" class="control-label sr-only">Емейл</label>
                            <input v-model="form.email" type="email" class="form-control" id="signin-email" value="" placeholder="Емейл">
                        </div>
                        <div class="form-group">
                             <span v-if="errors.password" class="badge badge-danger">{{errors.password[0]}}</span>
                            <label for="signin-password" class="control-label sr-only">Пароль</label>
                            <input v-model="form.password" type="password" class="form-control" id="signin-password" value="" placeholder="Пароль">
                        </div>
                  
                        <button type="submit" class="btn btn-primary btn-lg btn-block">ВХОД</button>
                        <div class="bottom">
                            <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <router-link to="/forgot_password">Забыли пароль?</router-link></span>
                            <span>Ещё нет аккаунта? <router-link to="/register">Регистрация</router-link></span>
                        </div>
                    </form>
                </div>
            </div>
    
    </div>
    </div>
    </div>


    </div>
</template>






<script>
    export default {
	data() {
	return {
        form:{
            email:null,
            password:null
        },
message:null,       
errors:{}
    }
    
	
	
    },



    methods:{
        login() {
          



      
    axios.post('/api/login',this.form) 
        .then(response =>  {
            User.responseAfterlogin(response)





            window.location.href = '/forum';
            })
        .catch
        (error=> {
        this.errors = error.response.data.errors
        this.message = error.response.data.message
        }
        )




        },
    },
	
        mounted() {
            
 window.Echo.channel("DemoChannel")
 .listen("WebsocketDemoEvent", (e) =>{
     console.log(e);
 })
	
	}
	}
	
	
</script>

