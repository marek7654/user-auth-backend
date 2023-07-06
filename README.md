## User Auth Backend API
Created with Symfony 6.

The application uses JSON Web Token authentication.

To run the project, use below commands:

#### `composer install`
#### `yarn install`
#### `php bin/console make:migration`
#### `php bin/console doctrine:migrations:migrate`
#### `php bin/console lexik:jwt:generate-keypair`
#### `symfony server:start`

### Endpoints

##### User login: `/api/login_action` (POST)
##### User registration: `/api/register` (POST)
##### Dashboard resources: `/api/dashboard` (GET; authorization: JWT)
