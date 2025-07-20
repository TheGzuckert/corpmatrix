# CorpMatrix - Sistema de Gestão Empresarial

## 🚀 Requisitos
Antes de iniciar, verifique se você possui os seguintes requisitos instalados:

- **PHP** >= 8.2
- **Composer** >= 2.7
- **Node** >= 20
- **Docker**

## ⚙️ Configuração do Ambiente

### 🔐 Variáveis de Ambiente

1. Renomeie o arquivo `.env.example` para `.env`

2. **Ou** se preferir rode o comando abaixo para clonar o .env.example para .env:

```bash
cp .env.example .env
 ```
### 📦 Instalando Dependências

Execute o seguinte comando na raiz do projeto:

```bash
composer install
```

Para instalar dependencias do liveware, você tera que executar o comando
```bash
sail npm install && sail npm run biuld 
```

Rodar as migrations
```bash
sail artisan migrate
```

E finalmente para rodar o projeto basta rodar o comando:

```bash
sail up
```

Esse comando fara com que o docker inicie e rode o projeto na porta 8000.

