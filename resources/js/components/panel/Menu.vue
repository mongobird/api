        <template>
    <div class="container">
        <div class="tab-content p-l-0 p-r-0">
            <div class="tab-pane active" id="menu">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">                            
                        

                    
                    <li v-if ="page==='user_admin'" class="active">
                      
                            <a href="" class="has-arrow"><i class="fa fa-male"></i> <span>Пользователи</span></a>
                            <ul>
                            
                            
                                <li v-if ="page==='user_admin'" class="active">
                                   <a href="/user/admin/" >Руководители</a>
                                </li>

                                <li class v-if ="page!=='user_admin'">
                                   <a href="/user/admin/" >Руководители</a>
                                </li>


                                 <li v-if ="page==='user_manager'" class="active">
                                    <a href="/user/manager/" >Менеджеры</a>
                                </li>  

                                   <li class v-if ="page!=='user_manager'">
                                    <a href="/user/manager/" >Менеджеры</a>
                                </li>  


                                <li v-if ="page==='user_metodist'" class="active">
                                   <a href="/user/metodist/" >Методисты</a>
                                </li>     

                                 <li class v-if ="page!=='user_metodist'">
                                   <a href="/user/metodist/" >Методисты</a>
                                </li>     
                                

                               <li v-if ="page==='user_teacher'" class="active">
                                    <a href="/user/teacher/" >Учителя</a>
                                </li> 

                                
                              <li class v-if ="page!=='user_teacher'">
                                    <a href="/user/teacher/" >Учителя</a>
                                </li> 


                                <li v-if ="page==='user_student'" class="active">
                                    <a href="/user/student/" >Учащиеся</a>
                                </li> 

                              <li class v-if ="page!=='user_student'">
                                    <a href="/user/student/" >Учащиеся</a>
                                </li> 


                             <li v-if ="page==='user_parent'" class="active">
                                     <a href="/user/parent/" >Родители</a>
                                </li>   
                                <li class v-if ="page!=='user_parent'">
                                     <a href="/user/parent/" >Родители</a>
                                </li>                                     
                                                   
                            </ul>
                        </li>

                             <li v-if ="page !=='user_admin'" class="">
                      
                            <a href="" class="has-arrow"><i class="fa fa-male"></i> <span>Управление пользователями</span></a>
                            <ul>
                                              <li class="">
                                   <a href="/user/admin/" >Руководители</a>
                                </li>
                                 <li class="">
                                    <a href="/user/manager/" >Менеджеры</a>
                                </li>                                    

                                  <li class="">
                                   <a href="/user/metodist/" >Методисты</a>
                                </li>                                    
                                <li class="">
                                    <a href="/user/teacher/" >Учителя</a>
                                </li> 
                                 <li class="">
                                    <a href="/user/student/" >Учащиеся</a>
                                </li> 
                                 <li class="">
                                     <a href="/user/parent/" >Родители</a>
                                </li>  
                                                   
                            </ul>
                        </li>

                                       <li  class="">       
                            <a href="" class="has-arrow"><i class="fa fa-eye"></i> <span>Разведка</span></a>
                            <ul>
                                <li class="">
                                   <a href="" >Форум</a>
                                </li>
                                 <li class="">
                                   <a href="" >Курсы</a>
                                </li>
                                 <li class="">
                                    <a href="" >Чаты</a>
                                </li>
                                                   
                            </ul>
                        </li>
              
              
              
              <li  class="">
                      
                            <a href="" class="has-arrow"><i class="fa fa-files-o"></i> <span>Архивный материал</span></a>
                            <ul>
                                              <li class="">
                                   <a href="" >Пользователи</a>
                                </li>
                                 <li class="">
                                    <a href="" >Курсы</a>
                                </li>                                    

                                  <li class="">
                                   <a href="" >Разное</a>
                                </li>                                    
          
                                                   
                            </ul>
                        </li>



                                                  <li class="">
                      
                            <a href="" class="has-arrow"><i class="fa fa-users"></i> <span>Управление пользователями</span></a>
                            <ul>
                       
                                 <li class="">
                                    <a href="/user_s/manager/" >Менеджеры</a>
                                </li>                                    

                                  <li class="">
                                   <a href="/user_s/metodist/" >Методисты</a>
                                </li>                                    
                                <li class="">
                                    <a href="/user_s/teacher/" >Учителя</a>
                                </li> 
                                 <li class="">
                                    <a href="/user_s/student/" >Учащиеся</a>
                                </li> 
                                 <li class="">
                                     <a href="/user_s/parent/" >Родители</a>
                                </li>  
                                                   
                            </ul>
                        </li>

                      <li  class="">
                      
                            <a href="" class="has-arrow"><i class="icon-globe"></i> <span>Управление сайтом</span></a>
                            <ul>
                                <li class="">
                                   <a href="" >О проекте</a>
                                </li>
                                 <li class="">
                                    <a href="" >Новости проекта</a>
                                </li>                                    

                                  <li class="">
                                   <a href="" >FAQ</a>
                                </li>                                    
          
                                                   
                            </ul>
                        </li>
                        
                       
                         <li  class="">       
                            <a href="" class="has-arrow"><i class="fa fa-bullhorn"></i> <span>Управление школой</span></a>
                            <ul>
                                <li class="">
                                   <a href="" >Информация о школе</a>
                                </li>
                                 <li class="">
                                   <a href="" >Отделения школы</a>
                                </li>
                                 <li class="">
                                    <a href="" >Новости школы (публичные)</a>
                                </li> 

                                 <li class="">
                                    <a href="" >Информация для сотрудников</a>
                                </li>  

                                <li class="">
                                    <a href="" >Информация для обучающихся и их родителей</a>
                                </li> 
                                                   
                            </ul>
                        </li>

                    
                         <li v-if ="(page ==='forum' || page ==='category' || page ==='question')&&show===true " class="active">                 
                            <a href="/forum" ><i class=" icon-question "></i> <span>Общий форум (для руководителей)</span></a>
                        </li>
                         <li v-if ="page !=='forum' && page !=='category' && page !=='question'" class="">                 
                            <a href="/forum" ><i class=" icon-question "></i> <span>Общий форум (для руководителей)</span></a>
                        </li>
              

                          <li class="">
                            <a href="" ><i class="fa fa-comments-o"></i> <span>Форум школы (для сотрудников)</span></a>
                        </li>
                        
                       <li class="">
                            <a href="" ><i class="fa fa-rocket"></i> <span class="align-center" >Управление проектами</span></a>
                        </li>


                       <li class="">
                            <a href="" ><i class="icon-graduation"></i> <span>Управление курсами</span></a>
                        </li>
                        
                        <li class="">
                            <a href="" ><i class="icon-users"></i> <span>Управление группами</span></a>
                        </li>

                         
                         <li class="">
                            <a href="" ><i class="icon-clock"></i> <span>Управление расписанием</span></a>
                        </li>

                        
                         <li class="">
                            <a href="" ><i class="icon-home"></i> <span class="align-center" >Мои задачи</span></a>
                        </li>

                         <li class="">
                            <a href="" ><i class="fa fa-send"></i> <span class="align-center" >Чаты</span></a>
                        </li>

                         <li class="">
                            <a href="" ><i class="fa fa-rouble"></i> <span class="align-center" >Управление платежами</span></a>
                        </li>




                    </ul>
                </nav>
            </div>

        </div> 
    </div>
</template>

<script>


export default {
   


    data () {
     return {

        page:this.$route.name,
        show:true
    }
    },
    methods: {

       


    },
      mounted() {
      



      
      }


    


}
</script>

<style>

</style>
