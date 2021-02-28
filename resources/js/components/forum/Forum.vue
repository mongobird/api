<template>

        
            <div class="col-md-10 offset-md-2">
                 
<br>
    <div class="d-flex flex-wrap justify-content-between">
        
         <div> <button type="button" class="btn btn-shadow btn-wide btn-primary"> <span class="btn-icon-wrapper pr-2 opacity-7"> <i class="fa fa-plus fa-w-20"></i> </span> Создать категорию </button> </div>

    </div>


            <div class="body">
              
                <ul class="list-unstyled feeds_widget">
                    
                     
                    <li>
                       <router-link to="/forum/category/111">
                         <img class="img-fluid img-thumbnail" src="/assets/sm/avatar2.jpg" alt="Awesome Image">
                          </router-link>   
                        <h4 class="title">Название категории<small class="float-right text-muted">10</small></h4>
                        <div class="feeds-left"></div>
                        <div class="feeds-body">
                            
                            <small>Описание категории</small>
                           
                            <button v-tooltip.bottom="'Редактировать'"   @click='Edit()' type="button" class="btn btn-warning mr-2" ><i class="fa fa-edit"></i></button>
                            <button v-tooltip.bottom="'Удалить'"  @click='Delete()' type="button" class="btn btn-danger" ><i class="fa fa-trash-o"></i></button>
                          
                        </div>
                         
                    </li>
                                        <li>
                       <router-link to="/forum/category/111">
                         <img class="img-fluid img-thumbnail" src="/assets/sm/avatar2.jpg" alt="Awesome Image">
                          </router-link>   
                        <h4 class="title">Название категории<small class="float-right text-muted">10</small></h4>
                        <div class="feeds-left"></div>
                        <div class="feeds-body">
                            
                            <small>Описание категории</small>
                           
                            <button v-tooltip.bottom="'Редактировать'"   @click='Edit()' type="button" class="btn btn-warning mr-2" ><i class="fa fa-edit"></i></button>
                            <button v-tooltip.bottom="'Удалить'"  @click='Delete()' type="button" class="btn btn-danger" ><i class="fa fa-trash-o"></i></button>
                          
                        </div>
                         
                    </li>
                                        <li>
                       <router-link to="/forum/category/111">
                         <img class="img-fluid img-thumbnail" src="/assets/sm/avatar2.jpg" alt="Awesome Image">
                          </router-link>   
                        <h4 class="title">Название категории<small class="float-right text-muted">10</small></h4>
                        <div class="feeds-left"></div>
                        <div class="feeds-body">
                            
                            <small>Описание категории</small>
                           
                            <button v-tooltip.bottom="'Редактировать'"   @click='Edit()' type="button" class="btn btn-warning mr-2" ><i class="fa fa-edit"></i></button>
                            <button v-tooltip.bottom="'Удалить'"  @click='Delete()' type="button" class="btn btn-danger" ><i class="fa fa-trash-o"></i></button>
                          
                        </div>
                         
                    </li>
                    
                       
                </ul>
            </div>
     
        

  

<br>             

        <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Назад</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Вперед</a></li>
                    </ul>
                </nav>


<online></online>      

              </div>
              
    


</template>

<script>



import online from '../panel/Online'


export default {
    components:{online},


    data () {
     return {

       page:this.$route.name,
    }
    },
    methods: {

       
       Delete() {
            console.log("Удалили")  
        },
  Edit() {
            console.log("Отредактировали")  
        },

    },
      mounted() {
      



      
      }


    


}
</script>