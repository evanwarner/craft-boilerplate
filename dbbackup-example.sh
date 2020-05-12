#!/bin/bash
filename=$(date +"%Y%m%dT%H%M%S")
if [ $# -eq 1 ]
  then
  filename="${filename}-$1"
fi
mysqldump -u _username_ -p_password_ _db_name_ > database-backups/$filename.sql
