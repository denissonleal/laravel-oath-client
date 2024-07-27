# Minor App

Aplicativo cliente para uso do login social por meio do oauth usando o Passport.

## Instalacao

User o composer para instalar o projeto.

```bash
composer update
```

O projeto pode ser executado usando o artisan.

```bash
php artisan serve --port 8091
```

## Configuracao da chave

Crie o `.env` e coloque o client id e o secret gerado no main-app. coloque tambem a url de retorno e a url o main app.


- `LARAVELPASSPORT_CLIENT_ID`: id do cliente gerado no passport.
- `LARAVELPASSPORT_CLIENT_SECRET`: secret gerado no passport.
- `LARAVELPASSPORT_REDIRECT_URI`: url do minor app com o `/callback`.
- `LARAVELPASSPORT_HOST`: url do main-app.
