---
description: Informações da funcionalidade dos métodos.
---

# Backend

**Métodos do controller**

`index():` Retorna a view para renderização dos componentes

`store:` Método para registrar no banco, porém, antes faz uma verificação se já existe um cadastro no banco com a marca e litragem recebida, se tiver devolve uma mensagem de que já existe um registro. Caso não, registra no banco, devolvendo status 200.

`update(Request $request, $id):` Método para alteração de registro no banco, recebe com parâmetro um Request e um id.

`destroy($id):` Método que recebe um id para exclusão desse.

`destroyMultiply(Request $request):` Método que recebe um array de id para ser excluído no banco;

`getAll():` Método que retornar todos os refrigerantes com paginação de registro do banco de dados;

`search(Request $request):` Método que realiza um pesquisa de acordo com o usuário solicitar.

**Métodos do Model**

`money_real($get_valor)` Formata o valor em double para guardar no banco formatado.

