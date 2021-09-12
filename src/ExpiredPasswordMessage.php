<?php

declare(strict_types=1);

namespace RMQ\Messages;

final class ExpiredPasswordMessage
{
    private string $login;
    private string $password;

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin(string $login): ExpiredPasswordMessage
    {
        $this->login = $login;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): ExpiredPasswordMessage
    {
        $this->password = $password;
        return $this;
    }
}
