# Controle de Estoque de Pequeno Comércio

## Descrição do Projeto
Este projeto é um **sistema de controle de estoque** desenvolvido em **Laravel**.  
Ele foi criado para pequenos comércios, permitindo gerenciar produtos de forma prática e eficiente.

O sistema possibilita:
- Cadastro, edição e exclusão de produtos;
- Visualização do total de produtos cadastrados e valor total em estoque no dashboard;
- Controle de quantidade e preço, evitando valores negativos;
- Visualização das últimas transações realizadas.

O objetivo é oferecer uma solução simples e escalável para gerenciar o estoque.

---

## Tecnologias Utilizadas
- **Backend:** Laravel 12  
- **Frontend:** Blade com Bootstrap  
- **Banco de Dados:** MySQL  
- **Linguagem:** PHP 8.2  
- **Controle de Versão:** Git / GitHub  

---

## Requisitos
- PHP >= 8.2  
- Composer  
- MySQL  
- Navegador moderno  

---

## Passos para Instalação e Execução

1. **Clonar o repositório**
```bash
git clone <URL_DO_REPOSITORIO>
cd controle-de-estoque

2. **Instalar dependências**
composer install

3. **Configurar arquivo de ambiente**
cp .env.example .env

Edite as variáveis de banco de dados no .env:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=controle_estoque
DB_USERNAME=root
DB_PASSWORD=

4. **Gerar chave da aplicação**
php artisan key:generate

5. **Executar migrations e seeders**
php artisan migrate --seed

6. **Rodar o servidor**
php artisan serve

7. **Acessar a aplicação
Abra no navegador:**
http://127.0.0.1:8000

Usuário de Teste
Nome	     Email          Senha
Admin 	admin@teste.com     12345678

Obs.: É possível criar novos usuários pelo formulário de registro.
