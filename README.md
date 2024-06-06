# Simples Api de login.
## Requisitos

Certifique-se de que você possui as seguintes dependências instaladas:

- [Composer](https://getcomposer.org/)
- [PHP 8.1](https://www.php.net/)

## Instalação

1. Clone o repositório do GitHub:

   ```bash
   git clone https://github.com/fabriciosilvaJr/api-login.git
   
2. Navegue até o diretório do projeto:
    `cd api-login`
   
3. Renomeie o arquivo .env.example para .env:
   `mv .env.example .env`

5. Instale as dependências do Composer:
   `composer install`
   
5.Gere a chave da aplicação
   `php artisan key:generate`
   
## Executando

`php artisan serve`

#### Utilizando a api

A API estará disponível em [http://localhost:8000/api](http://localhost:8000/api)

#### Para fazer testar e fazer login, utilize a seguinte URL:

- **URL:** `http://localhost:8000/api/login`
- **Método:** `POST`
- **Corpo da Requisição:**
  
```json
{
 	"email": "usuario@teste.com",
	"password": "123456"
}
```
