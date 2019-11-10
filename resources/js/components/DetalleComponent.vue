<template>
    <section class="paginas">
        <div class="container-fluid ">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="producto-img">
                        <img src="http://exposure.mx/images/productos/1146-0-Kids-Tracer.JPG" class="img-fluid">
                    </div>

                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="titleprod">
                        <b>Solution Women's</b>
                        <span class="float-right">$1590</span>
                    </div>

                    <div class="prodbody">
                            <p class="describe">
                                Ya sea que estés buscando un arnés para entrenar en el gimnasio, o un arnés que te proporcione
                                comodidad en la roca, el Black Diamond SOLUTION WOMEN'S no tiene rival, su sistema de 3 correas
                                distribuye equitativamente el peso alrededor de tu cintura, quitándote peso de los puntos sensibles
                                y generándote mayor comodidad
                            </p>
                            <h3>CARACTERÍSTICAS</h3>

                            <ul>
                                <li>Diseñado para adaptarse a los contornos de tu cuerpo</li>
                            <li>Cinturón de peso ligero con Fusion Comfort Tecnology</li>
                            <li>Ajuste contorneado para mayor comodidad y amplitud de movimiento</li>
                            <li>Cuatro engranajes moldeados a presión</li>
                            <li>Bucles de bandas elásticas ajustables y liberables</li>
                            <li>Peso: 330gr</li>
                            </ul>
                            <h3>COLORES DISPONIBLES</h3>
                            <ul>
                            <li>Nickel</li>
                            <li>Octane</li>
                            </ul>
                            <h3>TALLAS DISPONIBLES</h3>
                            <p>
                            XS - S - M - L
                            </p>

                            <a href="#" class="btn btn-primary">Preguntas frecuentes</a>
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
        /* axios.get('/getproductos')
            .then( (response)=> {
                this.contenido = response.data;

                 console.log(response.data);
                })
             .catch(function (error) {
                        // handle error
                console.log(error);
            });*/
    },
      mounted() {
            console.log('Component montado detalle.')
        }
    }
</script>
