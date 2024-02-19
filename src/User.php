<?php

namespace Gounsch;

class User
{
    public function getUser(): string
    {
        global $email;

        return explode('@', $email)[0];
    }

    public function isKnown(): string
    {
        global $email;

        $domain = explode('@', $email)[1];

        if (in_array($domain, KNOWN_DOMAINS)) {
            return true;
        } else {
            return false;
        }
    }
}