# Laravel ToDo App

This is a simple ToDo app with multiple user support.

This is built on Laravel Framework 11 This was built for demonstrate purpose.

## Installation

Clone the repository-
```
git clone https://github.com/arsholeh/web-pesantren.git
```

Then cd into the folder with this command-
```
cd web-pesantren
```

Then do a composer install
```
composer install
```

Then create a environment file using this command-
```
cp .env.example .env
```

Then edit `.env` file with appropriate credential for your database server. Just edit these two parameter(`DB_USERNAME`, `DB_PASSWORD`).

Then create a database named `laravel-pesantren` and then do a database migration using this command-
```
php artisan migrate:refresh --seed
```

Then change permission of storage folder using thins command-
```
(sudo) chmod 777 -R storage
```

At last generate application key, which will be used for password hashing, session and cookie encryption etc.
```
php artisan key:generate
```

## Run server

Run server using this command-
```
php artisan serve
```

Then go to `http://localhost:8000` from your browser and see the app.

## Screenshot

![Home Page](/screenshots/1.png)
![Login Page](/screenshots/2.png)
![Blog Index Page](/screenshots/3.png)
![Blog Creation Page](/screenshots/4.png)
![Video Index Page](/screenshots/5.png)
![Video Creation Page](/screenshots/6.png)
![Photo Index Page](/screenshots/7.png)
![Photo Creation Page](/screenshots/8.png)
