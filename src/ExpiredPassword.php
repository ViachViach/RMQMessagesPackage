<?php

declare(strict_types=1);

namespace RMQ\Messages;

class ExpiredPassword
{
    private string $login;
    private string $password;

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin(string $login): ExpiredPassword
    {
        $this->login = $login;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): ExpiredPassword
    {
        $this->password = $password;
        return $this;
    }
}
