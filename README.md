# Capture the flag
Updated version of capturetheflag.lt

Main features:
- Ability to add any amount of tasks through admin panel
- User authentication and authorization
- Leaderboard with points
- Updated UI
- Learning material

Everything is mostly done, just a few more polishing touches before deployment.

Technology used to create this project:
- Laravel and most of its additional tools
- Tailwind
- daisyUI

Currently configured using sqlite database.

To run localy:
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
- Create a copy of your .env file
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
- npm
  ```
  npm run build or npm run dev or npm run production
  ```
- Start project
  ```
  php artisan serve
  ```
