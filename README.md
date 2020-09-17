# Todo App
Learning Laravel and building a simple CRUD application.

To run the project you must have Laravel installed on your machine. To see how to install Laravel, head over to [the Laravel documentation](https://laravel.com/docs/8.x/installation).

Once you installed Laravel, you have to turn on the MySQL Database server. And add the information about DB server on the `.env` file. Then run the migrations:

```sh
php artisan migrate
```

After the migration is complete, to start the server run:

```sh
php artisan serve
```

This will start the server on port 8000 (if not busy).
