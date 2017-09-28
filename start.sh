#!/bin/bash
service apache2 start;
/usr/bin/mysqld_safe;
tail -F -n0 /etc/hosts;
