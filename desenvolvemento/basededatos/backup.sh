#!/bin/bash

#dev
docker compose -f ../compose-lamp.dev.yml exec basededatos bash -c 'mysqldump -u root -p$MYSQL_ROOT_PASSWORD prestashop' > backup-bd.sql
