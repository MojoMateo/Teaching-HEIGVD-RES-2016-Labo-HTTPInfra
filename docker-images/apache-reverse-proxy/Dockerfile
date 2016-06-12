FROM php:5.6-apache

COPY apache2-foreground /usr/local/bin
COPY config/ /etc/apache2

RUN a2enmod proxy proxy_http
RUN a2ensite 000-* 001-*

##########################################################
#start docker daemon
#eval "$(docker-machine env default)"

#start the static container
    #docker build -t res/apache-php .
    #docker run -d --name apache-php res/apache-php
    #enregistrer l'ip
    #docker inspect apache-php
        #172.17.0.2
#start node express container
    #docker build -t res/node-express .
    #docker run -d --name node-express res/node-express
    #docker inspect node-express
        #172.17.0.3

#tester avec docker-machine ssh
    #telnet ip port
    #GET / HTTP/1.0

#start the reverse proxy
    #docker build -t res/apache-reverse-proxy .
    #docker run --name apache-reverse-proxy -p 8080:80 res/apache-reverse-proxy

##########################################################

#connecter le browser
    #demo.res.ch
    #http://demo.res.ch:8080/api/students/json

##########################################################

#activer un site
    #a2ensite xxx

#activer les modules necessaires au prox
    #a2enmod proxy
    #a2enmod proxy_http

#redemarrer apache avec la nouvelle configuration
    #service apache2 restart
