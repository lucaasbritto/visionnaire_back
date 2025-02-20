# Api de gerenciamento de números
Este projeto é uma API RESTful para o gerenciamento de números de telefone de uma operadora de telecomunicações. Ele foi desenvolvido com Laravel no backend, e permite a listagem, criação, edição, remoção e consulta de números de telefone disponíveis para clientes.

## Requisitos
PHP 8.0 ou superior
Laravel
Composer

## Instalação BACKEND

1. Clone o repositório:
```bash    
    git clone https://github.com/lucaasbritto/visionnaire_back.git
```

2. Acesse o diretório do projeto:
    cd seu-repositorio

3. Configure o arquivo .env:
    Renomeie o arquivo .env.example para .env e configure as variáveis de ambiente conforme necessário,

4. Instale as dependencias do composer:
    Composer Install

5. Gere a chave de aplicativo do Laravel:
    php artisan key:generate

6. Inicie o servidor local:
    php artisan serve


## ENDPOINT DA API


### Buscar Todos os Telefones

- **URL:** `GET /api/phone-numbers`
- **Descrição:** Busca todos os telefones
- **Resposta:**    
    ```json
    [
        {
            "id": 1,
            "value": "+55 71 99999999",
            "monthlyPrice": "50.00",
            "setupPrice": "100.00",
            "currency": "BRL",
            "created_at": "2025-02-14T19:12:49.000000Z",
            "updated_at": "2025-02-14T19:12:49.000000Z"
        },
    ]
    ```


### Buscar Telefone especifico

- **URL:** `GET /api/phone-numbers/{id}`
- **Descrição:** Busca telefone especifico
- **Resposta:**    
    ```json
    [
        {
            "id": 1,
            "value": "+55 71 99999999",
            "monthlyPrice": "50.00",
            "setupPrice": "100.00",
            "currency": "BRL",
            "created_at": "2025-02-14T19:12:49.000000Z",
            "updated_at": "2025-02-14T19:12:49.000000Z"
        },
    ]
    ```


### Cadastrar novo numero

- **URL:** `POST /api/phone-numbers`
- **Descrição:** Cadastrar novo numero
- **Requisicão:**    
    ```json
    [
        {
            "value": "+55 71 988888888",
            "monthlyPrice": 20.00,
            "setupPrice": 300.00,
            "currency": "BRL"
        }
    ]
    ```

- **Resposta:**    
    ```json
    [
        {
            "id": 1,
            "value": "+55 71 988888888",
            "monthlyPrice": "20.00",
            "setupPrice": "300.00",
            "currency": "BRL",
            "created_at": "2025-02-14T19:12:49.000000Z",
            "updated_at": "2025-02-14T19:12:49.000000Z"
        },
    ]
    ```



### Editar numero

- **URL:** `PUT /api/phone-numbers/{id}`
- **Descrição:** Cadastrar novo numero
- **Requisicão:**    
    ```json
    [
        {
            "value": "+55 71 988888887",
            "monthlyPrice": 20.00,
            "setupPrice": 300.00,
            "currency": "BRL"
        }
    ]
    ```

- **Resposta:**    
    ```json
    [
        {
            "id": 1,
            "value": "+55 71 988888887",
            "monthlyPrice": "20.00",
            "setupPrice": "300.00",
            "currency": "BRL",
            "created_at": "2025-02-20T13:12:23.000000Z",
            "updated_at": "2025-02-20T13:14:46.000000Z"
        },
    ]
    ```


### Excluir numero

- **URL:** `DELETE /api/phone-numbers/{id}`
- **Descrição:** Excluir numero
