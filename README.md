# To Do or Not To Do

![alt text](https://i.imgur.com/eypWge7.png)

A fully functional CRUD app created with Laravel and MySql. Having no experience working in PHP before, this three day project was quite the challenge.
You are able to create both an Admin and Guest account. From the Guest portal you are able to assign/edit/and mark tasks as done to yourself as well as send an invite to be added to the admin's team. 
As the Admin, you are able to create/edit/delete tasks assigned to yourself or guests in your employee portal.

### Installing

* `git clone https://github.com/shaunbseidman/todolaravel`
* `cd projectname`
* `composer install`
* `php artisan key:generate`
* Create a database and inform *.env*
* `php artisan migrate --seed` to create and populate tables
* Inform *config/mail.php* for email sends
* `php artisan vendor:publish` to publish filemanager
* `php artisan serve` to start the app on http://localhost:8000/

## Built With

* Laravel
* MySql
* Materialize
* A lot of cofee and no sleep

## Authors

* Shaun Seidman

## Acknowledgments
Thank you to:
* Kyle Coberly
* Kim Schlesinger
* Roberto Ortega
* Google
