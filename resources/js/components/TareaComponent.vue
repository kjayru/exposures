<template>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    AGREGAR NOTA
                </div>
                <div class="card-body">
                    <form @submit.prevent="agregar" id="fr-uno">

                        <div class="form-group col-md-5">
                            <input  class="form-control" type="text" name="nombre" v-model="tarea.nombre" placeholder="nombre">
                        </div>
                        <div class="form-group col-md-5">
                            <input  class="form-control" type="text" name="descripcion" v-model="tarea.descripcion" placeholder="Descripción">
                        </div>
                        <div class="form-group col-md-5">
                            <button class="btn btn-primary" type="submit">Agregar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   </div>
</div>
</template>

<script>
$("#fr-uno").submit(function(e){
    e.preventDefault();
    debugger
});
export default {
   
        data(){
           
            return{
                tareas:[],
                tarea:{nombre : '',descripcion : ''}
            };
        },   
            created: function () {
          
            console.log('a es: ' + this.tarea.nombre)
        },
        methods:{
             agregar(){
                 alert("evento ejecutado");
             }
        }
    }


</script>