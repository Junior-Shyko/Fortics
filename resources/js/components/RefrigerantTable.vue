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
                <select name="searchFilter"  id="" v-model="searchFilter" class="form-control">
                    <option value="">--Selecione--</option>
                    <option value="brand">Marca</option>
                    <option value="litrage">Litragem</option>
                    <option value="value">Valor</option>
                    <option value="stock">Estoque</option>
                </select>
            </div>
            <div class="col-md-5">
                <label for="">Nome</label>
                <input type="text" class="form-control" name="searchDescription" v-model="searchDescription" placeholder="Pesquisar por">
            </div>
            <div class="col-md-2">
                <label for="">Pesquisar</label>
                <button class="btn btn-primary btn-block" type="button" v-on:click="searchRefri();">
                <i class="fa fa-fw fa-lg fa-search"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="" >
        
    <div class="tile">
        <div class="row">
           
            <div class="col-md-12">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="tile-title">{{infoTitle}}</h3>
                    <p class="text-info"><strong>{{totalRefri}}</strong> </p>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="btn btn-danger float-right" v-on:click="deleteMilti();">
                        Excluir Selecionados
                        </a>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
        <div class="tile" v-for='refriItem in list.data' :key="refriItem.id">
           
            <div class="tile-title-w-btn">
                <h3 class="title"><strong>Marca: </strong> {{refriItem.brand}}</h3>
                <div class="row">
                    <div class="col-md-4">
                        <a class="btn btn-primary icon-btn" href="#" v-on:click="showEdit(refriItem);">
                        <i class="fa fa-edit"></i>Editar	</a>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-danger icon-btn" href="#" v-on:click="deleteRefri(refriItem.id)" >
                        <i class="fa fa-trash"></i>Excluir	</a>
                    </div>
                    <div class="col-md-4">
                        <div class="animated-checkbox">
                            <label>
                            <input type="checkbox" v-bind:id="refriItem.id" v-bind:value="refriItem.id"
                             v-model="checkedNames">
                            <span class="label-text"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tile-body">
                <strong>Tipo: </strong> {{refriItem.type}} <br/>
                <strong>Sabor: </strong> {{refriItem.flavor}} <br/>
                <strong>Litragem: </strong> {{refriItem.litrage}} <br/>
                <strong>Valor: </strong> {{refriItem.value.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})}} <br/>
                <strong>Estoque: </strong> {{refriItem.stoke}} <br/>
            </div>
        </div>
        <pagination :data="list" @pagination-change-page="allRefri"></pagination>
        <!-- Modal CADASTRO -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cadastrar Refrigerante</h5>
                        <button type="button" class="close" data-dismiss="modal"  aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Marca</label>
                                    <input class="form-control" name="brand" v-model="brand" @blur="onBlur" 
                                        type="text" id="brandRefri" value="Coca-cola" placeholder="Ex: Coca-cola, Fanta">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Tipo</label>
                                    <select name="type" id="type" v-model="type" :required="true"  class="form-control">
                                        <option value="Pet">Pet</option>
                                        <option value="Retornável">Retornável</option>
                                        <option value="Garrafa">Garrafa</option>
                                        <option value="Lata">Lata</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Sabor</label>
                                    <input class="form-control" v-model="flavor"
                                        type="text"
                                        placeholder="Ex: Limão, Cola, Laranja">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Litragem</label>                        
                                    <input class="form-control" v-model="litrage"
                                        type="text" placeholder="Ex: 600 ml, 1L, 1.5 L">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Valor</label>
                                    <input class="form-control valueRefri" id="" 
                                    v-model="value" type="text" placeholder="R$ 0,00">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Estoque</label>
                                    <input class="form-control" v-model="stoke" min="0"
                                        type="number" value="10" placeholder="Qual o total do seu estoque?">
                                    <small class="form-text text-muted">Somente números</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                        <button type="button" class="btn btn-primary" id="btn_save_refri" v-on:click="addRefri();">
                        <i class="fa fa-save"></i>
                        Cadastrar
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- FIM MODAL CADASTRO -->
        <div class="modal" id="modalEditRefri" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Editar Refriferante</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="PUT" v-on:submit.prevent="updateRefri(id)" id="formEditRefri">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Marca</label>
                                        <input class="form-control" name="brand" v-model="brand"
                                            type="text" id="brandRefri" placeholder="Ex: Coca-cola, Fanta">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tipo</label>
                                        <select name="type" id="type" v-model="type" :required="true"  class="form-control">
                                            <option value="Pet">Pet</option>
                                            <option value="Retornável">Retornável</option>
                                            <option value="Garrafa">Garrafa</option>
                                            <option value="Lata">Lata</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Sabor</label>
                                        <input class="form-control" name="flavor" v-model="flavor"
                                            type="text" placeholder="Ex: Limão, Cola, Laranja">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Litragem</label>                        
                                        <input class="form-control" name="litrage" v-model="litrage"
                                            type="text" placeholder="Ex: 600 ml, 1L, 1.5 L">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Valor</label>
                                        <input class="form-control valueRefri" name="value" v-model="value" type="text" 
                                           placeholder="R$ 0,00">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Estoque</label>
                                        <input class="form-control" name="stoke" v-model="stoke" min="0"
                                            type="number" placeholder="Qual o total do seu estoque?">
                                        <small class="form-text text-muted">Somente números</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                            <button type="submit" class="btn btn-primary" >
                            <i class="fa fa-edit"></i>
                            Alterar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
  
    
