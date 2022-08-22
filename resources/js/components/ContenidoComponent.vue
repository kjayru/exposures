<template>
    <section class="container-fluid paginas">
        <div class="row justify-content-center"  v-html="contenido.content">
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
         axios.get('/inicio')
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
            console.log('Component montado.')
        }
    }
</script>
