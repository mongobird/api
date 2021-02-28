<template>

         <div class="col-md-10 offset-md-2">
               
<br>
  <div class="container-fluid mt-100">
    <div class="d-flex flex-wrap justify-content-between">
        <div> <router-link to ="/forum"><button type="button" class="btn btn-shadow btn-wide btn-primary"> <span class="btn-icon-wrapper pr-2 opacity-7"> <i class="icon-arrow-left"></i> </span> К категориям </button> </router-link></div>
         <div> <button type="button" class="btn btn-shadow btn-wide btn-primary"> <span class="btn-icon-wrapper pr-2 opacity-7"> <i class="fa fa-plus fa-w-20"></i> </span> Создать тему </button> </div>
        
    </div>
<div class="card">
                <router-link to="/forum/category/111">
                         <img class="img-fluid img-thumbnail" src="/assets/sm/avatar2.jpg" alt="Awesome Image">
                          </router-link>   
                        <h4 class="title">Название категории</h4>
                        <div class="feeds-left"></div>
                        <div class="feeds-body">
                            
                            <small>Описание категории</small>
                           
                        
                          
                        </div>
                          </div>

    <div class="card mb-3">
        <div class="card-header pl-0 pr-0">
            <div class="row no-gutters w-100 align-items-center">
                <div class="col ml-3">Название темы</div>
                <div class="col-4 text-muted">
                    <div class="row no-gutters align-items-center">
                        <div class="col-4">Количество ответов</div>
                        <div class="col-8">Последнее сообщение</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body py-3">
            
            <div class="row no-gutters align-items-center">
                <div class="col"> <router-link to="/forum/category/111/question/111" class="text-big" data-abc="true">How can i change the username?</router-link>
                    <div class="text-muted small mt-1">Started 25 days ago &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted" data-abc="true">Neon Mandela</a></div>
                 <button v-tooltip.bottom="'Редактировать'"   @click='Edit()' type="button" class="btn btn-warning mr-2" ><i class="fa fa-edit"></i></button>
                            <button v-tooltip.bottom="'Удалить'"  @click='Delete()' type="button" class="btn btn-danger" ><i class="fa fa-trash-o"></i></button>
                </div>
                <div class="d-none d-md-block col-4">
                    <div class="row no-gutters align-items-center">
                        <div class="col-4">12</div>
                        <div class="media col-8 align-items-center"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583246/AAA/2.jpg" alt="" class="d-block ui-w-30 rounded-circle">
                            
                            <div class="media-body flex-truncate ml-2">
                                <div class="line-height-1 text-truncate">1 day ago</div> <a href="javascript:void(0)" class="text-muted small text-truncate" data-abc="true">by Tim cook</a>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="m-0">

                <div class="card-body py-3">
            
            <div class="row no-gutters align-items-center">
                <div class="col"> <router-link to="/forum/category/111/question/111" class="text-big" data-abc="true">How can i change the username?</router-link>
                    <div class="text-muted small mt-1">Started 25 days ago &nbsp;·&nbsp; <a href="javascript:void(0)" class="text-muted" data-abc="true">Neon Mandela</a></div>
                 <button v-tooltip.bottom="'Редактировать'"   @click='Edit()' type="button" class="btn btn-warning mr-2" ><i class="fa fa-edit"></i></button>
                            <button v-tooltip.bottom="'Удалить'"  @click='Delete()' type="button" class="btn btn-danger" ><i class="fa fa-trash-o"></i></button>
                </div>
                <div class="d-none d-md-block col-4">
                    <div class="row no-gutters align-items-center">
                        <div class="col-4">12</div>
                        <div class="media col-8 align-items-center"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583246/AAA/2.jpg" alt="" class="d-block ui-w-30 rounded-circle">
                            
                            <div class="media-body flex-truncate ml-2">
                                <div class="line-height-1 text-truncate">1 day ago</div> <a href="javascript:void(0)" class="text-muted small text-truncate" data-abc="true">by Tim cook</a>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>





    </div>
    <nav>
        <ul class="pagination mb-5">
            <li class="page-item disabled"><a class="page-link" href="javascript:void(0)" data-abc="true">Назад</a></li>

            <li class="page-item"><a class="page-link" href="javascript:void(0)" data-abc="true">Вперед</a></li>
        </ul>
    </nav>
</div>







    </div>             





</template>

<script>






export default {
    components:{},

    data () {
     return {

        active: false
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