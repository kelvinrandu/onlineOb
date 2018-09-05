
# ONLINE-OB
A portal that links investors to startups
## DESCRIPTION
Online-ob is a  [laravel](https://laravel.com/docs)powered application intended to provide a platform that promotes interaction between the police and members of the public inform of a digitalised Occurrence book.
Some of the features the application provides include
- Viewing of police stations and information regarding the police station
- Reporting crime to police station of choice by members of the public
- Recording of statements by police
- Tracking of cases by complainant

## REQUIREMENTS
Minimum requirements needed to run this application include;
- [composer](https://getcomposer.org/)
- [laravel](https://laravel.com/docs/5.6)
- [xampp](https://www.apachefriends.org/download.html)

## TESTING THE APPLICATION
- clone [this](https://github.com/kelvinrandu/onlineOb.git) repository
- create your [database](https://complete-concrete-concise.com/web-tools/creating-a-mysql-database-using-xampp) named ```onlineob```
- navigate to the project directory
- add .env file and configure with your database settings
- update composer
``` $ composer update ```
- generate app key
``` $ php artisan key:generate ```
- clear cache
``` php artisan cache:clear ```
- run migrations
``` php artisan migrate```
- run the application
``` $ php artisan serve ```



## LINK TO LIVE SITE
- coming soon