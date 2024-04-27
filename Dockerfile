# Use a imagem base do PHP 7.4 com Apache
FROM php:7.4-apache

# Atualize o índice de pacotes do sistema e instale as dependências necessárias
RUN apt-get update && \
    apt-get install -y \
        libpq-dev \
        && \
    docker-php-ext-install pdo pdo_pgsql

# Defina o diretório de trabalho na pasta onde os arquivos da aplicação serão copiados
WORKDIR /var/www/html

# Copie os arquivos da aplicação para dentro do contêiner
COPY . /var/www/html

# Exponha a porta 80 para o servidor web Apache
EXPOSE 80

# Inicialize o servidor Apache quando o contêiner for iniciado
CMD ["apache2-foreground"]
