<template>
                <div class="col-lg-12 item">
                    <div class="image ">

                        <img :src="'/storage/slide/'+slide[0].file" class="card-img-top" alt="...">
                    </div>
                </div>

</template>
<script>

export default {
    props:['slide'],

      data(){
          return{
              slide:{
                  id:'',
                  file:''
              }
          }
      }
    }


</script>
