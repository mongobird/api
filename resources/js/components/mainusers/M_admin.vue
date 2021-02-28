<template>
     <div  class="container">
  <toolbar></toolbar>
  <div id="left-sidebar" class="sidebar">
 <profile></profile>
<mainmenu></mainmenu>
  </div>
        <br><br><br><br><br><br>
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Список пользователей</h2>
                <ul class="header-dropdown">
                    <li>
        <a  @click='newModal()' class="md-btn md-btn-primary uk-margin-small-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Добавить нового пользователя"><i class="icon-plus"></i></a>
                        
                        </li>

           
                </ul>
            </div>
            <div class="body table-responsive">
                <table class="table table-hover m-b-0 c_list">
                    <thead>
                        <tr>
           
                            <th>Имя</th>                                    
                            <th>Телефон</th>   
                            <th>E-mail</th> 
                            <th>ID Школы</th>   
                            <th>Школа</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                        <tbody>
                        <tr v-for="user in users.data" :key="user._id">
            
                            <td class="online">
                                <img :src="'/img/profile/' + user.photo" class="rounded-circle avatar" alt="">
                                <p class="c_name"><a :href="'/profile_info/' + user.id_profile">{{user.name}}</a> </p>
                                <span v-if="user.status === 'active'" class="badge badge-info m-l-10 hidden-sm-down">Активен</span>
                                <span v-if="user.status === 'ban'" class="badge badge-error m-l-10 hidden-sm-down">Заблокирован</span>
                                <span v-if="user.check === true" class="badge badge-error m-l-10 hidden-sm-down" ><i class="fa fa-check"></i></span>
                                <span v-if="user.check === false" class="badge badge-error m-l-10 hidden-sm-down"><i class="icon-ban"></i></span>
                                 <span v-if="user.online !== 'offline'" class="badge badge-success m-l-10 hidden-sm-down">В сети</span>
                            </td>
                            <td>
                                <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>{{user.phone}}</span>
                            </td>  
                             <td>
                                <span class="email"><i class="zmdi zmdi-phone m-r-10"></i>{{user.email}}</span>
                            </td> 
                             <td>
                     
                                <span class="s_name"><i class="zmdi zmdi-phone m-r-10"></i> {{user.id_school}}</span>
                            </td>                 
                            <td>
                     
                                <span class="s_name"><i class="zmdi zmdi-phone m-r-10"></i><a :href="'/school_info/' + user.id_school"> {{user.name_school}}</a></span>
                            </td>
                            <td>                                            
                                <button type="button" @click ="editModal(user)" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button>
                                <button type="button"  @click ="DeleteUser(user._id,user.name)" data-type="confirm" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>







                    </tbody>
                </table>
            </div>
        </div>
    </div>
        </div>

<modal 
      name="AddNew"
      :width="600"
      :height="680"
      :delay="100"
      :resizable="true">
      
      
 

    <!-- Modal content-->
    
	<form @submit.prevent='editmode ? updateUser() : createUser()'>
