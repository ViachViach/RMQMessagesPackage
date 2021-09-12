<?php

declare(strict_types=1);

namespace RMQ\Messages;

final class ChangePasswordMessage
{
    private string $login;
    private string $password;

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin(string $login): ChangePasswordMessage
    {
        $this->login = $login;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): ChangePasswordMessage
    {
        $this->password = $password;
        return $this;
    }
}
