📦 Sistema de Gerenciamento de Produtos (CRUD)

Sistema simples e funcional de cadastro de produtos, desenvolvido com Laravel 12, utilizando MySQL para persistência de dados e Blade para a interface do usuário.

🚀 Funcionalidades

O sistema permite realizar as quatro operações básicas de um CRUD:

Create: Cadastro de novos produtos com validação de campos

Read: Listagem de produtos e visualização de detalhes individuais

Update: Edição de informações de produtos existentes

Delete: Remoção de produtos do sistema

🛠️ Tecnologias Utilizadas

Framework: Laravel 12

Linguagem: PHP

Banco de Dados: MySQL

Template Engine: Blade

Estilização: CSS customizado (style.css)

📂 Estrutura do Projeto
Componente	Caminho do Arquivo	Descrição
Model	app/Models/Product.php	Define os campos preenchíveis ($fillable)
Controller	app/Http/Controllers/ProdutoController.php	Contém a lógica de negócio (CRUD)
Routes	routes/web.php	Define as rotas utilizando Route::resource
Migration	database/migrations/..._create_products_table.php	Criação da tabela no banco de dados
Views	resources/views/products/	Arquivos Blade (index, create, edit, show)
Layout	resources/views/layouts/app.blade.php	Template base da aplicação
⚙️ Configuração e Instalação

Siga os passos abaixo para rodar o projeto localmente:

1️⃣ Clone o repositório
git clone https://github.com/seu-usuario/nome-do-repositorio.git
cd nome-do-repositorio

2️⃣ Instale as dependências
composer install

3️⃣ Configure o ambiente

Renomeie o arquivo .env.example para .env e configure suas credenciais de banco de dados:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_seu_banco
DB_USERNAME=root
DB_PASSWORD=sua_senha

4️⃣ Gere a chave da aplicação
php artisan key:generate

5️⃣ Execute as migrations
php artisan migrate

6️⃣ Inicie o servidor
php artisan serve


Acesse no navegador:

http://localhost:8000

🧪 Validações Implementadas

As validações são aplicadas nos métodos store e update do controller:

Name: obrigatório, string, máximo de 255 caracteres

Price: obrigatório, numérico, valor mínimo 0

Quantity: obrigatório, inteiro, valor mínimo 0

Description: opcional (nullable)

📝 Rotas Disponíveis

Graças ao uso de Route::resource, o Laravel gera automaticamente as seguintes rotas:

Método	Rota	Ação
GET	/produtos	Lista todos os produtos (index)
GET	/produtos/create	Formulário de criação (create)
POST	/produtos	Salva um novo produto (store)
GET	/produtos/{id}	Exibe detalhes do produto (show)
GET	/produtos/{id}/edit	Formulário de edição (edit)
PUT	/produtos/{id}	Atualiza o produto (update)
DELETE	/produtos/{id}	Remove o produto (destroy)
📌 Observações

Este projeto tem como objetivo estudo e prática do Laravel 12, utilizando Blade e arquitetura MVC, sem separação frontend/backend (monolito).
