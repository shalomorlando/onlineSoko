# onlineSoko

## Installation Requirements

Ensure you have installed these before working on the project:
* PHP >= 7.2.5 - could be installed using [xampp](https://www.apachefriends.org/download.html)
* composer  - download from [composer](https://getcomposer.org/download/)
* Laravel >= 7.* - find download and installation instructions at [Laravel-Download](https://laravel.com/docs/7.x)
* NPM - current version could be found at [Nodejs](https://nodejs.org/en/)

## How to Setup the Project Locally

### 1. Clone this Github repo locally and store it in a directory of your choice 
* Click on the green "clone or download" button the click on "Download ZIP"
* Alternatively on a terminal of your choosing change your directory "cd" to your desired location. Then run the following command:
`git clone https://github.com/shalomorlando/onlineSoko.git`

### 2. cd into the project folder
* You will need to be in the project folder to run the rest of the commands so make sure you run `cd onlineSoko` in your terminal

### 3. Install Project Dependencies using Composer
* In the terminal run the command `composer install`

### 4. Install NPM Dependencies
* In the terminal run the command `npm install` or `yarn install`

### 5. Create a copy of your .env file
* Run the command `cp .env.example .env` in the terminal
* Alternatively run `copy .env.example .env` if using windows cmd

### 6. Generate an app encryption Key
* In the terminal run the commnad `php artisan key:generate`

### 7. Add datatbase information in the .env file
* Open the .env file just created, then fill in the  `DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD` options with your database credentials

* All database work in Laravel is done through the PHP PDO facilities so make sure you have the driver for your particular database of choice installed on your machine before you begin development.

* Those using xampp enable the database driver of your choice by openning the php.ini file found in the xampp folder `C:\xampp` then locate the following `;extension=pdo_pgsql`, `;extension=pgsql` and change them to `extension=pdo_pgsql` and `extension=pgsql`

### 9. Migrate the Database
* In the terminal run the command `php artisan migrate`

### 10. Run `php artisan serve` to spin up on `http://localhost:8000:`