<template>
<section class="container-fluid 0-h">
    <div class="row">
        <div class="col-md-12 o-h p-0">
            <div class="slide-home">
                    <item-component  v-for="slide in slides[0]"
                                :key="slide.id"
                                :slide="slide"></item-component>
            </div>
        </div>
    </div>

</section>

</template>

<script>
    export default {
        data(){

            return{
                slides:[]
               /* slides:[{
                    'id':1,
                    'file':'4350cbec958add2ab0c3ea5136973d14.jpg'
                },
                {
                    'id':2,
                    'file':'4350cbec958add2ab0c3ea5136973d14.jpg'
                }]*/

            };
        },
        created: function () {


            axios.get('/sliders')
            .then( (response)=> {
                this.slides = response.data;

                })
             .catch(function (error) {
                        // handle error
                        console.log(error);
                    });

        },

    }
</script>
