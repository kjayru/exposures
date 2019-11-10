<template>
    <section class="container-fluid paginas">
        <div class="row justify-content-center"  >
            <div class="col-md-8">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/i2rXb9PxFaU?rel=0" allowfullscreen></iframe>


                </div>


            </div>
            <div class="col-md-8">
                        <div class="contexto">
                            <div class="tituloembed">BD Climbing Life</div>
                                Exposure nacio bajo el nombre de MR Climbing en Agosto del 2007, su primer y unica marca comercializada
                                en aquel entonces era Madrock, ¿su primera oficina? el dormitorio de su fundador, ¿numero de empleados?
                                uno ¿bodega? el cuarto de servicio, lavanderia y hasta en el comedor... cualquier lugar donde se pudieran
                                apilar cajas. desde ese comienzo austero hasta el dia de hoy muchas cosas han cambiado, nos mudamos
                                de base pero para ello aprendimos a soldar y trabajar la madera para construir nuestro nuevo cuartel
                                (bodega, oficina y gimnasio), la familia creció, llegaron nuevos integrantes a nuestro equipo tanto
                                    proveedores, clientes y compañeros de trabajo, aprendimos a ser mas eficientes, mas profesionales,
                                    mejores cada dia.
                        </div>
            </div>
        </div>

        <div class="row justify-content-center"  >

            <div class="col-md-8">

                <div class="row">

                         <div class="col-md-6">
                            <div class="cvideo embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/i2rXb9PxFaU?rel=0" allowfullscreen></iframe>

                            </div>
                            <div class="infotext">
                                Black Diamond camalotx4
                            </div>
                        </div>

                         <div class="col-md-6">
                            <div class="cvideo embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/i2rXb9PxFaU?rel=0" allowfullscreen></iframe>

                            </div>
                            <div class="infotext">
                                Black Diamond camalotx4
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="cvideo embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/i2rXb9PxFaU?rel=0" allowfullscreen></iframe>

                            </div>
                            <div class="infotext">
                                Black Diamond camalotx4
                            </div>
                        </div>

                         <div class="col-md-6">
                            <div class="cvideo embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/i2rXb9PxFaU?rel=0" allowfullscreen></iframe>

                            </div>
                            <div class="infotext">
                                Black Diamond camalotx4
                            </div>
                        </div>

                </div>
            </div>


        </div>
    </section>
</template>

<script>
export default {
    data(){
        return {
            contenido:[]
        }
    },
    created:function(){
         axios.get('/getvideos')
            .then( (response)=> {
                this.contenido = response.data;

                 console.log(response.data);
                })
             .catch(function (error) {
                        // handle error
                console.log(error);
            });
    },
      mounted() {
            console.log('Component montado empresa.')
        }
    }
</script>
