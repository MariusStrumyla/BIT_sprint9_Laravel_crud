### Sprint-9, Laravel MVC CRUD

# About:

-   Job listing app;
-   project is made using Laravel and Tailwind;

# Project tasks:

-   working Laravel MVC project;
-   clean code;
-   user authentication;
-   Read (ability to view listings);
-   Create functionality (ability to add listings);
-   Delete (ability to delete listings);
-   Update (ability to update listings);
-   project uploaded on Github pages.

# Installation / launch process:

-   download and install latest `MySQL` version;
-   download and install latest `XAMPP` version. Run it and start Apache and MySQL server;
-   clone this repository `https://github.com/MariusStrumyla/BIT_sprint9_Laravel_crud.git` into `htdocs` directory (xampp\htdocs);
-   open MySQL workbench and create a server with `MyMySQL` as server name;
-   then create a database named `laravel_crud`;
-   open a project you just cloned. Open terminal and type `cp .env.example .env`;
-   open `.env` file and change database name to `DB_DATABASE=laravel_crud`;
-   open terminal again and install composer;
-   after composer installation open up one more terminal window and type these commands:

```sh
    php artisan migrate
    php artisan db:seed
    php artisan key:generate
    php artisan serve
```

-   hold Ctrl button and push on this link `http://127.0.0.1:8000` or just copy it to your browser.

# Author

-   This project was created by me - Marius Strumyla.
-   Find me on [LinkedIn](https://www.linkedin.com/in/marius-strumyla-88b107217/).
