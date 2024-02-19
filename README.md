# Modernizing legacy

This project has two classes [Role](./src/User.php) and [User](./src/User.php), both kind of depend upon global state. Refactor this in small iterations 
so that it is testable in isolation and it is easy to add new features.

Some ground rules:
- Assume [User](./src/User.php) is used (instantiated) in tons of places and we want to keep the changes to codebase 
minimum, hence adding constructor to [User](./src/User.php) is out of equation.
- The behaviour of the system as a whole shouldn't change.