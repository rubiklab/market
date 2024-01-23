FROM nginx:stable

RUN apt-get update && apt-get install -y bash

ARG USERID
ARG GROUPID

ENV USERID=${USERID}
ENV GROUPID=${GROUPID}

ENV NGINXUSER=laravel
ENV NGINXGROUP=laravel

RUN groupadd -f -g ${GROUPID} --system ${NGINXGROUP}
RUN useradd  -u ${USERID} -g ${NGINXGROUP} --system -p "*" ${NGINXUSER}

RUN sed -i "s/user  nginx/user  ${NGINXUSER}/g" /etc/nginx/nginx.conf
