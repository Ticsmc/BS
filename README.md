# 我的毕业设计

Web 漏洞学习平台 

## 目录结构

```shell
.
├── conf 服务的配置文件
├── docker-commint.sh docker镜像构建脚本
├── Dockerfile dockerfile文件
├── README.md 
├── script 脚本目录 (内含docker启动脚本)
└── src web站点源代码

```
## 版本信息

```shell
bash-5.0# uname -a
Linux 1b0485719805 4.15.0-72-generic #81-Ubuntu SMP Tue Nov 26 12:20:02 UTC 2019 x86_64 Linux
bash-5.0# nginx -v
nginx version: nginx/1.16.1
bash-5.0# mysqld -V
mysqld  Ver 10.4.12-MariaDB for Linux on x86_64 (MariaDB Server)
bash-5.0# php-fpm -v
PHP 7.4.2 (fpm-fcgi) (built: Jan 24 2020 07:18:09)
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
    with Zend OPcache v7.4.2, Copyright (c), by Zend Technologies
```
## 站点样式

![web-set](https://github.com/Ticsmc/BS/blob/master/images/sit.png)

## docker

```shell
#拉取镜像
sudo docker pull registry.cn-hangzhou.aliyuncs.com/my_register/lnmp:v1

#运行镜像
docker run -it -d -p 80:80 registry.cn-hangzhou.aliyuncs.com/my_register/lnmp:v1
```

