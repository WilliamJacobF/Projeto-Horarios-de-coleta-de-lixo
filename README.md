# Projeto-Horarios-de-coleta-de-lixo
 Este é um sistema fullstack desenvolvido com **Laravel** no backend e **HTML/CSS/JavaScript** no frontend. Ele permite aos moradores consultar os **dias e horários da coleta de lixo** digitando o nome da rua em um formulário.

---

## 📌 Funcionalidades

- 🔎 Busca por nome da rua
- 🗓️ Exibe os dias da semana e horários de coleta

---

## ⚙️ Tecnologias Utilizadas

### Backend:
- Laravel 10
- PHP 8.1
- MySQL

### Frontend:
- HTML5
- CSS3
- JavaScript (Fetch API)

---

## 🚀 Como Executar

### Backend (Laravel):

1. Clone o repositório:
```bash
git clone https://github.com/WilliamJacobF/Projeto-Horarios-de-coleta-de-lixo.git
```

2. Instale as dependências:
```bash
composer install
```

3. Configure o arquivo `.env` com os dados do banco de dados.

4. Rode as migrações:
```bash
php artisan migrate
```

5. Inicie o servidor:
```bash
php artisan serve
```

### Frontend:

1. Acesse a pasta `frontend/`
2. Abra o arquivo `index.html` no navegador.
3. O formulário enviará a requisição para:
```http
http://localhost:8000/api/ruas/buscar/{nome-da-rua}
```
