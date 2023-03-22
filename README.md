<p align="center"><a href="https://github.com/xclvry21/NoteApp" target="_blank"><img src="https://user-images.githubusercontent.com/70315480/225284017-9b37a720-e61e-4323-9c19-96535578c015.png" width="300" alt="NoteApp Logo"></a></p>

## About NoteApp

NoteApp is a simple web-application wherein CRUD operations are used. This project is built on [Laravel](https://laravel.com) version 10.3.3. Furthermore, it has an authentication using [Laravel Breeze](https://laravel.com/docs/10.x/starter-kits).

## Clone and Run on Local Machine

1. Run `git clone <noteapp-url>` or manually download the zip project
2. Run `composer install`
3. Run `npm install`
4. Run `npm run build`
5. Make a duplicate of **_.env.example_** file using `cp .env.example .env` and set the values according to your preference/local machine values.
6. Generate an app key using `php artisan key:generate`
7. Migrate a database using `php artisan migrate`
8. Run `php artisan serve` and open the generated url on your preferred browser

## Boiler-Template

If you wish to work without CRUD functionalities of notes, you may run `git checkout boiler_template`. It already contains the assets for the notes dashboard.

## Add-ons

-   **[Clockwork](https://github.com/itsgoingd/clockwork)**
-   **[Toastr](https://github.com/yoeunes/toastr)**

:pushpin:_this project is for demonstration purpose for the subject: Current Trends in IT and Seminar_
