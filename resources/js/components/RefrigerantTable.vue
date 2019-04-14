<template>
<div class="col-md-12">
  <div class="">
    <h3 class="tile-title">Refrigerantes</h3>
  </div>
  <div class="tile"    v-for='item in list'>   
      <div class="tile-title-w-btn">
        <h3 class="title"><strong>Marca: </strong> {{item.brand}}</h3>
        <div class="row">
          <div class="col-md-4">
            <a class="btn btn-primary icon-btn" href="#" v-on:click="showEdit(item);">
              <i class="fa fa-edit"></i>Editar	</a>
          </div>
          <div class="col-md-4">
            <a class="btn btn-danger icon-btn" href=""><i class="fa fa-trash"></i>Excluir	</a>
          </div>
          <div class="col-md-4">
            <div class="animated-checkbox">
            <label>
              <input type="checkbox"><span class="label-text"></span>
            </label>
          </div>
          </div>
        </div>
        
      </div>
      <div class="tile-body">
            <strong>Tipo: </strong> {{item.type}} <br/>
            <strong>Sabor: </strong> {{item.flavor}} <br/>
            <strong>Litragem: </strong> {{item.litrage}} <br/>
            <strong>Valor: </strong> {{item.value}} <br/>
            <strong>Estoque: </strong> {{item.stoke}} <br/>
      </div>
  </div>
      <!-- Modal CADASTRO -->
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
                            <input class="form-control" v-model="flavor"
                            type="text" placeholder="Ex: Limão, Cola, Laranja">
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
                            <input class="form-control" v-model="value" type="text" 
                            id="valueRefri" placeholder="R$ 0,00">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="control-label">Estoque</label>
                            <input class="form-control" v-model="stoke" min="0"
                            type="number" placeholder="Qual o total do seu estoque?">
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
                    <input class="form-control" name="value" v-model="value" type="text" 
                    id="valueRefri" placeholder="R$ 0,00">
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
      stoke: null,
      list: [],
      updateRefriData:{
        brand : null,
        type: null,
        flavor: null,
        litrage: null,
        value: null,
        stoke: null,
      }
    }
  },
  methods: {
    allRefri: function(){
      axios.get(domain_complet + 'api/all-refri')
      .then(response => {
        let refri = response.data
        
        if(refri.length){
            this.list = this.list.concat(refri)
           
        }else{
            console.log(this.list);
        }
      })
      .catch(function (error) {
        console.log(error);
      });
    },
    addRefri: function(){
        axios.post(domain_complet + 'refri',{
            brand: this.brand,
            type: this.type,
            flavor: this.flavor,
            litrage: this.litrage,
            value: this.value,
            stoke: this.stoke
        }).then(function(response){
            alert('cadastrado com sucesso');
            this.allRefri();
        }).catch(function(response){
            console.log('Erro: '.response);
        })
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
      }).then(function(response){
        alert('atualizado com sucesso');
        $("#modalEditRefri").modal('hide');
        this.allRefri();
      }).catch(function(error){
        console.log(error);
      });
    },
    deleteRefri: function(id){

    }
  },
  created(){
    this.allRefri();
  },
  mounted() {
      console.log('Component Table.')
  }
}
</script>