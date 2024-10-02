# Projeto de Integração com API de Usuários

Este projeto consiste em uma aplicação desenvolvida com **Laravel** no backend e **Vue.js** no frontend, consumindo uma API de usuários e exibindo-os organizados por estado e ordenados por nome, diretamente na página inicial (`welcome.blade.php`). A estilização é feita utilizando CSS simples.

## Funcionalidades
- Consumo de uma API de usuários: [https://dummyjson.com/users](https://dummyjson.com/users)
- Organização dos usuários por estado
- Ordenação dos usuários por nome em ordem alfabética dentro de cada estado
- Apresentação dos dados diretamente na interface inicial (`welcome.blade.php`) estilizada com CSS

## Tecnologias Utilizadas
- **PHP 8+**
- **Laravel 11+**
- **Vue.js 3** (com Vite)
- **Axios** (para requisições HTTP)
- **Vite** (para build e live-reload no desenvolvimento)

## Pré-requisitos
- **PHP 8+** instalado
- **Composer** instalado
- **Node.js** (com npm ou yarn)

## Instalação e Configuração
Siga as instruções abaixo para configurar o projeto localmente.

1. **Clone o repositório**
    ```bash
    git clone https://github.com/samuel-sabinodasilva1303/user-api
    ```

2. **Instale as dependências do PHP**
    ```bash
    composer install
    ```

3. **Instale as dependências do Node.js**
    ```bash
    npm install
    ```

4. **Build e rode o servidor de desenvolvimento**
    Execute o Vite para processar os arquivos JavaScript/Vue.js:
    ```bash
    npm run dev
    ```
    Em seguida, rode o servidor Laravel:
    ```bash
    php artisan serve
    ```
    Acesse a aplicação em [http://localhost:8000](http://localhost:8000).

## Estrutura do Projeto
- **Backend (Laravel)**: O backend é responsável por fornecer a página inicial e processar a requisição para a API.
- **Frontend (Vue.js)**: O componente `Users.vue` é responsável por renderizar os dados de usuários organizados e estilizados.
- **API**: A aplicação faz uma requisição GET para a API [https://dummyjson.com/users](https://dummyjson.com/users) e processa os dados para exibir na interface.

## Como Funciona
1. A aplicação consome a API externa de usuários.
2. Os usuários são organizados por estado e ordenados por nome.
3. A interface exibe os usuários em grupos por estado na página inicial, com os dados estilizados.

## Estilização
A estilização dos dados é feita utilizando CSS básico no arquivo `resources/css/app.css`

