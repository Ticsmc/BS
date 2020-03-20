FROM php:7.4.2-fpm-alpine3.11

LABEL maintainer="ZKNU  zhr"

ADD conf/repositories /etc/apk/repositories
RUN apk update && \
    apk add  \
	icu-dev \
	libzip-dev \
    bzip2-dev \
	imap-dev \
    iotop \
	gcc \
    gnupg \
    libxslt-dev \
    gd-dev \
#   geoip-dev \
    libmaxminddb-dev \
    perl-dev \
    luajit-dev \
    libgcc \
  	libc-dev \
  	libcurl \
  	libc-utils \
  	pcre-dev \
  	zlib-dev \
  	libnfs \
  	make \
  	pcre \
  	pcre2 \
  	zip \
  	unzip \
  	net-tools \
  	pstree \
  	wget \
  	libevent \ 
    libpng-dev \
    libevent-dev \
	bash \
	vim \
	mariadb \
	mariadb-client \
	iproute2 \
	&& docker-php-ext-install iconv pdo_mysql   mysqli gd exif intl xsl json soap dom zip opcache \
	&& mkdir /usr/local/log  /app/www /data/www  -p \
    && rm -rf /usr/local/etc/php-fpm.d/zz-docker.conf \
    && addgroup -S www \
    && adduser -D -u 1050 -S -h /var/cache/nginx -s /sbin/nologin -G www www \ 
    && curl -fSL http://nginx.org/download/nginx-1.16.1.tar.gz -o nginx.tar.gz \
    && tar -zxC /app/www -f nginx.tar.gz \
    && cd /app/www/nginx-1.16.1  \
    && ./configure  --prefix=/app/nginx \
    --sbin-path=/usr/sbin/nginx \
    --modules-path=/usr/lib/nginx/modules \
    --conf-path=/etc/nginx/nginx.conf \
    --error-log-path=/var/log/nginx/error.log \
    --http-log-path=/var/log/nginx/access.log \
    --pid-path=/var/run/nginx.pid \
    --lock-path=/var/run/nginx.lock \
    --http-client-body-temp-path=/var/cache/nginx/client_temp \
    --http-proxy-temp-path=/var/cache/nginx/proxy_temp \
    --http-fastcgi-temp-path=/var/cache/nginx/fastcgi_temp \
    --http-uwsgi-temp-path=/var/cache/nginx/uwsgi_temp \
    --http-scgi-temp-path=/var/cache/nginx/scgi_temp \
    --user=www \
    --group=www \
    --with-http_sub_module \
    --with-http_dav_module \
    --with-http_gunzip_module \
    --with-http_gzip_static_module \
    --with-http_random_index_module \
    --with-http_secure_link_module \
    --with-http_xslt_module=dynamic \
    --with-http_image_filter_module=dynamic \ 
    && make \
    && make install 
RUN  rm -rf /app/www/nginx-1.16.1 /var/www/html \
#	&& addgroup  sql \
#   && adduser -D -u 2050 -S  -s /sbin/nologin -G sql sql \
	&& mkdir /data/mysql -p \
	&& chown  mysql.mysql -R  /data/mysql \
	&& mysql_install_db --user=mysql --datadir=/data/mysql 


ADD conf/php.ini  /usr/local/etc/php-fpm.d/php.ini
ADD conf/www.conf  /usr/local/etc/php-fpm.d/www.conf
ADD conf/nginx.conf /etc/nginx/nginx.conf
ADD conf/my.cnf /etc/my.cnf
ADD src/  /data/www
ADD script/start.sh /data/

EXPOSE 443 80 3306

CMD ["bash","/data/start.sh"] 
