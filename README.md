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
- Clone the repository:
  ```
- git clone https://github.com/Marsietis/capturetheflag.git
  ```
- cd capturetheflag
- composer install
- npm install
- cp .env.example .env
- php artisan key:generate
- cd database
- touch database.sqlite
- cd ..
- php artisan migrate
- npm run build
- php artisan serve
