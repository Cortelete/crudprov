# 🥟 CRUD de Pastelaria - Projeto Laravel

Este projeto se trata de um sistema de gerenciamento de uma pastelaria, desenvolvido como parte de uma prova acadêmica. Ele permite a gestão de **pastéis**, **acompanhamentos**, e possui uma funcionalidade extra para a **montagem de combos**.

## 📽️ Demonstração em Vídeo

Link para o vídeo explicativo + .zip do projeto:  
[Google Drive - Vídeo e Projeto](https://drive.google.com/drive/folders/1wDIlz-KIOLWLa7NSXovAWshwMz9TXCzD?usp=sharing)

## 🧾 Funcionalidades

- ✅ CRUD completo de **Pastéis**  
- ✅ CRUD completo de **Acompanhamentos**  
- ✅ Relacionamento entre pastéis e acompanhamentos/bebidas  
- ✅ Página para montar **combos** (pastel + acompanhamento)  
- 🚧 Envio de pedido planejado como funcionalidade futura  
- ✅ Estilização com **Bootstrap 5**  
- ✅ Mensagens claras na tela em caso de erro  

## 🧰 Tecnologias e Ferramentas Utilizadas

- [Laravel 10.x](https://laravel.com/) – Framework PHP MVC  
- [Bootstrap 5](https://getbootstrap.com/) – Design responsivo  
- [PHP 8.x](https://www.php.net/)  
- [Composer](https://getcomposer.org/) – Gerenciador de dependências  
- [Git & GitHub](https://github.com/) – Versionamento de código  

## 🚀 Como Rodar o Projeto

1. **Clone o repositório**  
   ```bash
   git clone https://github.com/Cortelete/crudprov.git
   cd crudprov
   ```

2. **Instale as dependências do Laravel**  
   ```bash
   composer install
   ```

3. **Configure o ambiente**  
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```  
   Edite o arquivo `.env` com as credenciais do seu banco de dados.

4. **Execute migrations e seeders**  
   ```bash
   php artisan migrate --seed
   ```

5. **Inicie o servidor local**  
   ```bash
   php artisan serve
   ```  
   Acesse em: [http://localhost:8000](http://localhost:8000)

## 🗂️ Estrutura do Projeto

```
crudprov/
├── app/
│   ├── Models/          # Pastel e Acompanhamento
│   └── Http/Controllers # Lógica das rotas
├── resources/views/     # Páginas Blade com Bootstrap
├── database/
│   ├── migrations/      # Estrutura das tabelas
│   └── seeders/         # População inicial de dados
├── routes/web.php       # Rotas da aplicação
└── .env                 # Configurações de ambiente
```

## 🧠 Organização e Fluxo de Trabalho

- Criação das tabelas via migrations  
- Desenvolvimento dos Models e Controllers  
- Definição de rotas em `web.php`  
- Criação das Views com Blade e Bootstrap  
- Inserção de dados via seeders  
- Testes e ajustes de layout e funcionalidade  

## 🔚 Observações Finais

- A funcionalidade de **envio de pedido** será implementada futuramente.  
- O sistema foi construído seguindo boas práticas, com estrutura organizada e mensagens de erro amigáveis.  
- Todo o projeto foi pensado para ser didático e de fácil manutenção.  

## ✍️ Autor

Desenvolvido por **DAVI CORTELETE ALVES DE OLIVEIRA & LINCOLN TOZETTO**
Para fins acadêmicos – 2025  
Repositório oficial: [github.com/Cortelete/crudprov](https://github.com/Cortelete/crudprov)
