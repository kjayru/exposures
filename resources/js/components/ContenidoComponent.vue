<template>

    <section class="container" v-html="contenido[0].content">
       {{ contenido[0].content }}
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
         axios.get('/page')
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