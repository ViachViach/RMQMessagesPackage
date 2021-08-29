<?php

declare(strict_types=1);

namespace RMQ\Messages;

class CheckingAccountAstF1Message
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

    public function setLogin(string $login): CheckingAccountAstF1Message
    {
        $this->login = $login;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): CheckingAccountAstF1Message
    {
        $this->password = $password;
        return $this;
    }

    public function getDelay(): int
    {
        return $this->delay;
    }

    public function setDelay(int $delay): CheckingAccountAstF1Message
    {
        $this->delay = $delay;
        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): CheckingAccountAstF1Message
    {
        $this->city = $city;
        return $this;
    }

    public function getVisaType(): string
    {
        return $this->visaType;
    }

    public function setVisaType(string $visaType): CheckingAccountAstF1Message
    {
        $this->visaType = $visaType;
        return $this;
    }
}
