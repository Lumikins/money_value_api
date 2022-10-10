## Install information

to run the API :

    - change the .env.example file to .env
    
    - update your user and password if necessary
    
    - update the database info (database name is converter) 
    
    - run: composer install
    
    - run: php artisan migrate (if necessary)
    
    - run: php artisan migrate:fresh --seed
    
    - run: php artisan serve

To run the administrator page:
	
    - npm install
    
    - npm run dev

## To conncet as admin:

name :  admin

email : admin@admin.com

password : admin

## Functionality

The application works partially. Once you run the API seeders, the information will be displayed on the admin section. Currently displays list of available currencies, and can connect as admin. Converter does not function, nor does the data from the admin API display.