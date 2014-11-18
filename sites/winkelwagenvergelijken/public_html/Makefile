install:
	php app/console assetic:dump
	php app/console braincrafted:bootstrap:install
	make createuser
	make createadminuser

create-database:
	php app/console doctrine:database:create
	php app/console doctrine:schema:create

test:
	php bin/phpunit -c app/

restart-nginx:
	sudo service nginx stop
	sudo service nginx start