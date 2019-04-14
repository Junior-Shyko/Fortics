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
      <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cadastrar Refrigerante</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Marca</label>
                        <input class="form-control" name="brand" v-model="brand" @blur="onBlur" 
                        type="text" id="brand" placeholder="Ex: Coca-cola, Fanta">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Tipo</label>
                        <select name="type" id="type" v-model="type" class="form-control">
                            <option value="--" selected>--Selecione--</option>
                            <option value="ML">Pet</option>
                            <option value="L">Retornável</option>
                            <option value="L">Garrafa</option>
                            <option value="L">Lata</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Sabor</label>
                        <input class="form-control" v-model="flavor"
                         type="text" placeholder="Ex: Limão, Cola, Laranja">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Medida</label>
                        
                        <select name="litragem" id="litragem" v-model="litrage"  class="form-control">
                            <option value="--" selected>--Selecione--</option>
                            <option value="ML">ML (milímetro)</option>
                            <option value="L">L (litro)</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Valor</label>
                        <input class="form-control" v-model="value" type="text" placeholder="Enter full name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label">Estoque</label>
                        <input class="form-control" v-model="stock" type="number" placeholder="Enter full name">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>
</div>        
    
</template>

<script>
    export default {
        data(){
            return {
                brand: null
            }
        },
        methods:{
            addRefri: function(){

            },
            onBlur: function(){
                alert('O Campo Marca precisa está preenchido.');
            }
        },
        mounted() {
            console.log('Component Search.')
        }
    }

$(document).ready(function () {
    $("#exampleModal").modal('show');
    // $("#brand").blur(function (e) { 
    //     e.preventDefault();
    //     if($("#brand").val() == "")
    //     {
    //         alert("Preencha a marca");
    //         //adicionar a classe is-invalid no form
    //     }
        
    // });
});    
</script>
