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

    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getDelay(): int
    {
        return $this->delay;
    }

    public function setDelay(int $delay): void
    {
        $this->delay = $delay;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getVisaType(): string
    {
        return $this->visaType;
    }

    public function setVisaType(string $visaType): void
    {
        $this->visaType = $visaType;
    }
}
