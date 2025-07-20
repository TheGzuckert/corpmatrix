FROM sail-8.4/app

# Instalar netcat para verificação de disponibilidade do MySQL
RUN apt-get update && apt-get install -y netcat-openbsd && rm -rf /var/lib/apt/lists/*

# Criar diretórios necessários e configurar permissões
RUN mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/public/build && \
    chown -R www-data:www-data /var/www/html && \
    chmod -R 775 /var/www/html 