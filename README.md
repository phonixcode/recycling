# Recycling Project Setup Guide

This guide will walk you through the process of cloning and setting up a Recycling project on your local development environment.

## Prerequisites

Before you begin, make sure you have the following prerequisites installed on your computer:

- PHP
- Composer
- A database system (e.g., MySQL, PostgreSQL)
- Git

## Step 1: Clone the Recycling Project

1. Open your terminal/command prompt.
2. Navigate to the directory where you want to create your Laravel project.

    ```shell
    cd /path/to/your/directory

3. Run the following command to clone a Recycling project from a Git repository (replace `project-name` with your desired project name):  

   ```shell
    git clone https://github.com/phonixcode/recycling.git

## Step 2: Install Dependencies

1. Change your working directory to the project folder: 

    ```shell 
    cd project-name

2. Run Composer to install Laravel's dependencies: 

    ```shell
    composer install

## Step 3: Configure Environment Variables

1. Duplicate the `.env.example` file and rename it to `.env`: 
    
    ```shell
    cp .env.example .env`

2. Open the `.env` file and configure your database connection settings, such as `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD`.

## Step 4: Generate an Application Key

Run the following command to generate a unique application key:

     php artisan key:generate

## Step 5: Run Database Migrations

Run the following command to create the necessary database tables:

    php artisan migrate

## Step 6: Start the Development Server

    php artisan serve

This will start the server at <http://localhost:8000> by default.

## Step 7: Access Your Recycling Application

- Open a web browser and navigate to <http://localhost:8000> (or the URL shown in your terminal).
- You should see the default Recycling welcome page, indicating that your project is set up successfully.

## Step 8: Additional Configuration (Optional)

You can configure additional settings, such as setting up a virtual host, configuring your web server (e.g., Apache or Nginx), or adding more Laravel packages, as needed for your project.

That's it! You've successfully cloned and set up a Recycling project on your local development environment. You can now start building and working Recycling application.

### Troubleshooting
If you encounter any issues during the setup process, you can refer to the <a href="https://laravel.com/docs/">Laravel documentation</a> for more information and troubleshooting tips.
