<template>
<div class="col-md-12">
        <div class="tile">
          <h3 class="tile-title">Table Hover</h3>
          <div class="table-responsive">
          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>Marca</th>
                <th>Tipo</th>
                <th>Sabor</th>
                <th>Medida</th>
                <th>Valor</th>
                <th>Estoque</th>
                <th>Editar</th>
                <th>Excluir
                  <div class="animated-checkbox float-right">
                <label>
                  <input type="checkbox"><span class="label-text"></span>
                </label>
              </div>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr v-for='item in list'>
                <td>@{{item.brand}}</td>
                <td>@{{item.type}}</td>
                <td>@{{item.flavor}}</td>
                <td>@{{item.litrage}}</td>
                <td>@{{item.value}}</td>
                <td>@{{item.stoke}}</td>
                <td>
                <a href="" class="btn btn-primary">
                    <i class="fa fa-edit"></i>
                </a>
                </td>
                <td>
                   <div class="animated-checkbox btn">
                <label>
                  <input type="checkbox"><span class="label-text"></span>
                </label>
              </div>
                </td>
              </tr>
            
              
            </tbody>
          </table>
          </div>
        </div>
      </div>
        
    
</template>

<script>
export default {
  data() {
    return {
     
      list: []
    }
  },
  methods: {
    allRefri: function(){
      axios.get('http://172.19.0.3:3000/api/all-refri')
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