<div class="modal-content">
            <div class="modal-header">
                <h4 v-show="!editmode" class="title">Добавление нового пользователя</h4>
                <h4 v-show="editmode" class="title">Редактирование данных о пользователе</h4>
            </div>
            <div class="modal-body"> 
                
    <div class="form-group">
      <label>Имя</label>
      <input v-model="form.name" type="text" name="name"
        class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
      <has-error :form="form" field="name"></has-error>
    </div>

    <div class="form-group">
      <label>Телефон</label>
      <input v-model="form.phone" type="text" name="phone"
        class="form-control" :class="{ 'is-invalid': form.errors.has('phone') }">
      <has-error :form="form" field="phone"></has-error>
    </div>

    <div class="form-group">
      <label>Емейл</label>
      <input v-model="form.email" type="email" name="email"
        class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
      <has-error :form="form" field="email"></has-error>
    </div>

    <div class="form-group">
            <label>Статус</label>
             <br>
             <label class="fancy-radio">
           <input v-model="form.status" type="radio" name="status" value="active" required="" checked >
            <span><i></i>Активен</span>
            </label>
           <label class="fancy-radio">
             <input v-model="form.status" type="radio" name="status" value="ban" >
           <span><i></i>Заблокирован</span>
           </label>
           <p id="error-radio"></p>
    </div>

        <div class="form-group">
      <label>ID Школы (указываем в том случае, если школа уже существует, для новой школы не указываем)</label>
      <input v-model="form.id_school" type="text" name="id_school"
        class="form-control" :class="{ 'is-invalid': form.errors.has('id_school') }">
      <has-error :form="form" field="id_school"></has-error>
    </div>

            <div class="form-group">
      <label>Пароль (не менее 6 символов)</label>
      <input v-model="form.password" type="password" name="password"
        class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
      <has-error :form="form" field="password"></has-error>
    </div>

                
            </div>
            
            
            <div class="modal-footer">
                <button v-show="!editmode" type="submit" class="btn btn-primary">Сохранить</button>
                <button v-show="editmode" type="submit" class="btn btn-primary">Редактировать</button>
                <button type="button" @click='closeModal()' class="btn btn-danger" data-dismiss="modal">Закрыть</button>
            </div>


        </div> 

</form> 
    

  
</modal>
            </div>     
    


</template>

<script>
  import toolbar from '../panel/Toolbar'
import mainmenu from '../panel/Menu'
import profile from '../panel/Profile'



export default {
    components:{toolbar,mainmenu,profile},
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
loadUsers() {

axios.get('/api/user')
                            .then(response => {
                                this.users = response.data;
                            })
},

createUser () {

    this.$Progress.start()
    this.form.post('/api/user')
    
    .then(()=> {

  toast.fire({
  icon: 'success',
  html:'<img src="/img/profile/photo.png"  class="rounded-circle avatar"></br>'+
'Пользователь добавлен</br>'+
'<a href="//github.com">links</a></br> ' +
'and other HTML tags',
})  
 this.$modal.hide('AddNew');

Fire.$emit('AfterCreate');

 this.$Progress.finish();


    })
        
  .catch(()=>{

  toast.fire({
  icon: 'error',
  title: 'Ошибка при добавление пользователя'
}) 

  })    
                    

   
},


		updateUser(){
                
               this.$Progress.start();
                this.form.put('/api/user/'+this.form._id)
                .then(() => {
                    
                  this.$modal.hide('AddNew'); 
                		toast.fire({
  icon: 'success',
  title: 'Информация о пользователе '+this.form.name+' обновлена!'
})

                    
						this.$Progress.finish();
                        Fire.$emit('AfterCreate');
                        
                })
                .catch(() => {
				   this.$Progress.fail();
                    toast.fire({
  icon: 'error',
  title: 'Ошибка при редактирования пользователя ' +this.form.name+ ' !'
}) 
				   
                });

            },


DeleteUser (id,name) {

swal.fire({
  title: 'Уверены, что хотите удалить пользователя '+name+' ?',
  text: "Востановить данные будет невозможно",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  cancelButtonText: 'Отмена',
  confirmButtonText: 'Да, удалить '+name+' !'
}).then((result) => {
 



 if (result.isConfirmed) {

  
 

this.form.delete('/api/user/'+id).then(() =>{

 this.$Progress.start()   

    swal.fire(
      'Удален',
      'Пользователь '+name+' успешно был удален',
      'success'
    )
Fire.$emit('AfterCreate');
this.$Progress.finish();

  })

 .catch(()=> {
  toast.fire({
  icon: 'error',
  title: 'Ошибка при удалении пользователя' +name+ ' !'
}) 

})


 }



 })
 

},


		editModal(user) {
		this.editmode =true;
		this.form.reset();
    this.$modal.show('AddNew');
    this.form.fill(user);
		
		},



		newModal() {
		this.editmode =false;
		this.form.reset();
		this.$modal.show('AddNew');
		
		},

        	closeModal() {
this.$modal.hide('AddNew');
		
		},


},
        created() {



            this.loadUsers();


Fire.$on('AfterCreate' ,() => {
    this.loadUsers(); 
    });

        }


    }
</script>
