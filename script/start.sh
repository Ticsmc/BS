###################################################################
# File Name: start.sh
# Author: zhuhuanran
# mail: kutenglsp@163.com
# Created Time: Wed 18 Mar 2020 01:40:01 PM UTC
#=============================================================
#!/bin/sh
mysqld&
while :
do
    ls /tmp/mysql.sock &> /dev/null  && break
done
mysqladmin -u root password "123456" -S /tmp/mysql.sock 
mysql -u root -p"123456" -S /tmp/mysql.sock < /data/www/tindb.sql
php-fpm

nginx -g "daemon off;"

