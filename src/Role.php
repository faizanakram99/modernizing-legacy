<?php

namespace Gounsch;

class Role
{
    private User $user;

    private function __construct()
    {
        $this->user = new User();
    }

    private function role(): string
    {
        if ('admin' === $this->user->getUser() && $this->user->isKnown()) {
            return 'ROLE_ADMIN';
        } elseif ($this->user->isKnown()) {
            return 'ROLE_USER';
        } else {
            return 'ROLE_UNKNOWN';
        }
    }

    public static function __callStatic(string $name, array $arguments): mixed
    {
        $self = new self();

        $method = lcfirst(str_replace('get', '', $name));

        return $self->{$method}(...$arguments);
    }
}
