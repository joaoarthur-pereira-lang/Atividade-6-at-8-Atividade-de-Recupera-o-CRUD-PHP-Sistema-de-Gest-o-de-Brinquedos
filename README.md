# Sistema de Gestão de Brinquedos

Sistema CRUD desenvolvido em PHP e MySQL para gerenciamento de brinquedos de uma loja.

## Funcionalidades

* Cadastrar brinquedos
* Listar brinquedos
* Editar brinquedos
* Excluir brinquedos
* Validação básica dos dados
* Uso de Prepared Statements
* Tratamento básico de erros

## Tecnologias utilizadas

* PHP
* MySQL
* HTML
* MySQLi

## Dados do brinquedo

Cada brinquedo possui:

* Nome
* Categoria
* Faixa etária
* Preço
* Quantidade em estoque

## Como executar

1. Instale o XAMPP ou outro servidor local com PHP e MySQL.
2. Coloque a pasta `crud-brinquedos` dentro da pasta `htdocs`.
3. Abra o phpMyAdmin.
4. Crie o banco de dados executando o arquivo `banco.sql`.
5. Confira os dados de conexão no arquivo `config/conexao.php`.
6. Inicie o Apache e o MySQL no XAMPP.
7. Acesse no navegador:

`http://localhost/crud-brinquedos/`

## Banco de dados

O arquivo `banco.sql` cria o banco `brinquedos` e a tabela `brinquedos`.

## Prepared Statements

As operações de cadastro, consulta por ID, atualização e exclusão utilizam Prepared Statements para evitar a inserção direta de dados do usuário nos comandos SQL.
