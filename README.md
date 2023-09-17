# Symfony Forms

Forms with Symfony 6.x..

## Requirements

- [Composer](https://getcomposer.org/)
- [Symfony CLI](https://symfony.com/download)

## Clone repository and install packages

```bash
git clone https://github.com/ovillafuerte94/symfony-forms.git
cd symfony-forms
composer install
npm install
npm run dev
```

## Configure database
Edit the .env file in the root of the project and set the environment variables for your database connection:
```
DATABASE_URL=mysql://user:password@localhost/database
```
Replace *user*, *password* and *database* with your database details.

## Create Database
```
php bin/console doctrine:database:create
```

## Execute Migrations
```
php bin/console doctrine:migrations:migrate
```

## Open in browser
Through the terminal in the project folder, execute the command
```
symfony serve
```
