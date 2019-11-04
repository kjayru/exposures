<template>
    <section class="container-fluid paginas">
        <div class="row justify-content-center"  v-html="contenido.content">
           <div class="col-md-8">
                <h3>Nuestra Historia</h3>
                <p>Exposure nacio bajo el nombre de MR Climbing en Agosto del 2007, su primer y unica marca
                    comercializada en aquel entonces era Madrock, ¿su primera oficina? el dormitorio de su
                    fundador, ¿numero de empleados? uno ¿bodega? el cuarto de servicio, lavanderia y hasta
                    en el comedor... cualquier lugar donde se pudieran apilar cajas. desde ese comienzo
                    austero hasta el dia de hoy muchas cosas han cambiado, nos mudamos de base pero para ello
                    aprendimos a soldar y trabajar la madera para construir nuestro nuevo cuartel
                    (bodega, oficina y gimnasio), la familia creció, llegaron nuevos integrantes a nuestro
                    equipo tanto proveedores, clientes y compañeros de trabajo, aprendimos a ser mas eficientes,
                    mas profesionales, mejores cada dia.
                </p>
            </div>
            <div class="col-md-8 bloque">
                <p>"Da igual nacer en medio de la llanura, donde los Alpes aparecen como un perfil lejano,
                 o en la ciudad, donde se camina por las profundas trincheras de las calles: si se ha nacido
                 para la montaña, tarde o temprano nos sentimos atraídos"
                 </p>
            </div>
            <div class="col-md-8">
                <p>
                    Actualmente podemos decir con orgullo que estamos consolidados como uno de los
                    principales proveedores de equipo outdoor a nivel nacional y con una satisfaccion aun
                    mayor vemos como nuestra pasion sigue en pie, creemos en lo que vendemos porque lo usamos para hacer lo que amamos.
                </p>
                <p>Nuestra historia se sigue escribiendo....
                </p>
                <img src="http://exposure.mx/images/empresa1.jpg"  class="img-fluid">
            </div>

            <div class="col-md-8">
                <h3>¿Qué hace Exposure?</h3>
                <p>Como comerciantes:
Somos distribuidores mayoristas a nivel nacional de prestigiosas marcas especializadas en la practica de deportes outdoor.
</p><p>
Como usuarios:
La familia exposure esta conformada por apasionados de las montañas y es por eso que somos usuarios de todo lo que vendemos, conocemos cada pieza que comercializamos perfectamente porque cada fin de semana, cada viaje cada oportunidad las llevamos con nosotros para practicar nuestro deporte. la experiencia que nos brinda esto es enorme y la ponemos al servicio de nuestros clientes brindando asesoria especializada de todos nuestros productos para ofrecer la solucion mas adecuada a las particulares necesidades de cada cliente
</p>
<p>
Como miembros de la comunidad:
Nuestro compromiso con el deporte es constante, somos activos miembros de la comunidad aportando apoyo a todo tipo de evento relacionado con nuestros deportes, asi mismo ayudamos a jovenes atletas y desarrolladores de zonas a realizar sus metas y ellos nos apoyan a nosotros representando con entusiasmo nuestras marcas.</p>
            </div>
             {{ contenido.content }}
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
         axios.get('/getempresa')
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
