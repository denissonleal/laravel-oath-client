# Exemplo de Aplicação Laravel com Passport e Socialize

Este é um projeto de exemplo de uma aplicação Laravel que se autentica utilizando outro projeto Laravel configurado como provedor de login social com Laravel Passport.

## Descrição

Esta aplicação Laravel utiliza o Laravel Passport e o pacote Socialize para se autenticar através de uma aplicação externa configurada como provedor de login social. O banco de dados padrão é o SQLite, conforme configurado no arquivo `.env.example`.

## Instalação

Para instalar e configurar o projeto, siga os passos abaixo:

1. Clone o repositório:
    ```sh
    git clone https://github.com/denissonleal/laravel-oath-client.git
    cd laravel-oath-client
    ```

2. Instale as dependências do Composer:
    ```sh
    composer install
    ```

3. Copie o arquivo `.env.example` para `.env` e configure conforme necessário:
    ```sh
    cp .env.example .env
    ```

4. Preencha as variáveis de ambiente no arquivo `.env` com os dados do projeto de autenticação:
    ```dotenv
    LARAVELPASSPORT_CLIENT_ID=seu-client-id
    LARAVELPASSPORT_CLIENT_SECRET=seu-client-secret
    LARAVELPASSPORT_REDIRECT_URI=http://localhost:8091/callback
    LARAVELPASSPORT_HOST=http://seu-provedor-de-login-social.com
    ```

5. Gere a chave da aplicação:
    ```sh
    php artisan key:generate
    ```

6. Execute as migrações do banco de dados:
    ```sh
    php artisan migrate
    ```

## Execução

Para executar o servidor de desenvolvimento, utilize o comando:

```sh
php artisan serve --port 8091
```

O servidor estará disponível em [http://localhost:8091](http://localhost:8091).

## Autenticação

Para autenticar o usuário através do provedor de login social:

1. Acesse [http://localhost:8091/redirect](http://localhost:8091/redirect).
2. Clique no botão para login com o provedor configurado.
3. Você será redirecionado para o provedor de login social.
4. Após autenticar-se no provedor, você será redirecionado de volta para a aplicação com o usuário autenticado.

## Considerações Finais

Agora, sua aplicação está configurada para se autenticar utilizando outro projeto Laravel como provedor de login social. Para mais informações sobre Laravel, Passport e Socialize, consulte a [documentação oficial do Laravel](https://laravel.com/docs), a [documentação do Passport](https://laravel.com/docs/passport) e a [documentação do Socialize](https://github.com/laravel/socialite).
