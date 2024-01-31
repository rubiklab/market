#!/bin/sh

#ref: https://aschmelyun.com/blog/fixing-permissions-issues-with-docker-compose-and-php/
export USERID=$(id -u) && export GROUPID=$(id -g)
