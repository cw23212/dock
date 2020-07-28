FROM nginx

RUN apt-get update && apt-get install -y --no-install-recommends php-fpm htop vim
COPY default.conf /etc/nginx/conf.d/
COPY docker-entrypoint.sh /docker-entrypoint.sh
COPY info.php /usr/share/nginx/html/
