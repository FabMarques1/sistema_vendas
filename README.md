# 🛒 Sistema de Vendas & Data Analytics

[![PHP](https://img.shields.io/badge/PHP-7.4%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![License](https://img.shields.io/badge/License-MIT-green.svg?style=for-the-badge)](LICENSE)

> **Projeto Acadêmico** focado na arquitetura de um sistema de vendas, abrangendo desde a modelagem relacional e normalização de banco de dados até a construção de rotinas CRUD e dashboards de visualização de dados na web.

---

## 📌 Sobre o Projeto

Este projeto foi desenvolvido com foco em boas práticas de engenharia de software e análise de dados. A aplicação integra uma base relacional performática a uma interface web analítica para acompanhamento de vendas.

### Workflow de Desenvolvimento:
1. **Engenharia de Banco de Dados:** Modelagem conceitual e lógica, aplicação rigorosa de normalização (até a 3FN), definição de integridade referencial com chaves estrangeiras, configuração de charset `utf8mb4` e construção de consultas SQL para extração de métricas.
2. **Aplicação Web & CRUD:** Desenvolvimento da camada web com PHP (utilizando `mysqli` com tratamento de charset e erros), integração do backend às views e exibição de dados analíticos de vendas.

---

## 🛠️ Tecnologias Utilizadas

* **Backend:** PHP 7+ / PHP 8+
* **Banco de Dados:** MySQL / MariaDB (Engine InnoDB)
* **Frontend:** HTML5, CSS3, JavaScript
* **Servidor Local:** XAMPP / Apache / MySQL Workbench

---

## 🗄️ Estrutura do Banco de Dados

O banco de dados `db_sistema_vendas` foi planejado para manter a integridade dos dados e otimizar relatórios e visualizações.

```text
db_sistema_vendas
├── clientes      (id, nome, email, cpf, criado_em)
├── produtos      (id, nome, preco, estoque)
├── vendas        (id, cliente_id, data_venda, total)
└── itens_venda   (id, venda_id, produto_id, quantidade, subtotal)

