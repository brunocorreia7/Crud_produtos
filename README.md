📦 Sistema de Gerenciamento de Produtos
CRUD desenvolvido com Laravel 12

Sistema simples e funcional para cadastro e gerenciamento de produtos, desenvolvido com Laravel 12, utilizando MySQL para persistência de dados e Blade como mecanismo de templates.

🎯 Objetivo do Projeto

Este projeto foi desenvolvido com fins educacionais e práticos, com foco em:

Aplicar o padrão MVC

Praticar CRUD completo

Utilizar Blade sem separação frontend/backend

Consolidar conhecimentos em Laravel 12

🚀 Funcionalidades

O sistema permite realizar as quatro operações básicas de um banco de dados:

➕ Create
Cadastro de novos produtos com validação de campos

📄 Read
Listagem de produtos e visualização de detalhes individuais

✏️ Update
Edição de informações de produtos existentes

🗑️ Delete
Remoção de produtos do sistema

🛠️ Tecnologias Utilizadas

Framework: Laravel 12

Linguagem: PHP

Banco de Dados: MySQL

Template Engine: Blade

Estilização: CSS customizado (style.css)

📂 Estrutura do Projeto
app/
├── Models/
│   └── Product.php
│
├── Http/
│   └── Controllers/
│       └── ProdutoController.php
│
database/
├── migrations/
│   └── xxxx_xx_xx_create_products_table.php
│
resources/
├── views/
│   ├── layouts/
│   │   └── app.blade.php
│   │
│   └── products/
│       ├── index.blade.php
│       ├── create.blade.php
│       ├── edit.blade.php
│       ├── show.blade.php
│       └── _form.blade.php
│
routes/
└── web.php

⚙️ Configuração e Instalação
1️⃣ Clonar o repositório
git clone https://github.com/seu-usuario/nome-do-repositorio.git
cd nome-do-repositorio

2️⃣ Instalar dependências
composer install

3️⃣ Configurar o ambiente

Renomeie o arquivo .env.example para .env e configure o banco de dados:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_seu_banco
DB_USERNAME=root
DB_PASSWORD=sua_senha

4️⃣ Gerar a chave da aplicação
php artisan key:generate

5️⃣ Executar as migrations
php artisan migrate

6️⃣ Iniciar o servidor
php artisan serve


Acesse no navegador:

http://localhost:8000

🧪 Validações Implementadas

As validações são aplicadas nos métodos store e update:

Name
Obrigatório, string, máximo de 255 caracteres

Price
Obrigatório, numérico, valor mínimo 0

Quantity
Obrigatório, inteiro, valor mínimo 0

Description
Opcional (nullable)

📝 Rotas Disponíveis

O Laravel gera automaticamente as rotas abaixo utilizando Route::resource:

Método	Rota	Descrição
GET	/produtos	Lista todos os produtos
GET	/produtos/create	Formulário de criação
POST	/produtos	Armazena um novo produto
GET	/produtos/{id}	Exibe detalhes do produto
GET	/produtos/{id}/edit	Formulário de edição
PUT	/produtos/{id}	Atualiza o produto
DELETE	/produtos/{id}	Remove o produto
