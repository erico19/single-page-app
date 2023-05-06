Install & Setup
To setup and install single-page-app project, follow the below steps:

Clone this project by the command:
Then switch to the project folder by the bellow query:
$ cd single-page-app
Then open env file and update database credentials.

Then run the below command to install composer dependencies

$ composer install
Then run the below command to install dependencies
$ npm i
Then run the below command to migrate the tables.
$ php artisan migrate 
Then run the below command to run seeder.
$ php artisan db:seed 
Finally, run the below command to start the project.
$ php artisan serve
