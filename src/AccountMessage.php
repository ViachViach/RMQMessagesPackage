<?php

declare(strict_types=1);

namespace RMQ\Messages;

class AccountMessage
{
    private string $login;
    private string $password;
    private int $delay;
    private string $city;
    private string $visaType;

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin(string $login): AccountMessage
    {
        $this->login = $login;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): AccountMessage
    {
        $this->password = $password;
        return $this;
    }

    public function getDelay(): int
    {
        return $this->delay;
    }

    public function setDelay(int $delay): AccountMessage
    {
        $this->delay = $delay;
        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): AccountMessage
    {
        $this->city = $city;
        return $this;
    }

    public function getVisaType(): string
    {
        return $this->visaType;
    }

    public function setVisaType(string $visaType): AccountMessage
    {
        $this->visaType = $visaType;
        return $this;
    }
}
