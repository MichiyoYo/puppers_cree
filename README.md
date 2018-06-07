### Before you begin

Before you begin, make sure you have composer installed on your machine:

[Installing Composer](https://www.abeautifulsite.net/installing-composer-on-os-x)

### Install dependencies

Run `composer install` in your project root.

### Create a database

Create your own MySQL database and import the `users.sql` file to create a basic users table

Create a DB using our DevS3 MediaTemple account! It's important we have our own so we don't break each other's database :D

**I recommend using Sequel Pro for managing your database**

### Setup Environment Variables

Copy `.env.sample` into `.env` in your project root

Then, update the variables with database login info created in the previous step

### Run Locally

Run this command in your project root: `php -S localhost:8080`