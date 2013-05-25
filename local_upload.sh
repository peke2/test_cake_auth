#!/bin/sh

#ローカルサーバーへのアップロード

rsync -av --delete --chmod=Dg+rwx,Do+rx,Fa+rw,Fa-x --exclude-from=exclude_upload.txt -e "ssh -i /home/peke2/.ssh/id_rsa_local_mysql" cake_auth 192.168.56.102:/var/www/htdocs/peke2/test/php


#ssh peke2@192.168.56.102 -i /home/peke2/.ssh/id_rsa_local_mysql chmod 777 /var/www/htdocs/peke2/test/php/cake_auth/app/tmp
#ssh peke2@192.168.56.102 -i /home/peke2/.ssh/id_rsa_local_mysql chmod 777 /var/www/htdocs/peke2/test/php/cake_auth/app/tmp/cache
#ssh peke2@192.168.56.102 -i /home/peke2/.ssh/id_rsa_local_mysql chmod 777 /var/www/htdocs/peke2/test/php/cake_auth/app/tmp/cache/models
#ssh peke2@192.168.56.102 -i /home/peke2/.ssh/id_rsa_local_mysql chmod 777 /var/www/htdocs/peke2/test/php/cake_auth/app/tmp/cache/persistent
#ssh peke2@192.168.56.102 -i /home/peke2/.ssh/id_rsa_local_mysql chmod 777 /var/www/htdocs/peke2/test/php/cake_auth/app/tmp/cache/views
#ssh peke2@192.168.56.102 -i /home/peke2/.ssh/id_rsa_local_mysql chmod 777 /var/www/htdocs/peke2/test/php/cake_auth/app/tmp/logs
#ssh peke2@192.168.56.102 -i /home/peke2/.ssh/id_rsa_local_mysql chmod 777 /var/www/htdocs/peke2/test/php/cake_auth/app/tmp/sessions
#ssh peke2@192.168.56.102 -i /home/peke2/.ssh/id_rsa_local_mysql chmod 777 /var/www/htdocs/peke2/test/php/cake_auth/app/tmp/tests
