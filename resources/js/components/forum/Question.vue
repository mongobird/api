<template>

       <div class="col-md-10 offset-md-2">
              
<br>
    <div class="d-flex flex-wrap justify-content-between">
        <div> <router-link to ="/forum/category/111"><button type="button" class="btn btn-shadow btn-wide btn-primary"> <span class="btn-icon-wrapper pr-2 opacity-7"> <i class="icon-arrow-left"></i> </span> Смотреть другие темы данной категории </button> </router-link></div>
        
      
    </div>
<br>
<div class="card">
         
                <div class="body">

<div class="container-fluid mt-100">
     <div class="row">
         <div class="col-md-12">
               <h5>Название темы1</h5>
             <div class="card mb-4">
                 <div class="card-header">
                   
                     <div class="media flex-wrap w-100 align-items-center"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583246/AAA/2.jpg" class="d-block ui-w-40 rounded-circle" alt="">
                         <div class="media-body ml-3"> <a href="javascript:void(0)" data-abc="true">Tom Harry</a>
                             <div class="text-muted small">13 days ago</div>
                         </div>
                         <div class="text-muted small ml-3">
                             <div>Member since <strong>01/1/2019</strong></div>
                             <div><strong>134</strong> posts</div>
                         </div>
                     </div>
                 </div>
                 <div class="card-body">
                     <p> For me, getting my business website made was a lot of tech wizardry things. Thankfully i get an ad on Facebook ragarding commence website. I get connected with BBB team. They made my stunning website live in just 3 days.
                         With the increase demand of online customers. I had to take my business online. BBB Team guided me at each step and enabled me to centralise my work and have control on all aspect of my online business.
                     </p>
                     <p> For me, getting my business website made was a lot of tech wizardry things. Thankfully i get an ad on Facebook ragarding commence website. I get connected with BBB team. They made my stunning website live in just 3 days.
                         With the increase demand of online customers. I had to take my business online. BBB Team guided me at each step and enabled me to centralise my work and have control on all aspect of my online business.
                     </p>
                 </div>
                 
         
             </div>
             <button v-tooltip.bottom="'Редактировать'"   @click='Edit()' type="button" class="btn btn-warning mr-2" ><i class="fa fa-edit"></i></button>
                            <button v-tooltip.bottom="'Удалить'"  @click='Delete()' type="button" class="btn btn-danger" ><i class="fa fa-trash-o"></i></button>
              
         </div>
     </div>
 </div>




                </div>
            </div>

  <div class="col-lg-12 col-md-12">
        <div class="card">
<h6 class="media-heading">Комментарии:</h6>
            </div>
            </div>



  <div class="col-lg-12 col-md-12" >


<div class="card">
         
                <div class="body">


<div class="container-fluid mt-100">
     <div class="row">
         <div class="col-md-12">
             <div class="card mb-4">
                 <div class="card-header">
                     <div class="media flex-wrap w-100 align-items-center"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583246/AAA/2.jpg" class="d-block ui-w-40 rounded-circle" alt="">
                         <div class="media-body ml-3"> <a href="javascript:void(0)" data-abc="true">Tom Harry</a>
                             <div class="text-muted small">13 days ago</div>
                         </div>
                         <div class="text-muted small ml-3">
                             <div>Member since <strong>01/1/2019</strong></div>
                             <div><strong>134</strong> posts</div>
                         </div>
                     </div>
                 </div>
                 <div class="card-body">
                     <p> For me, getting my business website made was a lot of tech wizardry things. Thankfully i get an ad on Facebook ragarding commence website. I get connected with BBB team. They made my stunning website live in just 3 days.
                         With the increase demand of online customers. I had to take my business online. BBB Team guided me at each step and enabled me to centralise my work and have control on all aspect of my online business.
                     </p>
                     <p> For me, getting my business website made was a lot of tech wizardry things. Thankfully i get an ad on Facebook ragarding commence website. I get connected with BBB team. They made my stunning website live in just 3 days.
                         With the increase demand of online customers. I had to take my business online. BBB Team guided me at each step and enabled me to centralise my work and have control on all aspect of my online business.
                     </p>
                 </div>
                 <div class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pt-0 pb-3">
                     <div class="px-4 pt-3"> <a href="javascript:void(0)" class="text-muted d-inline-flex align-items-center align-middle" data-abc="true"> <i class="fa fa-heart text-danger"></i>&nbsp; <span class="align-middle">445</span> </a> <span class="text-muted d-inline-flex align-items-center align-middle ml-4"> </span>  </div>
                     
                 </div>
             </div>
         </div>
          <button v-tooltip.bottom="'Редактировать'"   @click='Edit()' type="button" class="btn btn-warning mr-2" ><i class="fa fa-edit"></i></button>
                            <button v-tooltip.bottom="'Удалить'"  @click='Delete()' type="button" class="btn btn-danger" ><i class="fa fa-trash-o"></i></button>
     </div>
 </div>

     </div>
 </div>




        <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Назад</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Вперед</a></li>
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