</template>

<script>

export default {
  data() {
    return {
      brand: null,
      type: null,
      flavor: null,
      litrage: null,
      value: null,
      stoke: 10,
      list: [],
      listAllRefri: true,
      searchFilter: null,
      searchDescription: null,
      infoTitle: 'Lista de Refrigerantes',
      totalRefri: '',
      checkedNames: []
    }
  },
  methods: {
    allRefri: function(page = 1){
      axios.get(domain_complet + 'api/all-refri?page='+ page)
      .then(response => {
        this.list = response.data;
       
        this.totalRefri = "Total encontrado: "+response.data.total;
      })
      .catch(function (error) {
        console.log(error);
      });
    },
    addRefri: function(){
      // VERIFICANDO SE OS CAMPOS ESTÃO PREENCHIDOS
       if(this.brand == "" || this.type == "" || this.flavor == "" || this.litrage == "" || this.stoke == ""){
        Vue.swal({
          type: 'error',
          title: 'Ops',
          text: 'todos os campos são Obrigatórios'
        });
      }else{      
        axios.post(domain_complet + 'refri',{
            brand: this.brand,
            type: this.type,
            flavor: this.flavor,
            litrage: this.litrage,
            value: this.value,
            stoke: this.stoke
        }).then(response => {
              this.allRefri();
              Vue.swal({
                type: 'success',
                title: 'Sucesso',
                text: 'Refrigerante cadastrado.'
              });
              this.brand    = null,
              this.type     = null,
              this.flavor   = null,
              this.litrage  = null,
              this.value    = null,
              this.stoke    = null
              $("#exampleModal").modal('hide');
          }).catch(error => {            
            Vue.swal({
              type: 'error',
              title: 'Ops!!!',
              text: error.response.data.messageText
            });
        })
      }
    },
    onBlur: function(){
        if(this.brand == "" || this.brand == null){
            alert('O Campo Marca precisa está preenchido.');
            $("#brandRefri").addClass('is-invalid');
            document.getElementById("#brandRefri").focus();
        }
    },
    showEdit: function(item){
      this.id         = item.id;
      this.brand      = item.brand;
      this.type       = item.type;
      this.flavor     = item.flavor;
      this.litrage    = item.litrage;
      this.value      = item.value;
      this.stoke      = item.stoke;      
      $("#modalEditRefri").modal('show');
    },
    updateRefri: function(item){
      console.log();
      console.log(item);
      axios({
        method: 'put',
        url: domain_complet + 'refri/'+item,
        data: $("#formEditRefri").serialize()
      }).then(response => {
        this.allRefri();
        Vue.swal({
          type: 'success',
          title: 'Atualizado',
          text: 'Refrigerante atualizado.'
        });
        $("#modalEditRefri").modal('hide');
        
      }).catch(function(error){
        console.log(error);
      });
    },
    deleteRefri: function(id){
        Vue.swal({
            title: 'Excluir',
            text: "Deseja realmente excluir esse Refrigerante?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim'
        }).then((result) => {
            axios.post(domain_complet + 'refri/'+id, {
                id: this.id
            }).then(response => {
                this.allRefri();
                Vue.swal({
                    type: 'success',
                    title: 'Excluido',
                    text: 'Refrigerante excluido.'
                });
            })        
        }).catch(response => {
            console.log('error');
        })
    },
    searchRefri: function(page = 1){
      this.listAllRefri = false;    
      this.listSearch   = true;
      this.list = [];
      axios.post(domain_complet+'api/search?page='+ page,{
        searchFilter      : this.searchFilter,
        searchDescription : this.searchDescription        
      }).then(response => {
        this.list = response.data;
        this.totalRefri = "Total encontrado: "+this.list.total;
      })
      .catch(function (error) {
        console.log(error);
      });
    },
    deleteMilti: function(){
        Vue.swal({
        title: 'Excluir',
        text: "Deseja realmente excluir esses Refrigerantes?",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim'
        }).then((result) => {
            axios.post(domain_complet+'/api/deleteMultiply', {
                id: this.checkedNames
            }).then(response => {
                this.allRefri();
                Vue.swal({
                    type: 'success',
                    title: 'Excluido',
                    text: 'Refrigerante excluido.'
                });
            })        
        }).catch(response => {
            console.log('error');
        })
    }   
  },
  created(){
    this.allRefri()    
  }
}
$(document).ready(function () {

 $('.valueRefri').mask("#.##0,00", {reverse: false});

});
</script>