<p align="center"><a href="#" target="_blank"><img src="https://github.com/christmex/basic-starter-pack-with-backpackforlaravel/assets/34405837/cf42a4fb-94d4-48cc-9e9a-f360c14738f0" width="400" alt="BASIC DIGITAL LOGO"></a></p>

## About This Project

This lightweight starterd pack providing your project using backpackforlaravel with backpack permission

- [Laravel](https://laravel.com/docs/).
- [Backpack Permission](https://github.com/Laravel-Backpack/PermissionManager)
- [Backpack for laravel](https://backpackforlaravel.com/docs/5.x/installation).
- [Spatie laravel Permission](https://spatie.be/docs/laravel-permission/v5/installation-laravel).

## How to use
1. Clone this repo use this command 
```bash
git clone https://github.com/christmex/basic-starter-pack-with-backpackforlaravel.git 
```
2. Copy the env file
```bash
cp .env.example .env
```
3. create your database and put the database name inside .env -> DB_DATABASE , you can also configure your user or database password in your .env
4. Install using composer
```bash
composer install
```
6. Generate Key
```bash
php artisan key:generate
```
6. run ``` php artisan migrate --seed ``` to create the table and insert the default credential
7. Dont forget to remove the remote git with ``` git remote remove origin ```
7. Login [Your-url]/admin, you can find the credential inside seeder

<br>
Easy right? you found any errors or any questions, let me know guys, cheers.



## TODO
- [] Add extending model and controller for users
- [] Add extending model and controller for roles
- [] Add extending model and controller for permissions
- [] Add exception [reference](https://spatie.be/docs/laravel-permission/v5/advanced-usage/exceptions)
- [] Defining a super admin [reference](https://spatie.be/docs/laravel-permission/v5/basic-usage/super-admin)
- [x] add Post CRUD example