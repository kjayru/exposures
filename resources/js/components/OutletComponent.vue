<template>
    <section class="container-fluid paginas">
        <img src="http://exposure.mx/outlet/images/top_image.jpg" class="img-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="pt-5 pb-5">Recientemente agregados</h2>
            </div>
        </div>
        <div class="row justify-content-center grayspace">
            <div class="col-md-8 pt-5 pb-5">
                <div class="row">


                    <div class="card-columns">
                        <div class="card">
                            <img src="http://exposure.mx/images/productos/161-0-Wiz-Kid.JPG" class="card-img-top">

                        </div>
                        <div class="card p-3">
                            <blockquote class="blockquote mb-0 card-body">
                                <img src="http://exposure.mx/images/productos/161-0-Wiz-Kid.JPG"  class="card-img-top">

                            </blockquote>
                        </div>
                        <div class="card">
                           <img src="http://exposure.mx/images/productos/161-0-Wiz-Kid.JPG" class="card-img-top">
                        </div>
                        <div class="card text-white text-center p-3">
                            <blockquote class="blockquote mb-0">
                            <img src="http://exposure.mx/images/productos/753-1-Zone.JPG" class="card-img-top">
                            </blockquote>
                        </div>
                        <div class="card text-center">
                            <img src="http://exposure.mx/images/productos/161-0-Wiz-Kid.JPG" class="card-img-top">
                        </div>

                    </div>


                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="row pb-5 pt-5">
                    <div class="col-md-2">
                        <ul class="navbar">
                            <li><a href="#" class="link">Categoria 1</a></li>
                            <li><a href="#" class="link">Categoria 2</a></li>
                            <li><a href="#" class="link">Categoria 3</a></li>
                        </ul>

                    </div>
                    <div class="col-md-10">
                        <div class="card-columns products">
                            <div class="card">
                                 <a href="/outlet/detalle">
                                <div class="card-head">
                                    <div class="title">Wiz Kid</div>
                                    <div class="price">$ 789</div>
                                </div>


                                   <img src="http://exposure.mx/images/productos/161-0-Wiz-Kid.JPG" class="card-img-top">
                                </a>
                            </div>

                            <div class="card">
                                 <a href="/outlet/detalle">
                                <div class="card-head">
                                    <div class="title">Wiz Kid</div>
                                    <div class="price">$ 789</div>
                                </div>


                                   <img src="http://exposure.mx/images/productos/161-0-Wiz-Kid.JPG" class="card-img-top">
                                </a>
                            </div>

                            <div class="card">
                               <a href="/outlet/detalle">
                                <div class="card-head">
                                    <div class="title">Wiz Kid</div>
                                    <div class="price">$ 789</div>
                                </div>


                                   <img src="http://exposure.mx/images/productos/161-0-Wiz-Kid.JPG" class="card-img-top">
                                </a>
                            </div>
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
         /*axios.get('/getcontacto')
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
            console.log('Component montado empresa.')
        }
    }
</script>
