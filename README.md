
# Teste Pratico

Aplicaçao CRUD Laravel(Back-End)

## 🚀 Começando

Fiz um CRUD com os requisitos que foram pedidos, optei por fazer
tudo em uma pagina para assim poder acompanhar 
a evoluçao de cadastros/exclusao/ediçao dos usuarios 
e o tempo de esperar ser menor.

### 📋 Pré-requisitos

Banco de Dados: que está em "banco de dados/bd_sistema_crud"
    Utilizei o PhpmyAdmin e coloquei arquivo do laravel 
    na pasta htdocs do xammp para roda ele na maquina local
    ou se preferir rode o comando migrate


### 🔧 Instalação

Para inicializar faça um git clone no seu Terminal

```
 git clone https://github.com/JulioFonseca/Laravel_teste_pratico.git
```
entre no arquivo

```
cd Laravel_teste_pratico
```
Instale o composer na sua maquina

```
composer install
```
Renomeie o arquivo .env.example

```
cp .env.example .env 
```

Rode o comando a seguir:

```
php artisan key:generate
```

Instale o Banco de dados com o sql para ter os valores pre cadastrados
ou apenas rode o codigo a seguir para criar a tabela no banco

```
php artisan migrate
```
Instale na pasta xammp/htdoc ou caso queira inicialize o server

```
php artisan serve
```
Link

```
localhost:8000
```

## ⚙️ Executando o codigo

A pagina é bem auto-explicativa pois tem todas as 
funcionalidades na pagina principal e não precisa ir em outra pagina

### 🔩 Analise do codigo

O codigo é bem simples com modais e rotas
ao cadastrar um usuario os dados sao redirecionandos
para o UsuarioController.store que por sua fez realiza o cadastro 
no banco de dados e retorna a pagina principal o lista.blade.php.
A function Index dentro de UsuarioController pega todos os valores da
tabela usuarios e retona uma variavel $usuario para o lista.blade.php.
Na pagina principal é necessario fazer um foreach para percorrer todos os
valores do banco e imprimir na tabela de usuarios.
No button Editar coloquei um modal com a id do usuario e os valores dentro da value
para que quando o usuario for realizar uma ediçao continue de onde ja esta cadastrado
ao realizar a ediçao os valores sao mandados para o UsuarioController.update que por sua 
realiza a mudança no banco de dados e retorna para a pagina principal
O button de de deletar abre um modal confirmando a exclusao do usuario e manda o comando de 
deletar para UsuarioController.destroy e o mesmo faz sua rotina e exclui o valor no banco de dados. 

## 📦 Desenvolvimento

Fiz um CRUD com os requisitos pedidos 
e optei por contruir o sistema em uma pagina só
para que assim possa acompanhar a evoluçao dos
cadastros/ediçoes/excluçoes da tabela usuarios

### Endpoints

- ✅ Cadastro de usuários
- ✅ Edição de usuários
- ✅ Deletar usuários
- ✅ Ler a tabela usuários

## 🛠️ Construído com

* [Laravel](https://laravel.com/docs/8.x) - O framework web usado

## ✒️ Autor

* **Julio Fonseca**  - [Julio Fonseca](https://github.com/JulioFonseca)

---

⌨️ com ❤️ por [Julio Fonseca](https://github.com/JulioFonseca) 😊
