
## Instructions to Access the API

Follow these steps to set up and access the API for the ASTUDIO-Assessment-Laravel-Part application.

### 1. Clone the Repository

To begin, you need to clone the project repository to your local machine. Open your terminal and execute the following command:

```bash
git clone https://github.com/HADDADnader93/ASTUDIO-Assessment-Laravel-Part
cd ASTUDIO-Assessment-Laravel-Part
```

This command will create a copy of the repository in a folder named `ASTUDIO-Assessment-Laravel-Part`, and then navigate into that folder.

### 2. Install Dependencies

Once you have cloned the repository, navigate into the project directory (if you haven’t already) and install all the required PHP packages using Composer. Run the following command:

```bash
composer install
```

This will read the `composer.json` file and install all the necessary dependencies required for the Laravel application to function correctly.

### 3. Set Up the `.env` File

Next, you need to set up your environment configuration. The `.env` file contains sensitive data such as database credentials.

To create a new `.env` file, copy the provided example:

```bash
cp .env.example .env
```

Now, open the `.env` file in a text editor and update the database connection settings with your specific database credentials:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=astudio_db //astudio_db.sql in the repo
DB_USERNAME=root
DB_PASSWORD=Luffygear80..
```

### 4. Run Migrations

After configuring the `.env` file, you need to create the necessary database tables by running the migrations. Execute the following command in your terminal:

```bash
php artisan migrate
```

This command will set up the database schema according to the defined migrations in the application.

### 5. Start the Laravel Development Server

To run the application locally, you can use Laravel's built-in development server. Start the server with the following command:

```bash
php artisan serve
```

Once the server is running, it will typically be accessible at `http://localhost:8000`.

### 6. Access the API

Now that your application is running, you can interact with the API using tools like Postman or cURL. To access the API endpoints, use the base URL `http://localhost:8000/users` followed by the specific endpoint you wish to access.

For example, to fetch the first user, you can use the following cURL command:

```bash
curl -X GET http://localhost:8000/api/users/1 \
```

### Conclusion

By following these instructions, you should be able to successfully set up the ASTUDIO-Assessment-Laravel-Part application and access its API.
