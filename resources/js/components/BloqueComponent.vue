<template>
    <div class="col-md-12">
        <div class="slide-home">           
               
                <item-component  v-for="slide in slides[0]"
                            :key="slide.id"
                            :slide="slide"></item-component>          
        </div>
    </div>
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
        methods:{
             agregar(){
                 alert("evento ejecutado");
             }
        }
    }
</script>
