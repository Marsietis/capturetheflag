# Capture the flag

## Run Locally on Linux

To run locally, follow these steps:

Make sure that your system has [PHP](https://www.php.net/manual/en/install.php), [Composer](https://getcomposer.org/)
and [node with npm](https://nodejs.org/en).

- Clone the repository
  ```
  git clone https://github.com/Marsietis/capturetheflag.git
  ```
- cd to project dir
  ```
  cd capturetheflag
  ```
- Install Composer Dependencies
  ```
  composer install
  ```
- Install NPM Dependencies
  ```
  npm install
  ```
- Create a copy of your .env file.
  ```
  cp .env.example .env
  ```
- Generate an app encryption key
  ```
  php artisan key:generate
  ```
- cd to database folder
  ```
  cd database
  ```
- Crete a sqlite database
  ```
  touch database.sqlite
  ```
- cd back
  ```
  cd ..
  ```
- Migrate the database
  ```
  php artisan migrate
  ```
- Run npm
  ```
  npm run dev
  ```
- Start project
  ```
  php artisan serve
  ```
- Go to ip shown in terminal
- Start building

# Run on Windows with XAMPP

## Step 1: Install XAMPP

1. Download and install XAMPP from [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html).
2. Run the XAMPP installer and open the XAMPP control panel.
3. Ensure that the Apache and MySQL services are enabled.

## Step 2: Install Composer and Node

1. Download and run the Composer installer from [https://getcomposer.org/download](https://getcomposer.org/download).
2. During installation, check the box that says "Add PHP to PATH."
3. Install [node with npm](https://nodejs.org/en)

## Step 3: Clone the Existing Laravel Project

1. Copy all project files in the htdocs folder. htdocs is where all of your local projects go. htdocs folder location:
   **Windows - C:\Xampp\htdocs**

# Step 4: Configure the Laravel Project

1. Open a terminal or command prompt and navigate to the project directory.
   ```
   cd C:\Xampp\htdocs
   ``` 
2. Navigate to the project directory.
    ```
    cd capturetheflag
    ```
3. Install Composer dependencies.
    ```
   composer install
   ```
4. Copy Environment File
    ```
    cp .env.example .env
    ```
5. Migrate Database
   ```
   php artisan migrate
    ```
6. Install NPM Dependencies
    ```
    npm install
    ```
7. Restart Apache with the Xampp panel
8. Now visit: http://localhost

