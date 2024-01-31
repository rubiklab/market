#!/bin/bash

#ref: https://aschmelyun.com/blog/fixing-permissions-issues-with-docker-compose-and-php/
export USERID=$(id -u ec2-user) && export GROUPID=$(id -g ec2-user)

