<h3 align="center">Electricity Report</h3>

<div align="center">

[![Repository](https://img.shields.io/badge/kmarsha-electricity--report-blue.svg)](https://github.com/kmarsha)
[![Status](https://img.shields.io/badge/status-closed-white.svg)]()

</div>

---

<p align="center"> Electricity Report is a simple project with telegram api for reports electricity damaged
    <br> 
</p>

## 📝 Table of Contents

- [User Role](#user_role)
- [Setting up a local environment](#getting_started)
- [Usage](#usage)
- [Preview](#preview)
- [Technology Stack](#tech_stack)
- [Authors](#authors)

## 🧐 User Role <a name = "user_role"></a>

Completed with 2 Users
- Admin (managed Users and other data)
- Technician/teknisi (get and editing the report)

## 🏁 Getting Started <a name = "getting_started"></a>

These instructions will get you a copy of the project up and running on your local machine for development
and testing purposes. 

### Prerequisites

What things you need to install the software and how to install them.

```
PHP >= 8.0.12
```

### Installing

A step by step series of examples that tell you how to get a development env running.

Say what the step will be

```
git clone

composer install

composer update

cp .env.example .env

php artisan key:generate

CREATE DATABASE
```
modify .env file
```
go to phpmyadmin and import telegram_api.sql (database name is telegram_api by default)

php artisan serve
```

open app\Http\Kernel.php add sintaks below in last lined of protected $routeMiddleware array
        ```
        'isAdmin' => \App\Http\Middleware\AdminMiddleware::class,
        'isTeknisi' => \App\Http\Middleware\TeknisiMiddleware::class,
        ```
## 🎈 Usage <a name="usage"></a>

Login with Role Admin
- Email = admin@admin.com
- Password = password

Login with Role Teknisi
- Email = teknisi@gmail.com
- Password = password

!! Can't register

## 🌸 Preview <a name="preview"></a>
<img src="https://github.com/kmarsha/electricity-report/blob/main/public/img/page1.png">
<img src="https://github.com/kmarsha/electricity-report/blob/main/public/img/page2.png">
<img src="https://github.com/kmarsha/electricity-report/blob/main/public/img/page3.png">
<img src="https://github.com/kmarsha/electricity-report/blob/main/public/img/page4.png">
<img src="https://github.com/kmarsha/electricity-report/blob/main/public/img/page5.png">
<img src="https://github.com/kmarsha/electricity-report/blob/main/public/img/page6.png">
<img src="https://github.com/kmarsha/electricity-report/blob/main/public/img/page7.png">
<img src="https://github.com/kmarsha/electricity-report/blob/main/public/img/page8.png">
<img src="https://github.com/kmarsha/electricity-report/blob/main/public/img/page9.png">
<img src="https://github.com/kmarsha/electricity-report/blob/main/public/img/page10.png">
<img src="https://github.com/kmarsha/electricity-report/blob/main/public/img/page11.png">

## ⛏️ Built With <a name = "tech_stack"></a>

- [MySQL](https://www.mysql.com/) - Database
- [Laravel](https://laravel.com/) - Server Framework
- [Bootstrap](https://getbootstrap.com/) - Web Framework
- [NodeJs](https://nodejs.org/en/) - Server Environment
- [SweetAlert](https://sweetalert2.github.io/) - Notification
- [Datatables](https://datatables.net/) - Paging Data

## ✍️ Authors <a name = "authors"></a>

- [@bagusshndr](https://github.com/bagusshndr) - Idea & Initial work
- [@kmarsha](https://github.com/kmarsha) - Initial work
- [@muzalri](https://github.com/muzalri) - Initial work
