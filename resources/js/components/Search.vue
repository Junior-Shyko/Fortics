<template>
<div class="col-md-12">
    <div class="tile">
        <h3 class="tile-title">Pesquise
        <button class="btn btn-info float-right" type="button" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-plus"></i>
            Cadastrar
        </button>
        </h3>
        <div class="row">
            <div class="col-md-5">
                <label for="">Filtro</label>
                <select name="" id="" class="form-control">
                    <option value="">--Selecione--</option>
                    <option value="">Marca</option>
                    <option value="">Litragem</option>
                    <option value="">Valor</option>
                    <option value="">Estoque</option>
                    
                </select>
            </div>  
            <div class="col-md-5">
                <label for="">Nome</label>
                <input type="text" class="form-control" placeholder="Pesquisar por">
            </div>
            <div class="col-md-2">
                <label for="">Pesquisar</label>
                <button class="btn btn-primary btn-block" type="button">
                    <i class="fa fa-fw fa-lg fa-search"></i>
                </button>
            </div>
        </div>
    </div>

</div>        
    
</template>

<script>
    export default {
        data(){
            return {
                brand: null,
                type: null,
                flavor: null,
                litrage: null,
                value: null,
                stoke: null
            }
        },
        methods:{
            
        },
        mounted() {
            console.log('Component Search.')
        }
    }

$(document).ready(function () {
    //$("#exampleModal").modal('show');
    //$('#valueRefri').mask('000.000.000.000.000,00', {reverse: true});
});    
</script>
