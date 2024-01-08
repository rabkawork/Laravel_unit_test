# Laravel Testing Using PHPUnit
a sample project is using Laravel 7 with PHPUnit tests.

## Requirements
Since this project is in Laravel 7, we should meet its server requirements:
- PHP >= 7.4. Please see: [Laravel installation](https://laravel.com/docs/7.x/installation)
- `composer` installed. Please see: [Composer installation](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos)

## Tests Location
- all tests are inside the `tests/` folder

## Sample Tests 
- `Feature/AlphabetTest.php`
- `Unit/RewardLevelTest.php`

## Running Tests (PHPUnit)
1. after clone or downloading, run `composer install` inside the project's root directory using your console/ terminal
2. to be able to run step 3, we should have a .env file:
   `cp .env.example .env`
    .env.example .env`
3. run `php artisan key:generate` to generate APP_KEY in the .env file. 
   > For the purpose of running tests alone, we don't need mysql. The phpunit.xml file is configured to use sqlite as the database connection.
4. (optional) if you have accidentally or intentionally ran `php artisan config:cache`, please run `php artisan config:clear` before running tests as per [Laravel documentation](https://laravel.com/docs/7.x/testing#environment)
5. run all tests by running:
   - `php artisan test` 
   - or `vendor/bin/phpunit` 
   - or if you have phpunit installed globally, just run `phpunit`
6. to run tests individually, run do something like: 
   - `php artisan test [path-to-file]`. 
   - Ex: `php artisan test tests/Feature/AlphabetTest`
7. We don't need config phpunit.xml database connection because on this project only need run unit & feature test, and that's not need database connection
