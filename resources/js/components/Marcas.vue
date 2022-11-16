<template>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

           <!-- inicio_card_busca -->
           <card-component titulo="Busca de Marcas">
                <template v-slot:conteudo>
                    <div class="form-row">
                        <div class="col-5 mb-3">

                            <input-container-component
                                titulo="ID"
                                id="inputId"
                                id-help="idHelp"
                                text-help="Opcional. Informe o id da marca"
                            >
                            <input type="number" class="form-control" id="inputId" 
                                    aria-describedby="idHelp" min="1" placeholder="ID">
                            </input-container-component>
                        </div>

                        <div class="col mb-3">
                            
                            <input-container-component
                                titulo="Nome da marca"
                                id="inputMarca"
                                id-help="marcaHelp"
                                text-help="Informe o nome da marca"
                            >
                            <input type="text" class="form-control" id="inputMarca" 
                                    aria-describedby="marcaHelp" placeholder="Nome da marca">
                            </input-container-component>
                            
                        </div>
                    </div>
                </template>
                <template v-slot:rodape>
                    <button type="submit" class="btn btn-primary btn-sm float-right">Pesquisar</button>
                </template>
           </card-component>
           <!-- fim_card_busca -->

           <!-- inicio do card de listagem de marcas -->
           <card-component titulo="Relação de marcas">
                <template v-slot:conteudo>
                    <table-component></table-component>
                </template>
                <template v-slot:rodape>
                    <button type="button" class="btn btn-primary btn-sm float-right">Adicionar</button>
                </template>
           </card-component>
           <!-- fim do card de listagem de marcas -->
           
        </div>
    </div>
</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component MARCAS.')
        }
    }
</script>
