<template>
  <div class="container">
          <nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
        </div>

        <div class="navbar-brand">
            <a href="/"><img src="/assets/img/logo.svg" alt="Lucid Logo" class="img-responsive logo"></a>                
        </div>
        
        <div class="navbar-right">           
            <div id="navbar-menu">
                <ul class="nav navbar-nav">

                
                            
                            
                            
<button class="btn btn-outline-primary" v-popover:forum><i class="icon-envelope"></i>&nbsp;Общий форум<span class="badge float-right">6</span></button>
<button class="btn btn-outline-success" v-popover:forum_s><i class="icon-envelope"></i>&nbsp;Форум школы<span class="badge float-right">6</span></button>
<button class="btn btn-outline-info" v-popover:chat><i class="icon-envelope"></i>&nbsp;Чат<span class="badge float-right">6</span></button>
<button class="btn btn-outline-secondary" v-popover:tasks><i class="icon-envelope"></i>&nbsp;Задачи<span class="badge float-right">6</span></button>                          
 <button class="btn btn-outline-danger" v-popover:money><i class="icon-envelope"></i>&nbsp;Выплаты<span class="badge float-right">6</span></button>                                                    
                            
 <button class="btn"><i class="icon-logout">&nbsp;Выход</i></button>
                 
                </ul>
            </div>
        </div>
    </div>
</nav>




<popover name="forum" :width="500">
<div class="bs-example" data-example-id="media-alignment">
                    <div class="media">
                        <div class="media-left"> <a href="javascript:void(0);"> <img alt="" class="media-object" src="http://placehold.it/64x64" width="64" height="64"> </a> </div>
                        <div class="media-body">
                            <h4 class="media-heading">Имя раздела</h4>
                            <p> Название темы </p>
            
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
                </div>
                     
                       
                   
</popover>



<popover name="forum_s" >

    Школьный форум                 
                   
</popover>

<popover name="chat" >

    Чат                
                   
</popover>

<popover name="tasks" >

  Задачи              
                   
</popover>

<popover name="money" >

   Выплаты               
                   
</popover>

</div>

</template>

<script>
export default {
            data() {
            
            return {
              editmode: false,
            form: new Form({
                  
                  _id : '',
                    name : '',
                    phone: '',
                    email: '',
                    status: '',
                    id_school: '',
                    password: '',
				
		
					
                }),
           
                users : {},
                check:'',
               
    
            }
        },
methods: {

		NewForum() {
		this.editmode =false;
		this.form.reset();
		this.$modal.show('NewForum');
		
		},

}

}
</script>

<style>

</style>
