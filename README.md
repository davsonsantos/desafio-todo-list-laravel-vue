# desafio-todo-list-laravel-vue
Gestão de usuários e lista de tarefas:

# Para teste em localhost:

1) Clone o projeto;

2) Acessa a pasta API e rode o compando composer update;

2.1) rode o comando php artisan migrate --seed;

2.2) rode o comando php artisan serve e tera a url da api.

3) Acessa a pasta app e rode o comando npm install

3.1) Se houver algum problema de versão rode o comando yarn install --frozen-lockfile

3.2) abra o arquivo app\src\plugins\axios.js e coloque a url da aplicação local

3.2) Rode o comando npm run dev.

Não tem testes para o app online mas a API esta rodando para acesso do APP  url: https://apps.davtech.com.br/todolist/api/api

Para teste basta execulta os passos do item 3 sem alterar nada e roda apenas o app.
