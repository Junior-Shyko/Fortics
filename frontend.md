# FrontEnd

Descrição sobre os metodos e funcionalidades da parte frontend da aplicação

#### Metodos

`allRefri:` Método que faz uma pesquisa na _api_ para ter o retorno de todos os refrigerantes para o loop no componente mostrando os dados.

`addRefri:` Método que faz uma conferencia se todos os campos estão preenchidos, se sim, envia dos dados para ser cadastrado no banco.

`showEdit:` Chama um modal no Bootstrap para as variáveis preenchidas.

`updateRefri:` Método para enviar os dados para api fazer o update dos dados.

`deleteRefri:` Método para deletar um refrigerante, recebe o id do refrigerante como parâmetro.

`searchRefri:` Método que envia para o banco duas informações, o tipo de busca e a descrição da busca e preenche  o array para mostrar o retorno na página.

`deleteMilti:` Método que envia vários id para exclusão desses.

`created():` Gatilho da instancia **Vue** para chamar o método `allRefri()` para mostrar todos os refrigerantes na página.

