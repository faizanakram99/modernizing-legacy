# Modernizing legacy

This project has two classes [Role](./src/User.php) and [User](./src/User.php), both kind of depend upon global state. 
Refactor this in small iterations so that it is testable in isolation and it is easy to add new features.

The app can be run via php's built-in server `php -S 127.0.0.1:9890 -t public` or any other local ip:port.
The app displays role of user which can be provided by email query string, any email address with @test domain has
ROLE_USER, admin@test has ROLE_ADMIN and all other email addresses have ROLE_UNKNOWN.

Tests (if any) can be run via `./vendor/bin/phpunit tests`

Some ground rules:
- Assume [User](./src/User.php) is used (instantiated) in tons of places and we want to keep the changes to codebase 
minimum, hence adding constructor to [User](./src/User.php) is out of equation.
- The behaviour of the system as a whole shouldn't change.