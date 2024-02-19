<?php

use Gounsch\Role;
use Gounsch\User;

require dirname(__DIR__).'/vendor/autoload.php';

const KNOWN_DOMAINS = ['test'];

$email = $_GET['email'] ?? 'email';

$user = new User();

exit(sprintf("User '%s' has role %s", $user->getUser(), Role::getRole()));