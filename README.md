<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Quiz Project

This project is a Quiz application built with Laravel. It was created using fictional data. It is designed as a simple project draft in which the users participate in the quizzes to answer and share the statistics after the quizzes are completed. Editors with administrative authority can prepare questions and create quizzes. They can keep them inactive, in draft form, confidential from web users, or publish them to expire at a later date. Each quiz has statistics on its own page. In addition, information such as the rate at which each problem was solved correctly is included in the quizzes' own pages. The information of the highest rated users is also published on the same page. In the project where many features of Laravel were used, bootstrap was used as a style and also JQuery was used for some functional features.

## Using and Downloading App

First of all, replace the env.example file with your database information.</br>
Next copy your .env file to the project.</br>
Then create a database called quiz.</br>
After Then run the php artisan migrate command.</br> 
Finally, add your data to your tables with the php artisan migrate: fresh --seed command.</br>
As a last step, select one of the admin users from the users table in the quiz database and log in to the system.</br>
Use 'password' as your password. Now you can examine the project with peace of mind :)

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Views from the Application

<img src="https://imgur.com/SfHgXgD" alt="quiz1-pic">

<img src="https://imgur.com/It2bRMJ" alt="quiz2-pic">

<img src="https://imgur.com/o9c2Fww" alt="quiz3-pic">

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
